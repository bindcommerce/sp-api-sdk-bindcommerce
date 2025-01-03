<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner;

use Psr\Log\LoggerInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Psr\Http\Message\RequestFactoryInterface;
use AmazonPHP\SellingPartner\Api\FeedsApi\FeedsSDK;
use AmazonPHP\SellingPartner\Api\SalesApi\SalesSDK;
use AmazonPHP\SellingPartner\Api\OrdersApi\OrdersSDK;
use AmazonPHP\SellingPartner\Api\TokensApi\TokensSDK;
use AmazonPHP\SellingPartner\Api\ReportsApi\ReportsSDK;
use AmazonPHP\SellingPartner\Api\SellersApi\SellersSDK;
use AmazonPHP\SellingPartner\Api\UploadsApi\UploadsSDK;
use AmazonPHP\SellingPartner\Api\DefaultApi\FinancesSDK;
use AmazonPHP\SellingPartner\Api\FeesApi\ProductFeesSDK;
use AmazonPHP\SellingPartner\Api\ServiceApi\ServicesSDK;
use AmazonPHP\SellingPartner\Api\ShippingApi\ShippingSDK;
use AmazonPHP\SellingPartner\Api\AplusContentApi\APlusSDK;
use AmazonPHP\SellingPartner\Api\MessagingApi\MessagingSDK;
use AmazonPHP\SellingPartner\Api\ShippingApi\ShippingV2SDK;
use AmazonPHP\SellingPartner\Api\FeedsApi\FeedsSDKInterface;
use AmazonPHP\SellingPartner\Api\SalesApi\SalesSDKInterface;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FBAInboundSDK;
use AmazonPHP\SellingPartner\Api\ListingsApi\ListingsItemsSDK;
use AmazonPHP\SellingPartner\Api\OrdersApi\OrdersSDKInterface;
use AmazonPHP\SellingPartner\Api\TokensApi\TokensSDKInterface;
use AmazonPHP\SellingPartner\Api\CatalogItemsApi\CatalogItemSDK;
use AmazonPHP\SellingPartner\Api\ReportsApi\ReportsSDKInterface;
use AmazonPHP\SellingPartner\Api\SellersApi\SellersSDKInterface;
use AmazonPHP\SellingPartner\Api\UploadsApi\UploadsSDKInterface;
use AmazonPHP\SellingPartner\Api\DefaultApi\FinancesSDKInterface;
use AmazonPHP\SellingPartner\Api\FbaInventoryApi\FBAInventorySDK;
use AmazonPHP\SellingPartner\Api\FeesApi\ProductFeesSDKInterface;
use AmazonPHP\SellingPartner\Api\ServiceApi\ServicesSDKInterface;
use AmazonPHP\SellingPartner\Api\ShippingApi\ShippingSDKInterface;
use AmazonPHP\SellingPartner\Api\AplusContentApi\APlusSDKInterface;
use AmazonPHP\SellingPartner\Api\NotificationsApi\NotificationsSDK;
use AmazonPHP\SellingPartner\Api\SolicitationsApi\SolicitationsSDK;
use AmazonPHP\SellingPartner\Api\MessagingApi\MessagingSDKInterface;
use AmazonPHP\SellingPartner\Api\ShippingApi\ShippingV2SDKInterface;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FulfillmentInboundSDK;
use AmazonPHP\SellingPartner\Api\ListingsApi\ListingsRestrictionsSDK;
use AmazonPHP\SellingPartner\Api\ProductPricingApi\ProductPricingSDK;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FBAInboundSDKInterface;
use AmazonPHP\SellingPartner\Api\FbaOutboundApi\FulfillmentOutboundSDK;
use AmazonPHP\SellingPartner\Api\CatalogItemsApi\CatalogItemSDKInterface;
use AmazonPHP\SellingPartner\Api\ShipmentInvoiceApi\ShipmentInvoicingSDK;
use AmazonPHP\SellingPartner\Api\FbaInventoryApi\FBAInventorySDKInterface;
use AmazonPHP\SellingPartner\Api\DefinitionsApi\ProductTypesDefinitionsSDK;
use AmazonPHP\SellingPartner\Api\NotificationsApi\NotificationsSDKInterface;
use AmazonPHP\SellingPartner\Api\SolicitationsApi\SolicitationsSDKInterface;
use AmazonPHP\SellingPartner\Api\FbaInboundApi\FulfillmentInboundSDKInterface;
use AmazonPHP\SellingPartner\Api\ListingsApi\ListingsRestrictionsSDKInterface;
use AmazonPHP\SellingPartner\Api\ProductPricingApi\ProductPricingSDKInterface;
use AmazonPHP\SellingPartner\Api\MerchantFulfillmentApi\MerchantFulfillmentSDK;
use AmazonPHP\SellingPartner\Api\FbaOutboundApi\FulfillmentOutboundSDKInterface;
use AmazonPHP\SellingPartner\Api\ShipmentInvoiceApi\ShipmentInvoicingSDKInterface;
use AmazonPHP\SellingPartner\Api\DefinitionsApi\ProductTypesDefinitionsSDKInterface;
use AmazonPHP\SellingPartner\Api\MerchantFulfillmentApi\MerchantFulfillmentSDKInterface;
use AmazonPHP\SellingPartner\Api\CreateContainerLabelApi\VendorDirectFulfillmentShippingSDK;
use AmazonPHP\SellingPartner\Api\CreateContainerLabelApi\VendorDirectFulfillmentShippingSDKInterface;

final class SellingPartnerSDK
{
    /**
     * @var array<class-string>
     */
    private array $instances;

