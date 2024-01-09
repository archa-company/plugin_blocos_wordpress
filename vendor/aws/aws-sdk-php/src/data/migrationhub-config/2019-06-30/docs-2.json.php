<?php
// This file was auto-generated from sdk-root/src/data/migrationhub-config/2019-06-30/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>The AWS Migration Hub home region APIs are available specifically for working with your Migration Hub home region. You can use these APIs to determine a home region, as well as to create and work with controls that describe the home region.</p> <ul> <li> <p>You must make API calls for write actions (create, notify, associate, disassociate, import, or put) while in your home region, or a <code>HomeRegionNotSetException</code> error is returned.</p> </li> <li> <p>API calls for read actions (list, describe, stop, and delete) are permitted outside of your home region.</p> </li> <li> <p>If you call a write API outside the home region, an <code>InvalidInputException</code> is returned.</p> </li> <li> <p>You can call <code>GetHomeRegion</code> action to obtain the account\'s Migration Hub home region.</p> </li> </ul> <p>For specific API usage, see the sections that follow in this AWS Migration Hub Home Region API reference. </p>', 'operations' => [ 'CreateHomeRegionControl' => '<p>This API sets up the home region for the calling account only.</p>', 'DeleteHomeRegionControl' => '<p>This operation deletes the home region configuration for the calling account. The operation does not delete discovery or migration tracking data in the home region.</p>', 'DescribeHomeRegionControls' => '<p>This API permits filtering on the <code>ControlId</code> and <code>HomeRegion</code> fields.</p>', 'GetHomeRegion' => '<p>Returns the calling account’s home region, if configured. This API is used by other AWS services to determine the regional endpoint for calling AWS Application Discovery Service and Migration Hub. You must call <code>GetHomeRegion</code> at least once before you call any other AWS Application Discovery Service and AWS Migration Hub APIs, to obtain the account\'s Migration Hub home region.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>You do not have sufficient access to perform this action.</p>', 'refs' => [], ], 'ControlId' => [ 'base' => NULL, 'refs' => [ 'DeleteHomeRegionControlRequest$ControlId' => '<p>A unique identifier that\'s generated for each home region control. It\'s always a string that begins with "hrc-" followed by 12 lowercase letters and numbers.</p>', 'DescribeHomeRegionControlsRequest$ControlId' => '<p>The <code>ControlID</code> is a unique identifier string of your <code>HomeRegionControl</code> object.</p>', 'HomeRegionControl$ControlId' => '<p>A unique identifier that\'s generated for each home region control. It\'s always a string that begins with "hrc-" followed by 12 lowercase letters and numbers.</p>', ], ], 'CreateHomeRegionControlRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateHomeRegionControlResult' => [ 'base' => NULL, 'refs' => [], ], 'DeleteHomeRegionControlRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteHomeRegionControlResult' => [ 'base' => NULL, 'refs' => [], ], 'DescribeHomeRegionControlsMaxResults' => [ 'base' => NULL, 'refs' => [ 'DescribeHomeRegionControlsRequest$MaxResults' => '<p>The maximum number of filtering results to display per page. </p>', ], ], 'DescribeHomeRegionControlsRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeHomeRegionControlsResult' => [ 'base' => NULL, 'refs' => [], ], 'DryRun' => [ 'base' => NULL, 'refs' => [ 'CreateHomeRegionControlRequest$DryRun' => '<p>Optional Boolean flag to indicate whether any effect should take place. It tests whether the caller has permission to make the call.</p>', ], ], 'DryRunOperation' => [ 'base' => '<p>Exception raised to indicate that authorization of an action was successful, when the <code>DryRun</code> flag is set to true.</p>', 'refs' => [], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'DryRunOperation$Message' => NULL, 'InternalServerError$Message' => NULL, 'InvalidInputException$Message' => NULL, 'ServiceUnavailableException$Message' => NULL, 'ThrottlingException$Message' => NULL, ], ], 'GetHomeRegionRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetHomeRegionResult' => [ 'base' => NULL, 'refs' => [], ], 'HomeRegion' => [ 'base' => NULL, 'refs' => [ 'CreateHomeRegionControlRequest$HomeRegion' => '<p>The name of the home region of the calling account.</p>', 'DescribeHomeRegionControlsRequest$HomeRegion' => '<p>The name of the home region you\'d like to view.</p>', 'GetHomeRegionResult$HomeRegion' => '<p>The name of the home region of the calling account.</p>', 'HomeRegionControl$HomeRegion' => '<p>The AWS Region that\'s been set as home region. For example, "us-west-2" or "eu-central-1" are valid home regions.</p>', ], ], 'HomeRegionControl' => [ 'base' => '<p>A home region control is an object that specifies the home region for an account, with some additional information. It contains a target (always of type <code>ACCOUNT</code>), an ID, and a time at which the home region was set.</p>', 'refs' => [ 'CreateHomeRegionControlResult$HomeRegionControl' => '<p>This object is the <code>HomeRegionControl</code> object that\'s returned by a successful call to <code>CreateHomeRegionControl</code>.</p>', 'HomeRegionControls$member' => NULL, ], ], 'HomeRegionControls' => [ 'base' => NULL, 'refs' => [ 'DescribeHomeRegionControlsResult$HomeRegionControls' => '<p>An array that contains your <code>HomeRegionControl</code> objects.</p>', ], ], 'InternalServerError' => [ 'base' => '<p>Exception raised when an internal, configuration, or dependency error is encountered.</p>', 'refs' => [], ], 'InvalidInputException' => [ 'base' => '<p>Exception raised when the provided input violates a policy constraint or is entered in the wrong format or data type.</p>', 'refs' => [], ], 'RequestedTime' => [ 'base' => NULL, 'refs' => [ 'HomeRegionControl$RequestedTime' => '<p>A timestamp representing the time when the customer called <code>CreateHomeregionControl</code> and set the home region for the account.</p>', ], ], 'RetryAfterSeconds' => [ 'base' => NULL, 'refs' => [ 'ThrottlingException$RetryAfterSeconds' => '<p>The number of seconds the caller should wait before retrying.</p>', ], ], 'ServiceUnavailableException' => [ 'base' => '<p>Exception raised when a request fails due to temporary unavailability of the service.</p>', 'refs' => [], ], 'Target' => [ 'base' => '<p>The target parameter specifies the identifier to which the home region is applied, which is always an <code>ACCOUNT</code>. It applies the home region to the current <code>ACCOUNT</code>.</p>', 'refs' => [ 'CreateHomeRegionControlRequest$Target' => '<p>The account for which this command sets up a home region control. The <code>Target</code> is always of type <code>ACCOUNT</code>.</p>', 'DescribeHomeRegionControlsRequest$Target' => '<p>The target parameter specifies the identifier to which the home region is applied, which is always of type <code>ACCOUNT</code>. It applies the home region to the current <code>ACCOUNT</code>.</p>', 'HomeRegionControl$Target' => '<p>The target parameter specifies the identifier to which the home region is applied, which is always an <code>ACCOUNT</code>. It applies the home region to the current <code>ACCOUNT</code>.</p>', ], ], 'TargetId' => [ 'base' => NULL, 'refs' => [ 'Target$Id' => '<p>The <code>TargetID</code> is a 12-character identifier of the <code>ACCOUNT</code> for which the control was created. (This must be the current account.) </p>', ], ], 'TargetType' => [ 'base' => NULL, 'refs' => [ 'Target$Type' => '<p>The target type is always an <code>ACCOUNT</code>.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>The request was denied due to request throttling.</p>', 'refs' => [], ], 'Token' => [ 'base' => NULL, 'refs' => [ 'DescribeHomeRegionControlsRequest$NextToken' => '<p>If a <code>NextToken</code> was returned by a previous call, more results are available. To retrieve the next page of results, make the call again using the returned token in <code>NextToken</code>.</p>', 'DescribeHomeRegionControlsResult$NextToken' => '<p>If a <code>NextToken</code> was returned by a previous call, more results are available. To retrieve the next page of results, make the call again using the returned token in <code>NextToken</code>.</p>', ], ], ],];
