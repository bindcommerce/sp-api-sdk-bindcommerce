<?php declare(strict_types=1);
/**
 * TaxCollection.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\Orders;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TaxCollection implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const MODEL_MARKETPLACE_FACILITATOR = 'MarketplaceFacilitator';

    public const RESPONSIBLE_PARTY_AMAZON_SERVICES_INC = 'Amazon Services, Inc.';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'TaxCollection';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'model' => 'string',
        'responsible_party' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'model' => null,
        'responsible_party' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'model' => 'Model',
        'responsible_party' => 'ResponsibleParty',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'model' => 'setModel',
        'responsible_party' => 'setResponsibleParty',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'model' => 'getModel',
        'responsible_party' => 'getResponsibleParty',
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['model'] = $data['model'] ?? null;
        $this->container['responsible_party'] = $data['responsible_party'] ?? null;
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
    public function getModelAllowableValues() : array
    {
        return [
            self::MODEL_MARKETPLACE_FACILITATOR,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getResponsiblePartyAllowableValues() : array
    {
        return [
            self::RESPONSIBLE_PARTY_AMAZON_SERVICES_INC,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        $allowedValues = $this->getModelAllowableValues();

        if (null !== $this->container['model'] && !\in_array($this->container['model'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'model', must be one of '%s'",
                $this->container['model'],
                \implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResponsiblePartyAllowableValues();

        if (null !== $this->container['responsible_party'] && !\in_array($this->container['responsible_party'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'responsible_party', must be one of '%s'",
                $this->container['responsible_party'],
                \implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets model.
     */
    public function getModel() : ?string
    {
        return $this->container['model'];
    }

    /**
     * Sets model.
     *
     * @param null|string $model the tax collection model applied to the item
     */
    public function setModel(?string $model) : self
    {
        $allowedValues = $this->getModelAllowableValues();

        if (null !== $model && !\in_array($model, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'model', must be one of '%s'",
                    $model,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets responsible_party.
     */
    public function getResponsibleParty() : ?string
    {
        return $this->container['responsible_party'];
    }

    /**
     * Sets responsible_party.
     *
     * @param null|string $responsible_party the party responsible for withholding the taxes and remitting them to the taxing authority
     */
    public function setResponsibleParty(?string $responsible_party) : self
    {
        $allowedValues = $this->getResponsiblePartyAllowableValues();

        if (null !== $responsible_party && !\in_array($responsible_party, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'responsible_party', must be one of '%s'",
                    $responsible_party,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['responsible_party'] = $responsible_party;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
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
     *
     * @param int $offset Offset
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
