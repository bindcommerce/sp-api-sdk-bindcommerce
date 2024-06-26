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
class AccessPointType
{
    /**
     * Possible values of this enum.
     */
    final public const HELIX = 'HELIX';

    final public const CAMPUS_LOCKER = 'CAMPUS_LOCKER';

    final public const OMNI_LOCKER = 'OMNI_LOCKER';

    final public const ODIN_LOCKER = 'ODIN_LOCKER';

    final public const DOBBY_LOCKER = 'DOBBY_LOCKER';

    final public const CORE_LOCKER = 'CORE_LOCKER';

    final public const _3_P = '3P';

    final public const CAMPUS_ROOM = 'CAMPUS_ROOM';

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
            self::HELIX,
            self::CAMPUS_LOCKER,
            self::OMNI_LOCKER,
            self::ODIN_LOCKER,
            self::DOBBY_LOCKER,
            self::CORE_LOCKER,
            self::_3_P,
            self::CAMPUS_ROOM,
        ];
    }

    public function toString() : string
    {
        return $this->value;
    }
}
