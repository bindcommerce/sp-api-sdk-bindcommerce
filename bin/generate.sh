#!/usr/bin/env bash

FAILURES=()
LOGDIR=$(mktemp -d)

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

# --- Pre-processing: download and patch specs ---

# run_step "download-shippingV2" \
#     /usr/bin/curl -s -f https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipping-api-model/shippingV2.json -o "${PWD}/json_specs/shippingV2.raw.json"

# if [[ -f "${PWD}/json_specs/shippingV2.raw.json" ]]; then
#     run_step "patch-shippingV2" \
#         jq '(.definitions.GetTrackingResult.required) |= map(select(. != "alternateLegTrackingId"))' \
#         "${PWD}/json_specs/shippingV2.raw.json" > "${PWD}/json_specs/shippingV2.json" || true
#     # jq output goes to file via redirect, so we check the result file
#     if [[ ! -s "${PWD}/json_specs/shippingV2.json" ]]; then
#         FAILURES+=("patch-shippingV2: output file is empty")
#     fi
# fi

run_step "download-ordersV2026" \
    /usr/bin/curl -s -f https://raw.githubusercontent.com/amzn/selling-partner-api-models/refs/heads/main/models/orders-api-model/orders_2026-01-01.json -o "${PWD}/json_specs/orders_2026-01-01.raw.json"

if [[ -f "${PWD}/json_specs/orders_2026-01-01.raw.json" ]]; then
    run_step "patch-ordersV2026" \
        jq '(.paths[][].tags) = ["ordersV2026"]' \
        "${PWD}/json_specs/orders_2026-01-01.raw.json" > "${PWD}/json_specs/orders_2026-01-01.json" || true
    if [[ ! -s "${PWD}/json_specs/orders_2026-01-01.json" ]]; then
        FAILURES+=("patch-ordersV2026: output file is empty")
    fi
fi

# --- Code generation ---

run_step "aplus" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/aplus-content-api-model/aplusContent_2020-11-01.json \
    -c /sp-api/config/generator-aplus.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

# run_step "authorization" \
#     docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
#     -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/authorization-api-model/authorization.json \
#     -c /sp-api/config/generator-authorization.yaml \
#     --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
#     -o /sp-api \
#     --language-specific-primitives \\DateTimeInterface \
#     --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "catalog-item" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/catalog-items-api-model/catalogItems_2022-04-01.json \
    --skip-validate-spec \
    -c /sp-api/config/generator-catalog-item.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "fba-inbound" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-inbound-eligibility-api-model/fbaInbound.json \
    -c /sp-api/config/generator-fba-inbound.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "fba-inventory" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-inventory-api-model/fbaInventory.json \
    -c /sp-api/config/generator-fba-inventory.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

# run_step "fba-small-and-light" \
#     docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
#     -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-small-and-light-api-model/fbaSmallandLight.json \
#     -c /sp-api/config/generator-fba-small-and-light.yaml \
#     --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
#     -o /sp-api \
#     --language-specific-primitives \\DateTimeInterface \
#     --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "feeds" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/feeds-api-model/feeds_2021-06-30.json \
    -c /sp-api/config/generator-feeds.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "finances" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/finances-api-model/financesV0.json \
    -c /sp-api/config/generator-finances.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "fulfillment-inbound" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fulfillment-inbound-api-model/fulfillmentInboundV0.json \
    -c /sp-api/config/generator-fulfillment-inbound.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "fulfillment-outbound" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fulfillment-outbound-api-model/fulfillmentOutbound_2020-07-01.json \
    -c /sp-api/config/generator-fulfillment-outbound.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "listings-items" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/listings-items-api-model/listingsItems_2021-08-01.json \
    -c /sp-api/config/generator-listings-items.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface \
    --skip-validate-spec

run_step "merchant-fulfillment" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/merchant-fulfillment-api-model/merchantFulfillmentV0.json \
    -c /sp-api/config/generator-merchant-fulfillment.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface \
    --skip-validate-spec

