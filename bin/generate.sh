docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/aplus-content-api-model/aplusContent_2020-11-01.json \
    -c /sp-api/config/generator-aplus.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/authorization-api-model/authorization.json \
    -c /sp-api/config/generator-authorization.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/catalog-items-api-model/catalogItems_2022-04-01.json \
    -c /sp-api/config/generator-catalog-item.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-inbound-eligibility-api-model/fbaInbound.json \
    -c /sp-api/config/generator-fba-inbound.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-inventory-api-model/fbaInventory.json \
    -c /sp-api/config/generator-fba-inventory.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fba-small-and-light-api-model/fbaSmallandLight.json \
    -c /sp-api/config/generator-fba-small-and-light.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/feeds-api-model/feeds_2021-06-30.json \
    -c /sp-api/config/generator-feeds.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/finances-api-model/financesV0.json \
    -c /sp-api/config/generator-finances.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fulfillment-inbound-api-model/fulfillmentInboundV0.json \
    -c /sp-api/config/generator-fulfillment-inbound.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/fulfillment-outbound-api-model/fulfillmentOutbound_2020-07-01.json \
    -c /sp-api/config/generator-fulfillment-outbound.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/listings-items-api-model/listingsItems_2021-08-01.json \
    -c /sp-api/config/generator-listings-items.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface \

/usr/bin/curl -s https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/merchant-fulfillment-api-model/merchantFulfillmentV0.json \
    | jq '(.definitions.ShippingService.required) |= map(select(. != "RequiresAdditionalSellerInputs"))' \
    > "${PWD}/json_specs/merchantFulfillmentV0.json"

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i /sp-api/json_specs/merchantFulfillmentV0.json \
    -c /sp-api/config/generator-merchant-fulfillment.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface \

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/messaging-api-model/messaging.json \
    -c /sp-api/config/generator-messaging.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/notifications-api-model/notifications.json \
    -c /sp-api/config/generator-notifications.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/orders-api-model/ordersV0.json \
    -c /sp-api/config/generator-orders.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-fees-api-model/productFeesV0.json \
    -c /sp-api/config/generator-product-fees.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-pricing-api-model/productPricingV0.json \
    -c /sp-api/config/generator-product-pricing.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/product-type-definitions-api-model/definitionsProductTypes_2020-09-01.json \
    -c /sp-api/config/generator-product-types-definitions.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/reports-api-model/reports_2021-06-30.json \
    -c /sp-api/config/generator-reports.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/sales-api-model/sales.json \
    -c /sp-api/config/generator-sales.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/sellers-api-model/sellers.json \
    -c /sp-api/config/generator-sellers.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/services-api-model/services.json \
    -c /sp-api/config/generator-services.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipment-invoicing-api-model/shipmentInvoicingV0.json \
    -c /sp-api/config/generator-shipment-invoicing.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipping-api-model/shipping.json \
    -c /sp-api/config/generator-shipping.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface \

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/solicitations-api-model/solicitations.json \
    -c /sp-api/config/generator-solicitations.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/tokens-api-model/tokens_2021-03-01.json \
    -c /sp-api/config/generator-tokens.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/uploads-api-model/uploads_2020-11-01.json \
    -c /sp-api/config/generator-uploads.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-inventory-api-model/vendorDirectFulfillmentInventoryV1.json \
    -c /sp-api/config/generator-vendor-direct-fulfillment-inventory.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-orders-api-model/vendorDirectFulfillmentOrders_2021-12-28.json \
    -c /sp-api/config/generator-vendor-direct-fulfillment-orders.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-payments-api-model/vendorDirectFulfillmentPaymentsV1.json \
    -c /sp-api/config/generator-vendor-direct-fulfillment-payments.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-shipping-api-model/vendorDirectFulfillmentShipping_2021-12-28.json \
    -c /sp-api/config/generator-vendor-direct-fulfillment-shipping.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-direct-fulfillment-transactions-api-model/vendorDirectFulfillmentTransactions_2021-12-28.json \
    -c /sp-api/config/generator-vendor-direct-fulfillment-transactions.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-invoices-api-model/vendorInvoices.json \
    -c /sp-api/config/generator-vendor-invoices.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-orders-api-model/vendorOrders.json \
    -c /sp-api/config/generator-vendor-orders.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-shipments-api-model/vendorShipments.json \
    -c /sp-api/config/generator-vendor-shipments.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/vendor-transaction-status-api-model/vendorTransactionStatus.json \
    -c /sp-api/config/generator-vendor-transaction-status.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

/usr/bin/curl https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipping-api-model/shippingV2.json | jq '(.definitions.GetTrackingResult.required) |= map(select(. != "alternateLegTrackingId"))' > "${PWD}/json_specs/shippingV2.json"

# docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
#     -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/shipping-api-model/shippingV2.json \
#     -c /sp-api/config/generator-shippingV2.yaml \
    --skip-validate-spec \
#     --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
#     -o /sp-api \
#     --language-specific-primitives \\DateTimeInterface \
#     --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i /sp-api/json_specs/shippingV2.json \
    -c /sp-api/config/generator-shippingV2.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

docker run --user "$(id -u)":"$(id -g)" --rm -v "${PWD}:/sp-api" openapitools/openapi-generator-cli:v7.12.0 generate \
    -i https://raw.githubusercontent.com/amzn/selling-partner-api-models/main/models/listings-restrictions-api-model/listingsRestrictions_2021-08-01.json \
    -c /sp-api/config/generator-listings-restrictions.yaml \
    --skip-validate-spec \
    --global-property models,apis,apiDocs=false,modelDocs=false,modelTests=false,apiTests=false,supportingFiles=false \
    -o /sp-api \
    --language-specific-primitives \\DateTimeInterface \
    --type-mappings date=\\DateTimeInterface,Date=\\DateTimeInterface,DateTime=\\DateTimeInterface

