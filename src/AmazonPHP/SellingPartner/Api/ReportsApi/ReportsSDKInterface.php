<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ReportsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Report v2021-06-30.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * The version of the OpenAPI document: 2021-06-30
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface ReportsSDKInterface
{
    public const API_NAME = 'Reports';

    public const OPERATION_CANCELREPORT = 'cancelReport';

    public const OPERATION_CANCELREPORT_PATH = '/reports/2021-06-30/reports/{reportId}';

    public const OPERATION_CANCELREPORTSCHEDULE = 'cancelReportSchedule';

    public const OPERATION_CANCELREPORTSCHEDULE_PATH = '/reports/2021-06-30/schedules/{reportScheduleId}';

    public const OPERATION_CREATEREPORT = 'createReport';

    public const OPERATION_CREATEREPORT_PATH = '/reports/2021-06-30/reports';

    public const OPERATION_CREATEREPORTSCHEDULE = 'createReportSchedule';

    public const OPERATION_CREATEREPORTSCHEDULE_PATH = '/reports/2021-06-30/schedules';

    public const OPERATION_GETREPORT = 'getReport';

    public const OPERATION_GETREPORT_PATH = '/reports/2021-06-30/reports/{reportId}';

    public const OPERATION_GETREPORTDOCUMENT = 'getReportDocument';

    public const OPERATION_GETREPORTDOCUMENT_PATH = '/reports/2021-06-30/documents/{reportDocumentId}';

    public const OPERATION_GETREPORTSCHEDULE = 'getReportSchedule';

    public const OPERATION_GETREPORTSCHEDULE_PATH = '/reports/2021-06-30/schedules/{reportScheduleId}';

    public const OPERATION_GETREPORTSCHEDULES = 'getReportSchedules';

    public const OPERATION_GETREPORTSCHEDULES_PATH = '/reports/2021-06-30/schedules';

    public const OPERATION_GETREPORTS = 'getReports';

    public const OPERATION_GETREPORTS_PATH = '/reports/2021-06-30/reports';

    /**
     * Operation cancelReport.
     *
     * cancelReport
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function cancelReport(AccessToken $accessToken, string $region, string $report_id);

    /**
     * Operation cancelReportSchedule.
     *
     * cancelReportSchedule
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function cancelReportSchedule(AccessToken $accessToken, string $region, string $report_schedule_id);

    /**
     * Operation createReport.
     *
     * createReport
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\Reports\CreateReportSpecification $body Information required to create the report. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Reports\CreateReportResponse
     */
    public function createReport(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Reports\CreateReportSpecification $body) : \AmazonPHP\SellingPartner\Model\Reports\CreateReportResponse;

    /**
     * Operation createReportSchedule.
     *
     * createReportSchedule
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\Reports\CreateReportScheduleSpecification $body Information required to create the report schedule. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Reports\CreateReportScheduleResponse
     */
    public function createReportSchedule(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\Reports\CreateReportScheduleSpecification $body) : \AmazonPHP\SellingPartner\Model\Reports\CreateReportScheduleResponse;

    /**
     * Operation getReport.
     *
     * getReport
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $report_id The identifier for the report. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Reports\Report
     */
    public function getReport(AccessToken $accessToken, string $region, string $report_id) : \AmazonPHP\SellingPartner\Model\Reports\Report;

    /**
     * Operation getReportDocument.
     *
     * getReportDocument
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $report_document_id The identifier for the report document. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Reports\ReportDocument
     */
    public function getReportDocument(AccessToken $accessToken, string $region, string $report_document_id) : \AmazonPHP\SellingPartner\Model\Reports\ReportDocument;

    /**
     * Operation getReportSchedule.
     *
     * getReportSchedule
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $report_schedule_id The identifier for the report schedule. This identifier is unique only in combination with a seller ID. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Reports\ReportSchedule
     */
    public function getReportSchedule(AccessToken $accessToken, string $region, string $report_schedule_id) : \AmazonPHP\SellingPartner\Model\Reports\ReportSchedule;

    /**
     * Operation getReportSchedules.
     *
     * getReportSchedules
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string[] $report_types A list of report types used to filter report schedules. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Reports\ReportScheduleList
     */
    public function getReportSchedules(AccessToken $accessToken, string $region, array $report_types) : \AmazonPHP\SellingPartner\Model\Reports\ReportScheduleList;

    /**
     * Operation getReports.
     *
     * getReports
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param null|string[] $report_types A list of report types used to filter reports. Refer to [Report Type Values](https://developer-docs.amazon.com/sp-api/docs/report-type-values) for more information. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. (optional)
     * @param null|string[] $processing_statuses A list of processing statuses used to filter reports. (optional)
     * @param null|string[] $marketplace_ids A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. (optional)
     * @param int $page_size The maximum number of reports to return in a single call. (optional, default to 10)
     * @param null|\DateTimeInterface $created_since The earliest report creation date and time for reports to include in the response, in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. (optional)
     * @param null|\DateTimeInterface $created_until The latest report creation date and time for reports to include in the response, in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; date time format. The default is now. (optional)
     * @param null|string $next_token A string token returned in the response to your previous request. &#x60;nextToken&#x60; is returned when the number of results exceeds the specified &#x60;pageSize&#x60; value. To get the next page of results, call the &#x60;getReports&#x60; operation and include this token as the only parameter. Specifying &#x60;nextToken&#x60; with any other parameters will cause the request to fail. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\Reports\GetReportsResponse
     */
    public function getReports(AccessToken $accessToken, string $region, ?array $report_types = null, ?array $processing_statuses = null, ?array $marketplace_ids = null, int $page_size = 10, ?\DateTimeInterface $created_since = null, ?\DateTimeInterface $created_until = null, ?string $next_token = null) : \AmazonPHP\SellingPartner\Model\Reports\GetReportsResponse;
}
