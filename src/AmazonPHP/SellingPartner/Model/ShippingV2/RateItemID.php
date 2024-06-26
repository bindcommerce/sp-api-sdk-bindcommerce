<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ShippingV2;

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
class RateItemID
{
    /**
     * Possible values of this enum.
     */
    final public const BASE_RATE = 'BASE_RATE';

    final public const TRANSACTION_FEE = 'TRANSACTION_FEE';

    final public const ADULT_SIGNATURE_CONFIRMATION = 'ADULT_SIGNATURE_CONFIRMATION';

    final public const SIGNATURE_CONFIRMATION = 'SIGNATURE_CONFIRMATION';

    final public const NO_CONFIRMATION = 'NO_CONFIRMATION';

    final public const WAIVE_SIGNATURE = 'WAIVE_SIGNATURE';

    final public const IMPLIED_LIABILITY = 'IMPLIED_LIABILITY';

    final public const HIDDEN_POSTAGE = 'HIDDEN_POSTAGE';

    final public const DECLARED_VALUE = 'DECLARED_VALUE';

    final public const SUNDAY_HOLIDAY_DELIVERY = 'SUNDAY_HOLIDAY_DELIVERY';

    final public const DELIVERY_CONFIRMATION = 'DELIVERY_CONFIRMATION';

    final public const IMPORT_DUTY_CHARGE = 'IMPORT_DUTY_CHARGE';

    final public const VAT = 'VAT';

    final public const NO_SATURDAY_DELIVERY = 'NO_SATURDAY_DELIVERY';

    final public const INSURANCE = 'INSURANCE';

    final public const COD = 'COD';

    final public const FUEL_SURCHARGE = 'FUEL_SURCHARGE';

    final public const INSPECTION_CHARGE = 'INSPECTION_CHARGE';

    final public const DELIVERY_AREA_SURCHARGE = 'DELIVERY_AREA_SURCHARGE';

    final public const WAYBILL_CHARGE = 'WAYBILL_CHARGE';

    final public const AMAZON_SPONSORED_DISCOUNT = 'AMAZON_SPONSORED_DISCOUNT';

    final public const INTEGRATOR_SPONSORED_DISCOUNT = 'INTEGRATOR_SPONSORED_DISCOUNT';

    final public const OVERSIZE_SURCHARGE = 'OVERSIZE_SURCHARGE';

    final public const CONGESTION_CHARGE = 'CONGESTION_CHARGE';

    final public const RESIDENTIAL_SURCHARGE = 'RESIDENTIAL_SURCHARGE';

    final public const ADDITIONAL_SURCHARGE = 'ADDITIONAL_SURCHARGE';

    final public const SURCHARGE = 'SURCHARGE';

    final public const REBATE = 'REBATE';

    public function __construct(private readonly string $value)
    {
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues() : array
    {
        return [
            self::BASE_RATE,
            self::TRANSACTION_FEE,
            self::ADULT_SIGNATURE_CONFIRMATION,
            self::SIGNATURE_CONFIRMATION,
            self::NO_CONFIRMATION,
            self::WAIVE_SIGNATURE,
            self::IMPLIED_LIABILITY,
            self::HIDDEN_POSTAGE,
            self::DECLARED_VALUE,
            self::SUNDAY_HOLIDAY_DELIVERY,
            self::DELIVERY_CONFIRMATION,
            self::IMPORT_DUTY_CHARGE,
            self::VAT,
            self::NO_SATURDAY_DELIVERY,
            self::INSURANCE,
            self::COD,
            self::FUEL_SURCHARGE,
            self::INSPECTION_CHARGE,
            self::DELIVERY_AREA_SURCHARGE,
            self::WAYBILL_CHARGE,
            self::AMAZON_SPONSORED_DISCOUNT,
            self::INTEGRATOR_SPONSORED_DISCOUNT,
            self::OVERSIZE_SURCHARGE,
            self::CONGESTION_CHARGE,
            self::RESIDENTIAL_SURCHARGE,
            self::ADDITIONAL_SURCHARGE,
            self::SURCHARGE,
            self::REBATE,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
