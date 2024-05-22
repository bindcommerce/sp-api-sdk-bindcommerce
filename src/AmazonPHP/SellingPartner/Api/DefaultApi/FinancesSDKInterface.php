<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\DefaultApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface FinancesSDKInterface
{
    public const API_NAME = 'Finances';

    public const OPERATION_LISTFINANCIALEVENTGROUPS = 'listFinancialEventGroups';

    public const OPERATION_LISTFINANCIALEVENTGROUPS_PATH = '/finances/v0/financialEventGroups';

    public const OPERATION_LISTFINANCIALEVENTS = 'listFinancialEvents';

    public const OPERATION_LISTFINANCIALEVENTS_PATH = '/finances/v0/financialEvents';

    public const OPERATION_LISTFINANCIALEVENTSBYGROUPID = 'listFinancialEventsByGroupId';

    public const OPERATION_LISTFINANCIALEVENTSBYGROUPID_PATH = '/finances/v0/financialEventGroups/{eventGroupId}/financialEvents';

    public const OPERATION_LISTFINANCIALEVENTSBYORDERID = 'listFinancialEventsByOrderId';

    public const OPERATION_LISTFINANCIALEVENTSBYORDERID_PATH = '/finances/v0/orders/{orderId}/financialEvents';

    /**
     * Operation listFinancialEventGroups.
     *
     * @param int $max_results_per_page The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with &#39;InvalidInput&#39;. (optional, default to 100)
     * @param null|\DateTimeInterface $financial_event_group_started_before A date used for selecting financial event groups that opened before (but not at) a specified date and time, in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param null|\DateTimeInterface $financial_event_group_started_after A date used for selecting financial event groups that opened after (or at) a specified date and time, in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param null|string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventGroupsResponse
     */
    public function listFinancialEventGroups(AccessToken $accessToken, string $region, int $max_results_per_page = 100, ?\DateTimeInterface $financial_event_group_started_before = null, ?\DateTimeInterface $financial_event_group_started_after = null, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventGroupsResponse;

    /**
     * Operation listFinancialEvents.
     *
     * @param int $max_results_per_page The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with &#39;InvalidInput&#39;. (optional, default to 100)
     * @param null|\DateTimeInterface $posted_after A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date time format. (optional)
     * @param null|\DateTimeInterface $posted_before A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param null|string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventsResponse
     */
    public function listFinancialEvents(AccessToken $accessToken, string $region, int $max_results_per_page = 100, ?\DateTimeInterface $posted_after = null, ?\DateTimeInterface $posted_before = null, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventsResponse;

    /**
     * Operation listFinancialEventsByGroupId.
     *
     * @param string $event_group_id The identifier of the financial event group to which the events belong. (required)
     * @param int $max_results_per_page The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with &#39;InvalidInput&#39;. (optional, default to 100)
     * @param null|\DateTimeInterface $posted_after A date used for selecting financial events posted after (or at) a specified time. The date-time **must** be more than two minutes before the time of the request, in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date time format. (optional)
     * @param null|\DateTimeInterface $posted_before A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than &#x60;PostedAfter&#x60; and no later than two minutes before the request was submitted, in [ISO 8601](https://developer-docs.amazon.com/sp-api/docs/iso-8601) date time format. If &#x60;PostedAfter&#x60; and &#x60;PostedBefore&#x60; are more than 180 days apart, no financial events are returned. You must specify the &#x60;PostedAfter&#x60; parameter if you specify the &#x60;PostedBefore&#x60; parameter. Default: Now minus two minutes. (optional)
     * @param null|string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventsResponse
     */
    public function listFinancialEventsByGroupId(AccessToken $accessToken, string $region, string $event_group_id, int $max_results_per_page = 100, ?\DateTimeInterface $posted_after = null, ?\DateTimeInterface $posted_before = null, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventsResponse;

    /**
     * Operation listFinancialEventsByOrderId.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param int $max_results_per_page The maximum number of results to return per page. If the response exceeds the maximum number of transactions or 10 MB, the API responds with &#39;InvalidInput&#39;. (optional, default to 100)
     * @param null|string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventsResponse
     */
    public function listFinancialEventsByOrderId(AccessToken $accessToken, string $region, string $order_id, int $max_results_per_page = 100, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\Finances\ListFinancialEventsResponse;
}