run_step "messaging" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/messaging-api-model/messaging.json \
    -c /sp-api/config/generator-messaging.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "notifications" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/notifications-api-model/notifications.json \
    -c /sp-api/config/generator-notifications.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "orders" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/orders-api-model/ordersV0.json \
    -c /sp-api/config/generator-orders.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "product-fees" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-fees-api-model/productFeesV0.json \
    -c /sp-api/config/generator-product-fees.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "product-pricing" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-pricing-api-model/productPricingV0.json \
    -c /sp-api/config/generator-product-pricing.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "product-types-definitions" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-type-definitions-api-model/definitionsProductTypes_2020-09-01.json \
    -c /sp-api/config/generator-product-types-definitions.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "reports" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/reports-api-model/reports_2021-06-30.json \
    -c /sp-api/config/generator-reports.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "sales" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/sales-api-model/sales.json \
    -c /sp-api/config/generator-sales.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "sellers" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/sellers-api-model/sellers.json \
    -c /sp-api/config/generator-sellers.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "services" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/services-api-model/services.json \
    -c /sp-api/config/generator-services.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "shipment-invoicing" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipment-invoicing-api-model/shipmentInvoicingV0.json \
    -c /sp-api/config/generator-shipment-invoicing.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "shipping" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipping-api-model/shipping.json \
    -c /sp-api/config/generator-shipping.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface \
    --skip-validate-spec

run_step "shippingV2" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i /sp-api/json_specs/shippingV2.json \
    --skip-validate-spec \
    -c /sp-api/config/generator-shippingV2.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "solicitations" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/solicitations-api-model/solicitations.json \
    -c /sp-api/config/generator-solicitations.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "tokens" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/tokens-api-model/tokens_2021-03-01.json \
    -c /sp-api/config/generator-tokens.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "uploads" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/uploads-api-model/uploads_2020-11-01.json \
    -c /sp-api/config/generator-uploads.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "vendor-direct-fulfillment-inventory" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-inventory-api-model/vendorDirectFulfillmentInventoryV1.json \
    -c /sp-api/config/generator-vendor-direct-fulfillment-inventory.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "vendor-direct-fulfillment-orders" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-orders-api-model/vendorDirectFulfillmentOrders_2021-12-28.json \
    -c /sp-api/config/generator-vendor-direct-fulfillment-orders.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "vendor-direct-fulfillment-payments" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-payments-api-model/vendorDirectFulfillmentPaymentsV1.json \
    --skip-validate-spec \
    -c /sp-api/config/generator-vendor-direct-fulfillment-payments.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "vendor-direct-fulfillment-shipping" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-shipping-api-model/vendorDirectFulfillmentShipping_2021-12-28.json \
    -c /sp-api/config/generator-vendor-direct-fulfillment-shipping.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "vendor-direct-fulfillment-transactions" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-transactions-api-model/vendorDirectFulfillmentTransactions_2021-12-28.json \
    -c /sp-api/config/generator-vendor-direct-fulfillment-transactions.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "vendor-invoices" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-invoices-api-model/vendorInvoices.json \
    --skip-validate-spec \
    -c /sp-api/config/generator-vendor-invoices.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "vendor-orders" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-orders-api-model/vendorOrders.json \
    --skip-validate-spec \
    -c /sp-api/config/generator-vendor-orders.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "vendor-shipments" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-shipments-api-model/vendorShipments.json \
    --skip-validate-spec \
    -c /sp-api/config/generator-vendor-shipments.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "vendor-transaction-status" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-transaction-status-api-model/vendorTransactionStatus.json \
    -c /sp-api/config/generator-vendor-transaction-status.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

run_step "listings-restrictions" \
    docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/listings-restrictions-api-model/listingsRestrictions_2021-08-01.json \
    -c /sp-api/config/generator-listings-restrictions.yaml \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

# run_step "ordersV2026" \
#     docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli generate \
#     -i /sp-api/json_specs/orders_2026-01-01.json \
#     -c /sp-api/config/generator-ordersV2026.yaml \
#     --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
#     -o /sp-api \
#     --language-specific-primitives \\DateTimeInterface \
#     --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

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
