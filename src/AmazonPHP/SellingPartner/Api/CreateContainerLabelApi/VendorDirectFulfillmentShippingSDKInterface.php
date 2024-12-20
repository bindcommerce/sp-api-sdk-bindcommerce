<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\CreateContainerLabelApi;

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

    public const OPERATION_CREATECONTAINERLABEL = 'createContainerLabel';

    public const OPERATION_CREATECONTAINERLABEL_PATH = '/vendor/directFulfillment/shipping/2021-12-28/containerLabel';

    /**
     * Operation createContainerLabel.
     *
     * createContainerLabel
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateContainerLabelRequest $body Request body containing the container label data. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateContainerLabelResponse
     */
    public function createContainerLabel(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateContainerLabelRequest $body) : \AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping\CreateContainerLabelResponse;
}
