#!/usr/bin/env bash

# ./generate.sh                          # tutto (come prima)
# ./generate.sh orders feeds aplus       # solo questi tre
# ./generate.sh ordersV2026              # auto-scarica spec + genera
# ./generate.sh --list                   # mostra step disponibili
# ./generate.sh --help                   # help

FAILURES=()
LOGDIR=$(mktemp -d)

# --- Utility ---

run_step() {
    local label="$1"
    shift
    echo ":::: Running: ${label} ..."
    local logfile="${LOGDIR}/${label}.log"
    "$@" > "${logfile}" 2>&1
    local rc=$?
    if [[ $rc -ne 0 ]]; then
        echo ":::: FAILED: ${label} (exit code ${rc})"
        FAILURES+=("${label} (exit code ${rc}): $(tail -5 "${logfile}")")
    else
        echo ":::: OK: ${label}"
    fi
    return $rc
}

run_generator() {
    local name="$1"
    shift
    run_step "${name}" \
        docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
        --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
        -o /sp-api \
        --language-specific-primitives \\DateTimeInterface \
        --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface \
        "$@"
}

# --- Pre-processing steps ---

step_download_ordersV2026() {
    run_step "download-ordersV2026" \
        /usr/bin/curl -s -f https://raw.githubusercontent.com/amzn/selling-partner-api-models/refs/heads/main/models/orders-api-model/orders_2026-01-01.json -o "${PWD}/json_specs/orders_2026-01-01.raw.json"

    if [[ -f "${PWD}/json_specs/orders_2026-01-01.raw.json" ]]; then
        echo ":::: Running: patch-ordersV2026 ..."
        jq '(.paths[][].tags) = ["ordersV2026"]' \
            "${PWD}/json_specs/orders_2026-01-01.raw.json" > "${PWD}/json_specs/orders_2026-01-01.json" 2>"${LOGDIR}/patch-ordersV2026.log"
        if [[ ! -s "${PWD}/json_specs/orders_2026-01-01.json" ]]; then
            echo ":::: FAILED: patch-ordersV2026"
            FAILURES+=("patch-ordersV2026: output file is empty - $(cat "${LOGDIR}/patch-ordersV2026.log")")
        else
            echo ":::: OK: patch-ordersV2026"
        fi
    fi
}

# --- Code generation steps ---

step_aplus() {
    run_generator "aplus" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/aplus-content-api-model/aplusContent_2020-11-01.json \
        -c /sp-api/config/generator-aplus.yaml
}

step_catalog_item() {
    run_generator "catalog-item" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/catalog-items-api-model/catalogItems_2022-04-01.json \
        --skip-validate-spec \
        -c /sp-api/config/generator-catalog-item.yaml
}

step_fba_inbound() {
    run_generator "fba-inbound" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-inbound-eligibility-api-model/fbaInbound.json \
        -c /sp-api/config/generator-fba-inbound.yaml
}

step_fba_inventory() {
    run_generator "fba-inventory" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-inventory-api-model/fbaInventory.json \
        -c /sp-api/config/generator-fba-inventory.yaml
}

step_feeds() {
    run_generator "feeds" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/feeds-api-model/feeds_2021-06-30.json \
        -c /sp-api/config/generator-feeds.yaml
}

step_finances() {
    run_generator "finances" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/finances-api-model/financesV0.json \
        -c /sp-api/config/generator-finances.yaml
}

step_fulfillment_inbound() {
    run_generator "fulfillment-inbound" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fulfillment-inbound-api-model/fulfillmentInboundV0.json \
        -c /sp-api/config/generator-fulfillment-inbound.yaml
}

step_fulfillment_outbound() {
    run_generator "fulfillment-outbound" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fulfillment-outbound-api-model/fulfillmentOutbound_2020-07-01.json \
        -c /sp-api/config/generator-fulfillment-outbound.yaml
}

step_listings_items() {
    run_generator "listings-items" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/listings-items-api-model/listingsItems_2021-08-01.json \
        -c /sp-api/config/generator-listings-items.yaml \
        --skip-validate-spec
}

step_merchant_fulfillment() {
    run_generator "merchant-fulfillment" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/merchant-fulfillment-api-model/merchantFulfillmentV0.json \
        -c /sp-api/config/generator-merchant-fulfillment.yaml \
        --skip-validate-spec
}

step_messaging() {
    run_generator "messaging" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/messaging-api-model/messaging.json \
        -c /sp-api/config/generator-messaging.yaml
}

