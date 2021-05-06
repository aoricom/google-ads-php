<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/common/extensions.proto

namespace Google\Ads\GoogleAds\V7\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a sitelink extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.common.SitelinkFeedItem</code>
 */
class SitelinkFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * URL display text for the sitelink.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>string link_text = 9;</code>
     */
    protected $link_text = null;
    /**
     * First line of the description for the sitelink.
     * If this value is set, line2 must also be set.
     * The length of this string should be between 0 and 35, inclusive.
     *
     * Generated from protobuf field <code>string line1 = 10;</code>
     */
    protected $line1 = null;
    /**
     * Second line of the description for the sitelink.
     * If this value is set, line1 must also be set.
     * The length of this string should be between 0 and 35, inclusive.
     *
     * Generated from protobuf field <code>string line2 = 11;</code>
     */
    protected $line2 = null;
    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_urls = 12;</code>
     */
    private $final_urls;
    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 13;</code>
     */
    private $final_mobile_urls;
    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>string tracking_url_template = 14;</code>
     */
    protected $tracking_url_template = null;
    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.common.CustomParameter url_custom_parameters = 7;</code>
     */
    private $url_custom_parameters;
    /**
     * Final URL suffix to be appended to landing page URLs served with
     * parallel tracking.
     *
     * Generated from protobuf field <code>string final_url_suffix = 15;</code>
     */
    protected $final_url_suffix = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $link_text
     *           URL display text for the sitelink.
     *           The length of this string should be between 1 and 25, inclusive.
     *     @type string $line1
     *           First line of the description for the sitelink.
     *           If this value is set, line2 must also be set.
     *           The length of this string should be between 0 and 35, inclusive.
     *     @type string $line2
     *           Second line of the description for the sitelink.
     *           If this value is set, line1 must also be set.
     *           The length of this string should be between 0 and 35, inclusive.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $final_urls
     *           A list of possible final URLs after all cross domain redirects.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $final_mobile_urls
     *           A list of possible final mobile URLs after all cross domain redirects.
     *     @type string $tracking_url_template
     *           URL template for constructing a tracking URL.
     *     @type \Google\Ads\GoogleAds\V7\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $url_custom_parameters
     *           A list of mappings to be used for substituting URL custom parameter tags in
     *           the tracking_url_template, final_urls, and/or final_mobile_urls.
     *     @type string $final_url_suffix
     *           Final URL suffix to be appended to landing page URLs served with
     *           parallel tracking.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * URL display text for the sitelink.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>string link_text = 9;</code>
     * @return string
     */
    public function getLinkText()
    {
        return isset($this->link_text) ? $this->link_text : '';
    }

    public function hasLinkText()
    {
        return isset($this->link_text);
    }

    public function clearLinkText()
    {
        unset($this->link_text);
    }

    /**
     * URL display text for the sitelink.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>string link_text = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkText($var)
    {
        GPBUtil::checkString($var, True);
        $this->link_text = $var;

        return $this;
    }

    /**
     * First line of the description for the sitelink.
     * If this value is set, line2 must also be set.
     * The length of this string should be between 0 and 35, inclusive.
     *
     * Generated from protobuf field <code>string line1 = 10;</code>
     * @return string
     */
    public function getLine1()
    {
        return isset($this->line1) ? $this->line1 : '';
    }

    public function hasLine1()
    {
        return isset($this->line1);
    }

    public function clearLine1()
    {
        unset($this->line1);
    }

    /**
     * First line of the description for the sitelink.
     * If this value is set, line2 must also be set.
     * The length of this string should be between 0 and 35, inclusive.
     *
     * Generated from protobuf field <code>string line1 = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setLine1($var)
    {
        GPBUtil::checkString($var, True);
        $this->line1 = $var;

        return $this;
    }

    /**
     * Second line of the description for the sitelink.
     * If this value is set, line1 must also be set.
     * The length of this string should be between 0 and 35, inclusive.
     *
     * Generated from protobuf field <code>string line2 = 11;</code>
     * @return string
     */
    public function getLine2()
    {
        return isset($this->line2) ? $this->line2 : '';
    }

    public function hasLine2()
    {
        return isset($this->line2);
    }

    public function clearLine2()
    {
        unset($this->line2);
    }

    /**
     * Second line of the description for the sitelink.
     * If this value is set, line1 must also be set.
     * The length of this string should be between 0 and 35, inclusive.
     *
     * Generated from protobuf field <code>string line2 = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setLine2($var)
    {
        GPBUtil::checkString($var, True);
        $this->line2 = $var;

        return $this;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_urls = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalUrls()
    {
        return $this->final_urls;
    }

    /**
     * A list of possible final URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_urls = 12;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_urls = $arr;

        return $this;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFinalMobileUrls()
    {
        return $this->final_mobile_urls;
    }

    /**
     * A list of possible final mobile URLs after all cross domain redirects.
     *
     * Generated from protobuf field <code>repeated string final_mobile_urls = 13;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFinalMobileUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->final_mobile_urls = $arr;

        return $this;
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>string tracking_url_template = 14;</code>
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template) ? $this->tracking_url_template : '';
    }

    public function hasTrackingUrlTemplate()
    {
        return isset($this->tracking_url_template);
    }

    public function clearTrackingUrlTemplate()
    {
        unset($this->tracking_url_template);
    }

    /**
     * URL template for constructing a tracking URL.
     *
     * Generated from protobuf field <code>string tracking_url_template = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingUrlTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_url_template = $var;

        return $this;
    }

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.common.CustomParameter url_custom_parameters = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCustomParameters()
    {
        return $this->url_custom_parameters;
    }

    /**
     * A list of mappings to be used for substituting URL custom parameter tags in
     * the tracking_url_template, final_urls, and/or final_mobile_urls.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v7.common.CustomParameter url_custom_parameters = 7;</code>
     * @param \Google\Ads\GoogleAds\V7\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCustomParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V7\Common\CustomParameter::class);
        $this->url_custom_parameters = $arr;

        return $this;
    }

    /**
     * Final URL suffix to be appended to landing page URLs served with
     * parallel tracking.
     *
     * Generated from protobuf field <code>string final_url_suffix = 15;</code>
     * @return string
     */
    public function getFinalUrlSuffix()
    {
        return isset($this->final_url_suffix) ? $this->final_url_suffix : '';
    }

    public function hasFinalUrlSuffix()
    {
        return isset($this->final_url_suffix);
    }

    public function clearFinalUrlSuffix()
    {
        unset($this->final_url_suffix);
    }

    /**
     * Final URL suffix to be appended to landing page URLs served with
     * parallel tracking.
     *
     * Generated from protobuf field <code>string final_url_suffix = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setFinalUrlSuffix($var)
    {
        GPBUtil::checkString($var, True);
        $this->final_url_suffix = $var;

        return $this;
    }

}

