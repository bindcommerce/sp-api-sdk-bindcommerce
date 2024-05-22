<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Shipping;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.   **Note:** If you are new to the Amazon Shipping API, refer to the latest version of <a href=\"https://developer-docs.amazon.com/amazon-shipping/docs/shipping-api-v2-reference\">Amazon Shipping API (v2)</a> on the <a href=\"https://developer-docs.amazon.com/amazon-shipping/\">Amazon Shipping Developer Documentation</a> site.
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
class CreateShipmentRequest implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'CreateShipmentRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'client_reference_id' => 'string',
        'ship_to' => '\AmazonPHP\SellingPartner\Model\Shipping\Address',
        'ship_from' => '\AmazonPHP\SellingPartner\Model\Shipping\Address',
        'containers' => '\AmazonPHP\SellingPartner\Model\Shipping\Container[]',
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
        'client_reference_id' => null,
        'ship_to' => null,
        'ship_from' => null,
        'containers' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'client_reference_id' => 'clientReferenceId',
        'ship_to' => 'shipTo',
        'ship_from' => 'shipFrom',
        'containers' => 'containers',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'client_reference_id' => 'setClientReferenceId',
        'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'containers' => 'setContainers',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'client_reference_id' => 'getClientReferenceId',
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'containers' => 'getContainers',
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
        $this->container['client_reference_id'] = $data['client_reference_id'] ?? null;
        $this->container['ship_to'] = $data['ship_to'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['containers'] = $data['containers'] ?? null;
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
        if ($this->container['client_reference_id'] === null) {
            throw new AssertionException("'client_reference_id' can't be null");
        }

        if ((\mb_strlen((string) $this->container['client_reference_id']) > 40)) {
            throw new AssertionException("invalid value for 'client_reference_id', the character length must be smaller than or equal to 40.");
        }

        if ($this->container['ship_to'] === null) {
            throw new AssertionException("'ship_to' can't be null");
        }

        $this->container['ship_to']->validate();

        if ($this->container['ship_from'] === null) {
            throw new AssertionException("'ship_from' can't be null");
        }

        $this->container['ship_from']->validate();

        if ($this->container['containers'] === null) {
            throw new AssertionException("'containers' can't be null");
        }
    }

    /**
     * Gets client_reference_id.
     */
    public function getClientReferenceId() : string
    {
        return $this->container['client_reference_id'];
    }

    /**
     * Sets client_reference_id.
     *
     * @param string $client_reference_id client reference id
     */
    public function setClientReferenceId(string $client_reference_id) : self
    {
        $this->container['client_reference_id'] = $client_reference_id;

        return $this;
    }

    /**
     * Gets ship_to.
     */
    public function getShipTo() : Address
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to.
     *
     * @param Address $ship_to ship_to
     */
    public function setShipTo(Address $ship_to) : self
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_from.
     */
    public function getShipFrom() : Address
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from.
     *
     * @param Address $ship_from ship_from
     */
    public function setShipFrom(Address $ship_from) : self
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets containers.
     *
     * @return \AmazonPHP\SellingPartner\Model\Shipping\Container[]
     */
    public function getContainers() : array
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers.
     *
     * @param \AmazonPHP\SellingPartner\Model\Shipping\Container[] $containers a list of container
     */
    public function setContainers(array $containers) : self
    {
        $this->container['containers'] = $containers;

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
