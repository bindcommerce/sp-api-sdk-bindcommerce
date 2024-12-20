<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\CatalogItem;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Catalog Items v2022-04-01.
 *
 * The Selling Partner API for Catalog Items provides programmatic access to information about items in the Amazon catalog.  For more information, refer to the [Catalog Items API Use Case Guide](doc:catalog-items-api-v2022-04-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2022-04-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemRelationship implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const TYPE_VARIATION = 'VARIATION';

    final public const TYPE_PACKAGE_HIERARCHY = 'PACKAGE_HIERARCHY';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemRelationship';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'child_asins' => 'string[]',
        'parent_asins' => 'string[]',
        'variation_theme' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemVariationTheme',
        'type' => 'string',
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
        'child_asins' => null,
        'parent_asins' => null,
        'variation_theme' => null,
        'type' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'child_asins' => 'childAsins',
        'parent_asins' => 'parentAsins',
        'variation_theme' => 'variationTheme',
        'type' => 'type',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'child_asins' => 'setChildAsins',
        'parent_asins' => 'setParentAsins',
        'variation_theme' => 'setVariationTheme',
        'type' => 'setType',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'child_asins' => 'getChildAsins',
        'parent_asins' => 'getParentAsins',
        'variation_theme' => 'getVariationTheme',
        'type' => 'getType',
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
        $this->container['child_asins'] = $data['child_asins'] ?? null;
        $this->container['parent_asins'] = $data['parent_asins'] ?? null;
        $this->container['variation_theme'] = $data['variation_theme'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
    public function getTypeAllowableValues() : array
    {
        return [
            self::TYPE_VARIATION,
            self::TYPE_PACKAGE_HIERARCHY,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['variation_theme'] !== null) {
            $this->container['variation_theme']->validate();
        }

        if ($this->container['type'] === null) {
            throw new AssertionException("'type' can't be null");
        }

        $allowedValues = $this->getTypeAllowableValues();

        if (null !== $this->container['type'] && !\in_array($this->container['type'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'type', must be one of '%s'",
                    $this->container['type'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets child_asins.
     *
     * @return null|string[]
     */
    public function getChildAsins() : ?array
    {
        return $this->container['child_asins'];
    }

    /**
     * Sets child_asins.
     *
     * @param null|string[] $child_asins identifiers (ASINs) of the related items that are children of this item
     */
    public function setChildAsins(?array $child_asins) : self
    {
        $this->container['child_asins'] = $child_asins;

        return $this;
    }

    /**
     * Gets parent_asins.
     *
     * @return null|string[]
     */
    public function getParentAsins() : ?array
    {
        return $this->container['parent_asins'];
    }

    /**
     * Sets parent_asins.
     *
     * @param null|string[] $parent_asins identifiers (ASINs) of the related items that are parents of this item
     */
    public function setParentAsins(?array $parent_asins) : self
    {
        $this->container['parent_asins'] = $parent_asins;

        return $this;
    }

    /**
     * Gets variation_theme.
     */
    public function getVariationTheme() : ?ItemVariationTheme
    {
        return $this->container['variation_theme'];
    }

    /**
     * Sets variation_theme.
     *
     * @param null|ItemVariationTheme $variation_theme variation_theme
     */
    public function setVariationTheme(?ItemVariationTheme $variation_theme) : self
    {
        $this->container['variation_theme'] = $variation_theme;

        return $this;
    }

    /**
     * Gets type.
     */
    public function getType() : string
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param string $type type of relationship
     */
    public function setType(string $type) : self
    {
        $this->container['type'] = $type;

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
