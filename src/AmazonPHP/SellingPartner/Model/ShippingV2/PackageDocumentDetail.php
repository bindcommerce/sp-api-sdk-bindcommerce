<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ShippingV2;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Amazon Shipping API.
 *
 * The Amazon Shipping API is designed to support outbound shipping use cases both for orders originating on Amazon-owned marketplaces as well as external channels/marketplaces. With these APIs, you can request shipping rates, create shipments, cancel shipments, and track shipments.
 *
 * The version of the OpenAPI document: v2
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PackageDocumentDetail implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PackageDocumentDetail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'package_client_reference_id' => 'string',
        'package_documents' => '\AmazonPHP\SellingPartner\Model\ShippingV2\PackageDocument[]',
        'tracking_id' => 'string',
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
        'package_client_reference_id' => null,
        'package_documents' => null,
        'tracking_id' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'package_client_reference_id' => 'packageClientReferenceId',
        'package_documents' => 'packageDocuments',
        'tracking_id' => 'trackingId',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'package_client_reference_id' => 'setPackageClientReferenceId',
        'package_documents' => 'setPackageDocuments',
        'tracking_id' => 'setTrackingId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'package_client_reference_id' => 'getPackageClientReferenceId',
        'package_documents' => 'getPackageDocuments',
        'tracking_id' => 'getTrackingId',
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
        $this->container['package_client_reference_id'] = $data['package_client_reference_id'] ?? null;
        $this->container['package_documents'] = $data['package_documents'] ?? null;
        $this->container['tracking_id'] = $data['tracking_id'] ?? null;
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
        if ($this->container['package_client_reference_id'] === null) {
            throw new AssertionException("'package_client_reference_id' can't be null");
        }

        if ($this->container['package_documents'] === null) {
            throw new AssertionException("'package_documents' can't be null");
        }
    }

    /**
     * Gets package_client_reference_id.
     */
    public function getPackageClientReferenceId() : string
    {
        return $this->container['package_client_reference_id'];
    }

    /**
     * Sets package_client_reference_id.
     *
     * @param string $package_client_reference_id A client provided unique identifier for a package being shipped. This value should be saved by the client to pass as a parameter to the getShipmentDocuments operation.
     */
    public function setPackageClientReferenceId(string $package_client_reference_id) : self
    {
        $this->container['package_client_reference_id'] = $package_client_reference_id;

        return $this;
    }

    /**
     * Gets package_documents.
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\PackageDocument[]
     */
    public function getPackageDocuments() : array
    {
        return $this->container['package_documents'];
    }

    /**
     * Sets package_documents.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\PackageDocument[] $package_documents a list of documents related to a package
     */
    public function setPackageDocuments(array $package_documents) : self
    {
        $this->container['package_documents'] = $package_documents;

        return $this;
    }

    /**
     * Gets tracking_id.
     */
    public function getTrackingId() : ?string
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id.
     *
     * @param null|string $tracking_id the carrier generated identifier for a package in a purchased shipment
     */
    public function setTrackingId(?string $tracking_id) : self
    {
        $this->container['tracking_id'] = $tracking_id;

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
