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
class OneClickShipmentRequest implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'OneClickShipmentRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'ship_to' => '\AmazonPHP\SellingPartner\Model\ShippingV2\Address',
        'ship_from' => '\AmazonPHP\SellingPartner\Model\ShippingV2\Address',
        'return_to' => '\AmazonPHP\SellingPartner\Model\ShippingV2\Address',
        'ship_date' => '\DateTimeInterface',
        'packages' => '\AmazonPHP\SellingPartner\Model\ShippingV2\Package[]',
        'value_added_services_details' => '\AmazonPHP\SellingPartner\Model\ShippingV2\OneClickShipmentValueAddedService[]',
        'tax_details' => '\AmazonPHP\SellingPartner\Model\ShippingV2\TaxDetail[]',
        'channel_details' => '\AmazonPHP\SellingPartner\Model\ShippingV2\ChannelDetails',
        'label_specifications' => '\AmazonPHP\SellingPartner\Model\ShippingV2\RequestedDocumentSpecification',
        'service_selection' => '\AmazonPHP\SellingPartner\Model\ShippingV2\ServiceSelection',
        'shipper_instruction' => '\AmazonPHP\SellingPartner\Model\ShippingV2\ShipperInstruction',
        'destination_access_point_details' => '\AmazonPHP\SellingPartner\Model\ShippingV2\AccessPointDetails',
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
        'ship_to' => null,
        'ship_from' => null,
        'return_to' => null,
        'ship_date' => 'date-time',
        'packages' => null,
        'value_added_services_details' => null,
        'tax_details' => null,
        'channel_details' => null,
        'label_specifications' => null,
        'service_selection' => null,
        'shipper_instruction' => null,
        'destination_access_point_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ship_to' => 'shipTo',
        'ship_from' => 'shipFrom',
        'return_to' => 'returnTo',
        'ship_date' => 'shipDate',
        'packages' => 'packages',
        'value_added_services_details' => 'valueAddedServicesDetails',
        'tax_details' => 'taxDetails',
        'channel_details' => 'channelDetails',
        'label_specifications' => 'labelSpecifications',
        'service_selection' => 'serviceSelection',
        'shipper_instruction' => 'shipperInstruction',
        'destination_access_point_details' => 'destinationAccessPointDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'return_to' => 'setReturnTo',
        'ship_date' => 'setShipDate',
        'packages' => 'setPackages',
        'value_added_services_details' => 'setValueAddedServicesDetails',
        'tax_details' => 'setTaxDetails',
        'channel_details' => 'setChannelDetails',
        'label_specifications' => 'setLabelSpecifications',
        'service_selection' => 'setServiceSelection',
        'shipper_instruction' => 'setShipperInstruction',
        'destination_access_point_details' => 'setDestinationAccessPointDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'return_to' => 'getReturnTo',
        'ship_date' => 'getShipDate',
        'packages' => 'getPackages',
        'value_added_services_details' => 'getValueAddedServicesDetails',
        'tax_details' => 'getTaxDetails',
        'channel_details' => 'getChannelDetails',
        'label_specifications' => 'getLabelSpecifications',
        'service_selection' => 'getServiceSelection',
        'shipper_instruction' => 'getShipperInstruction',
        'destination_access_point_details' => 'getDestinationAccessPointDetails',
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
        $this->container['ship_to'] = $data['ship_to'] ?? null;
        $this->container['ship_from'] = $data['ship_from'] ?? null;
        $this->container['return_to'] = $data['return_to'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['packages'] = $data['packages'] ?? null;
        $this->container['value_added_services_details'] = $data['value_added_services_details'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['channel_details'] = $data['channel_details'] ?? null;
        $this->container['label_specifications'] = $data['label_specifications'] ?? null;
        $this->container['service_selection'] = $data['service_selection'] ?? null;
        $this->container['shipper_instruction'] = $data['shipper_instruction'] ?? null;
        $this->container['destination_access_point_details'] = $data['destination_access_point_details'] ?? null;
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
        if ($this->container['ship_to'] !== null) {
            $this->container['ship_to']->validate();
        }

        if ($this->container['ship_from'] === null) {
            throw new AssertionException("'ship_from' can't be null");
        }

        $this->container['ship_from']->validate();

        if ($this->container['return_to'] !== null) {
            $this->container['return_to']->validate();
        }

        if ($this->container['packages'] === null) {
            throw new AssertionException("'packages' can't be null");
        }

        if ($this->container['channel_details'] === null) {
            throw new AssertionException("'channel_details' can't be null");
        }

        $this->container['channel_details']->validate();

        if ($this->container['label_specifications'] === null) {
            throw new AssertionException("'label_specifications' can't be null");
        }

        $this->container['label_specifications']->validate();

        if ($this->container['service_selection'] === null) {
            throw new AssertionException("'service_selection' can't be null");
        }

        $this->container['service_selection']->validate();

        if ($this->container['shipper_instruction'] !== null) {
            $this->container['shipper_instruction']->validate();
        }

        if ($this->container['destination_access_point_details'] !== null) {
            $this->container['destination_access_point_details']->validate();
        }
    }

    /**
     * Gets ship_to.
     */
    public function getShipTo() : ?Address
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to.
     *
     * @param null|Address $ship_to ship_to
     */
    public function setShipTo(?Address $ship_to) : self
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_from.
     */
    public function getShipFrom() : Address
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from.
     *
     * @param Address $ship_from ship_from
     */
    public function setShipFrom(Address $ship_from) : self
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets return_to.
     */
    public function getReturnTo() : ?Address
    {
        return $this->container['return_to'];
    }

    /**
     * Sets return_to.
     *
     * @param null|Address $return_to return_to
     */
    public function setReturnTo(?Address $return_to) : self
    {
        $this->container['return_to'] = $return_to;

        return $this;
    }

    /**
     * Gets ship_date.
     */
    public function getShipDate() : ?\DateTimeInterface
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date.
     *
     * @param null|\DateTimeInterface $ship_date The ship date and time (the requested pickup). This defaults to the current date and time.
     */
    public function setShipDate(?\DateTimeInterface $ship_date) : self
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets packages.
     *
     * @return \AmazonPHP\SellingPartner\Model\ShippingV2\Package[]
     */
    public function getPackages() : array
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages.
     *
     * @param \AmazonPHP\SellingPartner\Model\ShippingV2\Package[] $packages a list of packages to be shipped through a shipping service offering
     */
    public function setPackages(array $packages) : self
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets value_added_services_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ShippingV2\OneClickShipmentValueAddedService[]
     */
    public function getValueAddedServicesDetails() : ?array
    {
        return $this->container['value_added_services_details'];
    }

    /**
     * Sets value_added_services_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShippingV2\OneClickShipmentValueAddedService[] $value_added_services_details the value-added services to be added to a shipping service purchase
     */
    public function setValueAddedServicesDetails(?array $value_added_services_details) : self
    {
        $this->container['value_added_services_details'] = $value_added_services_details;

        return $this;
    }

    /**
     * Gets tax_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ShippingV2\TaxDetail[]
     */
    public function getTaxDetails() : ?array
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ShippingV2\TaxDetail[] $tax_details a list of tax detail information
     */
    public function setTaxDetails(?array $tax_details) : self
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets channel_details.
     */
    public function getChannelDetails() : ChannelDetails
    {
        return $this->container['channel_details'];
    }

    /**
     * Sets channel_details.
     *
     * @param ChannelDetails $channel_details channel_details
     */
    public function setChannelDetails(ChannelDetails $channel_details) : self
    {
        $this->container['channel_details'] = $channel_details;

        return $this;
    }

    /**
     * Gets label_specifications.
     */
    public function getLabelSpecifications() : RequestedDocumentSpecification
    {
        return $this->container['label_specifications'];
    }

    /**
     * Sets label_specifications.
     *
     * @param RequestedDocumentSpecification $label_specifications label_specifications
     */
    public function setLabelSpecifications(RequestedDocumentSpecification $label_specifications) : self
    {
        $this->container['label_specifications'] = $label_specifications;

        return $this;
    }

    /**
     * Gets service_selection.
     */
    public function getServiceSelection() : ServiceSelection
    {
        return $this->container['service_selection'];
    }

    /**
     * Sets service_selection.
     *
     * @param ServiceSelection $service_selection service_selection
     */
    public function setServiceSelection(ServiceSelection $service_selection) : self
    {
        $this->container['service_selection'] = $service_selection;

        return $this;
    }

    /**
     * Gets shipper_instruction.
     */
    public function getShipperInstruction() : ?ShipperInstruction
    {
        return $this->container['shipper_instruction'];
    }

    /**
     * Sets shipper_instruction.
     *
     * @param null|ShipperInstruction $shipper_instruction shipper_instruction
     */
    public function setShipperInstruction(?ShipperInstruction $shipper_instruction) : self
    {
        $this->container['shipper_instruction'] = $shipper_instruction;

        return $this;
    }

    /**
     * Gets destination_access_point_details.
     */
    public function getDestinationAccessPointDetails() : ?AccessPointDetails
    {
        return $this->container['destination_access_point_details'];
    }

    /**
     * Sets destination_access_point_details.
     *
     * @param null|AccessPointDetails $destination_access_point_details destination_access_point_details
     */
    public function setDestinationAccessPointDetails(?AccessPointDetails $destination_access_point_details) : self
    {
        $this->container['destination_access_point_details'] = $destination_access_point_details;

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
