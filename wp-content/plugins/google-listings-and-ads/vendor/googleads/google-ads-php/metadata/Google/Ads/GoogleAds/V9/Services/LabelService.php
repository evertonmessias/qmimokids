<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/label_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class LabelService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/google/ads/googleads/v9/common/text_label.protogoogle.ads.googleads.v9.common"i
	TextLabel
background_color (	H �
description (	H�B
_background_colorB
_descriptionB�
"com.google.ads.googleads.v9.commonBTextLabelProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v9/common;common�GAA�Google.Ads.GoogleAds.V9.Common�Google\\Ads\\GoogleAds\\V9\\Common�"Google::Ads::GoogleAds::V9::Commonbproto3
�
0google/ads/googleads/v9/enums/label_status.protogoogle.ads.googleads.v9.enums"X
LabelStatusEnum"E
LabelStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBLabelStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
9google/ads/googleads/v9/enums/response_content_type.protogoogle.ads.googleads.v9.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v9.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
-google/ads/googleads/v9/resources/label.proto!google.ads.googleads.v9.resources0google/ads/googleads/v9/enums/label_status.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
Label=
resource_name (	B&�A�A 
googleads.googleapis.com/Label
id (B�AH �
name (	H�O
status (2:.google.ads.googleads.v9.enums.LabelStatusEnum.LabelStatusB�A=

text_label (2).google.ads.googleads.v9.common.TextLabel:N�AK
googleads.googleapis.com/Label)customers/{customer_id}/labels/{label_id}B
_idB
_nameB�
%com.google.ads.googleads.v9.resourcesB
LabelProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
4google/ads/googleads/v9/services/label_service.proto google.ads.googleads.v9.services-google/ads/googleads/v9/resources/label.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"P
GetLabelRequest=
resource_name (	B&�A�A 
googleads.googleapis.com/Label"�
MutateLabelsRequest
customer_id (	B�AI

operations (20.google.ads.googleads.v9.services.LabelOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v9.enums.ResponseContentTypeEnum.ResponseContentType"�
LabelOperation/
update_mask (2.google.protobuf.FieldMask:
create (2(.google.ads.googleads.v9.resources.LabelH :
update (2(.google.ads.googleads.v9.resources.LabelH 
remove (	H B
	operation"�
MutateLabelsResponse1
partial_failure_error (2.google.rpc.StatusD
results (23.google.ads.googleads.v9.services.MutateLabelResult"c
MutateLabelResult
resource_name (	7
label (2(.google.ads.googleads.v9.resources.Label2�
LabelService�
GetLabel1.google.ads.googleads.v9.services.GetLabelRequest(.google.ads.googleads.v9.resources.Label"@���*(/v9/{resource_name=customers/*/labels/*}�Aresource_name�
MutateLabels5.google.ads.googleads.v9.services.MutateLabelsRequest6.google.ads.googleads.v9.services.MutateLabelsResponse"O���0"+/v9/customers/{customer_id=*}/labels:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesBLabelServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

