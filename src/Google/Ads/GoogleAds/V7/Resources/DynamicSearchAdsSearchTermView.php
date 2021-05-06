<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/resources/dynamic_search_ads_search_term_view.proto

namespace Google\Ads\GoogleAds\V7\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A dynamic search ads search term view.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.resources.DynamicSearchAdsSearchTermView</code>
 */
class DynamicSearchAdsSearchTermView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the dynamic search ads search term view.
     * Dynamic search ads search term view resource names have the form:
     * `customers/{customer_id}/dynamicSearchAdsSearchTermViews/{ad_group_id}~{search_term_fingerprint}~{headline_fingerprint}~{landing_page_fingerprint}~{page_url_fingerprint}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. Search term
     * This field is read-only.
     *
     * Generated from protobuf field <code>string search_term = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $search_term = null;
    /**
     * Output only. The dynamically generated headline of the Dynamic Search Ad.
     * This field is read-only.
     *
     * Generated from protobuf field <code>string headline = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $headline = null;
    /**
     * Output only. The dynamically selected landing page URL of the impression.
     * This field is read-only.
     *
     * Generated from protobuf field <code>string landing_page = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $landing_page = null;
    /**
     * Output only. The URL of page feed item served for the impression.
     * This field is read-only.
     *
     * Generated from protobuf field <code>string page_url = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $page_url = null;
    /**
     * Output only. True if query matches a negative keyword.
     * This field is read-only.
     *
     * Generated from protobuf field <code>bool has_negative_keyword = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $has_negative_keyword = null;
    /**
     * Output only. True if query is added to targeted keywords.
     * This field is read-only.
     *
     * Generated from protobuf field <code>bool has_matching_keyword = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $has_matching_keyword = null;
    /**
     * Output only. True if query matches a negative url.
     * This field is read-only.
     *
     * Generated from protobuf field <code>bool has_negative_url = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $has_negative_url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the dynamic search ads search term view.
     *           Dynamic search ads search term view resource names have the form:
     *           `customers/{customer_id}/dynamicSearchAdsSearchTermViews/{ad_group_id}~{search_term_fingerprint}~{headline_fingerprint}~{landing_page_fingerprint}~{page_url_fingerprint}`
     *     @type string $search_term
     *           Output only. Search term
     *           This field is read-only.
     *     @type string $headline
     *           Output only. The dynamically generated headline of the Dynamic Search Ad.
     *           This field is read-only.
     *     @type string $landing_page
     *           Output only. The dynamically selected landing page URL of the impression.
     *           This field is read-only.
     *     @type string $page_url
     *           Output only. The URL of page feed item served for the impression.
     *           This field is read-only.
     *     @type bool $has_negative_keyword
     *           Output only. True if query matches a negative keyword.
     *           This field is read-only.
     *     @type bool $has_matching_keyword
     *           Output only. True if query is added to targeted keywords.
     *           This field is read-only.
     *     @type bool $has_negative_url
     *           Output only. True if query matches a negative url.
     *           This field is read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Resources\DynamicSearchAdsSearchTermView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the dynamic search ads search term view.
     * Dynamic search ads search term view resource names have the form:
     * `customers/{customer_id}/dynamicSearchAdsSearchTermViews/{ad_group_id}~{search_term_fingerprint}~{headline_fingerprint}~{landing_page_fingerprint}~{page_url_fingerprint}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the dynamic search ads search term view.
     * Dynamic search ads search term view resource names have the form:
     * `customers/{customer_id}/dynamicSearchAdsSearchTermViews/{ad_group_id}~{search_term_fingerprint}~{headline_fingerprint}~{landing_page_fingerprint}~{page_url_fingerprint}`
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
     * Output only. Search term
     * This field is read-only.
     *
     * Generated from protobuf field <code>string search_term = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSearchTerm()
    {
        return isset($this->search_term) ? $this->search_term : '';
    }

    public function hasSearchTerm()
    {
        return isset($this->search_term);
    }

    public function clearSearchTerm()
    {
        unset($this->search_term);
    }

    /**
     * Output only. Search term
     * This field is read-only.
     *
     * Generated from protobuf field <code>string search_term = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSearchTerm($var)
    {
        GPBUtil::checkString($var, True);
        $this->search_term = $var;

        return $this;
    }

    /**
     * Output only. The dynamically generated headline of the Dynamic Search Ad.
     * This field is read-only.
     *
     * Generated from protobuf field <code>string headline = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getHeadline()
    {
        return isset($this->headline) ? $this->headline : '';
    }

    public function hasHeadline()
    {
        return isset($this->headline);
    }

    public function clearHeadline()
    {
        unset($this->headline);
    }

    /**
     * Output only. The dynamically generated headline of the Dynamic Search Ad.
     * This field is read-only.
     *
     * Generated from protobuf field <code>string headline = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkString($var, True);
        $this->headline = $var;

        return $this;
    }

    /**
     * Output only. The dynamically selected landing page URL of the impression.
     * This field is read-only.
     *
     * Generated from protobuf field <code>string landing_page = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLandingPage()
    {
        return isset($this->landing_page) ? $this->landing_page : '';
    }

    public function hasLandingPage()
    {
        return isset($this->landing_page);
    }

    public function clearLandingPage()
    {
        unset($this->landing_page);
    }

    /**
     * Output only. The dynamically selected landing page URL of the impression.
     * This field is read-only.
     *
     * Generated from protobuf field <code>string landing_page = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLandingPage($var)
    {
        GPBUtil::checkString($var, True);
        $this->landing_page = $var;

        return $this;
    }

    /**
     * Output only. The URL of page feed item served for the impression.
     * This field is read-only.
     *
     * Generated from protobuf field <code>string page_url = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPageUrl()
    {
        return isset($this->page_url) ? $this->page_url : '';
    }

    public function hasPageUrl()
    {
        return isset($this->page_url);
    }

    public function clearPageUrl()
    {
        unset($this->page_url);
    }

    /**
     * Output only. The URL of page feed item served for the impression.
     * This field is read-only.
     *
     * Generated from protobuf field <code>string page_url = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_url = $var;

        return $this;
    }

    /**
     * Output only. True if query matches a negative keyword.
     * This field is read-only.
     *
     * Generated from protobuf field <code>bool has_negative_keyword = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHasNegativeKeyword()
    {
        return isset($this->has_negative_keyword) ? $this->has_negative_keyword : false;
    }

    public function hasHasNegativeKeyword()
    {
        return isset($this->has_negative_keyword);
    }

    public function clearHasNegativeKeyword()
    {
        unset($this->has_negative_keyword);
    }

    /**
     * Output only. True if query matches a negative keyword.
     * This field is read-only.
     *
     * Generated from protobuf field <code>bool has_negative_keyword = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHasNegativeKeyword($var)
    {
        GPBUtil::checkBool($var);
        $this->has_negative_keyword = $var;

        return $this;
    }

    /**
     * Output only. True if query is added to targeted keywords.
     * This field is read-only.
     *
     * Generated from protobuf field <code>bool has_matching_keyword = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHasMatchingKeyword()
    {
        return isset($this->has_matching_keyword) ? $this->has_matching_keyword : false;
    }

    public function hasHasMatchingKeyword()
    {
        return isset($this->has_matching_keyword);
    }

    public function clearHasMatchingKeyword()
    {
        unset($this->has_matching_keyword);
    }

    /**
     * Output only. True if query is added to targeted keywords.
     * This field is read-only.
     *
     * Generated from protobuf field <code>bool has_matching_keyword = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHasMatchingKeyword($var)
    {
        GPBUtil::checkBool($var);
        $this->has_matching_keyword = $var;

        return $this;
    }

    /**
     * Output only. True if query matches a negative url.
     * This field is read-only.
     *
     * Generated from protobuf field <code>bool has_negative_url = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHasNegativeUrl()
    {
        return isset($this->has_negative_url) ? $this->has_negative_url : false;
    }

    public function hasHasNegativeUrl()
    {
        return isset($this->has_negative_url);
    }

    public function clearHasNegativeUrl()
    {
        unset($this->has_negative_url);
    }

    /**
     * Output only. True if query matches a negative url.
     * This field is read-only.
     *
     * Generated from protobuf field <code>bool has_negative_url = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHasNegativeUrl($var)
    {
        GPBUtil::checkBool($var);
        $this->has_negative_url = $var;

        return $this;
    }

}