step_notifications() {
    run_generator "notifications" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/notifications-api-model/notifications.json \
        -c /sp-api/config/generator-notifications.yaml
}

step_orders() {
    run_generator "orders" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/orders-api-model/ordersV0.json \
        -c /sp-api/config/generator-orders.yaml
}

step_product_fees() {
    run_generator "product-fees" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-fees-api-model/productFeesV0.json \
        -c /sp-api/config/generator-product-fees.yaml
}

step_product_pricing() {
    run_generator "product-pricing" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-pricing-api-model/productPricingV0.json \
        -c /sp-api/config/generator-product-pricing.yaml
}

step_product_types_definitions() {
    run_generator "product-types-definitions" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-type-definitions-api-model/definitionsProductTypes_2020-09-01.json \
        -c /sp-api/config/generator-product-types-definitions.yaml
}

step_reports() {
    run_generator "reports" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/reports-api-model/reports_2021-06-30.json \
        -c /sp-api/config/generator-reports.yaml
}

step_sales() {
    run_generator "sales" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/sales-api-model/sales.json \
        -c /sp-api/config/generator-sales.yaml
}

step_sellers() {
    run_generator "sellers" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/sellers-api-model/sellers.json \
        -c /sp-api/config/generator-sellers.yaml
}

step_services() {
    run_generator "services" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/services-api-model/services.json \
        -c /sp-api/config/generator-services.yaml
}

step_shipment_invoicing() {
    run_generator "shipment-invoicing" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipment-invoicing-api-model/shipmentInvoicingV0.json \
        -c /sp-api/config/generator-shipment-invoicing.yaml
}

step_shipping() {
    run_generator "shipping" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipping-api-model/shipping.json \
        -c /sp-api/config/generator-shipping.yaml \
        --skip-validate-spec
}

step_shippingV2() {
    run_generator "shippingV2" \
        -i /sp-api/json_specs/shippingV2.json \
        --skip-validate-spec \
        -c /sp-api/config/generator-shippingV2.yaml
}

step_solicitations() {
    run_generator "solicitations" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/solicitations-api-model/solicitations.json \
        -c /sp-api/config/generator-solicitations.yaml
}

step_tokens() {
    run_generator "tokens" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/tokens-api-model/tokens_2021-03-01.json \
        -c /sp-api/config/generator-tokens.yaml
}

step_uploads() {
    run_generator "uploads" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/uploads-api-model/uploads_2020-11-01.json \
        -c /sp-api/config/generator-uploads.yaml
}

step_vendor_direct_fulfillment_inventory() {
    run_generator "vendor-direct-fulfillment-inventory" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-inventory-api-model/vendorDirectFulfillmentInventoryV1.json \
        -c /sp-api/config/generator-vendor-direct-fulfillment-inventory.yaml
}

step_vendor_direct_fulfillment_orders() {
    run_generator "vendor-direct-fulfillment-orders" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-orders-api-model/vendorDirectFulfillmentOrders_2021-12-28.json \
        -c /sp-api/config/generator-vendor-direct-fulfillment-orders.yaml
}

step_vendor_direct_fulfillment_payments() {
    run_generator "vendor-direct-fulfillment-payments" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-payments-api-model/vendorDirectFulfillmentPaymentsV1.json \
        --skip-validate-spec \
        -c /sp-api/config/generator-vendor-direct-fulfillment-payments.yaml
}

step_vendor_direct_fulfillment_shipping() {
    run_generator "vendor-direct-fulfillment-shipping" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-shipping-api-model/vendorDirectFulfillmentShipping_2021-12-28.json \
        -c /sp-api/config/generator-vendor-direct-fulfillment-shipping.yaml
}

step_vendor_direct_fulfillment_transactions() {
    run_generator "vendor-direct-fulfillment-transactions" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-transactions-api-model/vendorDirectFulfillmentTransactions_2021-12-28.json \
        -c /sp-api/config/generator-vendor-direct-fulfillment-transactions.yaml
}

step_vendor_invoices() {
    run_generator "vendor-invoices" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-invoices-api-model/vendorInvoices.json \
        --skip-validate-spec \
        -c /sp-api/config/generator-vendor-invoices.yaml
}

step_vendor_orders() {
    run_generator "vendor-orders" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-orders-api-model/vendorOrders.json \
        --skip-validate-spec \
        -c /sp-api/config/generator-vendor-orders.yaml
}

step_vendor_shipments() {
    run_generator "vendor-shipments" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-shipments-api-model/vendorShipments.json \
        --skip-validate-spec \
        -c /sp-api/config/generator-vendor-shipments.yaml
}

