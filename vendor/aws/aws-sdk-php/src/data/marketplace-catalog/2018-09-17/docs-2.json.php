<?php
// This file was auto-generated from sdk-root/src/data/marketplace-catalog/2018-09-17/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Catalog API actions allow you to manage your entities through list, describe, and update capabilities. An entity can be a product or an offer on AWS Marketplace. </p> <p>You can automate your entity update process by integrating the AWS Marketplace Catalog API with your AWS Marketplace product build or deployment pipelines. You can also create your own applications on top of the Catalog API to manage your products on AWS Marketplace.</p>', 'operations' => [ 'CancelChangeSet' => '<p>Used to cancel an open change request. Must be sent before the status of the request changes to <code>APPLYING</code>, the final stage of completing your change request. You can describe a change during the 60-day request history retention period for API calls.</p>', 'DeleteResourcePolicy' => '<p>Deletes a resource-based policy on an entity that is identified by its resource ARN.</p>', 'DescribeChangeSet' => '<p>Provides information about a given change set.</p>', 'DescribeEntity' => '<p>Returns the metadata and content of the entity.</p>', 'GetResourcePolicy' => '<p>Gets a resource-based policy of an entity that is identified by its resource ARN.</p>', 'ListChangeSets' => '<p>Returns the list of change sets owned by the account being used to make the call. You can filter this list by providing any combination of <code>entityId</code>, <code>ChangeSetName</code>, and status. If you provide more than one filter, the API operation applies a logical AND between the filters.</p> <p>You can describe a change during the 60-day request history retention period for API calls.</p>', 'ListEntities' => '<p>Provides the list of entities of a given type.</p>', 'ListTagsForResource' => '<p>Lists all tags that have been added to a resource (either an <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/welcome.html#catalog-api-entities">entity</a> or <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/welcome.html#working-with-change-sets">change set</a>).</p>', 'PutResourcePolicy' => '<p>Attaches a resource-based policy to an entity. Examples of an entity include: <code>AmiProduct</code> and <code>ContainerProduct</code>.</p>', 'StartChangeSet' => '<p>Allows you to request changes for your entities. Within a single <code>ChangeSet</code>, you can\'t start the same change type against the same entity multiple times. Additionally, when a <code>ChangeSet</code> is running, all the entities targeted by the different changes are locked until the change set has completed (either succeeded, cancelled, or failed). If you try to start a change set containing a change against an entity that is already locked, you will receive a <code>ResourceInUseException</code> error.</p> <p>For example, you can\'t start the <code>ChangeSet</code> described in the <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/API_StartChangeSet.html#API_StartChangeSet_Examples">example</a> later in this topic because it contains two changes to run the same change type (<code>AddRevisions</code>) against the same entity (<code>entity-id@1</code>).</p> <p>For more information about working with change sets, see <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/welcome.html#working-with-change-sets"> Working with change sets</a>. For information about change types for single-AMI products, see <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/ami-products.html#working-with-single-AMI-products">Working with single-AMI products</a>. Also, for more information about change types available for container-based products, see <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/container-products.html#working-with-container-products">Working with container products</a>.</p>', 'TagResource' => '<p>Tags a resource (either an <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/welcome.html#catalog-api-entities">entity</a> or <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/welcome.html#working-with-change-sets">change set</a>).</p>', 'UntagResource' => '<p>Removes a tag or list of tags from a resource (either an <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/welcome.html#catalog-api-entities">entity</a> or <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/welcome.html#working-with-change-sets">change set</a>).</p>', ], 'shapes' => [ 'ARN' => [ 'base' => NULL, 'refs' => [ 'CancelChangeSetResponse$ChangeSetArn' => '<p>The ARN associated with the change set referenced in this request.</p>', 'ChangeSetSummaryListItem$ChangeSetArn' => '<p>The ARN associated with the unique identifier for the change set referenced in this request.</p>', 'DescribeChangeSetResponse$ChangeSetArn' => '<p>The ARN associated with the unique identifier for the change set referenced in this request.</p>', 'DescribeEntityResponse$EntityArn' => '<p>The ARN associated to the unique identifier for the entity referenced in this request.</p>', 'EntitySummary$EntityArn' => '<p>The ARN associated with the unique identifier for the entity.</p>', 'StartChangeSetResponse$ChangeSetArn' => '<p>The ARN associated to the unique identifier generated for the request.</p>', ], ], 'AccessDeniedException' => [ 'base' => '<p>Access is denied.</p> <p>HTTP status code: 403</p>', 'refs' => [], ], 'CancelChangeSetRequest' => [ 'base' => NULL, 'refs' => [], ], 'CancelChangeSetResponse' => [ 'base' => NULL, 'refs' => [], ], 'Catalog' => [ 'base' => NULL, 'refs' => [ 'CancelChangeSetRequest$Catalog' => '<p>Required. The catalog related to the request. Fixed value: <code>AWSMarketplace</code>.</p>', 'DescribeChangeSetRequest$Catalog' => '<p>Required. The catalog related to the request. Fixed value: <code>AWSMarketplace</code> </p>', 'DescribeEntityRequest$Catalog' => '<p>Required. The catalog related to the request. Fixed value: <code>AWSMarketplace</code> </p>', 'ListChangeSetsRequest$Catalog' => '<p>The catalog related to the request. Fixed value: <code>AWSMarketplace</code> </p>', 'ListEntitiesRequest$Catalog' => '<p>The catalog related to the request. Fixed value: <code>AWSMarketplace</code> </p>', 'StartChangeSetRequest$Catalog' => '<p>The catalog related to the request. Fixed value: <code>AWSMarketplace</code> </p>', ], ], 'Change' => [ 'base' => '<p>An object that contains the <code>ChangeType</code>, <code>Details</code>, and <code>Entity</code>.</p>', 'refs' => [ 'RequestedChangeList$member' => NULL, ], ], 'ChangeName' => [ 'base' => NULL, 'refs' => [ 'Change$ChangeName' => '<p>Optional name for the change.</p>', 'ChangeSummary$ChangeName' => '<p>Optional name for the change.</p>', ], ], 'ChangeSetDescription' => [ 'base' => NULL, 'refs' => [ 'DescribeChangeSetResponse$ChangeSet' => '<p>An array of <code>ChangeSummary</code> objects.</p>', ], ], 'ChangeSetName' => [ 'base' => NULL, 'refs' => [ 'ChangeSetSummaryListItem$ChangeSetName' => '<p>The non-unique name for the change set.</p>', 'DescribeChangeSetResponse$ChangeSetName' => '<p>The optional name provided in the <code>StartChangeSet</code> request. If you do not provide a name, one is set by default.</p>', 'StartChangeSetRequest$ChangeSetName' => '<p>Optional case sensitive string of up to 100 ASCII characters. The change set name can be used to filter the list of change sets. </p>', ], ], 'ChangeSetSummaryList' => [ 'base' => NULL, 'refs' => [ 'ListChangeSetsResponse$ChangeSetSummaryList' => '<p> Array of <code>ChangeSetSummaryListItem</code> objects.</p>', ], ], 'ChangeSetSummaryListItem' => [ 'base' => '<p>A summary of a change set returned in a list of change sets when the <code>ListChangeSets</code> action is called.</p>', 'refs' => [ 'ChangeSetSummaryList$member' => NULL, ], ], 'ChangeStatus' => [ 'base' => NULL, 'refs' => [ 'ChangeSetSummaryListItem$Status' => '<p>The current status of the change set.</p>', 'DescribeChangeSetResponse$Status' => '<p>The status of the change request.</p>', ], ], 'ChangeSummary' => [ 'base' => '<p>This object is a container for common summary information about the change. The summary doesn\'t contain the whole change structure.</p>', 'refs' => [ 'ChangeSetDescription$member' => NULL, ], ], 'ChangeType' => [ 'base' => NULL, 'refs' => [ 'Change$ChangeType' => '<p>Change types are single string values that describe your intention for the change. Each change type is unique for each <code>EntityType</code> provided in the change\'s scope. For more information on change types available for single-AMI products, see <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/ami-products.html#working-with-single-AMI-products">Working with single-AMI products</a>. Also, for more information about change types available for container-based products, see <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/container-products.html#working-with-container-products">Working with container products</a>.</p>', 'ChangeSummary$ChangeType' => '<p>The type of the change.</p>', ], ], 'ClientRequestToken' => [ 'base' => NULL, 'refs' => [ 'StartChangeSetRequest$ClientRequestToken' => '<p>A unique token to identify the request to ensure idempotency.</p>', ], ], 'DateTimeISO8601' => [ 'base' => NULL, 'refs' => [ 'ChangeSetSummaryListItem$StartTime' => '<p>The time, in ISO 8601 format (2018-02-27T13:45:22Z), when the change set was started.</p>', 'ChangeSetSummaryListItem$EndTime' => '<p>The time, in ISO 8601 format (2018-02-27T13:45:22Z), when the change set was finished.</p>', 'DescribeChangeSetResponse$StartTime' => '<p>The date and time, in ISO 8601 format (2018-02-27T13:45:22Z), the request started. </p>', 'DescribeChangeSetResponse$EndTime' => '<p>The date and time, in ISO 8601 format (2018-02-27T13:45:22Z), the request transitioned to a terminal state. The change cannot transition to a different state. Null if the request is not in a terminal state. </p>', 'DescribeEntityResponse$LastModifiedDate' => '<p>The last modified date of the entity, in ISO 8601 format (2018-02-27T13:45:22Z).</p>', 'EntitySummary$LastModifiedDate' => '<p>The last time the entity was published, using ISO 8601 format (2018-02-27T13:45:22Z).</p>', ], ], 'DeleteResourcePolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteResourcePolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeChangeSetRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeChangeSetResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEntityRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeEntityResponse' => [ 'base' => NULL, 'refs' => [], ], 'Entity' => [ 'base' => '<p>An entity contains data that describes your product, its supported features, and how it can be used or launched by your customer. </p>', 'refs' => [ 'Change$Entity' => '<p>The entity to be changed.</p>', 'ChangeSummary$Entity' => '<p>The entity to be changed.</p>', ], ], 'EntityNameString' => [ 'base' => NULL, 'refs' => [ 'EntitySummary$Name' => '<p>The name for the entity. This value is not unique. It is defined by the seller.</p>', ], ], 'EntitySummary' => [ 'base' => '<p>This object is a container for common summary information about the entity. The summary doesn\'t contain the whole entity structure, but it does contain information common across all entities.</p>', 'refs' => [ 'EntitySummaryList$member' => NULL, ], ], 'EntitySummaryList' => [ 'base' => NULL, 'refs' => [ 'ListEntitiesResponse$EntitySummaryList' => '<p> Array of <code>EntitySummary</code> object.</p>', ], ], 'EntityType' => [ 'base' => NULL, 'refs' => [ 'DescribeEntityResponse$EntityType' => '<p>The named type of the entity, in the format of <code>EntityType@Version</code>.</p>', 'Entity$Type' => '<p>The type of entity.</p>', 'EntitySummary$EntityType' => '<p>The type of the entity.</p>', 'ListEntitiesRequest$EntityType' => '<p>The type of entities to retrieve.</p>', ], ], 'ErrorCodeString' => [ 'base' => NULL, 'refs' => [ 'ErrorDetail$ErrorCode' => '<p>The error code that identifies the type of error.</p>', ], ], 'ErrorDetail' => [ 'base' => '<p>Details about the error.</p>', 'refs' => [ 'ErrorDetailList$member' => NULL, ], ], 'ErrorDetailList' => [ 'base' => NULL, 'refs' => [ 'ChangeSummary$ErrorDetailList' => '<p>An array of <code>ErrorDetail</code> objects associated with the change.</p>', ], ], 'ExceptionMessageContent' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'DescribeChangeSetResponse$FailureDescription' => '<p>Returned if there is a failure on the change set, but that failure is not related to any of the changes in the request.</p>', 'ErrorDetail$ErrorMessage' => '<p>The message for the error.</p>', 'InternalServiceException$Message' => NULL, 'ResourceInUseException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ResourceNotSupportedException$Message' => NULL, 'ServiceQuotaExceededException$Message' => NULL, 'ThrottlingException$Message' => NULL, 'ValidationException$Message' => NULL, ], ], 'FailureCode' => [ 'base' => NULL, 'refs' => [ 'ChangeSetSummaryListItem$FailureCode' => '<p>Returned if the change set is in <code>FAILED</code> status. Can be either <code>CLIENT_ERROR</code>, which means that there are issues with the request (see the <code>ErrorDetailList</code> of <code>DescribeChangeSet</code>), or <code>SERVER_FAULT</code>, which means that there is a problem in the system, and you should retry your request.</p>', 'DescribeChangeSetResponse$FailureCode' => '<p>Returned if the change set is in <code>FAILED</code> status. Can be either <code>CLIENT_ERROR</code>, which means that there are issues with the request (see the <code>ErrorDetailList</code>), or <code>SERVER_FAULT</code>, which means that there is a problem in the system, and you should retry your request.</p>', ], ], 'Filter' => [ 'base' => '<p>A filter object, used to optionally filter results from calls to the <code>ListEntities</code> and <code>ListChangeSets</code> actions.</p>', 'refs' => [ 'FilterList$member' => NULL, ], ], 'FilterList' => [ 'base' => NULL, 'refs' => [ 'ListChangeSetsRequest$FilterList' => '<p>An array of filter objects.</p>', 'ListEntitiesRequest$FilterList' => '<p>An array of filter objects. Each filter object contains two attributes, <code>filterName</code> and <code>filterValues</code>.</p>', ], ], 'FilterName' => [ 'base' => NULL, 'refs' => [ 'Filter$Name' => '<p>For <code>ListEntities</code>, the supported value for this is an <code>EntityId</code>.</p> <p>For <code>ListChangeSets</code>, the supported values are as follows:</p>', ], ], 'FilterValueContent' => [ 'base' => NULL, 'refs' => [ 'ValueList$member' => NULL, ], ], 'GetResourcePolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetResourcePolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'Identifier' => [ 'base' => NULL, 'refs' => [ 'DescribeEntityResponse$EntityIdentifier' => '<p>The identifier of the entity, in the format of <code>EntityId@RevisionId</code>.</p>', 'Entity$Identifier' => '<p>The identifier for the entity.</p>', ], ], 'InternalServiceException' => [ 'base' => '<p>There was an internal service exception.</p> <p>HTTP status code: 500</p>', 'refs' => [], ], 'Json' => [ 'base' => NULL, 'refs' => [ 'Change$Details' => '<p>This object contains details specific to the change type of the requested change. For more information about change types available for single-AMI products, see <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/ami-products.html#working-with-single-AMI-products">Working with single-AMI products</a>. Also, for more information about change types available for container-based products, see <a href="https://docs.aws.amazon.com/marketplace-catalog/latest/api-reference/container-products.html#working-with-container-products">Working with container products</a>.</p>', 'ChangeSummary$Details' => '<p>This object contains details specific to the change type of the requested change.</p>', 'DescribeEntityResponse$Details' => '<p>This stringified JSON object includes the details of the entity.</p>', ], ], 'JsonDocumentType' => [ 'base' => NULL, 'refs' => [ 'Change$DetailsDocument' => '<p>Alternative field that accepts a JSON value instead of a string for <code>ChangeType</code> details. You can use either <code>Details</code> or <code>DetailsDocument</code>, but not both.</p>', 'ChangeSummary$DetailsDocument' => '<p>The JSON value of the details specific to the change type of the requested change.</p>', 'DescribeEntityResponse$DetailsDocument' => '<p>The JSON value of the details specific to the entity.</p>', ], ], 'ListChangeSetsMaxResultInteger' => [ 'base' => NULL, 'refs' => [ 'ListChangeSetsRequest$MaxResults' => '<p>The maximum number of results returned by a single call. This value must be provided in the next call to retrieve the next set of results. By default, this value is 20.</p>', ], ], 'ListChangeSetsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListChangeSetsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListEntitiesMaxResultInteger' => [ 'base' => NULL, 'refs' => [ 'ListEntitiesRequest$MaxResults' => '<p>Specifies the upper limit of the elements on a single page. If a value isn\'t provided, the default value is 20.</p>', ], ], 'ListEntitiesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListEntitiesResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListChangeSetsRequest$NextToken' => '<p>The token value retrieved from a previous call to access the next page of results.</p>', 'ListChangeSetsResponse$NextToken' => '<p>The value of the next token, if it exists. Null if there are no more results.</p>', 'ListEntitiesRequest$NextToken' => '<p>The value of the next token, if it exists. Null if there are no more results.</p>', 'ListEntitiesResponse$NextToken' => '<p>The value of the next token if it exists. Null if there is no more result.</p>', ], ], 'OwnershipType' => [ 'base' => NULL, 'refs' => [ 'ListEntitiesRequest$OwnershipType' => '<p>Filters the returned set of entities based on their owner. The default is <code>SELF</code>. To list entities shared with you through AWS Resource Access Manager (AWS RAM), set to <code>SHARED</code>. Entities shared through the AWS Marketplace Catalog API <code>PutResourcePolicy</code> operation can\'t be discovered through the <code>SHARED</code> parameter.</p>', ], ], 'PutResourcePolicyRequest' => [ 'base' => NULL, 'refs' => [], ], 'PutResourcePolicyResponse' => [ 'base' => NULL, 'refs' => [], ], 'RequestedChangeList' => [ 'base' => NULL, 'refs' => [ 'StartChangeSetRequest$ChangeSet' => '<p>Array of <code>change</code> object.</p>', ], ], 'ResourceARN' => [ 'base' => NULL, 'refs' => [ 'DeleteResourcePolicyRequest$ResourceArn' => '<p>The Amazon Resource Name (ARN) of the entity resource that is associated with the resource policy.</p>', 'GetResourcePolicyRequest$ResourceArn' => '<p>The Amazon Resource Name (ARN) of the entity resource that is associated with the resource policy.</p>', 'ListTagsForResourceRequest$ResourceArn' => '<p>Required. The Amazon Resource Name (ARN) associated with the resource you want to list tags on.</p>', 'ListTagsForResourceResponse$ResourceArn' => '<p>Required. The ARN associated with the resource you want to list tags on.</p>', 'PutResourcePolicyRequest$ResourceArn' => '<p>The Amazon Resource Name (ARN) of the entity resource you want to associate with a resource policy.</p>', 'TagResourceRequest$ResourceArn' => '<p>Required. The Amazon Resource Name (ARN) associated with the resource you want to tag.</p>', 'UntagResourceRequest$ResourceArn' => '<p>Required. The Amazon Resource Name (ARN) associated with the resource you want to remove the tag from.</p>', ], ], 'ResourceId' => [ 'base' => NULL, 'refs' => [ 'CancelChangeSetRequest$ChangeSetId' => '<p>Required. The unique identifier of the <code>StartChangeSet</code> request that you want to cancel.</p>', 'CancelChangeSetResponse$ChangeSetId' => '<p>The unique identifier for the change set referenced in this request.</p>', 'ChangeSetSummaryListItem$ChangeSetId' => '<p>The unique identifier for a change set.</p>', 'DescribeChangeSetRequest$ChangeSetId' => '<p>Required. The unique identifier for the <code>StartChangeSet</code> request that you want to describe the details for.</p>', 'DescribeChangeSetResponse$ChangeSetId' => '<p>Required. The unique identifier for the change set referenced in this request.</p>', 'DescribeEntityRequest$EntityId' => '<p>Required. The unique ID of the entity to describe.</p>', 'EntitySummary$EntityId' => '<p>The unique identifier for the entity.</p>', 'ResourceIdList$member' => NULL, 'StartChangeSetResponse$ChangeSetId' => '<p>Unique identifier generated for the request.</p>', ], ], 'ResourceIdList' => [ 'base' => NULL, 'refs' => [ 'ChangeSetSummaryListItem$EntityIdList' => '<p>This object is a list of entity IDs (string) that are a part of a change set. The entity ID list is a maximum of 20 entities. It must contain at least one entity.</p>', ], ], 'ResourceInUseException' => [ 'base' => '<p>The resource is currently in use.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource wasn\'t found.</p> <p>HTTP status code: 404</p>', 'refs' => [], ], 'ResourceNotSupportedException' => [ 'base' => '<p>Currently, the specified resource is not supported.</p>', 'refs' => [], ], 'ResourcePolicyJson' => [ 'base' => NULL, 'refs' => [ 'GetResourcePolicyResponse$Policy' => '<p>The policy document to set; formatted in JSON.</p>', 'PutResourcePolicyRequest$Policy' => '<p>The policy document to set; formatted in JSON.</p>', ], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>The maximum number of open requests per account has been exceeded.</p>', 'refs' => [], ], 'Sort' => [ 'base' => '<p>An object that contains two attributes, <code>SortBy</code> and <code>SortOrder</code>.</p>', 'refs' => [ 'ListChangeSetsRequest$Sort' => '<p>An object that contains two attributes, <code>SortBy</code> and <code>SortOrder</code>.</p>', 'ListEntitiesRequest$Sort' => '<p>An object that contains two attributes, <code>SortBy</code> and <code>SortOrder</code>.</p>', ], ], 'SortBy' => [ 'base' => NULL, 'refs' => [ 'Sort$SortBy' => '<p>For <code>ListEntities</code>, supported attributes include <code>LastModifiedDate</code> (default) and <code>EntityId</code>. In addition to <code>LastModifiedDate</code> and <code>EntityId</code>, each <code>EntityType</code> might support additional fields.</p> <p>For <code>ListChangeSets</code>, supported attributes include <code>StartTime</code> and <code>EndTime</code>.</p>', ], ], 'SortOrder' => [ 'base' => NULL, 'refs' => [ 'Sort$SortOrder' => '<p>The sorting order. Can be <code>ASCENDING</code> or <code>DESCENDING</code>. The default value is <code>DESCENDING</code>.</p>', ], ], 'StartChangeSetRequest' => [ 'base' => NULL, 'refs' => [], ], 'StartChangeSetResponse' => [ 'base' => NULL, 'refs' => [], ], 'Tag' => [ 'base' => '<p>A list of objects specifying each key name and value.</p>', 'refs' => [ 'TagList$member' => NULL, ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'Tag$Key' => '<p>The key associated with the tag.</p>', 'TagKeyList$member' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>Required. A list of key names of tags to be removed. Number of strings allowed: 0-256.</p>', ], ], 'TagList' => [ 'base' => NULL, 'refs' => [ 'Change$EntityTags' => '<p>The tags associated with the change.</p>', 'ListTagsForResourceResponse$Tags' => '<p>Required. A list of objects specifying each key name and value. Number of objects allowed: 1-50.</p>', 'StartChangeSetRequest$ChangeSetTags' => '<p>A list of objects specifying each key name and value for the <code>ChangeSetTags</code> property.</p>', 'TagResourceRequest$Tags' => '<p>Required. A list of objects specifying each key name and value. Number of objects allowed: 1-50.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'Tag$Value' => '<p>The value associated with the tag.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>Too many requests.</p> <p>HTTP status code: 429</p>', 'refs' => [], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>An error occurred during validation.</p> <p>HTTP status code: 422</p>', 'refs' => [], ], 'ValueList' => [ 'base' => NULL, 'refs' => [ 'Filter$ValueList' => '<p> <code>ListEntities</code> - This is a list of unique <code>EntityId</code>s.</p> <p> <code>ListChangeSets</code> - The supported filter names and associated <code>ValueList</code>s is as follows:</p> <ul> <li> <p> <code>ChangeSetName</code> - The supported <code>ValueList</code> is a list of non-unique <code>ChangeSetName</code>s. These are defined when you call the <code>StartChangeSet</code> action.</p> </li> <li> <p> <code>Status</code> - The supported <code>ValueList</code> is a list of statuses for all change set requests.</p> </li> <li> <p> <code>EntityId</code> - The supported <code>ValueList</code> is a list of unique <code>EntityId</code>s.</p> </li> <li> <p> <code>BeforeStartTime</code> - The supported <code>ValueList</code> is a list of all change sets that started before the filter value.</p> </li> <li> <p> <code>AfterStartTime</code> - The supported <code>ValueList</code> is a list of all change sets that started after the filter value.</p> </li> <li> <p> <code>BeforeEndTime</code> - The supported <code>ValueList</code> is a list of all change sets that ended before the filter value.</p> </li> <li> <p> <code>AfterEndTime</code> - The supported <code>ValueList</code> is a list of all change sets that ended after the filter value.</p> </li> </ul>', ], ], 'VisibilityValue' => [ 'base' => NULL, 'refs' => [ 'EntitySummary$Visibility' => '<p>The visibility status of the entity to buyers. This value can be <code>Public</code> (everyone can view the entity), <code>Limited</code> (the entity is visible to limited accounts only), or <code>Restricted</code> (the entity was published and then unpublished and only existing buyers can view it). </p>', ], ], ],];
