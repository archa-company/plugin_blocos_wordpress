<?php
// This file was auto-generated from sdk-root/src/data/rolesanywhere/2018-05-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2018-05-10', 'endpointPrefix' => 'rolesanywhere', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'IAM Roles Anywhere', 'serviceId' => 'RolesAnywhere', 'signatureVersion' => 'v4', 'signingName' => 'rolesanywhere', 'uid' => 'rolesanywhere-2018-05-10', ], 'operations' => [ 'CreateProfile' => [ 'name' => 'CreateProfile', 'http' => [ 'method' => 'POST', 'requestUri' => '/profiles', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateProfileRequest', ], 'output' => [ 'shape' => 'ProfileDetailResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'CreateTrustAnchor' => [ 'name' => 'CreateTrustAnchor', 'http' => [ 'method' => 'POST', 'requestUri' => '/trustanchors', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateTrustAnchorRequest', ], 'output' => [ 'shape' => 'TrustAnchorDetailResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DeleteCrl' => [ 'name' => 'DeleteCrl', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/crl/{crlId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarCrlRequest', ], 'output' => [ 'shape' => 'CrlDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DeleteProfile' => [ 'name' => 'DeleteProfile', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/profile/{profileId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarProfileRequest', ], 'output' => [ 'shape' => 'ProfileDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DeleteTrustAnchor' => [ 'name' => 'DeleteTrustAnchor', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/trustanchor/{trustAnchorId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarTrustAnchorRequest', ], 'output' => [ 'shape' => 'TrustAnchorDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DisableCrl' => [ 'name' => 'DisableCrl', 'http' => [ 'method' => 'POST', 'requestUri' => '/crl/{crlId}/disable', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarCrlRequest', ], 'output' => [ 'shape' => 'CrlDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DisableProfile' => [ 'name' => 'DisableProfile', 'http' => [ 'method' => 'POST', 'requestUri' => '/profile/{profileId}/disable', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarProfileRequest', ], 'output' => [ 'shape' => 'ProfileDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DisableTrustAnchor' => [ 'name' => 'DisableTrustAnchor', 'http' => [ 'method' => 'POST', 'requestUri' => '/trustanchor/{trustAnchorId}/disable', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarTrustAnchorRequest', ], 'output' => [ 'shape' => 'TrustAnchorDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'EnableCrl' => [ 'name' => 'EnableCrl', 'http' => [ 'method' => 'POST', 'requestUri' => '/crl/{crlId}/enable', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarCrlRequest', ], 'output' => [ 'shape' => 'CrlDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'EnableProfile' => [ 'name' => 'EnableProfile', 'http' => [ 'method' => 'POST', 'requestUri' => '/profile/{profileId}/enable', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarProfileRequest', ], 'output' => [ 'shape' => 'ProfileDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'EnableTrustAnchor' => [ 'name' => 'EnableTrustAnchor', 'http' => [ 'method' => 'POST', 'requestUri' => '/trustanchor/{trustAnchorId}/enable', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarTrustAnchorRequest', ], 'output' => [ 'shape' => 'TrustAnchorDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetCrl' => [ 'name' => 'GetCrl', 'http' => [ 'method' => 'GET', 'requestUri' => '/crl/{crlId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarCrlRequest', ], 'output' => [ 'shape' => 'CrlDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetProfile' => [ 'name' => 'GetProfile', 'http' => [ 'method' => 'GET', 'requestUri' => '/profile/{profileId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarProfileRequest', ], 'output' => [ 'shape' => 'ProfileDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetSubject' => [ 'name' => 'GetSubject', 'http' => [ 'method' => 'GET', 'requestUri' => '/subject/{subjectId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarSubjectRequest', ], 'output' => [ 'shape' => 'SubjectDetailResponse', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetTrustAnchor' => [ 'name' => 'GetTrustAnchor', 'http' => [ 'method' => 'GET', 'requestUri' => '/trustanchor/{trustAnchorId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ScalarTrustAnchorRequest', ], 'output' => [ 'shape' => 'TrustAnchorDetailResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ImportCrl' => [ 'name' => 'ImportCrl', 'http' => [ 'method' => 'POST', 'requestUri' => '/crls', 'responseCode' => 201, ], 'input' => [ 'shape' => 'ImportCrlRequest', ], 'output' => [ 'shape' => 'CrlDetailResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListCrls' => [ 'name' => 'ListCrls', 'http' => [ 'method' => 'GET', 'requestUri' => '/crls', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRequest', ], 'output' => [ 'shape' => 'ListCrlsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListProfiles' => [ 'name' => 'ListProfiles', 'http' => [ 'method' => 'GET', 'requestUri' => '/profiles', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRequest', ], 'output' => [ 'shape' => 'ListProfilesResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListSubjects' => [ 'name' => 'ListSubjects', 'http' => [ 'method' => 'GET', 'requestUri' => '/subjects', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRequest', ], 'output' => [ 'shape' => 'ListSubjectsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/ListTagsForResource', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListTrustAnchors' => [ 'name' => 'ListTrustAnchors', 'http' => [ 'method' => 'GET', 'requestUri' => '/trustanchors', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListRequest', ], 'output' => [ 'shape' => 'ListTrustAnchorsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'PutNotificationSettings' => [ 'name' => 'PutNotificationSettings', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/put-notifications-settings', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutNotificationSettingsRequest', ], 'output' => [ 'shape' => 'PutNotificationSettingsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ResetNotificationSettings' => [ 'name' => 'ResetNotificationSettings', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/reset-notifications-settings', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ResetNotificationSettingsRequest', ], 'output' => [ 'shape' => 'ResetNotificationSettingsResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/TagResource', 'responseCode' => 201, ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'TooManyTagsException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/UntagResource', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'UpdateCrl' => [ 'name' => 'UpdateCrl', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/crl/{crlId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateCrlRequest', ], 'output' => [ 'shape' => 'CrlDetailResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'UpdateProfile' => [ 'name' => 'UpdateProfile', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/profile/{profileId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateProfileRequest', ], 'output' => [ 'shape' => 'ProfileDetailResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'UpdateTrustAnchor' => [ 'name' => 'UpdateTrustAnchor', 'http' => [ 'method' => 'PATCH', 'requestUri' => '/trustanchor/{trustAnchorId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateTrustAnchorRequest', ], 'output' => [ 'shape' => 'TrustAnchorDetailResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AmazonResourceName' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'Blob' => [ 'type' => 'blob', ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'CreateProfileRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'roleArns', ], 'members' => [ 'durationSeconds' => [ 'shape' => 'CreateProfileRequestDurationSecondsInteger', ], 'enabled' => [ 'shape' => 'Boolean', ], 'managedPolicyArns' => [ 'shape' => 'ManagedPolicyList', ], 'name' => [ 'shape' => 'ResourceName', ], 'requireInstanceProperties' => [ 'shape' => 'Boolean', ], 'roleArns' => [ 'shape' => 'RoleArnList', ], 'sessionPolicy' => [ 'shape' => 'String', ], 'tags' => [ 'shape' => 'TagList', ], ], ], 'CreateProfileRequestDurationSecondsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 3600, 'min' => 900, ], 'CreateTrustAnchorRequest' => [ 'type' => 'structure', 'required' => [ 'name', 'source', ], 'members' => [ 'enabled' => [ 'shape' => 'Boolean', ], 'name' => [ 'shape' => 'ResourceName', ], 'notificationSettings' => [ 'shape' => 'NotificationSettings', ], 'source' => [ 'shape' => 'Source', ], 'tags' => [ 'shape' => 'TagList', ], ], ], 'CredentialSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'CredentialSummary', ], ], 'CredentialSummary' => [ 'type' => 'structure', 'members' => [ 'enabled' => [ 'shape' => 'Boolean', ], 'failed' => [ 'shape' => 'Boolean', ], 'issuer' => [ 'shape' => 'String', ], 'seenAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'serialNumber' => [ 'shape' => 'String', ], 'x509CertificateData' => [ 'shape' => 'String', ], ], ], 'CrlDetail' => [ 'type' => 'structure', 'members' => [ 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'crlArn' => [ 'shape' => 'String', ], 'crlData' => [ 'shape' => 'Blob', ], 'crlId' => [ 'shape' => 'Uuid', ], 'enabled' => [ 'shape' => 'Boolean', ], 'name' => [ 'shape' => 'String', ], 'trustAnchorArn' => [ 'shape' => 'String', ], 'updatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], ], ], 'CrlDetailResponse' => [ 'type' => 'structure', 'required' => [ 'crl', ], 'members' => [ 'crl' => [ 'shape' => 'CrlDetail', ], ], ], 'CrlDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'CrlDetail', ], ], 'ImportCrlRequest' => [ 'type' => 'structure', 'required' => [ 'crlData', 'name', 'trustAnchorArn', ], 'members' => [ 'crlData' => [ 'shape' => 'ImportCrlRequestCrlDataBlob', ], 'enabled' => [ 'shape' => 'Boolean', ], 'name' => [ 'shape' => 'ResourceName', ], 'tags' => [ 'shape' => 'TagList', ], 'trustAnchorArn' => [ 'shape' => 'TrustAnchorArn', ], ], ], 'ImportCrlRequestCrlDataBlob' => [ 'type' => 'blob', 'max' => 300000, 'min' => 1, ], 'InstanceProperties' => [ 'type' => 'list', 'member' => [ 'shape' => 'InstanceProperty', ], ], 'InstanceProperty' => [ 'type' => 'structure', 'members' => [ 'failed' => [ 'shape' => 'Boolean', ], 'properties' => [ 'shape' => 'InstancePropertyMap', ], 'seenAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], ], ], 'InstancePropertyMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'InstancePropertyMapKeyString', ], 'value' => [ 'shape' => 'InstancePropertyMapValueString', ], 'max' => 50, 'min' => 0, ], 'InstancePropertyMapKeyString' => [ 'type' => 'string', 'max' => 200, 'min' => 1, ], 'InstancePropertyMapValueString' => [ 'type' => 'string', 'max' => 200, 'min' => 1, ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'ListCrlsResponse' => [ 'type' => 'structure', 'members' => [ 'crls' => [ 'shape' => 'CrlDetails', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListProfilesResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'profiles' => [ 'shape' => 'ProfileDetails', ], ], ], 'ListRequest' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'ListRequestNextTokenString', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'pageSize' => [ 'shape' => 'Integer', 'location' => 'querystring', 'locationName' => 'pageSize', ], ], ], 'ListRequestNextTokenString' => [ 'type' => 'string', 'max' => 10000, 'min' => 1, ], 'ListSubjectsResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'subjects' => [ 'shape' => 'SubjectSummaries', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'AmazonResourceName', 'location' => 'querystring', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'tags' => [ 'shape' => 'TagList', ], ], ], 'ListTrustAnchorsResponse' => [ 'type' => 'structure', 'members' => [ 'nextToken' => [ 'shape' => 'String', ], 'trustAnchors' => [ 'shape' => 'TrustAnchorDetails', ], ], ], 'ManagedPolicyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ManagedPolicyListMemberString', ], 'max' => 50, 'min' => 0, ], 'ManagedPolicyListMemberString' => [ 'type' => 'string', 'max' => 200, 'min' => 1, ], 'NotificationChannel' => [ 'type' => 'string', 'enum' => [ 'ALL', ], ], 'NotificationEvent' => [ 'type' => 'string', 'enum' => [ 'CA_CERTIFICATE_EXPIRY', 'END_ENTITY_CERTIFICATE_EXPIRY', ], ], 'NotificationSetting' => [ 'type' => 'structure', 'required' => [ 'enabled', 'event', ], 'members' => [ 'channel' => [ 'shape' => 'NotificationChannel', ], 'enabled' => [ 'shape' => 'Boolean', ], 'event' => [ 'shape' => 'NotificationEvent', ], 'threshold' => [ 'shape' => 'NotificationSettingThresholdInteger', ], ], ], 'NotificationSettingDetail' => [ 'type' => 'structure', 'required' => [ 'enabled', 'event', ], 'members' => [ 'channel' => [ 'shape' => 'NotificationChannel', ], 'configuredBy' => [ 'shape' => 'NotificationSettingDetailConfiguredByString', ], 'enabled' => [ 'shape' => 'Boolean', ], 'event' => [ 'shape' => 'NotificationEvent', ], 'threshold' => [ 'shape' => 'NotificationSettingDetailThresholdInteger', ], ], ], 'NotificationSettingDetailConfiguredByString' => [ 'type' => 'string', 'max' => 200, 'min' => 1, ], 'NotificationSettingDetailThresholdInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 360, 'min' => 1, ], 'NotificationSettingDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotificationSettingDetail', ], 'max' => 50, 'min' => 0, ], 'NotificationSettingKey' => [ 'type' => 'structure', 'required' => [ 'event', ], 'members' => [ 'channel' => [ 'shape' => 'NotificationChannel', ], 'event' => [ 'shape' => 'NotificationEvent', ], ], ], 'NotificationSettingKeys' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotificationSettingKey', ], 'max' => 50, 'min' => 0, ], 'NotificationSettingThresholdInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 360, 'min' => 1, ], 'NotificationSettings' => [ 'type' => 'list', 'member' => [ 'shape' => 'NotificationSetting', ], 'max' => 50, 'min' => 0, ], 'ProfileArn' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, 'pattern' => '^arn:aws(-[^:]+)?:rolesanywhere(:.*){2}(:profile.*)$', ], 'ProfileDetail' => [ 'type' => 'structure', 'members' => [ 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'createdBy' => [ 'shape' => 'String', ], 'durationSeconds' => [ 'shape' => 'Integer', ], 'enabled' => [ 'shape' => 'Boolean', ], 'managedPolicyArns' => [ 'shape' => 'ManagedPolicyList', ], 'name' => [ 'shape' => 'ResourceName', ], 'profileArn' => [ 'shape' => 'ProfileArn', ], 'profileId' => [ 'shape' => 'Uuid', ], 'requireInstanceProperties' => [ 'shape' => 'Boolean', ], 'roleArns' => [ 'shape' => 'RoleArnList', ], 'sessionPolicy' => [ 'shape' => 'String', ], 'updatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], ], ], 'ProfileDetailResponse' => [ 'type' => 'structure', 'members' => [ 'profile' => [ 'shape' => 'ProfileDetail', ], ], ], 'ProfileDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProfileDetail', ], ], 'PutNotificationSettingsRequest' => [ 'type' => 'structure', 'required' => [ 'notificationSettings', 'trustAnchorId', ], 'members' => [ 'notificationSettings' => [ 'shape' => 'NotificationSettings', ], 'trustAnchorId' => [ 'shape' => 'Uuid', ], ], ], 'PutNotificationSettingsResponse' => [ 'type' => 'structure', 'required' => [ 'trustAnchor', ], 'members' => [ 'trustAnchor' => [ 'shape' => 'TrustAnchorDetail', ], ], ], 'ResetNotificationSettingsRequest' => [ 'type' => 'structure', 'required' => [ 'notificationSettingKeys', 'trustAnchorId', ], 'members' => [ 'notificationSettingKeys' => [ 'shape' => 'NotificationSettingKeys', ], 'trustAnchorId' => [ 'shape' => 'Uuid', ], ], ], 'ResetNotificationSettingsResponse' => [ 'type' => 'structure', 'required' => [ 'trustAnchor', ], 'members' => [ 'trustAnchor' => [ 'shape' => 'TrustAnchorDetail', ], ], ], 'ResourceName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^[ a-zA-Z0-9-_]*$', ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'RoleArn' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, 'pattern' => '^arn:aws(-[^:]+)?:iam(:.*){2}(:role.*)$', ], 'RoleArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RoleArn', ], 'max' => 50, 'min' => 0, ], 'ScalarCrlRequest' => [ 'type' => 'structure', 'required' => [ 'crlId', ], 'members' => [ 'crlId' => [ 'shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'crlId', ], ], ], 'ScalarProfileRequest' => [ 'type' => 'structure', 'required' => [ 'profileId', ], 'members' => [ 'profileId' => [ 'shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'profileId', ], ], ], 'ScalarSubjectRequest' => [ 'type' => 'structure', 'required' => [ 'subjectId', ], 'members' => [ 'subjectId' => [ 'shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'subjectId', ], ], ], 'ScalarTrustAnchorRequest' => [ 'type' => 'structure', 'required' => [ 'trustAnchorId', ], 'members' => [ 'trustAnchorId' => [ 'shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'trustAnchorId', ], ], ], 'Source' => [ 'type' => 'structure', 'members' => [ 'sourceData' => [ 'shape' => 'SourceData', ], 'sourceType' => [ 'shape' => 'TrustAnchorType', ], ], ], 'SourceData' => [ 'type' => 'structure', 'members' => [ 'acmPcaArn' => [ 'shape' => 'String', ], 'x509CertificateData' => [ 'shape' => 'SourceDataX509CertificateDataString', ], ], 'union' => true, ], 'SourceDataX509CertificateDataString' => [ 'type' => 'string', 'max' => 8000, 'min' => 1, ], 'String' => [ 'type' => 'string', ], 'SubjectDetail' => [ 'type' => 'structure', 'members' => [ 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'credentials' => [ 'shape' => 'CredentialSummaries', ], 'enabled' => [ 'shape' => 'Boolean', ], 'instanceProperties' => [ 'shape' => 'InstanceProperties', ], 'lastSeenAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'subjectArn' => [ 'shape' => 'String', ], 'subjectId' => [ 'shape' => 'Uuid', ], 'updatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'x509Subject' => [ 'shape' => 'String', ], ], ], 'SubjectDetailResponse' => [ 'type' => 'structure', 'members' => [ 'subject' => [ 'shape' => 'SubjectDetail', ], ], ], 'SubjectSummaries' => [ 'type' => 'list', 'member' => [ 'shape' => 'SubjectSummary', ], ], 'SubjectSummary' => [ 'type' => 'structure', 'members' => [ 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'enabled' => [ 'shape' => 'Boolean', ], 'lastSeenAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'subjectArn' => [ 'shape' => 'String', ], 'subjectId' => [ 'shape' => 'Uuid', ], 'updatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'x509Subject' => [ 'shape' => 'String', ], ], ], 'SyntheticTimestamp_date_time' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'key', 'value', ], 'members' => [ 'key' => [ 'shape' => 'TagKey', ], 'value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, 'pattern' => '^[ a-zA-Z0-9_.:/=+@-]*$', 'sensitive' => true, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 200, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tags', ], 'members' => [ 'resourceArn' => [ 'shape' => 'AmazonResourceName', ], 'tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, 'pattern' => '^[ a-zA-Z0-9_.:/=+@-]*$', 'sensitive' => true, ], 'TooManyTagsException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'TrustAnchorArn' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, 'pattern' => '^arn:aws(-[^:]+)?:rolesanywhere(:.*){2}(:trust-anchor.*)$', ], 'TrustAnchorDetail' => [ 'type' => 'structure', 'members' => [ 'createdAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'enabled' => [ 'shape' => 'Boolean', ], 'name' => [ 'shape' => 'ResourceName', ], 'notificationSettings' => [ 'shape' => 'NotificationSettingDetails', ], 'source' => [ 'shape' => 'Source', ], 'trustAnchorArn' => [ 'shape' => 'String', ], 'trustAnchorId' => [ 'shape' => 'Uuid', ], 'updatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], ], ], 'TrustAnchorDetailResponse' => [ 'type' => 'structure', 'required' => [ 'trustAnchor', ], 'members' => [ 'trustAnchor' => [ 'shape' => 'TrustAnchorDetail', ], ], ], 'TrustAnchorDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'TrustAnchorDetail', ], ], 'TrustAnchorType' => [ 'type' => 'string', 'enum' => [ 'AWS_ACM_PCA', 'CERTIFICATE_BUNDLE', 'SELF_SIGNED_REPOSITORY', ], ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'AmazonResourceName', ], 'tagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateCrlRequest' => [ 'type' => 'structure', 'required' => [ 'crlId', ], 'members' => [ 'crlData' => [ 'shape' => 'UpdateCrlRequestCrlDataBlob', ], 'crlId' => [ 'shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'crlId', ], 'name' => [ 'shape' => 'ResourceName', ], ], ], 'UpdateCrlRequestCrlDataBlob' => [ 'type' => 'blob', 'max' => 300000, 'min' => 1, ], 'UpdateProfileRequest' => [ 'type' => 'structure', 'required' => [ 'profileId', ], 'members' => [ 'durationSeconds' => [ 'shape' => 'UpdateProfileRequestDurationSecondsInteger', ], 'managedPolicyArns' => [ 'shape' => 'ManagedPolicyList', ], 'name' => [ 'shape' => 'ResourceName', ], 'profileId' => [ 'shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'profileId', ], 'roleArns' => [ 'shape' => 'RoleArnList', ], 'sessionPolicy' => [ 'shape' => 'UpdateProfileRequestSessionPolicyString', ], ], ], 'UpdateProfileRequestDurationSecondsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 3600, 'min' => 900, ], 'UpdateProfileRequestSessionPolicyString' => [ 'type' => 'string', 'max' => 100000, 'min' => 1, ], 'UpdateTrustAnchorRequest' => [ 'type' => 'structure', 'required' => [ 'trustAnchorId', ], 'members' => [ 'name' => [ 'shape' => 'ResourceName', ], 'source' => [ 'shape' => 'Source', ], 'trustAnchorId' => [ 'shape' => 'Uuid', 'location' => 'uri', 'locationName' => 'trustAnchorId', ], ], ], 'Uuid' => [ 'type' => 'string', 'max' => 36, 'min' => 36, 'pattern' => '[a-f0-9]{8}-([a-z0-9]{4}-){3}[a-z0-9]{12}', ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];
