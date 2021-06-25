<?php declare(strict_types=1);
/**
 * ContentDocument.
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
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\APlus;

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
class ContentDocument implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ContentDocument';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'name' => 'string',
        'content_type' => '\AmazonPHP\SellingPartner\Model\APlus\ContentType',
        'content_sub_type' => 'string',
        'locale' => 'string',
        'content_module_list' => '\AmazonPHP\SellingPartner\Model\APlus\ContentModule[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'name' => null,
        'content_type' => null,
        'content_sub_type' => null,
        'locale' => null,
        'content_module_list' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'content_type' => 'contentType',
        'content_sub_type' => 'contentSubType',
        'locale' => 'locale',
        'content_module_list' => 'contentModuleList',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'content_type' => 'setContentType',
        'content_sub_type' => 'setContentSubType',
        'locale' => 'setLocale',
        'content_module_list' => 'setContentModuleList',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'content_type' => 'getContentType',
        'content_sub_type' => 'getContentSubType',
        'locale' => 'getLocale',
        'content_module_list' => 'getContentModuleList',
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['content_type'] = $data['content_type'] ?? null;
        $this->container['content_sub_type'] = $data['content_sub_type'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['content_module_list'] = $data['content_module_list'] ?? null;
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
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }

        if ((\mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ((\mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['content_type'] === null) {
            $invalidProperties[] = "'content_type' can't be null";
        }

        if (null !== $this->container['content_sub_type'] && (\mb_strlen($this->container['content_sub_type']) < 1)) {
            $invalidProperties[] = "invalid value for 'content_sub_type', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }

        if ((\mb_strlen($this->container['locale']) < 5)) {
            $invalidProperties[] = "invalid value for 'locale', the character length must be bigger than or equal to 5.";
        }

        if ($this->container['content_module_list'] === null) {
            $invalidProperties[] = "'content_module_list' can't be null";
        }

        if ((\count($this->container['content_module_list']) > 100)) {
            $invalidProperties[] = "invalid value for 'content_module_list', number of items must be less than or equal to 100.";
        }

        if ((\count($this->container['content_module_list']) < 1)) {
            $invalidProperties[] = "invalid value for 'content_module_list', number of items must be greater than or equal to 1.";
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
     * Gets name.
     */
    public function getName() : string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name the A+ Content document name
     */
    public function setName(string $name) : self
    {
        if ((\mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContentDocument., must be smaller than or equal to 100.');
        }

        if ((\mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ContentDocument., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets content_type.
     */
    public function getContentType() : ContentType
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ContentType $content_type content_type
     */
    public function setContentType(ContentType $content_type) : self
    {
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets content_sub_type.
     */
    public function getContentSubType() : ?string
    {
        return $this->container['content_sub_type'];
    }

    /**
     * Sets content_sub_type.
     *
     * @param null|string $content_sub_type The A+ Content document subtype. This represents a special-purpose type of an A+ Content document. Not every A+ Content document type will have a subtype, and subtypes may change at any time.
     */
    public function setContentSubType(?string $content_sub_type) : self
    {
        if (null !== $content_sub_type && (\mb_strlen($content_sub_type) < 1)) {
            throw new \InvalidArgumentException('invalid length for $content_sub_type when calling ContentDocument., must be bigger than or equal to 1.');
        }

        $this->container['content_sub_type'] = $content_sub_type;

        return $this;
    }

    /**
     * Gets locale.
     */
    public function getLocale() : string
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale.
     *
     * @param string $locale The IETF language tag. This only supports the primary language subtag with one secondary language subtag. The secondary language subtag is almost always a regional designation. This does not support additional subtags beyond the primary and secondary subtags. **Pattern:** ^[a-z]{2,}-[A-Z0-9]{2,}$
     */
    public function setLocale(string $locale) : self
    {
        if ((\mb_strlen($locale) < 5)) {
            throw new \InvalidArgumentException('invalid length for $locale when calling ContentDocument., must be bigger than or equal to 5.');
        }

        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets content_module_list.
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\ContentModule[]
     */
    public function getContentModuleList() : array
    {
        return $this->container['content_module_list'];
    }

    /**
     * Sets content_module_list.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\ContentModule[] $content_module_list a list of A+ Content modules
     */
    public function setContentModuleList(array $content_module_list) : self
    {
        if ((\count($content_module_list) > 100)) {
            throw new \InvalidArgumentException('invalid value for $content_module_list when calling ContentDocument., number of items must be less than or equal to 100.');
        }

        if ((\count($content_module_list) < 1)) {
            throw new \InvalidArgumentException('invalid length for $content_module_list when calling ContentDocument., number of items must be greater than or equal to 1.');
        }
        $this->container['content_module_list'] = $content_module_list;

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
