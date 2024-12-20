<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorOrdersApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Direct Fulfillment Orders.
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
 *
 * The version of the OpenAPI document: 2021-12-28
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface VendorDirectFulfillmentOrdersSDKInterface
{
    public const API_NAME = 'VendorDirectFulfillmentOrders';

    public const OPERATION_GETORDER = 'getOrder';

    public const OPERATION_GETORDER_PATH = '/vendor/directFulfillment/orders/2021-12-28/purchaseOrders/{purchaseOrderNumber}';

    public const OPERATION_GETORDERS = 'getOrders';

    public const OPERATION_GETORDERS_PATH = '/vendor/directFulfillment/orders/2021-12-28/purchaseOrders';

    public const OPERATION_SUBMITACKNOWLEDGEMENT = 'submitAcknowledgement';

    public const OPERATION_SUBMITACKNOWLEDGEMENT_PATH = '/vendor/directFulfillment/orders/2021-12-28/acknowledgements';

    /**
     * Operation getOrder.
     *
     * @param string $purchase_order_number The order identifier for the purchase order that you want. Formatting Notes: alpha-numeric code. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Order
     */
    public function getOrder(AccessToken $accessToken, string $region, string $purchase_order_number) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\Order;

    /**
     * Operation getOrders.
     *
     * @param \DateTimeInterface $created_after Purchase orders that became available after this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param \DateTimeInterface $created_before Purchase orders that became available before this date and time will be included in the result. Must be in ISO-8601 date/time format. (required)
     * @param null|string $ship_from_party_id The vendor warehouse identifier for the fulfillment warehouse. If not specified, the result will contain orders for all warehouses. (optional)
     * @param null|string $status Returns only the purchase orders that match the specified status. If not specified, the result will contain orders that match any status. (optional)
     * @param null|int $limit The limit to the number of purchase orders returned. (optional)
     * @param null|string $sort_order Sort the list in ascending or descending order by order creation date. (optional)
     * @param null|string $next_token Used for pagination when there are more orders than the specified result size limit. The token value is returned in the previous API call. (optional)
     * @param bool $include_details When true, returns the complete purchase order details. Otherwise, only purchase order numbers are returned. (optional, default to 'true')
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderList
     */
    public function getOrders(AccessToken $accessToken, string $region, \DateTimeInterface $created_after, \DateTimeInterface $created_before, ?string $ship_from_party_id = null, ?string $status = null, ?int $limit = null, ?string $sort_order = null, ?string $next_token = null, bool $include_details = true) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\OrderList;

    /**
     * Operation submitAcknowledgement.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest $body The request body containing the acknowledgement to an order (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\TransactionId
     */
    public function submitAcknowledgement(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\SubmitAcknowledgementRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentOrders\TransactionId;
}
