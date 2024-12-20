<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ListingsRestrictions;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Listings Restrictions.
 *
 * The Selling Partner API for Listings Restrictions provides programmatic access to restrictions on Amazon catalog listings.  For more information, see the [Listings Restrictions API Use Case Guide](doc:listings-restrictions-api-v2021-08-01-use-case-guide).
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
class Reason implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const REASON_CODE_APPROVAL_REQUIRED = 'APPROVAL_REQUIRED';

    final public const REASON_CODE_ASIN_NOT_FOUND = 'ASIN_NOT_FOUND';

    final public const REASON_CODE_NOT_ELIGIBLE = 'NOT_ELIGIBLE';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Reason';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'message' => 'string',
        'reason_code' => 'string',
        'links' => '\AmazonPHP\SellingPartner\Model\ListingsRestrictions\Link[]',
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
        'message' => null,
        'reason_code' => null,
        'links' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'message' => 'message',
        'reason_code' => 'reasonCode',
        'links' => 'links',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'message' => 'setMessage',
        'reason_code' => 'setReasonCode',
        'links' => 'setLinks',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'message' => 'getMessage',
        'reason_code' => 'getReasonCode',
        'links' => 'getLinks',
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
        $this->container['message'] = $data['message'] ?? null;
        $this->container['reason_code'] = $data['reason_code'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
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
    public function getReasonCodeAllowableValues() : array
    {
        return [
            self::REASON_CODE_APPROVAL_REQUIRED,
            self::REASON_CODE_ASIN_NOT_FOUND,
            self::REASON_CODE_NOT_ELIGIBLE,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['message'] === null) {
            throw new AssertionException("'message' can't be null");
        }

        $allowedValues = $this->getReasonCodeAllowableValues();

        if (null !== $this->container['reason_code'] && !\in_array($this->container['reason_code'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'reason_code', must be one of '%s'",
                    $this->container['reason_code'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets message.
     */
    public function getMessage() : string
    {
        return $this->container['message'];
    }

    /**
     * Sets message.
     *
     * @param string $message a message describing the reason for the restriction
     */
    public function setMessage(string $message) : self
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets reason_code.
     */
    public function getReasonCode() : ?string
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code.
     *
     * @param null|string $reason_code a code indicating why the listing is restricted
     */
    public function setReasonCode(?string $reason_code) : self
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets links.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ListingsRestrictions\Link[]
     */
    public function getLinks() : ?array
    {
        return $this->container['links'];
    }

    /**
     * Sets links.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ListingsRestrictions\Link[] $links a list of path forward links that may allow Selling Partners to remove the restriction
     */
    public function setLinks(?array $links) : self
    {
        $this->container['links'] = $links;

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
