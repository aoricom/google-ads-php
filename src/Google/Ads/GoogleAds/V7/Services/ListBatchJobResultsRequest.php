<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v7/services/batch_job_service.proto

namespace Google\Ads\GoogleAds\V7\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [BatchJobService.ListBatchJobResults][google.ads.googleads.v7.services.BatchJobService.ListBatchJobResults].
 *
 * Generated from protobuf message <code>google.ads.googleads.v7.services.ListBatchJobResultsRequest</code>
 */
class ListBatchJobResultsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the batch job whose results are being listed.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. Use the value obtained from
     * `next_page_token` in the previous response in order to request
     * the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    protected $page_token = '';
    /**
     * Number of elements to retrieve in a single page.
     * When a page request is too large, the server may decide to
     * further limit the number of returned resources.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 4;</code>
     */
    protected $response_content_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Required. The resource name of the batch job whose results are being listed.
     *     @type string $page_token
     *           Token of the page to retrieve. If not specified, the first
     *           page of results will be returned. Use the value obtained from
     *           `next_page_token` in the previous response in order to request
     *           the next page of results.
     *     @type int $page_size
     *           Number of elements to retrieve in a single page.
     *           When a page request is too large, the server may decide to
     *           further limit the number of returned resources.
     *     @type int $response_content_type
     *           The response content type setting. Determines whether the mutable resource
     *           or just the resource name should be returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V7\Services\BatchJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the batch job whose results are being listed.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Required. The resource name of the batch job whose results are being listed.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. Use the value obtained from
     * `next_page_token` in the previous response in order to request
     * the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. Use the value obtained from
     * `next_page_token` in the previous response in order to request
     * the next page of results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Number of elements to retrieve in a single page.
     * When a page request is too large, the server may decide to
     * further limit the number of returned resources.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of elements to retrieve in a single page.
     * When a page request is too large, the server may decide to
     * further limit the number of returned resources.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 4;</code>
     * @return int
     */
    public function getResponseContentType()
    {
        return $this->response_content_type;
    }

    /**
     * The response content type setting. Determines whether the mutable resource
     * or just the resource name should be returned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v7.enums.ResponseContentTypeEnum.ResponseContentType response_content_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setResponseContentType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V7\Enums\ResponseContentTypeEnum\ResponseContentType::class);
        $this->response_content_type = $var;

        return $this;
    }

}

