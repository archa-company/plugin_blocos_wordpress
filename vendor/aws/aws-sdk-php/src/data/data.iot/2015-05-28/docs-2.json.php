<?php
// This file was auto-generated from sdk-root/src/data/data.iot/2015-05-28/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>IoT data</fullname> <p>IoT data enables secure, bi-directional communication between Internet-connected things (such as sensors, actuators, embedded devices, or smart appliances) and the Amazon Web Services cloud. It implements a broker for applications and things to publish messages over HTTP (Publish) and retrieve, update, and delete shadows. A shadow is a persistent representation of your things and their state in the Amazon Web Services cloud.</p> <p>Find the endpoint address for actions in IoT data by running this CLI command:</p> <p> <code>aws iot describe-endpoint --endpoint-type iot:Data-ATS</code> </p> <p>The service name used by <a href="https://docs.aws.amazon.com/general/latest/gr/signature-version-4.html">Amazon Web ServicesSignature Version 4</a> to sign requests is: <i>iotdevicegateway</i>.</p>', 'operations' => [ 'DeleteThingShadow' => '<p>Deletes the shadow for the specified thing.</p> <p>Requires permission to access the <a href="https://docs.aws.amazon.com/service-authorization/latest/reference/list_awsiot.html#awsiot-actions-as-permissions">DeleteThingShadow</a> action.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/iot/latest/developerguide/API_DeleteThingShadow.html">DeleteThingShadow</a> in the IoT Developer Guide.</p>', 'GetRetainedMessage' => '<p>Gets the details of a single retained message for the specified topic.</p> <p>This action returns the message payload of the retained message, which can incur messaging costs. To list only the topic names of the retained messages, call <a href="https://docs.aws.amazon.com/iot/latest/apireference/API_iotdata_ListRetainedMessages.html">ListRetainedMessages</a>.</p> <p>Requires permission to access the <a href="https://docs.aws.amazon.com/service-authorization/latest/reference/list_awsiotfleethubfordevicemanagement.html#awsiotfleethubfordevicemanagement-actions-as-permissions">GetRetainedMessage</a> action.</p> <p>For more information about messaging costs, see <a href="http://aws.amazon.com/iot-core/pricing/#Messaging">Amazon Web Services IoT Core pricing - Messaging</a>.</p>', 'GetThingShadow' => '<p>Gets the shadow for the specified thing.</p> <p>Requires permission to access the <a href="https://docs.aws.amazon.com/service-authorization/latest/reference/list_awsiot.html#awsiot-actions-as-permissions">GetThingShadow</a> action.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/iot/latest/developerguide/API_GetThingShadow.html">GetThingShadow</a> in the IoT Developer Guide.</p>', 'ListNamedShadowsForThing' => '<p>Lists the shadows for the specified thing.</p> <p>Requires permission to access the <a href="https://docs.aws.amazon.com/service-authorization/latest/reference/list_awsiot.html#awsiot-actions-as-permissions">ListNamedShadowsForThing</a> action.</p>', 'ListRetainedMessages' => '<p>Lists summary information about the retained messages stored for the account.</p> <p>This action returns only the topic names of the retained messages. It doesn\'t return any message payloads. Although this action doesn\'t return a message payload, it can still incur messaging costs.</p> <p>To get the message payload of a retained message, call <a href="https://docs.aws.amazon.com/iot/latest/apireference/API_iotdata_GetRetainedMessage.html">GetRetainedMessage</a> with the topic name of the retained message.</p> <p>Requires permission to access the <a href="https://docs.aws.amazon.com/service-authorization/latest/reference/list_awsiotfleethubfordevicemanagement.html#awsiotfleethubfordevicemanagement-actions-as-permissions">ListRetainedMessages</a> action.</p> <p>For more information about messaging costs, see <a href="http://aws.amazon.com/iot-core/pricing/#Messaging">Amazon Web Services IoT Core pricing - Messaging</a>.</p>', 'Publish' => '<p>Publishes an MQTT message.</p> <p>Requires permission to access the <a href="https://docs.aws.amazon.com/service-authorization/latest/reference/list_awsiot.html#awsiot-actions-as-permissions">Publish</a> action.</p> <p>For more information about MQTT messages, see <a href="http://docs.aws.amazon.com/iot/latest/developerguide/mqtt.html">MQTT Protocol</a> in the IoT Developer Guide.</p> <p>For more information about messaging costs, see <a href="http://aws.amazon.com/iot-core/pricing/#Messaging">Amazon Web Services IoT Core pricing - Messaging</a>.</p>', 'UpdateThingShadow' => '<p>Updates the shadow for the specified thing.</p> <p>Requires permission to access the <a href="https://docs.aws.amazon.com/service-authorization/latest/reference/list_awsiot.html#awsiot-actions-as-permissions">UpdateThingShadow</a> action.</p> <p>For more information, see <a href="http://docs.aws.amazon.com/iot/latest/developerguide/API_UpdateThingShadow.html">UpdateThingShadow</a> in the IoT Developer Guide.</p>', ], 'shapes' => [ 'ConflictException' => [ 'base' => '<p>The specified version does not match the version of the document.</p>', 'refs' => [], ], 'ContentType' => [ 'base' => NULL, 'refs' => [ 'PublishRequest$contentType' => '<p>A UTF-8 encoded string that describes the content of the publishing message.</p>', ], ], 'CorrelationData' => [ 'base' => NULL, 'refs' => [ 'PublishRequest$correlationData' => '<p>The base64-encoded binary data used by the sender of the request message to identify which request the response message is for when it\'s received. <code>correlationData</code> is an HTTP header value in the API.</p>', ], ], 'DeleteThingShadowRequest' => [ 'base' => '<p>The input for the DeleteThingShadow operation.</p>', 'refs' => [], ], 'DeleteThingShadowResponse' => [ 'base' => '<p>The output from the DeleteThingShadow operation.</p>', 'refs' => [], ], 'GetRetainedMessageRequest' => [ 'base' => '<p>The input for the GetRetainedMessage operation.</p>', 'refs' => [], ], 'GetRetainedMessageResponse' => [ 'base' => '<p>The output from the GetRetainedMessage operation.</p>', 'refs' => [], ], 'GetThingShadowRequest' => [ 'base' => '<p>The input for the GetThingShadow operation.</p>', 'refs' => [], ], 'GetThingShadowResponse' => [ 'base' => '<p>The output from the GetThingShadow operation.</p>', 'refs' => [], ], 'InternalFailureException' => [ 'base' => '<p>An unexpected error has occurred.</p>', 'refs' => [], ], 'InvalidRequestException' => [ 'base' => '<p>The request is not valid.</p>', 'refs' => [], ], 'JsonDocument' => [ 'base' => NULL, 'refs' => [ 'DeleteThingShadowResponse$payload' => '<p>The state information, in JSON format.</p>', 'GetThingShadowResponse$payload' => '<p>The state information, in JSON format.</p>', 'UpdateThingShadowRequest$payload' => '<p>The state information, in JSON format.</p>', 'UpdateThingShadowResponse$payload' => '<p>The state information, in JSON format.</p>', ], ], 'ListNamedShadowsForThingRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListNamedShadowsForThingResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListRetainedMessagesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListRetainedMessagesResponse' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListRetainedMessagesRequest$maxResults' => '<p>The maximum number of results to return at one time.</p>', ], ], 'MessageExpiry' => [ 'base' => NULL, 'refs' => [ 'PublishRequest$messageExpiry' => '<p>A user-defined integer value that represents the message expiry interval in seconds. If absent, the message doesn\'t expire. For more information about the limits of <code>messageExpiry</code>, see <a href="https://docs.aws.amazon.com/general/latest/gr/iot-core.html#message-broker-limits">Amazon Web Services IoT Core message broker and protocol limits and quotas </a> from the Amazon Web Services Reference Guide.</p>', ], ], 'MethodNotAllowedException' => [ 'base' => '<p>The specified combination of HTTP verb and URI is not supported.</p>', 'refs' => [], ], 'NamedShadowList' => [ 'base' => NULL, 'refs' => [ 'ListNamedShadowsForThingResponse$results' => '<p>The list of shadows for the specified thing.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListNamedShadowsForThingRequest$nextToken' => '<p>The token to retrieve the next set of results.</p>', 'ListNamedShadowsForThingResponse$nextToken' => '<p>The token to use to get the next set of results, or <b>null</b> if there are no additional results.</p>', 'ListRetainedMessagesRequest$nextToken' => '<p>To retrieve the next set of results, the <code>nextToken</code> value from a previous response; otherwise <b>null</b> to receive the first set of results.</p>', 'ListRetainedMessagesResponse$nextToken' => '<p>The token for the next set of results, or null if there are no additional results.</p>', ], ], 'PageSize' => [ 'base' => NULL, 'refs' => [ 'ListNamedShadowsForThingRequest$pageSize' => '<p>The result page size.</p>', ], ], 'Payload' => [ 'base' => NULL, 'refs' => [ 'GetRetainedMessageResponse$payload' => '<p>The Base64-encoded message payload of the retained message body.</p>', 'PublishRequest$payload' => '<p>The message body. MQTT accepts text, binary, and empty (null) message payloads.</p> <p>Publishing an empty (null) payload with <b>retain</b> = <code>true</code> deletes the retained message identified by <b>topic</b> from Amazon Web Services IoT Core.</p>', ], ], 'PayloadFormatIndicator' => [ 'base' => NULL, 'refs' => [ 'PublishRequest$payloadFormatIndicator' => '<p>An <code>Enum</code> string value that indicates whether the payload is formatted as UTF-8. <code>payloadFormatIndicator</code> is an HTTP header value in the API.</p>', ], ], 'PayloadSize' => [ 'base' => NULL, 'refs' => [ 'RetainedMessageSummary$payloadSize' => '<p>The size of the retained message\'s payload in bytes.</p>', ], ], 'PublishRequest' => [ 'base' => '<p>The input for the Publish operation.</p>', 'refs' => [], ], 'Qos' => [ 'base' => NULL, 'refs' => [ 'GetRetainedMessageResponse$qos' => '<p>The quality of service (QoS) level used to publish the retained message.</p>', 'PublishRequest$qos' => '<p>The Quality of Service (QoS) level. The default QoS level is 0.</p>', 'RetainedMessageSummary$qos' => '<p>The quality of service (QoS) level used to publish the retained message.</p>', ], ], 'RequestEntityTooLargeException' => [ 'base' => '<p>The payload exceeds the maximum size allowed.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource does not exist.</p>', 'refs' => [], ], 'ResponseTopic' => [ 'base' => NULL, 'refs' => [ 'PublishRequest$responseTopic' => '<p>A UTF-8 encoded string that\'s used as the topic name for a response message. The response topic is used to describe the topic which the receiver should publish to as part of the request-response flow. The topic must not contain wildcard characters.</p>', ], ], 'Retain' => [ 'base' => NULL, 'refs' => [ 'PublishRequest$retain' => '<p>A Boolean value that determines whether to set the RETAIN flag when the message is published.</p> <p>Setting the RETAIN flag causes the message to be retained and sent to new subscribers to the topic.</p> <p>Valid values: <code>true</code> | <code>false</code> </p> <p>Default value: <code>false</code> </p>', ], ], 'RetainedMessageList' => [ 'base' => NULL, 'refs' => [ 'ListRetainedMessagesResponse$retainedTopics' => '<p>A summary list the account\'s retained messages. The information returned doesn\'t include the message payloads of the retained messages.</p>', ], ], 'RetainedMessageSummary' => [ 'base' => '<p>Information about a single retained message.</p>', 'refs' => [ 'RetainedMessageList$member' => NULL, ], ], 'ServiceUnavailableException' => [ 'base' => '<p>The service is temporarily unavailable.</p>', 'refs' => [], ], 'ShadowName' => [ 'base' => NULL, 'refs' => [ 'DeleteThingShadowRequest$shadowName' => '<p>The name of the shadow.</p>', 'GetThingShadowRequest$shadowName' => '<p>The name of the shadow.</p>', 'NamedShadowList$member' => NULL, 'UpdateThingShadowRequest$shadowName' => '<p>The name of the shadow.</p>', ], ], 'ThingName' => [ 'base' => NULL, 'refs' => [ 'DeleteThingShadowRequest$thingName' => '<p>The name of the thing.</p>', 'GetThingShadowRequest$thingName' => '<p>The name of the thing.</p>', 'ListNamedShadowsForThingRequest$thingName' => '<p>The name of the thing.</p>', 'UpdateThingShadowRequest$thingName' => '<p>The name of the thing.</p>', ], ], 'ThrottlingException' => [ 'base' => '<p>The rate exceeds the limit.</p>', 'refs' => [], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'GetRetainedMessageResponse$lastModifiedTime' => '<p>The Epoch date and time, in milliseconds, when the retained message was stored by IoT.</p>', 'ListNamedShadowsForThingResponse$timestamp' => '<p>The Epoch date and time the response was generated by IoT.</p>', 'RetainedMessageSummary$lastModifiedTime' => '<p>The Epoch date and time, in milliseconds, when the retained message was stored by IoT.</p>', ], ], 'Topic' => [ 'base' => NULL, 'refs' => [ 'GetRetainedMessageRequest$topic' => '<p>The topic name of the retained message to retrieve.</p>', 'GetRetainedMessageResponse$topic' => '<p>The topic name to which the retained message was published.</p>', 'PublishRequest$topic' => '<p>The name of the MQTT topic.</p>', 'RetainedMessageSummary$topic' => '<p>The topic name to which the retained message was published.</p>', ], ], 'UnauthorizedException' => [ 'base' => '<p>You are not authorized to perform this operation.</p>', 'refs' => [], ], 'UnsupportedDocumentEncodingException' => [ 'base' => '<p>The document encoding is not supported.</p>', 'refs' => [], ], 'UpdateThingShadowRequest' => [ 'base' => '<p>The input for the UpdateThingShadow operation.</p>', 'refs' => [], ], 'UpdateThingShadowResponse' => [ 'base' => '<p>The output from the UpdateThingShadow operation.</p>', 'refs' => [], ], 'UserProperties' => [ 'base' => NULL, 'refs' => [ 'PublishRequest$userProperties' => '<p>A JSON string that contains an array of JSON objects. If you don’t use Amazon Web Services SDK or CLI, you must encode the JSON string to base64 format before adding it to the HTTP header. <code>userProperties</code> is an HTTP header value in the API.</p> <p>The following example <code>userProperties</code> parameter is a JSON string which represents two User Properties. Note that it needs to be base64-encoded:</p> <p> <code>[{"deviceName": "alpha"}, {"deviceCnt": "45"}]</code> </p>', ], ], 'UserPropertiesBlob' => [ 'base' => NULL, 'refs' => [ 'GetRetainedMessageResponse$userProperties' => '<p>A base64-encoded JSON string that includes an array of JSON objects, or null if the retained message doesn\'t include any user properties.</p> <p>The following example <code>userProperties</code> parameter is a JSON string that represents two user properties. Note that it will be base64-encoded:</p> <p> <code>[{"deviceName": "alpha"}, {"deviceCnt": "45"}]</code> </p>', ], ], 'errorMessage' => [ 'base' => NULL, 'refs' => [ 'ConflictException$message' => '<p>The message for the exception.</p>', 'InternalFailureException$message' => '<p>The message for the exception.</p>', 'InvalidRequestException$message' => '<p>The message for the exception.</p>', 'MethodNotAllowedException$message' => '<p>The message for the exception.</p>', 'RequestEntityTooLargeException$message' => '<p>The message for the exception.</p>', 'ResourceNotFoundException$message' => '<p>The message for the exception.</p>', 'ServiceUnavailableException$message' => '<p>The message for the exception.</p>', 'ThrottlingException$message' => '<p>The message for the exception.</p>', 'UnauthorizedException$message' => '<p>The message for the exception.</p>', 'UnsupportedDocumentEncodingException$message' => '<p>The message for the exception.</p>', ], ], ],];
