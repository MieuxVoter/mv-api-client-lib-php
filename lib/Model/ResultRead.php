<?php
/**
 * ResultRead
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  MvApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Majority Judgment API
 *
 * This is a **deliberation service** using **majority judgment** polling. It's **libre software** ([source](https://github.com/mieuxvoter)) made and maintained by [MieuxVoter.fr](https://mieuxvoter.fr). You're browsing the API documentation and sandbox.  ## Use one of the known clients  - https://cli.mieuxvoter.fr   ## Try it out the hard way  ### Create an account  You will need a user account to interact with polls. Head to **Registration** → `POST /users` below. Click _Try it out_, set your desired credentials, and execute the query. Scroll down to see the response.  ### Authenticate  Use your credentials in the **Login** → `POST /_jwt`, and the API will return a Json Web Token valid for one hour. Copy the token (not the whole response, and without quotes) in the field behind the `Authorize 🔒` button, prefixed by the word `Bearer `.  It should look like: `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ…`  ### Create a poll  **Poll** → `POST /polls`  Here is an example of what you could send:  ``` {   \"slug\": \"france-presidence-2027\",   \"scope\": \"public\",   \"subject\": \"Présidentielle Française 2027\",   \"proposals\": [     {       \"title\": \"Continuer le néolibéralisme\"     },     {       \"title\": \"Ne pas prendre plus à la nature que ce qu'elle est capable de renouveler\"     },     {       \"title\": \"Former une Assemblée Constituante (Liquide)\"     }   ],   \"grades\": [     { \"name\": \"À Rejeter\", \"level\": 0 },     { \"name\": \"Insuffisant\", \"level\": 1 },     { \"name\": \"Passable\", \"level\": 2 },     { \"name\": \"Assez Bien\", \"level\": 3 },     { \"name\": \"Bien\", \"level\": 4 },     { \"name\": \"Très Bien\", \"level\": 5 },     { \"name\": \"Excellent\", \"level\": 6 }   ] } ```  Keep the response, you'll need the uuids.  ### Invite people to private polls  > TODO: document invitation generation  ### Submit judgments  **Ballot** → `POST /polls/{pollId}/proposals/{proposalId}/ballots`  One request per proposal, for now.  We plan on making an endpoint to submit them all at once.  ### Collect the results  **Result** → `GET /polls/{id}/result`  ## Use a generated client library  - for [php](https://github.com/MieuxVoter/mv-api-client-lib-php) - for [typescript](https://github.com/MieuxVoter/mv-api-client-lib-typescript) - …  There are clients we can generate for most languages. Get in touch if you'd like one in particular! Or clone this project and use `bin/generate-client.bash -t whatever`.
 *
 * The version of the OpenAPI document: 0.0.0-dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MvApi\Model;

use \ArrayAccess;
use \MvApi\ObjectSerializer;

/**
 * ResultRead Class Doc Comment
 *
 * @category Class
 * @description A Result of a Majority Judgment Poll.  Holds a leaderboard of the proposals.
 * @package  MvApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ResultRead implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Result-read';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'poll' => '\MvApi\Model\PollRead',
        'algorithm' => 'string',
        'leaderboard' => '\MvApi\Model\ProposalResultRead[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'poll' => null,
        'algorithm' => null,
        'leaderboard' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'poll' => 'poll',
        'algorithm' => 'algorithm',
        'leaderboard' => 'leaderboard'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'poll' => 'setPoll',
        'algorithm' => 'setAlgorithm',
        'leaderboard' => 'setLeaderboard'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'poll' => 'getPoll',
        'algorithm' => 'getAlgorithm',
        'leaderboard' => 'getLeaderboard'
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
        $this->container['poll'] = $data['poll'] ?? null;
        $this->container['algorithm'] = $data['algorithm'] ?? null;
        $this->container['leaderboard'] = $data['leaderboard'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets poll
     *
     * @return \MvApi\Model\PollRead|null
     */
    public function getPoll()
    {
        return $this->container['poll'];
    }

    /**
     * Sets poll
     *
     * @param \MvApi\Model\PollRead|null $poll poll
     *
     * @return self
     */
    public function setPoll($poll)
    {
        $this->container['poll'] = $poll;

        return $this;
    }

    /**
     * Gets algorithm
     *
     * @return string|null
     */
    public function getAlgorithm()
    {
        return $this->container['algorithm'];
    }

    /**
     * Sets algorithm
     *
     * @param string|null $algorithm The name of the algorithm used to derive this Result.
     *
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->container['algorithm'] = $algorithm;

        return $this;
    }

    /**
     * Gets leaderboard
     *
     * @return \MvApi\Model\ProposalResultRead[]|null
     */
    public function getLeaderboard()
    {
        return $this->container['leaderboard'];
    }

    /**
     * Sets leaderboard
     *
     * @param \MvApi\Model\ProposalResultRead[]|null $leaderboard In order, each Proposals' Result.  In extreme, low-participation polls, some Proposals may have the same rank ; in that case, their order should be the order they were added to the poll.
     *
     * @return self
     */
    public function setLeaderboard($leaderboard)
    {
        $this->container['leaderboard'] = $leaderboard;

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
     * @return mixed|null
     */
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
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


