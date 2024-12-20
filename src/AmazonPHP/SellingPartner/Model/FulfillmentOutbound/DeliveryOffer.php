<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeliveryOffer implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'DeliveryOffer';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'expires_at' => '\DateTimeInterface',
        'date_range' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DateRange',
        'policy' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\DeliveryPolicy',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'expires_at' => 'date-time',
        'date_range' => null,
        'policy' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'expires_at' => 'expiresAt',
        'date_range' => 'dateRange',
        'policy' => 'policy',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'expires_at' => 'setExpiresAt',
        'date_range' => 'setDateRange',
        'policy' => 'setPolicy',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'expires_at' => 'getExpiresAt',
        'date_range' => 'getDateRange',
        'policy' => 'getPolicy',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['expires_at'] = $data['expires_at'] ?? null;
        $this->container['date_range'] = $data['date_range'] ?? null;
        $this->container['policy'] = $data['policy'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['date_range'] !== null) {
            $this->container['date_range']->validate();
        }

        if ($this->container['policy'] !== null) {
            $this->container['policy']->validate();
        }
    }

    /**
     * Gets expires_at.
     */
    public function getExpiresAt() : ?\DateTimeInterface
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at.
     *
     * @param null|\DateTimeInterface $expires_at Date timestamp
     */
    public function setExpiresAt(?\DateTimeInterface $expires_at) : self
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets date_range.
     */
    public function getDateRange() : ?DateRange
    {
        return $this->container['date_range'];
    }

    /**
     * Sets date_range.
     *
     * @param null|DateRange $date_range date_range
     */
    public function setDateRange(?DateRange $date_range) : self
    {
        $this->container['date_range'] = $date_range;

        return $this;
    }

    /**
     * Gets policy.
     */
    public function getPolicy() : ?DeliveryPolicy
    {
        return $this->container['policy'];
    }

    /**
     * Sets policy.
     *
     * @param null|DeliveryPolicy $policy policy
     */
    public function setPolicy(?DeliveryPolicy $policy) : self
    {
        $this->container['policy'] = $policy;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}