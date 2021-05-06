<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/user_interest.proto

namespace Google\Ads\GoogleAds\V7\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A user interest: a particular interest-based vertical to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.resources.UserInterest</code>
 */
class UserInterest extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the user interest.
     * User interest resource names have the form:
     * `customers/{customer_id}/userInterests/{user_interest_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Taxonomy type of the user interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType taxonomy_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $taxonomy_type = 0;
    /**
     * Output only. The ID of the user interest.
     *
     * Generated from protobuf field <code>int64 user_interest_id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $user_interest_id = null;
    /**
     * Output only. The name of the user interest.
     *
     * Generated from protobuf field <code>string name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = null;
    /**
     * Output only. The parent of the user interest.
     *
     * Generated from protobuf field <code>string user_interest_parent = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $user_interest_parent = null;
    /**
     * Output only. True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>bool launched_to_all = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $launched_to_all = null;
    /**
     * Output only. Availability information of the user interest.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.common.CriterionCategoryAvailability availabilities = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $availabilities;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the user interest.
     *           User interest resource names have the form:
     *           `customers/{customer_id}/userInterests/{user_interest_id}`
     *     @type int $taxonomy_type
     *           Output only. Taxonomy type of the user interest.
     *     @type int|string $user_interest_id
     *           Output only. The ID of the user interest.
     *     @type string $name
     *           Output only. The name of the user interest.
     *     @type string $user_interest_parent
     *           Output only. The parent of the user interest.
     *     @type bool $launched_to_all
     *           Output only. True if the user interest is launched to all channels and locales.
     *     @type \Google\Ads\GoogleAds\V7\Common\CriterionCategoryAvailability[]|\Google\Protobuf\Internal\RepeatedField $availabilities
     *           Output only. Availability information of the user interest.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Resources\UserInterest::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the user interest.
     * User interest resource names have the form:
     * `customers/{customer_id}/userInterests/{user_interest_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the user interest.
     * User interest resource names have the form:
     * `customers/{customer_id}/userInterests/{user_interest_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. Taxonomy type of the user interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType taxonomy_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getTaxonomyType()
    {
        return $this->taxonomy_type;
    }

    /**
     * Output only. Taxonomy type of the user interest.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType taxonomy_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setTaxonomyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V7\Enums\UserInterestTaxonomyTypeEnum\UserInterestTaxonomyType::class);
        $this->taxonomy_type = $var;

        return $this;
    }

    /**
     * Output only. The ID of the user interest.
     *
     * Generated from protobuf field <code>int64 user_interest_id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getUserInterestId()
    {
        return isset($this->user_interest_id) ? $this->user_interest_id : 0;
    }

    public function hasUserInterestId()
    {
        return isset($this->user_interest_id);
    }

    public function clearUserInterestId()
    {
        unset($this->user_interest_id);
    }

    /**
     * Output only. The ID of the user interest.
     *
     * Generated from protobuf field <code>int64 user_interest_id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserInterestId($var)
    {
        GPBUtil::checkInt64($var);
        $this->user_interest_id = $var;

        return $this;
    }

    /**
     * Output only. The name of the user interest.
     *
     * Generated from protobuf field <code>string name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Output only. The name of the user interest.
     *
     * Generated from protobuf field <code>string name = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. The parent of the user interest.
     *
     * Generated from protobuf field <code>string user_interest_parent = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getUserInterestParent()
    {
        return isset($this->user_interest_parent) ? $this->user_interest_parent : '';
    }

    public function hasUserInterestParent()
    {
        return isset($this->user_interest_parent);
    }

    public function clearUserInterestParent()
    {
        unset($this->user_interest_parent);
    }

    /**
     * Output only. The parent of the user interest.
     *
     * Generated from protobuf field <code>string user_interest_parent = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserInterestParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_interest_parent = $var;

        return $this;
    }

    /**
     * Output only. True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>bool launched_to_all = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getLaunchedToAll()
    {
        return isset($this->launched_to_all) ? $this->launched_to_all : false;
    }

    public function hasLaunchedToAll()
    {
        return isset($this->launched_to_all);
    }

    public function clearLaunchedToAll()
    {
        unset($this->launched_to_all);
    }

    /**
     * Output only. True if the user interest is launched to all channels and locales.
     *
     * Generated from protobuf field <code>bool launched_to_all = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setLaunchedToAll($var)
    {
        GPBUtil::checkBool($var);
        $this->launched_to_all = $var;

        return $this;
    }

    /**
     * Output only. Availability information of the user interest.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.common.CriterionCategoryAvailability availabilities = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvailabilities()
    {
        return $this->availabilities;
    }

    /**
     * Output only. Availability information of the user interest.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.common.CriterionCategoryAvailability availabilities = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V7\Common\CriterionCategoryAvailability[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvailabilities($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V7\Common\CriterionCategoryAvailability::class);
        $this->availabilities = $arr;

        return $this;
    }

}

