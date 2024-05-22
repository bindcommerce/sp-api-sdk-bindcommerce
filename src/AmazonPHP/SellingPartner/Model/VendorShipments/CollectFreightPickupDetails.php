<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorShipments;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
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
class CollectFreightPickupDetails implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CollectFreightPickupDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'requested_pick_up' => '\DateTimeInterface',
        'scheduled_pick_up' => '\DateTimeInterface',
        'carrier_assignment_date' => '\DateTimeInterface',
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
        'requested_pick_up' => 'date-time',
        'scheduled_pick_up' => 'date-time',
        'carrier_assignment_date' => 'date-time',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'requested_pick_up' => 'requestedPickUp',
        'scheduled_pick_up' => 'scheduledPickUp',
        'carrier_assignment_date' => 'carrierAssignmentDate',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'requested_pick_up' => 'setRequestedPickUp',
        'scheduled_pick_up' => 'setScheduledPickUp',
        'carrier_assignment_date' => 'setCarrierAssignmentDate',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'requested_pick_up' => 'getRequestedPickUp',
        'scheduled_pick_up' => 'getScheduledPickUp',
        'carrier_assignment_date' => 'getCarrierAssignmentDate',
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
        $this->container['requested_pick_up'] = $data['requested_pick_up'] ?? null;
        $this->container['scheduled_pick_up'] = $data['scheduled_pick_up'] ?? null;
        $this->container['carrier_assignment_date'] = $data['carrier_assignment_date'] ?? null;
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
    }

    /**
     * Gets requested_pick_up.
     */
    public function getRequestedPickUp() : ?\DateTimeInterface
    {
        return $this->container['requested_pick_up'];
    }

    /**
     * Sets requested_pick_up.
     *
     * @param null|\DateTimeInterface $requested_pick_up date on which the items can be picked up from vendor warehouse by Buyer used for WePay/Collect vendors
     */
    public function setRequestedPickUp(?\DateTimeInterface $requested_pick_up) : self
    {
        $this->container['requested_pick_up'] = $requested_pick_up;

        return $this;
    }

    /**
     * Gets scheduled_pick_up.
     */
    public function getScheduledPickUp() : ?\DateTimeInterface
    {
        return $this->container['scheduled_pick_up'];
    }

    /**
     * Sets scheduled_pick_up.
     *
     * @param null|\DateTimeInterface $scheduled_pick_up date on which the items are scheduled to be picked from vendor warehouse by Buyer used for WePay/Collect vendors
     */
    public function setScheduledPickUp(?\DateTimeInterface $scheduled_pick_up) : self
    {
        $this->container['scheduled_pick_up'] = $scheduled_pick_up;

        return $this;
    }

    /**
     * Gets carrier_assignment_date.
     */
    public function getCarrierAssignmentDate() : ?\DateTimeInterface
    {
        return $this->container['carrier_assignment_date'];
    }

    /**
     * Sets carrier_assignment_date.
     *
     * @param null|\DateTimeInterface $carrier_assignment_date date on which the carrier is being scheduled to pickup items from vendor warehouse by Byer used for WePay/Collect vendors
     */
    public function setCarrierAssignmentDate(?\DateTimeInterface $carrier_assignment_date) : self
    {
        $this->container['carrier_assignment_date'] = $carrier_assignment_date;

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
