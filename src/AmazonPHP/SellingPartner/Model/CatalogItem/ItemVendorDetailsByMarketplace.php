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
class ItemVendorDetailsByMarketplace implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const REPLENISHMENT_CATEGORY_ALLOCATED = 'ALLOCATED';

    final public const REPLENISHMENT_CATEGORY_BASIC_REPLENISHMENT = 'BASIC_REPLENISHMENT';

    final public const REPLENISHMENT_CATEGORY_IN_SEASON = 'IN_SEASON';

    final public const REPLENISHMENT_CATEGORY_LIMITED_REPLENISHMENT = 'LIMITED_REPLENISHMENT';

    final public const REPLENISHMENT_CATEGORY_MANUFACTURER_OUT_OF_STOCK = 'MANUFACTURER_OUT_OF_STOCK';

    final public const REPLENISHMENT_CATEGORY_NEW_PRODUCT = 'NEW_PRODUCT';

    final public const REPLENISHMENT_CATEGORY_NON_REPLENISHABLE = 'NON_REPLENISHABLE';

    final public const REPLENISHMENT_CATEGORY_NON_STOCKUPABLE = 'NON_STOCKUPABLE';

    final public const REPLENISHMENT_CATEGORY_OBSOLETE = 'OBSOLETE';

    final public const REPLENISHMENT_CATEGORY_PLANNED_REPLENISHMENT = 'PLANNED_REPLENISHMENT';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemVendorDetailsByMarketplace';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'marketplace_id' => 'string',
        'brand_code' => 'string',
        'manufacturer_code' => 'string',
        'manufacturer_code_parent' => 'string',
        'product_category' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemVendorDetailsCategory',
        'product_group' => 'string',
        'product_subcategory' => '\AmazonPHP\SellingPartner\Model\CatalogItem\ItemVendorDetailsCategory',
        'replenishment_category' => 'string',
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
        'marketplace_id' => null,
        'brand_code' => null,
        'manufacturer_code' => null,
        'manufacturer_code_parent' => null,
        'product_category' => null,
        'product_group' => null,
        'product_subcategory' => null,
        'replenishment_category' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'marketplace_id' => 'marketplaceId',
        'brand_code' => 'brandCode',
        'manufacturer_code' => 'manufacturerCode',
        'manufacturer_code_parent' => 'manufacturerCodeParent',
        'product_category' => 'productCategory',
        'product_group' => 'productGroup',
        'product_subcategory' => 'productSubcategory',
        'replenishment_category' => 'replenishmentCategory',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'marketplace_id' => 'setMarketplaceId',
        'brand_code' => 'setBrandCode',
        'manufacturer_code' => 'setManufacturerCode',
        'manufacturer_code_parent' => 'setManufacturerCodeParent',
        'product_category' => 'setProductCategory',
        'product_group' => 'setProductGroup',
        'product_subcategory' => 'setProductSubcategory',
        'replenishment_category' => 'setReplenishmentCategory',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'marketplace_id' => 'getMarketplaceId',
        'brand_code' => 'getBrandCode',
        'manufacturer_code' => 'getManufacturerCode',
        'manufacturer_code_parent' => 'getManufacturerCodeParent',
        'product_category' => 'getProductCategory',
        'product_group' => 'getProductGroup',
        'product_subcategory' => 'getProductSubcategory',
        'replenishment_category' => 'getReplenishmentCategory',
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
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['brand_code'] = $data['brand_code'] ?? null;
        $this->container['manufacturer_code'] = $data['manufacturer_code'] ?? null;
        $this->container['manufacturer_code_parent'] = $data['manufacturer_code_parent'] ?? null;
        $this->container['product_category'] = $data['product_category'] ?? null;
        $this->container['product_group'] = $data['product_group'] ?? null;
        $this->container['product_subcategory'] = $data['product_subcategory'] ?? null;
        $this->container['replenishment_category'] = $data['replenishment_category'] ?? null;
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
    public function getReplenishmentCategoryAllowableValues() : array
    {
        return [
            self::REPLENISHMENT_CATEGORY_ALLOCATED,
            self::REPLENISHMENT_CATEGORY_BASIC_REPLENISHMENT,
            self::REPLENISHMENT_CATEGORY_IN_SEASON,
            self::REPLENISHMENT_CATEGORY_LIMITED_REPLENISHMENT,
            self::REPLENISHMENT_CATEGORY_MANUFACTURER_OUT_OF_STOCK,
            self::REPLENISHMENT_CATEGORY_NEW_PRODUCT,
            self::REPLENISHMENT_CATEGORY_NON_REPLENISHABLE,
            self::REPLENISHMENT_CATEGORY_NON_STOCKUPABLE,
            self::REPLENISHMENT_CATEGORY_OBSOLETE,
            self::REPLENISHMENT_CATEGORY_PLANNED_REPLENISHMENT,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['marketplace_id'] === null) {
            throw new AssertionException("'marketplace_id' can't be null");
        }

        if ($this->container['product_category'] !== null) {
            $this->container['product_category']->validate();
        }

        if ($this->container['product_subcategory'] !== null) {
            $this->container['product_subcategory']->validate();
        }

        $allowedValues = $this->getReplenishmentCategoryAllowableValues();

        if (null !== $this->container['replenishment_category'] && !\in_array($this->container['replenishment_category'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'replenishment_category', must be one of '%s'",
                    $this->container['replenishment_category'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets marketplace_id.
     */
    public function getMarketplaceId() : string
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id amazon marketplace identifier
     */
    public function setMarketplaceId(string $marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets brand_code.
     */
    public function getBrandCode() : ?string
    {
        return $this->container['brand_code'];
    }

    /**
     * Sets brand_code.
     *
     * @param null|string $brand_code brand code associated with an Amazon catalog item
     */
    public function setBrandCode(?string $brand_code) : self
    {
        $this->container['brand_code'] = $brand_code;

        return $this;
    }

    /**
     * Gets manufacturer_code.
     */
    public function getManufacturerCode() : ?string
    {
        return $this->container['manufacturer_code'];
    }

    /**
     * Sets manufacturer_code.
     *
     * @param null|string $manufacturer_code manufacturer code associated with an Amazon catalog item
     */
    public function setManufacturerCode(?string $manufacturer_code) : self
    {
        $this->container['manufacturer_code'] = $manufacturer_code;

        return $this;
    }

    /**
     * Gets manufacturer_code_parent.
     */
    public function getManufacturerCodeParent() : ?string
    {
        return $this->container['manufacturer_code_parent'];
    }

    /**
     * Sets manufacturer_code_parent.
     *
     * @param null|string $manufacturer_code_parent parent vendor code of the manufacturer code
     */
    public function setManufacturerCodeParent(?string $manufacturer_code_parent) : self
    {
        $this->container['manufacturer_code_parent'] = $manufacturer_code_parent;

        return $this;
    }

    /**
     * Gets product_category.
     */
    public function getProductCategory() : ?ItemVendorDetailsCategory
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category.
     *
     * @param null|ItemVendorDetailsCategory $product_category product_category
     */
    public function setProductCategory(?ItemVendorDetailsCategory $product_category) : self
    {
        $this->container['product_category'] = $product_category;

        return $this;
    }

    /**
     * Gets product_group.
     */
    public function getProductGroup() : ?string
    {
        return $this->container['product_group'];
    }

    /**
     * Sets product_group.
     *
     * @param null|string $product_group product group associated with an Amazon catalog item
     */
    public function setProductGroup(?string $product_group) : self
    {
        $this->container['product_group'] = $product_group;

        return $this;
    }

    /**
     * Gets product_subcategory.
     */
    public function getProductSubcategory() : ?ItemVendorDetailsCategory
    {
        return $this->container['product_subcategory'];
    }

    /**
     * Sets product_subcategory.
     *
     * @param null|ItemVendorDetailsCategory $product_subcategory product_subcategory
     */
    public function setProductSubcategory(?ItemVendorDetailsCategory $product_subcategory) : self
    {
        $this->container['product_subcategory'] = $product_subcategory;

        return $this;
    }

    /**
     * Gets replenishment_category.
     */
    public function getReplenishmentCategory() : ?string
    {
        return $this->container['replenishment_category'];
    }

    /**
     * Sets replenishment_category.
     *
     * @param null|string $replenishment_category replenishment category associated with an Amazon catalog item
     */
    public function setReplenishmentCategory(?string $replenishment_category) : self
    {
        $this->container['replenishment_category'] = $replenishment_category;

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
