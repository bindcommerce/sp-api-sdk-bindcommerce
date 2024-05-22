<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Services;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Recurrence implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Recurrence';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'end_time' => '\DateTimeInterface',
        'days_of_week' => '\AmazonPHP\SellingPartner\Model\Services\DayOfWeek[]',
        'days_of_month' => 'int[]',
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
        'end_time' => 'date-time',
        'days_of_week' => null,
        'days_of_month' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'end_time' => 'endTime',
        'days_of_week' => 'daysOfWeek',
        'days_of_month' => 'daysOfMonth',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'end_time' => 'setEndTime',
        'days_of_week' => 'setDaysOfWeek',
        'days_of_month' => 'setDaysOfMonth',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'end_time' => 'getEndTime',
        'days_of_week' => 'getDaysOfWeek',
        'days_of_month' => 'getDaysOfMonth',
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
        $this->container['end_time'] = $data['end_time'] ?? null;
        $this->container['days_of_week'] = $data['days_of_week'] ?? null;
        $this->container['days_of_month'] = $data['days_of_month'] ?? null;
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
        if ($this->container['end_time'] === null) {
            throw new AssertionException("'end_time' can't be null");
        }
    }

    /**
     * Gets end_time.
     */
    public function getEndTime() : \DateTimeInterface
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time.
     *
     * @param \DateTimeInterface $end_time end time of the recurrence
     */
    public function setEndTime(\DateTimeInterface $end_time) : self
    {
        $this->container['end_time'] = $end_time;

        return $this;
    }

    /**
     * Gets days_of_week.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Services\DayOfWeek[]
     */
    public function getDaysOfWeek() : ?array
    {
        return $this->container['days_of_week'];
    }

    /**
     * Sets days_of_week.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Services\DayOfWeek[] $days_of_week Days of the week when recurrence is valid. If the schedule is valid every Monday, input will only contain `MONDAY` in the list.
     */
    public function setDaysOfWeek(?array $days_of_week) : self
    {
        $this->container['days_of_week'] = $days_of_week;

        return $this;
    }

    /**
     * Gets days_of_month.
     *
     * @return null|int[]
     */
    public function getDaysOfMonth() : ?array
    {
        return $this->container['days_of_month'];
    }

    /**
     * Sets days_of_month.
     *
     * @param null|int[] $days_of_month days of the month when recurrence is valid
     */
    public function setDaysOfMonth(?array $days_of_month) : self
    {
        $this->container['days_of_month'] = $days_of_month;

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
