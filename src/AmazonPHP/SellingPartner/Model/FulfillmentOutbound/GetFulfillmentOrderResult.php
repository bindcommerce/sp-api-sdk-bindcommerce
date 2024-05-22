<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetFulfillmentOrderResult implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'GetFulfillmentOrderResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'fulfillment_order' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentOrder',
        'fulfillment_order_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentOrderItem[]',
        'fulfillment_shipments' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentShipment[]',
        'return_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItem[]',
        'return_authorizations' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnAuthorization[]',
        'payment_information' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\PaymentInformation[]',
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
        'fulfillment_order' => null,
        'fulfillment_order_items' => null,
        'fulfillment_shipments' => null,
        'return_items' => null,
        'return_authorizations' => null,
        'payment_information' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillment_order' => 'fulfillmentOrder',
        'fulfillment_order_items' => 'fulfillmentOrderItems',
        'fulfillment_shipments' => 'fulfillmentShipments',
        'return_items' => 'returnItems',
        'return_authorizations' => 'returnAuthorizations',
        'payment_information' => 'paymentInformation',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillment_order' => 'setFulfillmentOrder',
        'fulfillment_order_items' => 'setFulfillmentOrderItems',
        'fulfillment_shipments' => 'setFulfillmentShipments',
        'return_items' => 'setReturnItems',
        'return_authorizations' => 'setReturnAuthorizations',
        'payment_information' => 'setPaymentInformation',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillment_order' => 'getFulfillmentOrder',
        'fulfillment_order_items' => 'getFulfillmentOrderItems',
        'fulfillment_shipments' => 'getFulfillmentShipments',
        'return_items' => 'getReturnItems',
        'return_authorizations' => 'getReturnAuthorizations',
        'payment_information' => 'getPaymentInformation',
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
        $this->container['fulfillment_order'] = $data['fulfillment_order'] ?? null;
        $this->container['fulfillment_order_items'] = $data['fulfillment_order_items'] ?? null;
        $this->container['fulfillment_shipments'] = $data['fulfillment_shipments'] ?? null;
        $this->container['return_items'] = $data['return_items'] ?? null;
        $this->container['return_authorizations'] = $data['return_authorizations'] ?? null;
        $this->container['payment_information'] = $data['payment_information'] ?? null;
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
        if ($this->container['fulfillment_order'] === null) {
            throw new AssertionException("'fulfillment_order' can't be null");
        }

        $this->container['fulfillment_order']->validate();

        if ($this->container['fulfillment_order_items'] === null) {
            throw new AssertionException("'fulfillment_order_items' can't be null");
        }

        if ($this->container['return_items'] === null) {
            throw new AssertionException("'return_items' can't be null");
        }

        if ($this->container['return_authorizations'] === null) {
            throw new AssertionException("'return_authorizations' can't be null");
        }
    }

    /**
     * Gets fulfillment_order.
     */
    public function getFulfillmentOrder() : FulfillmentOrder
    {
        return $this->container['fulfillment_order'];
    }

    /**
     * Sets fulfillment_order.
     *
     * @param FulfillmentOrder $fulfillment_order fulfillment_order
     */
    public function setFulfillmentOrder(FulfillmentOrder $fulfillment_order) : self
    {
        $this->container['fulfillment_order'] = $fulfillment_order;

        return $this;
    }

    /**
     * Gets fulfillment_order_items.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentOrderItem[]
     */
    public function getFulfillmentOrderItems() : array
    {
        return $this->container['fulfillment_order_items'];
    }

    /**
     * Sets fulfillment_order_items.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentOrderItem[] $fulfillment_order_items an array of fulfillment order item information
     */
    public function setFulfillmentOrderItems(array $fulfillment_order_items) : self
    {
        $this->container['fulfillment_order_items'] = $fulfillment_order_items;

        return $this;
    }

    /**
     * Gets fulfillment_shipments.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentShipment[]
     */
    public function getFulfillmentShipments() : ?array
    {
        return $this->container['fulfillment_shipments'];
    }

    /**
     * Sets fulfillment_shipments.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentShipment[] $fulfillment_shipments an array of fulfillment shipment information
     */
    public function setFulfillmentShipments(?array $fulfillment_shipments) : self
    {
        $this->container['fulfillment_shipments'] = $fulfillment_shipments;

        return $this;
    }

    /**
     * Gets return_items.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItem[]
     */
    public function getReturnItems() : array
    {
        return $this->container['return_items'];
    }

    /**
     * Sets return_items.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItem[] $return_items An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     */
    public function setReturnItems(array $return_items) : self
    {
        $this->container['return_items'] = $return_items;

        return $this;
    }

    /**
     * Gets return_authorizations.
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnAuthorization[]
     */
    public function getReturnAuthorizations() : array
    {
        return $this->container['return_authorizations'];
    }

    /**
     * Sets return_authorizations.
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnAuthorization[] $return_authorizations an array of return authorization information
     */
    public function setReturnAuthorizations(array $return_authorizations) : self
    {
        $this->container['return_authorizations'] = $return_authorizations;

        return $this;
    }

    /**
     * Gets payment_information.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\PaymentInformation[]
     */
    public function getPaymentInformation() : ?array
    {
        return $this->container['payment_information'];
    }

    /**
     * Sets payment_information.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\PaymentInformation[] $payment_information an array of various payment attributes related to this fulfillment order
     */
    public function setPaymentInformation(?array $payment_information) : self
    {
        $this->container['payment_information'] = $payment_information;

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
