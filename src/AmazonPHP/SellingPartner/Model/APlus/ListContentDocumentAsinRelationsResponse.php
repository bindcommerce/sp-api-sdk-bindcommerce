<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\APlus;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for A+ Content Management.
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * The version of the OpenAPI document: 2020-11-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListContentDocumentAsinRelationsResponse implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ListContentDocumentAsinRelationsResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'warnings' => '\AmazonPHP\SellingPartner\Model\APlus\Error[]',
        'next_page_token' => 'string',
        'asin_metadata_set' => '\AmazonPHP\SellingPartner\Model\APlus\AsinMetadata[]',
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
        'warnings' => null,
        'next_page_token' => null,
        'asin_metadata_set' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'warnings' => 'warnings',
        'next_page_token' => 'nextPageToken',
        'asin_metadata_set' => 'asinMetadataSet',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'warnings' => 'setWarnings',
        'next_page_token' => 'setNextPageToken',
        'asin_metadata_set' => 'setAsinMetadataSet',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'warnings' => 'getWarnings',
        'next_page_token' => 'getNextPageToken',
        'asin_metadata_set' => 'getAsinMetadataSet',
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
        $this->container['warnings'] = $data['warnings'] ?? null;
        $this->container['next_page_token'] = $data['next_page_token'] ?? null;
        $this->container['asin_metadata_set'] = $data['asin_metadata_set'] ?? null;
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
        if (null !== $this->container['next_page_token'] && (\mb_strlen((string) $this->container['next_page_token']) < 1)) {
            throw new AssertionException("invalid value for 'next_page_token', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['asin_metadata_set'] === null) {
            throw new AssertionException("'asin_metadata_set' can't be null");
        }
    }

    /**
     * Gets warnings.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\APlus\Error[]
     */
    public function getWarnings() : ?array
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\APlus\Error[] $warnings a set of messages to the user, such as warnings or comments
     */
    public function setWarnings(?array $warnings) : self
    {
        $this->container['warnings'] = $warnings;

        return $this;
    }

    /**
     * Gets next_page_token.
     */
    public function getNextPageToken() : ?string
    {
        return $this->container['next_page_token'];
    }

    /**
     * Sets next_page_token.
     *
     * @param null|string $next_page_token A page token that is returned when the results of the call exceed the page size. To get another page of results, call the operation again, passing in this value with the pageToken parameter.
     */
    public function setNextPageToken(?string $next_page_token) : self
    {
        $this->container['next_page_token'] = $next_page_token;

        return $this;
    }

    /**
     * Gets asin_metadata_set.
     *
     * @return \AmazonPHP\SellingPartner\Model\APlus\AsinMetadata[]
     */
    public function getAsinMetadataSet() : array
    {
        return $this->container['asin_metadata_set'];
    }

    /**
     * Sets asin_metadata_set.
     *
     * @param \AmazonPHP\SellingPartner\Model\APlus\AsinMetadata[] $asin_metadata_set the set of ASIN metadata
     */
    public function setAsinMetadataSet(array $asin_metadata_set) : self
    {
        $this->container['asin_metadata_set'] = $asin_metadata_set;

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
