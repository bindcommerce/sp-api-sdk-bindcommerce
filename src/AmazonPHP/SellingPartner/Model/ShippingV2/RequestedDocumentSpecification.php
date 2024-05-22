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
class RequestedDocumentSpecification implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'RequestedDocumentSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'format' => '\AmazonPHP\SellingPartner\Model\ShippingV2\DocumentFormat',
        'size' => '\AmazonPHP\SellingPartner\Model\ShippingV2\DocumentSize',
        'dpi' => 'int',
        'page_layout' => 'string',
        'need_file_joining' => 'bool',
        'requested_document_types' => '\AmazonPHP\SellingPartner\Model\ShippingV2\DocumentType[]',
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
        'format' => null,
        'size' => null,
        'dpi' => null,
        'page_layout' => null,
        'need_file_joining' => null,
        'requested_document_types' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'format' => 'format',
        'size' => 'size',
        'dpi' => 'dpi',
        'page_layout' => 'pageLayout',
        'need_file_joining' => 'needFileJoining',
        'requested_document_types' => 'requestedDocumentTypes',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'format' => 'setFormat',
        'size' => 'setSize',
        'dpi' => 'setDpi',
        'page_layout' => 'setPageLayout',
        'need_file_joining' => 'setNeedFileJoining',
        'requested_document_types' => 'setRequestedDocumentTypes',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'format' => 'getFormat',
        'size' => 'getSize',
        'dpi' => 'getDpi',
        'page_layout' => 'getPageLayout',
        'need_file_joining' => 'getNeedFileJoining',
        'requested_document_types' => 'getRequestedDocumentTypes',
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
        $this->container['format'] = $data['format'] ?? null;
        $this->container['size'] = $data['size'] ?? null;
        $this->container['dpi'] = $data['dpi'] ?? null;
        $this->container['page_layout'] = $data['page_layout'] ?? null;
        $this->container['need_file_joining'] = $data['need_file_joining'] ?? null;
        $this->container['requested_document_types'] = $data['requested_document_types'] ?? null;
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
        if ($this->container['format'] === null) {
            throw new AssertionException("'format' can't be null");
        }

        if ($this->container['size'] === null) {
            throw new AssertionException("'size' can't be null");
        }

        $this->container['size']->validate();

        if ($this->container['need_file_joining'] === null) {
            throw new AssertionException("'need_file_joining' can't be null");
        }

        if ($this->container['requested_document_types'] === null) {
            throw new AssertionException("'requested_document_types' can't be null");
        }
    }

    /**
     * Gets format.
     */
    public function getFormat() : DocumentFormat
    {
        return $this->container['format'];
    }

    /**
     * Sets format.
     *
     * @param DocumentFormat $format format
     */
    public function setFormat(DocumentFormat $format) : self
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets size.
     */
    public function getSize() : DocumentSize
    {
        return $this->container['size'];
    }

    /**
     * Sets size.
     *
     * @param DocumentSize $size size
     */
    public function setSize(DocumentSize $size) : self
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets dpi.
     */
    public function getDpi() : ?int
    {
        return $this->container['dpi'];
    }

    /**
     * Sets dpi.
     *
     * @param null|int $dpi The dots per inch (DPI) value used in printing. This value represents a measure of the resolution of the document.
     */
    public function setDpi(?int $dpi) : self
    {
        $this->container['dpi'] = $dpi;

        return $this;
    }

    /**
     * Gets page_layout.
     */
    public function getPageLayout() : ?string
    {
        return $this->container['page_layout'];
    }

    /**
     * Sets page_layout.
     *
     * @param null|string $page_layout Indicates the position of the label on the paper. Should be the same value as returned in getRates response.
     */
    public function setPageLayout(?string $page_layout) : self
    {
        $this->container['page_layout'] = $page_layout;

        return $this;
    }

    /**
     * Gets need_file_joining.
     */
    public function getNeedFileJoining() : bool
    {
        return $this->container['need_file_joining'];
    }

    /**
     * Sets need_file_joining.
     *
     * @param bool $need_file_joining When true, files should be stitched together. Otherwise, files should be returned separately. Defaults to false.
     */
    public function setNeedFileJoining(bool $need_file_joining) : self
    {
        $this->container['need_file_joining'] = $need_file_joining;

        return $this;
    }

    /**
     * Gets requested_document_types.
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\DocumentType[]
     */
    public function getRequestedDocumentTypes() : array
    {
        return $this->container['requested_document_types'];
    }

    /**
     * Sets requested_document_types.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\DocumentType[] $requested_document_types a list of the document types requested
     */
    public function setRequestedDocumentTypes(array $requested_document_types) : self
    {
        $this->container['requested_document_types'] = $requested_document_types;

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
