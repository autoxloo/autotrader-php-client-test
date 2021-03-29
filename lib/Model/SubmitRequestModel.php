<?php
/**
 * SubmitRequestModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  AutoTrader\Client\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * v2-listings service v2.0-listings
 *
 * AutoTrader REST service
 *
 * OpenAPI spec version: v2-listings
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.18
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AutoTrader\Client\Test\Model;

use \ArrayAccess;
use \AutoTrader\Client\Test\ObjectSerializer;

/**
 * SubmitRequestModel Class Doc Comment
 *
 * @category Class
 * @package  AutoTrader\Client\Test
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubmitRequestModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubmitRequestModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => 'string',
        'make' => 'string',
        'model' => 'string',
        'variant' => 'string',
        'tumm_code' => 'int',
        'introduction_year' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category' => null,
        'make' => null,
        'model' => null,
        'variant' => null,
        'tumm_code' => 'int32',
        'introduction_year' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'category' => 'category',
        'make' => 'make',
        'model' => 'model',
        'variant' => 'variant',
        'tumm_code' => 'tummCode',
        'introduction_year' => 'introductionYear'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'make' => 'setMake',
        'model' => 'setModel',
        'variant' => 'setVariant',
        'tumm_code' => 'setTummCode',
        'introduction_year' => 'setIntroductionYear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'make' => 'getMake',
        'model' => 'getModel',
        'variant' => 'getVariant',
        'tumm_code' => 'getTummCode',
        'introduction_year' => 'getIntroductionYear'
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
        return self::$swaggerModelName;
    }

    const CATEGORY_CARS = 'Cars';
    const CATEGORY_BIKES = 'Bikes';
    const CATEGORY_BOATS = 'Boats';
    const CATEGORY_CARAVANS = 'Caravans';
    const CATEGORY_TRACTORS = 'Tractors';
    const CATEGORY_TRAILERS = 'Trailers';
    const CATEGORY_ATTACHMENTS = 'Attachments';
    const CATEGORY_LOADERS = 'Loaders';
    const CATEGORY_EXCAVATORS = 'Excavators';
    const CATEGORY_TRUCKS = 'Trucks';
    const CATEGORY_GRADERS = 'Graders';
    const CATEGORY_ROLLERS = 'Rollers';
    const CATEGORY_DOZERS = 'Dozers';
    const CATEGORY_CRANES = 'Cranes';
    const CATEGORY_BUSES = 'Buses';
    const CATEGORY_BAKKIES = 'Bakkies';
    const CATEGORY_VANS = 'Vans';
    const CATEGORY_FORKLIFTS = 'Forklifts';



    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_CARS,
            self::CATEGORY_BIKES,
            self::CATEGORY_BOATS,
            self::CATEGORY_CARAVANS,
            self::CATEGORY_TRACTORS,
            self::CATEGORY_TRAILERS,
            self::CATEGORY_ATTACHMENTS,
            self::CATEGORY_LOADERS,
            self::CATEGORY_EXCAVATORS,
            self::CATEGORY_TRUCKS,
            self::CATEGORY_GRADERS,
            self::CATEGORY_ROLLERS,
            self::CATEGORY_DOZERS,
            self::CATEGORY_CRANES,
            self::CATEGORY_BUSES,
            self::CATEGORY_BAKKIES,
            self::CATEGORY_VANS,
            self::CATEGORY_FORKLIFTS,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['variant'] = isset($data['variant']) ? $data['variant'] : null;
        $this->container['tumm_code'] = isset($data['tumm_code']) ? $data['tumm_code'] : null;
        $this->container['introduction_year'] = isset($data['introduction_year']) ? $data['introduction_year'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets make
     *
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     *
     * @param string $make make
     *
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets variant
     *
     * @return string
     */
    public function getVariant()
    {
        return $this->container['variant'];
    }

    /**
     * Sets variant
     *
     * @param string $variant variant
     *
     * @return $this
     */
    public function setVariant($variant)
    {
        $this->container['variant'] = $variant;

        return $this;
    }

    /**
     * Gets tumm_code
     *
     * @return int
     */
    public function getTummCode()
    {
        return $this->container['tumm_code'];
    }

    /**
     * Sets tumm_code
     *
     * @param int $tumm_code tumm_code
     *
     * @return $this
     */
    public function setTummCode($tumm_code)
    {
        $this->container['tumm_code'] = $tumm_code;

        return $this;
    }

    /**
     * Gets introduction_year
     *
     * @return \DateTime
     */
    public function getIntroductionYear()
    {
        return $this->container['introduction_year'];
    }

    /**
     * Sets introduction_year
     *
     * @param \DateTime $introduction_year introduction_year
     *
     * @return $this
     */
    public function setIntroductionYear($introduction_year)
    {
        $this->container['introduction_year'] = $introduction_year;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


