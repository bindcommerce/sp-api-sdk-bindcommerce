<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ListingsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Listings Restrictions.
 *
 * The Selling Partner API for Listings Restrictions provides programmatic access to restrictions on Amazon catalog listings.  For more information, see the [Listings Restrictions API Use Case Guide](doc:listings-restrictions-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface ListingsRestrictionsSDKInterface
{
    public const API_NAME = 'ListingsRestrictions';

    public const OPERATION_GETLISTINGSRESTRICTIONS = 'getListingsRestrictions';

    public const OPERATION_GETLISTINGSRESTRICTIONS_PATH = '/listings/2021-08-01/restrictions';

    /**
     * Operation getListingsRestrictions.
     *
     * @param string $asin The Amazon Standard Identification Number (ASIN) of the item. (required)
     * @param string $seller_id A selling partner identifier, such as a merchant account. (required)
     * @param string[] $marketplace_ids A comma-delimited list of Amazon marketplace identifiers for the request. (required)
     * @param null|string $condition_type The condition used to filter restrictions. (optional)
     * @param null|string $reason_locale A locale for reason text localization. When not provided, the default language code of the first marketplace is used. Examples: \&quot;en_US\&quot;, \&quot;fr_CA\&quot;, \&quot;fr_FR\&quot;. Localized messages default to \&quot;en_US\&quot; when a localization is not available in the specified locale. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\ListingsRestrictions\RestrictionList
     */
    public function getListingsRestrictions(AccessToken $accessToken, string $region, string $asin, string $seller_id, array $marketplace_ids, ?string $condition_type = null, ?string $reason_locale = null) : \AmazonPHP\SellingPartner\Model\ListingsRestrictions\RestrictionList;
}
