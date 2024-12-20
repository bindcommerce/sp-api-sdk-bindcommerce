<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorShippingLabelsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * Use the Selling Partner API for Direct Fulfillment Shipping to access a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface VendorDirectFulfillmentShippingSDKInterface
{
    public const API_NAME = 'VendorDirectFulfillmentShipping';

    public const OPERATION_CREATESHIPPINGLABELS = 'createShippingLabels';

    public const OPERATION_CREATESHIPPINGLABELS_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber}';

    public const OPERATION_GETSHIPPINGLABEL = 'getShippingLabel';

    public const OPERATION_GETSHIPPINGLABEL_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels/{purchaseOrderNumber}';

    public const OPERATION_GETSHIPPINGLABELS = 'getShippingLabels';

    public const OPERATION_GETSHIPPINGLABELS_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels';

    public const OPERATION_SUBMITSHIPPINGLABELREQUEST = 'submitShippingLabelRequest';

    public const OPERATION_SUBMITSHIPPINGLABELREQUEST_PATH = '/vendor/directFulfillment/shipping/2021-12-28/shippingLabels';

    /**
     * Operation createShippingLabels.
     *
     * createShippingLabels
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $purchase_order_number The purchase order number for which you want to return the shipping labels. It should be the same number as the &#x60;purchaseOrderNumber&#x60; in the order. (required)
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateShippingLabelsRequest $body The request payload that contains the parameters for creating shipping labels. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel
     */
    public function createShippingLabels(AccessToken $accessToken, string $region, string $purchase_order_number, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateShippingLabelsRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel;

    /**
     * Operation getShippingLabel.
     *
     * getShippingLabel
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $purchase_order_number The purchase order number for which you want to return the shipping label. It should be the same &#x60;purchaseOrderNumber&#x60; that you received in the order. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel
     */
    public function getShippingLabel(AccessToken $accessToken, string $region, string $purchase_order_number) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabel;

    /**
     * Operation getShippingLabels.
     *
     * getShippingLabels
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \DateTimeInterface $created_after Shipping labels that became available after this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param \DateTimeInterface $created_before Shipping labels that became available before this date and time will be included in the result. Values are in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date-time format. (required)
     * @param null|string $ship_from_party_id The vendor &#x60;warehouseId&#x60; for order fulfillment. If not specified, the result contains orders for all warehouses. (optional)
     * @param null|int $limit The limit to the number of records returned. (optional)
     * @param string $sort_order The sort order creation date. You can choose between ascending (&#x60;ASC&#x60;) or descending (&#x60;DESC&#x60;) sort order. (optional, default to 'ASC')
     * @param null|string $next_token Used for pagination when there are more ship labels than the specified result size limit. The token value is returned in the previous API call. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabelList
     */
    public function getShippingLabels(AccessToken $accessToken, string $region, \DateTimeInterface $created_after, \DateTimeInterface $created_before, ?string $ship_from_party_id = null, ?int $limit = null, string $sort_order = 'ASC', ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\ShippingLabelList;

    /**
     * Operation submitShippingLabelRequest.
     *
     * submitShippingLabelRequest
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest $body The request body that contains the shipping labels data. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\TransactionReference
     */
    public function submitShippingLabelRequest(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\SubmitShippingLabelsRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\TransactionReference;
}
