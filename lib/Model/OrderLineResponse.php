<?php
/**
 * OrderLineResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Ced\MiraklApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Mirakl Connect APIs
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: afcae4e6-28a6-4477-a8ed-d78442ed50d5
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ced\MiraklApi\Model;

use \ArrayAccess;
use \Ced\MiraklApi\ObjectSerializer;

/**
 * OrderLineResponse Class Doc Comment
 *
 * @category Class
 * @package  Ced\MiraklApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderLineResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderLineResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'channel_order_line_id' => 'string',
        'product' => '\Ced\MiraklApi\Model\OrderProduct',
        'quantity' => 'int',
        'price' => '\Ced\MiraklApi\Model\Money',
        'taxes' => '\Ced\MiraklApi\Model\Tax[]',
        'total_shipping_price' => '\Ced\MiraklApi\Model\Money',
        'shipping_taxes' => '\Ced\MiraklApi\Model\Tax[]',
        'status' => 'string',
        'status_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'channel_order_line_id' => null,
        'product' => null,
        'quantity' => null,
        'price' => null,
        'taxes' => null,
        'total_shipping_price' => null,
        'shipping_taxes' => null,
        'status' => null,
        'status_reason' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'channel_order_line_id' => false,
		'product' => false,
		'quantity' => false,
		'price' => false,
		'taxes' => false,
		'total_shipping_price' => false,
		'shipping_taxes' => false,
		'status' => false,
		'status_reason' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'channel_order_line_id' => 'channel_order_line_id',
        'product' => 'product',
        'quantity' => 'quantity',
        'price' => 'price',
        'taxes' => 'taxes',
        'total_shipping_price' => 'total_shipping_price',
        'shipping_taxes' => 'shipping_taxes',
        'status' => 'status',
        'status_reason' => 'status_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'channel_order_line_id' => 'setChannelOrderLineId',
        'product' => 'setProduct',
        'quantity' => 'setQuantity',
        'price' => 'setPrice',
        'taxes' => 'setTaxes',
        'total_shipping_price' => 'setTotalShippingPrice',
        'shipping_taxes' => 'setShippingTaxes',
        'status' => 'setStatus',
        'status_reason' => 'setStatusReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'channel_order_line_id' => 'getChannelOrderLineId',
        'product' => 'getProduct',
        'quantity' => 'getQuantity',
        'price' => 'getPrice',
        'taxes' => 'getTaxes',
        'total_shipping_price' => 'getTotalShippingPrice',
        'shipping_taxes' => 'getShippingTaxes',
        'status' => 'getStatus',
        'status_reason' => 'getStatusReason'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const STATUS_AWAITING_FRAUD_CHECK = 'AWAITING_FRAUD_CHECK';
    public const STATUS_AWAITING_ACCEPTANCE = 'AWAITING_ACCEPTANCE';
    public const STATUS_AWAITING_PAYMENT = 'AWAITING_PAYMENT';
    public const STATUS_AWAITING_SHIPMENT = 'AWAITING_SHIPMENT';
    public const STATUS_SHIPPED = 'SHIPPED';
    public const STATUS_DELIVERED = 'DELIVERED';
    public const STATUS_CLOSED = 'CLOSED';
    public const STATUS_CHANNEL_SPECIFIC = 'CHANNEL_SPECIFIC';
    public const STATUS_REASON_REFUSED = 'REFUSED';
    public const STATUS_REASON_ACCEPTANCE_TIMEOUT = 'ACCEPTANCE_TIMEOUT';
    public const STATUS_REASON_FRAUD_CHECK_FAILED = 'FRAUD_CHECK_FAILED';
    public const STATUS_REASON_FRAUD_CHECK_TIMEOUT = 'FRAUD_CHECK_TIMEOUT';
    public const STATUS_REASON_REFUSED_PAYMENT = 'REFUSED_PAYMENT';
    public const STATUS_REASON_PAYMENT_TIMEOUT = 'PAYMENT_TIMEOUT';
    public const STATUS_REASON_CANCELED = 'CANCELED';
    public const STATUS_REASON_REFUNDED = 'REFUNDED';
    public const STATUS_REASON_AUTOMATICALLY_CLOSED = 'AUTOMATICALLY_CLOSED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AWAITING_FRAUD_CHECK,
            self::STATUS_AWAITING_ACCEPTANCE,
            self::STATUS_AWAITING_PAYMENT,
            self::STATUS_AWAITING_SHIPMENT,
            self::STATUS_SHIPPED,
            self::STATUS_DELIVERED,
            self::STATUS_CLOSED,
            self::STATUS_CHANNEL_SPECIFIC,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusReasonAllowableValues()
    {
        return [
            self::STATUS_REASON_REFUSED,
            self::STATUS_REASON_ACCEPTANCE_TIMEOUT,
            self::STATUS_REASON_FRAUD_CHECK_FAILED,
            self::STATUS_REASON_FRAUD_CHECK_TIMEOUT,
            self::STATUS_REASON_REFUSED_PAYMENT,
            self::STATUS_REASON_PAYMENT_TIMEOUT,
            self::STATUS_REASON_CANCELED,
            self::STATUS_REASON_REFUNDED,
            self::STATUS_REASON_AUTOMATICALLY_CLOSED,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('channel_order_line_id', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('taxes', $data ?? [], null);
        $this->setIfExists('total_shipping_price', $data ?? [], null);
        $this->setIfExists('shipping_taxes', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_reason', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusReasonAllowableValues();
        if (!is_null($this->container['status_reason']) && !in_array($this->container['status_reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status_reason', must be one of '%s'",
                $this->container['status_reason'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique order line identifier used by Mirakl Connect. This identifier can be used as a primary key, but it must not be shared with final users.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets channel_order_line_id
     *
     * @return string|null
     */
    public function getChannelOrderLineId()
    {
        return $this->container['channel_order_line_id'];
    }

    /**
     * Sets channel_order_line_id
     *
     * @param string|null $channel_order_line_id Order line identifier on the sales channel. This identifier is not guaranteed to be unique as different channels can use the same identifier.
     *
     * @return self
     */
    public function setChannelOrderLineId($channel_order_line_id)
    {
        if (is_null($channel_order_line_id)) {
            throw new \InvalidArgumentException('non-nullable channel_order_line_id cannot be null');
        }
        $this->container['channel_order_line_id'] = $channel_order_line_id;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \Ced\MiraklApi\Model\OrderProduct|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \Ced\MiraklApi\Model\OrderProduct|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity Quantity of the ordered product after cancellations. Refunds and rejects do not change this field.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Ced\MiraklApi\Model\Money|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Ced\MiraklApi\Model\Money|null $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \Ced\MiraklApi\Model\Tax[]|null
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Ced\MiraklApi\Model\Tax[]|null $taxes Taxes applied to product prices
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        if (is_null($taxes)) {
            throw new \InvalidArgumentException('non-nullable taxes cannot be null');
        }
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets total_shipping_price
     *
     * @return \Ced\MiraklApi\Model\Money|null
     */
    public function getTotalShippingPrice()
    {
        return $this->container['total_shipping_price'];
    }

    /**
     * Sets total_shipping_price
     *
     * @param \Ced\MiraklApi\Model\Money|null $total_shipping_price total_shipping_price
     *
     * @return self
     */
    public function setTotalShippingPrice($total_shipping_price)
    {
        if (is_null($total_shipping_price)) {
            throw new \InvalidArgumentException('non-nullable total_shipping_price cannot be null');
        }
        $this->container['total_shipping_price'] = $total_shipping_price;

        return $this;
    }

    /**
     * Gets shipping_taxes
     *
     * @return \Ced\MiraklApi\Model\Tax[]|null
     */
    public function getShippingTaxes()
    {
        return $this->container['shipping_taxes'];
    }

    /**
     * Sets shipping_taxes
     *
     * @param \Ced\MiraklApi\Model\Tax[]|null $shipping_taxes Taxes applied to shipping prices
     *
     * @return self
     */
    public function setShippingTaxes($shipping_taxes)
    {
        if (is_null($shipping_taxes)) {
            throw new \InvalidArgumentException('non-nullable shipping_taxes cannot be null');
        }
        $this->container['shipping_taxes'] = $shipping_taxes;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Order line status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_reason
     *
     * @return string|null
     */
    public function getStatusReason()
    {
        return $this->container['status_reason'];
    }

    /**
     * Sets status_reason
     *
     * @param string|null $status_reason Additional reason about the order line status. Availability depends on the order line status.
     *
     * @return self
     */
    public function setStatusReason($status_reason)
    {
        if (is_null($status_reason)) {
            throw new \InvalidArgumentException('non-nullable status_reason cannot be null');
        }
        $allowedValues = $this->getStatusReasonAllowableValues();
        if (!in_array($status_reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status_reason', must be one of '%s'",
                    $status_reason,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_reason'] = $status_reason;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


