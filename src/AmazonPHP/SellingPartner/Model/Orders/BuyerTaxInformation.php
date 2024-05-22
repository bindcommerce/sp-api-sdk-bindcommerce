<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API supports orders that are two years old or less. Orders more than two years old will not show in the API response.  **Note:** The Orders API supports orders from 2016 and after for the JP, AU, and SG marketplaces.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BuyerTaxInformation implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'BuyerTaxInformation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'buyer_legal_company_name' => 'string',
        'buyer_business_address' => 'string',
        'buyer_tax_registration_id' => 'string',
        'buyer_tax_office' => 'string',
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
        'buyer_legal_company_name' => null,
        'buyer_business_address' => null,
        'buyer_tax_registration_id' => null,
        'buyer_tax_office' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'buyer_legal_company_name' => 'BuyerLegalCompanyName',
        'buyer_business_address' => 'BuyerBusinessAddress',
        'buyer_tax_registration_id' => 'BuyerTaxRegistrationId',
        'buyer_tax_office' => 'BuyerTaxOffice',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'buyer_legal_company_name' => 'setBuyerLegalCompanyName',
        'buyer_business_address' => 'setBuyerBusinessAddress',
        'buyer_tax_registration_id' => 'setBuyerTaxRegistrationId',
        'buyer_tax_office' => 'setBuyerTaxOffice',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'buyer_legal_company_name' => 'getBuyerLegalCompanyName',
        'buyer_business_address' => 'getBuyerBusinessAddress',
        'buyer_tax_registration_id' => 'getBuyerTaxRegistrationId',
        'buyer_tax_office' => 'getBuyerTaxOffice',
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
        $this->container['buyer_legal_company_name'] = $data['buyer_legal_company_name'] ?? null;
        $this->container['buyer_business_address'] = $data['buyer_business_address'] ?? null;
        $this->container['buyer_tax_registration_id'] = $data['buyer_tax_registration_id'] ?? null;
        $this->container['buyer_tax_office'] = $data['buyer_tax_office'] ?? null;
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
     * Gets buyer_legal_company_name.
     */
    public function getBuyerLegalCompanyName() : ?string
    {
        return $this->container['buyer_legal_company_name'];
    }

    /**
     * Sets buyer_legal_company_name.
     *
     * @param null|string $buyer_legal_company_name business buyer's company legal name
     */
    public function setBuyerLegalCompanyName(?string $buyer_legal_company_name) : self
    {
        $this->container['buyer_legal_company_name'] = $buyer_legal_company_name;

        return $this;
    }

    /**
     * Gets buyer_business_address.
     */
    public function getBuyerBusinessAddress() : ?string
    {
        return $this->container['buyer_business_address'];
    }

    /**
     * Sets buyer_business_address.
     *
     * @param null|string $buyer_business_address business buyer's address
     */
    public function setBuyerBusinessAddress(?string $buyer_business_address) : self
    {
        $this->container['buyer_business_address'] = $buyer_business_address;

        return $this;
    }

    /**
     * Gets buyer_tax_registration_id.
     */
    public function getBuyerTaxRegistrationId() : ?string
    {
        return $this->container['buyer_tax_registration_id'];
    }

    /**
     * Sets buyer_tax_registration_id.
     *
     * @param null|string $buyer_tax_registration_id business buyer's tax registration ID
     */
    public function setBuyerTaxRegistrationId(?string $buyer_tax_registration_id) : self
    {
        $this->container['buyer_tax_registration_id'] = $buyer_tax_registration_id;

        return $this;
    }

    /**
     * Gets buyer_tax_office.
     */
    public function getBuyerTaxOffice() : ?string
    {
        return $this->container['buyer_tax_office'];
    }

    /**
     * Sets buyer_tax_office.
     *
     * @param null|string $buyer_tax_office business buyer's tax office
     */
    public function setBuyerTaxOffice(?string $buyer_tax_office) : self
    {
        $this->container['buyer_tax_office'] = $buyer_tax_office;

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