step_vendor_transaction_status() {
    run_generator "vendor-transaction-status" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-transaction-status-api-model/vendorTransactionStatus.json \
        -c /sp-api/config/generator-vendor-transaction-status.yaml
}

step_listings_restrictions() {
    run_generator "listings-restrictions" \
        -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/listings-restrictions-api-model/listingsRestrictions_2021-08-01.json \
        -c /sp-api/config/generator-listings-restrictions.yaml
}

step_ordersV2026() {
    # Auto-download and patch the spec if the JSON file is missing
    if [[ ! -s "${PWD}/json_specs/orders_2026-01-01.json" ]]; then
        step_download_ordersV2026
    fi
    run_generator "ordersV2026" \
        -i /sp-api/json_specs/orders_2026-01-01.json \
        -c /sp-api/config/generator-ordersV2026.yaml
}

# --- Step registry (name -> function) ---

ALL_STEPS=(
    download-ordersV2026
    aplus
    catalog-item
    fba-inbound
    fba-inventory
    feeds
    finances
    fulfillment-inbound
    fulfillment-outbound
    listings-items
    merchant-fulfillment
    messaging
    notifications
    orders
    product-fees
    product-pricing
    product-types-definitions
    reports
    sales
    sellers
    services
    shipment-invoicing
    shipping
    shippingV2
    solicitations
    tokens
    uploads
    vendor-direct-fulfillment-inventory
    vendor-direct-fulfillment-orders
    vendor-direct-fulfillment-payments
    vendor-direct-fulfillment-shipping
    vendor-direct-fulfillment-transactions
    vendor-invoices
    vendor-orders
    vendor-shipments
    vendor-transaction-status
    listings-restrictions
    ordersV2026
)

# Maps step name (with hyphens) to function name (with underscores)
step_name_to_func() {
    local name="$1"
    echo "step_${name//-/_}"
}

invoke_step() {
    local name="$1"
    local func
    func="$(step_name_to_func "${name}")"
    if declare -f "${func}" > /dev/null 2>&1; then
        "${func}"
    else
        echo ":::: ERROR: unknown step '${name}'"
        FAILURES+=("unknown step '${name}'")
    fi
}

# --- Usage ---

usage() {
    cat <<EOF
Usage: $(basename "$0") [--list] [--help] [STEP ...]

Generate SP-API SDK code using OpenAPI Generator.

  (no args)    Run all steps
  STEP ...     Run only the specified step(s)
  --list       List available step names
  --help       Show this help

Examples:
  $(basename "$0")                          # run everything
  $(basename "$0") orders feeds aplus       # run only these three
  $(basename "$0") ordersV2026              # run ordersV2026 (auto-downloads spec)
  $(basename "$0") --list                   # show available steps
EOF
}

# --- Main ---

if [[ "${1:-}" == "--help" || "${1:-}" == "-h" ]]; then
    usage
    exit 0
fi

if [[ "${1:-}" == "--list" ]]; then
    echo "Available steps:"
    for s in "${ALL_STEPS[@]}"; do
        echo "  ${s}"
    done
    exit 0
fi

STEPS_TO_RUN=()

if [[ $# -eq 0 ]]; then
    STEPS_TO_RUN=("${ALL_STEPS[@]}")
else
    for arg in "$@"; do
        # Validate step name
        local_found=false
        for s in "${ALL_STEPS[@]}"; do
            if [[ "$s" == "$arg" ]]; then
                local_found=true
                break
            fi
        done
        if [[ "$local_found" == false ]]; then
            echo "ERROR: unknown step '${arg}'"
            echo ""
            echo "Available steps:"
            for s in "${ALL_STEPS[@]}"; do
                echo "  ${s}"
            done
            exit 1
        fi
        STEPS_TO_RUN+=("${arg}")
    done
fi

for step in "${STEPS_TO_RUN[@]}"; do
    invoke_step "${step}"
done

# --- Summary ---

echo ""
echo "========================================"
echo " Generation Summary"
echo "========================================"

if [[ ${#FAILURES[@]} -eq 0 ]]; then
    echo " All steps completed successfully."
else
    echo " ${#FAILURES[@]} step(s) FAILED:"
    echo ""
    for failure in "${FAILURES[@]}"; do
        echo " --- ${failure}"
        echo ""
    done
    echo " Full logs available in: ${LOGDIR}"
fi

echo "========================================"

if [[ ${#FAILURES[@]} -gt 0 ]]; then
    exit 1
fi
