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
class PackedQuantity implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const UNIT_OF_MEASURE_CASES = 'Cases';

    final public const UNIT_OF_MEASURE_EACHES = 'Eaches';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PackedQuantity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'amount' => 'int',
        'unit_of_measure' => 'string',
        'unit_size' => 'int',
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
        'amount' => null,
        'unit_of_measure' => null,
        'unit_size' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'amount' => 'amount',
        'unit_of_measure' => 'unitOfMeasure',
        'unit_size' => 'unitSize',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'amount' => 'setAmount',
        'unit_of_measure' => 'setUnitOfMeasure',
        'unit_size' => 'setUnitSize',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'amount' => 'getAmount',
        'unit_of_measure' => 'getUnitOfMeasure',
        'unit_size' => 'getUnitSize',
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['unit_of_measure'] = $data['unit_of_measure'] ?? null;
        $this->container['unit_size'] = $data['unit_size'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getUnitOfMeasureAllowableValues() : array
    {
        return [
            self::UNIT_OF_MEASURE_CASES,
            self::UNIT_OF_MEASURE_EACHES,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['amount'] === null) {
            throw new AssertionException("'amount' can't be null");
        }

        if ($this->container['unit_of_measure'] === null) {
            throw new AssertionException("'unit_of_measure' can't be null");
        }

        $allowedValues = $this->getUnitOfMeasureAllowableValues();

        if (null !== $this->container['unit_of_measure'] && !\in_array($this->container['unit_of_measure'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'unit_of_measure', must be one of '%s'",
                    $this->container['unit_of_measure'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets amount.
     */
    public function getAmount() : int
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount.
     *
     * @param int $amount Amount of units shipped for a specific item at a shipment level. If the item is present only in certain cartons or pallets within the shipment, please provide this at the appropriate carton or pallet level.
     */
    public function setAmount(int $amount) : self
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets unit_of_measure.
     */
    public function getUnitOfMeasure() : string
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure.
     *
     * @param string $unit_of_measure unit of measure for the shipped quantity
     */
    public function setUnitOfMeasure(string $unit_of_measure) : self
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

        return $this;
    }

    /**
     * Gets unit_size.
     */
    public function getUnitSize() : ?int
    {
        return $this->container['unit_size'];
    }

    /**
     * Sets unit_size.
     *
     * @param null|int $unit_size The case size, in the event that we ordered using cases. Otherwise, 1.
     */
    public function setUnitSize(?int $unit_size) : self
    {
        $this->container['unit_size'] = $unit_size;

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
