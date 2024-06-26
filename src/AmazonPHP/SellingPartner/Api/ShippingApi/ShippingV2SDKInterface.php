<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ShippingApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Amazon Shipping API.
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface ShippingV2SDKInterface
{
    public const API_NAME = 'ShippingV2';

    public const OPERATION_CANCELSHIPMENT = 'cancelShipment';

    public const OPERATION_CANCELSHIPMENT_PATH = '/shipping/v2/shipments/{shipmentId}/cancel';

    public const OPERATION_DIRECTPURCHASESHIPMENT = 'directPurchaseShipment';

    public const OPERATION_DIRECTPURCHASESHIPMENT_PATH = '/shipping/v2/shipments/directPurchase';

    public const OPERATION_GENERATECOLLECTIONFORM = 'generateCollectionForm';

    public const OPERATION_GENERATECOLLECTIONFORM_PATH = '/shipping/v2/collectionForms';

    public const OPERATION_GETACCESSPOINTS = 'getAccessPoints';

    public const OPERATION_GETACCESSPOINTS_PATH = '/shipping/v2/accessPoints';

    public const OPERATION_GETADDITIONALINPUTS = 'getAdditionalInputs';

    public const OPERATION_GETADDITIONALINPUTS_PATH = '/shipping/v2/shipments/additionalInputs/schema';

    public const OPERATION_GETCARRIERACCOUNTFORMINPUTS = 'getCarrierAccountFormInputs';

    public const OPERATION_GETCARRIERACCOUNTFORMINPUTS_PATH = '/shipping/v2/carrierAccountFormInputs';

    public const OPERATION_GETCARRIERACCOUNTS = 'getCarrierAccounts';

    public const OPERATION_GETCARRIERACCOUNTS_PATH = '/shipping/v2/carrierAccounts';

    public const OPERATION_GETCOLLECTIONFORM = 'getCollectionForm';

    public const OPERATION_GETCOLLECTIONFORM_PATH = '/shipping/v2/collectionForms/{collectionFormId}';

    public const OPERATION_GETCOLLECTIONFORMHISTORY = 'getCollectionFormHistory';

    public const OPERATION_GETCOLLECTIONFORMHISTORY_PATH = '/shipping/v2/collectionForms/history';

    public const OPERATION_GETRATES = 'getRates';

    public const OPERATION_GETRATES_PATH = '/shipping/v2/shipments/rates';

    public const OPERATION_GETSHIPMENTDOCUMENTS = 'getShipmentDocuments';

    public const OPERATION_GETSHIPMENTDOCUMENTS_PATH = '/shipping/v2/shipments/{shipmentId}/documents';

    public const OPERATION_GETTRACKING = 'getTracking';

    public const OPERATION_GETTRACKING_PATH = '/shipping/v2/tracking';

    public const OPERATION_GETUNMANIFESTEDSHIPMENTS = 'getUnmanifestedShipments';

    public const OPERATION_GETUNMANIFESTEDSHIPMENTS_PATH = '/shipping/v2/unmanifestedShipments';

    public const OPERATION_LINKCARRIERACCOUNT = 'linkCarrierAccount';

    public const OPERATION_LINKCARRIERACCOUNT_PATH = '/shipping/v2/carrierAccounts/{carrierId}';

    public const OPERATION_ONECLICKSHIPMENT = 'oneClickShipment';

    public const OPERATION_ONECLICKSHIPMENT_PATH = '/shipping/v2/oneClickShipment';

    public const OPERATION_PURCHASESHIPMENT = 'purchaseShipment';

    public const OPERATION_PURCHASESHIPMENT_PATH = '/shipping/v2/shipments';

    public const OPERATION_UNLINKCARRIERACCOUNT = 'unlinkCarrierAccount';

    public const OPERATION_UNLINKCARRIERACCOUNT_PATH = '/shipping/v2/carrierAccounts/{carrierId}/unlink';

    /**
     * Operation cancelShipment.
     *
     * @param string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\CancelShipmentResponse
     */
    public function cancelShipment(AccessToken $accessToken, string $region, string $shipment_id, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\CancelShipmentResponse;

    /**
     * Operation directPurchaseShipment.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\DirectPurchaseRequest $body body (required)
     * @param null|string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param null|string $locale The IETF Language Tag. Note that this only supports the primary language subtag with one secondary language subtag (i.e. en-US, fr-CA). The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary language subtags. (optional)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\DirectPurchaseResponse
     */
    public function directPurchaseShipment(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ShippingV2\DirectPurchaseRequest $body, ?string $x_amzn_idempotency_key = null, ?string $locale = null, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\DirectPurchaseResponse;

    /**
     * Operation generateCollectionForm.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\GenerateCollectionFormRequest $body body (required)
     * @param null|string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GenerateCollectionFormResponse
     */
    public function generateCollectionForm(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ShippingV2\GenerateCollectionFormRequest $body, ?string $x_amzn_idempotency_key = null, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GenerateCollectionFormResponse;

    /**
     * Operation getAccessPoints.
     *
     * @param string[] $access_point_types access_point_types (required)
     * @param string $country_code country_code (required)
     * @param string $postal_code postal_code (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetAccessPointsResponse
     */
    public function getAccessPoints(AccessToken $accessToken, string $region, array $access_point_types, string $country_code, string $postal_code, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetAccessPointsResponse;

    /**
     * Operation getAdditionalInputs.
     *
     * @param string $request_token The request token returned in the response to the getRates operation. (required)
     * @param string $rate_id The rate identifier for the shipping offering (rate) returned in the response to the getRates operation. (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetAdditionalInputsResponse
     */
    public function getAdditionalInputs(AccessToken $accessToken, string $region, string $request_token, string $rate_id, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetAdditionalInputsResponse;

    /**
     * Operation getCarrierAccountFormInputs.
     *
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetCarrierAccountFormInputsResponse
     */
    public function getCarrierAccountFormInputs(AccessToken $accessToken, string $region, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetCarrierAccountFormInputsResponse;

    /**
     * Operation getCarrierAccounts.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\GetCarrierAccountsRequest $body body (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetCarrierAccountsResponse
     */
    public function getCarrierAccounts(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ShippingV2\GetCarrierAccountsRequest $body, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetCarrierAccountsResponse;

    /**
     * Operation getCollectionForm.
     *
     * @param string $collection_form_id collection form Id to reprint a collection. (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetCollectionFormResponse
     */
    public function getCollectionForm(AccessToken $accessToken, string $region, string $collection_form_id, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetCollectionFormResponse;

    /**
     * Operation getCollectionFormHistory.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\GetCollectionFormHistoryRequest $body body (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetCollectionFormHistoryResponse
     */
    public function getCollectionFormHistory(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ShippingV2\GetCollectionFormHistoryRequest $body, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetCollectionFormHistoryResponse;

    /**
     * Operation getRates.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\GetRatesRequest $body body (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetRatesResponse
     */
    public function getRates(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ShippingV2\GetRatesRequest $body, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetRatesResponse;

    /**
     * Operation getShipmentDocuments.
     *
     * @param string $shipment_id The shipment identifier originally returned by the purchaseShipment operation. (required)
     * @param string $package_client_reference_id The package client reference identifier originally provided in the request body parameter for the getRates operation. (required)
     * @param null|string $format The file format of the document. Must be one of the supported formats returned by the getRates operation. (optional)
     * @param null|float $dpi The resolution of the document (for example, 300 means 300 dots per inch). Must be one of the supported resolutions returned in the response to the getRates operation. (optional)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetShipmentDocumentsResponse
     */
    public function getShipmentDocuments(AccessToken $accessToken, string $region, string $shipment_id, string $package_client_reference_id, ?string $format = null, ?float $dpi = null, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetShipmentDocumentsResponse;

    /**
     * Operation getTracking.
     *
     * @param string $tracking_id A carrier-generated tracking identifier originally returned by the purchaseShipment operation. (required)
     * @param string $carrier_id A carrier identifier originally returned by the getRates operation for the selected rate. (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetTrackingResponse
     */
    public function getTracking(AccessToken $accessToken, string $region, string $tracking_id, string $carrier_id, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetTrackingResponse;

    /**
     * Operation getUnmanifestedShipments.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\GetUnmanifestedShipmentsRequest $body body (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\GetUnmanifestedShipmentsResponse
     */
    public function getUnmanifestedShipments(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ShippingV2\GetUnmanifestedShipmentsRequest $body, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\GetUnmanifestedShipmentsResponse;

    /**
     * Operation linkCarrierAccount.
     *
     * @param string $carrier_id The unique identifier associated with the carrier account. (required)
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\LinkCarrierAccountRequest $body body (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\LinkCarrierAccountResponse
     */
    public function linkCarrierAccount(AccessToken $accessToken, string $region, string $carrier_id, \AmazonPHP\SellingPartner\Model\ShippingV2\LinkCarrierAccountRequest $body, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\LinkCarrierAccountResponse;

    /**
     * Operation oneClickShipment.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\OneClickShipmentRequest $body body (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\OneClickShipmentResponse
     */
    public function oneClickShipment(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ShippingV2\OneClickShipmentRequest $body, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\OneClickShipmentResponse;

    /**
     * Operation purchaseShipment.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\PurchaseShipmentRequest $body body (required)
     * @param null|string $x_amzn_idempotency_key A unique value which the server uses to recognize subsequent retries of the same request. (optional)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\PurchaseShipmentResponse
     */
    public function purchaseShipment(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\ShippingV2\PurchaseShipmentRequest $body, ?string $x_amzn_idempotency_key = null, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\PurchaseShipmentResponse;

    /**
     * Operation unlinkCarrierAccount.
     *
     * @param string $carrier_id carrier Id to unlink with merchant. (required)
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\UnlinkCarrierAccountRequest $body body (required)
     * @param null|string $x_amzn_shipping_business_id Amazon shipping business to assume for this request. The default is AmazonShipping_UK. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\UnlinkCarrierAccountResponse
     */
    public function unlinkCarrierAccount(AccessToken $accessToken, string $region, string $carrier_id, \AmazonPHP\SellingPartner\Model\ShippingV2\UnlinkCarrierAccountRequest $body, ?string $x_amzn_shipping_business_id = null) : \AmazonPHP\SellingPartner\Model\ShippingV2\UnlinkCarrierAccountResponse;
}