    private readonly HttpFactory $httpFactory;

    public function __construct(
        private readonly ClientInterface $httpClient,
        private readonly RequestFactoryInterface $requestFactory,
        private readonly StreamFactoryInterface $streamFactory,
        private readonly Configuration $configuration,
        private readonly LoggerInterface $logger
    ) {
        $this->instances = [];

        $this->httpFactory = new HttpFactory($requestFactory, $streamFactory);
    }

    public static function create(
        ClientInterface $httpClient,
        RequestFactoryInterface $requestFactory,
        StreamFactoryInterface $streamFactory,
        Configuration $configuration,
        LoggerInterface $logger
    ) : self {
        return new self($httpClient, $requestFactory, $streamFactory, $configuration, $logger);
    }

    public function configuration() : Configuration
    {
        return $this->configuration;
    }

    public function oAuth() : OAuth
    {
        return $this->instantiateSDK(OAuth::class);
    }

    public function aPlus() : APlusSDKInterface
    {
        return $this->instantiateSDK(APlusSDK::class);
    }

    public function catalogItem() : CatalogItemSDKInterface
    {
        return $this->instantiateSDK(CatalogItemSDK::class);
    }

    public function fbaInbound() : FBAInboundSDKInterface
    {
        return $this->instantiateSDK(FBAInboundSDK::class);
    }

    public function fbaInventory() : FBAInventorySDKInterface
    {
        return $this->instantiateSDK(FBAInventorySDK::class);
    }

    public function feeds() : FeedsSDKInterface
    {
        return $this->instantiateSDK(FeedsSDK::class);
    }

    public function finances() : FinancesSDKInterface
    {
        return $this->instantiateSDK(FinancesSDK::class);
    }

    public function fulfillmentInbound() : FulfillmentInboundSDKInterface
    {
        return $this->instantiateSDK(FulfillmentInboundSDK::class);
    }

    public function fulfillmentOutbound() : FulfillmentOutboundSDKInterface
    {
        return $this->instantiateSDK(FulfillmentOutboundSDK::class);
    }

    public function listingsItems() : ListingsItemsSDK
    {
        return $this->instantiateSDK(ListingsItemsSDK::class);
    }

    public function listingsRestrictions() : ListingsRestrictionsSDKInterface
    {
        return $this->instantiateSDK(ListingsRestrictionsSDK::class);
    }

    public function merchantFulfillment() : MerchantFulfillmentSDKInterface
    {
        return $this->instantiateSDK(MerchantFulfillmentSDK::class);
    }

    public function messaging() : MessagingSDKInterface
    {
        return $this->instantiateSDK(MessagingSDK::class);
    }

    public function notifications() : NotificationsSDKInterface
    {
        return $this->instantiateSDK(NotificationsSDK::class);
    }

    public function orders() : OrdersSDKInterface
    {
        return $this->instantiateSDK(OrdersSDK::class);
    }

    public function orderShipment() : VendorDirectFulfillmentShippingSDKInterface
    {
        return $this->instantiateSDK(VendorDirectFulfillmentShippingSDK::class);
    }

    public function productFees() : ProductFeesSDKInterface
    {
        return $this->instantiateSDK(ProductFeesSDK::class);
    }

    public function productPricing() : ProductPricingSDKInterface
    {
        return $this->instantiateSDK(ProductPricingSDK::class);
    }

    public function productTypesDefinitions() : ProductTypesDefinitionsSDKInterface
    {
        return $this->instantiateSDK(ProductTypesDefinitionsSDK::class);
    }

    public function reports() : ReportsSDKInterface
    {
        return $this->instantiateSDK(ReportsSDK::class);
    }

    public function sales() : SalesSDKInterface
    {
        return $this->instantiateSDK(SalesSDK::class);
    }

    public function sellers() : SellersSDKInterface
    {
        return $this->instantiateSDK(SellersSDK::class);
    }

    public function services() : ServicesSDKInterface
    {
        return $this->instantiateSDK(ServicesSDK::class);
    }

    public function shipmentInvoicing() : ShipmentInvoicingSDKInterface
    {
        return $this->instantiateSDK(ShipmentInvoicingSDK::class);
    }

    public function shipping() : ShippingSDKInterface
    {
        return $this->instantiateSDK(ShippingSDK::class);
    }

    public function shippingV2() : ShippingV2SDKInterface
    {
        return $this->instantiateSDK(ShippingV2SDK::class);
    }

    public function solicitations() : SolicitationsSDKInterface
    {
        return $this->instantiateSDK(SolicitationsSDK::class);
    }

    public function tokens() : TokensSDKInterface
    {
        return $this->instantiateSDK(TokensSDK::class);
    }

    public function uploads() : UploadsSDKInterface
    {
        return $this->instantiateSDK(UploadsSDK::class);
    }

    public function vendor() : VendorSDK
    {
        return $this->instantiateSDK(VendorSDK::class);
    }

    /**
     * @template T
     *
     * @param T $sdkClass
     *
     * @return T
     */
    private function instantiateSDK(string $sdkClass) : string|object
    {
        if (isset($this->instances[$sdkClass])) {
            return $this->instances[$sdkClass];
        }

        $this->instances[$sdkClass] = ($sdkClass === VendorSDK::class)
            ? VendorSDK::create(
                $this->httpClient,
                $this->requestFactory,
                $this->streamFactory,
                $this->configuration,
                $this->logger
            )
            : new $sdkClass(
                $this->httpClient,
                $this->httpFactory,
                $this->configuration,
                $this->logger
            );

        return $this->instances[$sdkClass];
    }
}
