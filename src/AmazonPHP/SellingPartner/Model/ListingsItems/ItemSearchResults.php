<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ListingsItems;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Listings Items.
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API.  For more information, see the [Listings Items API Use Case Guide](https://developer-docs.amazon.com/sp-api/docs/listings-items-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemSearchResults implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemSearchResults';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'number_of_results' => 'int',
        'pagination' => '\AmazonPHP\SellingPartner\Model\ListingsItems\Pagination',
        'items' => '\AmazonPHP\SellingPartner\Model\ListingsItems\Item[]',
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
        'number_of_results' => null,
        'pagination' => null,
        'items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'number_of_results' => 'numberOfResults',
        'pagination' => 'pagination',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'number_of_results' => 'setNumberOfResults',
        'pagination' => 'setPagination',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'number_of_results' => 'getNumberOfResults',
        'pagination' => 'getPagination',
        'items' => 'getItems',
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
        $this->container['number_of_results'] = $data['number_of_results'] ?? null;
        $this->container['pagination'] = $data['pagination'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
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
        if ($this->container['number_of_results'] === null) {
            throw new AssertionException("'number_of_results' can't be null");
        }

        if ($this->container['pagination'] !== null) {
            $this->container['pagination']->validate();
        }

        if ($this->container['items'] === null) {
            throw new AssertionException("'items' can't be null");
        }
    }

    /**
     * Gets number_of_results.
     */
    public function getNumberOfResults() : int
    {
        return $this->container['number_of_results'];
    }

    /**
     * Sets number_of_results.
     *
     * @param int $number_of_results The total number of selling partner listings items found for the search criteria (only results up to the page count limit will be returned per request regardless of the number found).  Note: The maximum number of items (SKUs) that can be returned and paged through is 1000.
     */
    public function setNumberOfResults(int $number_of_results) : self
    {
        $this->container['number_of_results'] = $number_of_results;

        return $this;
    }

    /**
     * Gets pagination.
     */
    public function getPagination() : ?Pagination
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination.
     *
     * @param null|Pagination $pagination pagination
     */
    public function setPagination(?Pagination $pagination) : self
    {
        $this->container['pagination'] = $pagination;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \AmazonPHP\SellingPartner\Model\ListingsItems\Item[]
     */
    public function getItems() : array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \AmazonPHP\SellingPartner\Model\ListingsItems\Item[] $items a list of listings items
     */
    public function setItems(array $items) : self
    {
        $this->container['items'] = $items;

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
