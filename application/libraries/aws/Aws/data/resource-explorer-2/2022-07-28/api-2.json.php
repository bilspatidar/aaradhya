<?php
// This file was auto-generated from sdk-root/src/data/resource-explorer-2/2022-07-28/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2022-07-28', 'endpointPrefix' => 'resource-explorer-2', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'AWS Resource Explorer', 'serviceId' => 'Resource Explorer 2', 'signatureVersion' => 'v4', 'signingName' => 'resource-explorer-2', 'uid' => 'resource-explorer-2-2022-07-28', ], 'operations' => [ 'AssociateDefaultView' => [ 'name' => 'AssociateDefaultView', 'http' => [ 'method' => 'POST', 'requestUri' => '/AssociateDefaultView', 'responseCode' => 200, ], 'input' => [ 'shape' => 'AssociateDefaultViewInput', ], 'output' => [ 'shape' => 'AssociateDefaultViewOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'BatchGetView' => [ 'name' => 'BatchGetView', 'http' => [ 'method' => 'POST', 'requestUri' => '/BatchGetView', 'responseCode' => 200, ], 'input' => [ 'shape' => 'BatchGetViewInput', ], 'output' => [ 'shape' => 'BatchGetViewOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'CreateIndex' => [ 'name' => 'CreateIndex', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateIndex', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateIndexInput', ], 'output' => [ 'shape' => 'CreateIndexOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'CreateView' => [ 'name' => 'CreateView', 'http' => [ 'method' => 'POST', 'requestUri' => '/CreateView', 'responseCode' => 200, ], 'input' => [ 'shape' => 'CreateViewInput', ], 'output' => [ 'shape' => 'CreateViewOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'DeleteIndex' => [ 'name' => 'DeleteIndex', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteIndex', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteIndexInput', ], 'output' => [ 'shape' => 'DeleteIndexOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DeleteView' => [ 'name' => 'DeleteView', 'http' => [ 'method' => 'POST', 'requestUri' => '/DeleteView', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteViewInput', ], 'output' => [ 'shape' => 'DeleteViewOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'DisassociateDefaultView' => [ 'name' => 'DisassociateDefaultView', 'http' => [ 'method' => 'POST', 'requestUri' => '/DisassociateDefaultView', 'responseCode' => 200, ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'GetDefaultView' => [ 'name' => 'GetDefaultView', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetDefaultView', 'responseCode' => 200, ], 'output' => [ 'shape' => 'GetDefaultViewOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetIndex' => [ 'name' => 'GetIndex', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetIndex', 'responseCode' => 200, ], 'output' => [ 'shape' => 'GetIndexOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'GetView' => [ 'name' => 'GetView', 'http' => [ 'method' => 'POST', 'requestUri' => '/GetView', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetViewInput', ], 'output' => [ 'shape' => 'GetViewOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListIndexes' => [ 'name' => 'ListIndexes', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListIndexes', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListIndexesInput', ], 'output' => [ 'shape' => 'ListIndexesOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListSupportedResourceTypes' => [ 'name' => 'ListSupportedResourceTypes', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListSupportedResourceTypes', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListSupportedResourceTypesInput', ], 'output' => [ 'shape' => 'ListSupportedResourceTypesOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'GET', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListTagsForResourceInput', ], 'output' => [ 'shape' => 'ListTagsForResourceOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'ListViews' => [ 'name' => 'ListViews', 'http' => [ 'method' => 'POST', 'requestUri' => '/ListViews', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListViewsInput', ], 'output' => [ 'shape' => 'ListViewsOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'Search' => [ 'name' => 'Search', 'http' => [ 'method' => 'POST', 'requestUri' => '/Search', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SearchInput', ], 'output' => [ 'shape' => 'SearchOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'TagResourceInput', ], 'output' => [ 'shape' => 'TagResourceOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], 'idempotent' => true, ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/tags/{resourceArn}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UntagResourceInput', ], 'output' => [ 'shape' => 'UntagResourceOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'UpdateIndexType' => [ 'name' => 'UpdateIndexType', 'http' => [ 'method' => 'POST', 'requestUri' => '/UpdateIndexType', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateIndexTypeInput', ], 'output' => [ 'shape' => 'UpdateIndexTypeOutput', ], 'errors' => [ [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], 'UpdateView' => [ 'name' => 'UpdateView', 'http' => [ 'method' => 'POST', 'requestUri' => '/UpdateView', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateViewInput', ], 'output' => [ 'shape' => 'UpdateViewOutput', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'UnauthorizedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 403, 'senderFault' => true, ], 'exception' => true, ], 'AssociateDefaultViewInput' => [ 'type' => 'structure', 'required' => [ 'ViewArn', ], 'members' => [ 'ViewArn' => [ 'shape' => 'AssociateDefaultViewInputViewArnString', ], ], ], 'AssociateDefaultViewInputViewArnString' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'AssociateDefaultViewOutput' => [ 'type' => 'structure', 'members' => [ 'ViewArn' => [ 'shape' => 'String', ], ], ], 'BatchGetViewError' => [ 'type' => 'structure', 'required' => [ 'ErrorMessage', 'ViewArn', ], 'members' => [ 'ErrorMessage' => [ 'shape' => 'String', ], 'ViewArn' => [ 'shape' => 'String', ], ], ], 'BatchGetViewErrors' => [ 'type' => 'list', 'member' => [ 'shape' => 'BatchGetViewError', ], ], 'BatchGetViewInput' => [ 'type' => 'structure', 'members' => [ 'ViewArns' => [ 'shape' => 'BatchGetViewInputViewArnsList', ], ], ], 'BatchGetViewInputViewArnsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], 'max' => 20, 'min' => 1, ], 'BatchGetViewOutput' => [ 'type' => 'structure', 'members' => [ 'Errors' => [ 'shape' => 'BatchGetViewErrors', ], 'Views' => [ 'shape' => 'ViewList', ], ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateIndexInput' => [ 'type' => 'structure', 'members' => [ 'ClientToken' => [ 'shape' => 'String', 'idempotencyToken' => true, ], 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'CreateIndexOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'CreatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'State' => [ 'shape' => 'IndexState', ], ], ], 'CreateViewInput' => [ 'type' => 'structure', 'required' => [ 'ViewName', ], 'members' => [ 'ClientToken' => [ 'shape' => 'CreateViewInputClientTokenString', 'idempotencyToken' => true, ], 'Filters' => [ 'shape' => 'SearchFilter', ], 'IncludedProperties' => [ 'shape' => 'IncludedPropertyList', ], 'Tags' => [ 'shape' => 'TagMap', ], 'ViewName' => [ 'shape' => 'ViewName', ], ], ], 'CreateViewInputClientTokenString' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'CreateViewOutput' => [ 'type' => 'structure', 'members' => [ 'View' => [ 'shape' => 'View', ], ], ], 'DeleteIndexInput' => [ 'type' => 'structure', 'required' => [ 'Arn', ], 'members' => [ 'Arn' => [ 'shape' => 'String', ], ], ], 'DeleteIndexOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'LastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'State' => [ 'shape' => 'IndexState', ], ], ], 'DeleteViewInput' => [ 'type' => 'structure', 'required' => [ 'ViewArn', ], 'members' => [ 'ViewArn' => [ 'shape' => 'DeleteViewInputViewArnString', ], ], ], 'DeleteViewInputViewArnString' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'DeleteViewOutput' => [ 'type' => 'structure', 'members' => [ 'ViewArn' => [ 'shape' => 'String', ], ], ], 'Document' => [ 'type' => 'structure', 'members' => [], 'document' => true, ], 'GetDefaultViewOutput' => [ 'type' => 'structure', 'members' => [ 'ViewArn' => [ 'shape' => 'String', ], ], ], 'GetIndexOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'CreatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'LastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'ReplicatingFrom' => [ 'shape' => 'RegionList', ], 'ReplicatingTo' => [ 'shape' => 'RegionList', ], 'State' => [ 'shape' => 'IndexState', ], 'Tags' => [ 'shape' => 'TagMap', ], 'Type' => [ 'shape' => 'IndexType', ], ], ], 'GetViewInput' => [ 'type' => 'structure', 'required' => [ 'ViewArn', ], 'members' => [ 'ViewArn' => [ 'shape' => 'GetViewInputViewArnString', ], ], ], 'GetViewInputViewArnString' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'GetViewOutput' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagMap', ], 'View' => [ 'shape' => 'View', ], ], ], 'IncludedProperty' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'IncludedPropertyNameString', ], ], ], 'IncludedPropertyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'IncludedProperty', ], ], 'IncludedPropertyNameString' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'Index' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'Region' => [ 'shape' => 'String', ], 'Type' => [ 'shape' => 'IndexType', ], ], ], 'IndexList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Index', ], ], 'IndexState' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'ACTIVE', 'DELETING', 'DELETED', 'UPDATING', ], ], 'IndexType' => [ 'type' => 'string', 'enum' => [ 'LOCAL', 'AGGREGATOR', ], ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'ListIndexesInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListIndexesInputMaxResultsInteger', ], 'NextToken' => [ 'shape' => 'ListIndexesInputNextTokenString', ], 'Regions' => [ 'shape' => 'ListIndexesInputRegionsList', ], 'Type' => [ 'shape' => 'IndexType', ], ], ], 'ListIndexesInputMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 100, 'min' => 1, ], 'ListIndexesInputNextTokenString' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'ListIndexesInputRegionsList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], 'max' => 20, 'min' => 0, ], 'ListIndexesOutput' => [ 'type' => 'structure', 'members' => [ 'Indexes' => [ 'shape' => 'IndexList', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListSupportedResourceTypesInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListSupportedResourceTypesInputMaxResultsInteger', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListSupportedResourceTypesInputMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 1000, 'min' => 1, ], 'ListSupportedResourceTypesOutput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'String', ], 'ResourceTypes' => [ 'shape' => 'ResourceTypeList', ], ], ], 'ListTagsForResourceInput' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'ListTagsForResourceOutput' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagMap', ], ], ], 'ListViewsInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'ListViewsInputMaxResultsInteger', ], 'NextToken' => [ 'shape' => 'String', ], ], ], 'ListViewsInputMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 20, 'min' => 1, ], 'ListViewsOutput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'String', ], 'Views' => [ 'shape' => 'ViewArnList', ], ], ], 'Long' => [ 'type' => 'long', 'box' => true, ], 'QueryString' => [ 'type' => 'string', 'max' => 1011, 'min' => 0, 'sensitive' => true, ], 'RegionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'Resource' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'LastReportedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'OwningAccountId' => [ 'shape' => 'String', ], 'Properties' => [ 'shape' => 'ResourcePropertyList', ], 'Region' => [ 'shape' => 'String', ], 'ResourceType' => [ 'shape' => 'String', ], 'Service' => [ 'shape' => 'String', ], ], ], 'ResourceCount' => [ 'type' => 'structure', 'members' => [ 'Complete' => [ 'shape' => 'Boolean', ], 'TotalResources' => [ 'shape' => 'Long', ], ], ], 'ResourceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Resource', ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'ResourceProperty' => [ 'type' => 'structure', 'members' => [ 'Data' => [ 'shape' => 'Document', ], 'LastReportedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'Name' => [ 'shape' => 'String', ], ], ], 'ResourcePropertyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceProperty', ], ], 'ResourceTypeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SupportedResourceType', ], ], 'SearchFilter' => [ 'type' => 'structure', 'required' => [ 'FilterString', ], 'members' => [ 'FilterString' => [ 'shape' => 'SearchFilterFilterStringString', ], ], 'sensitive' => true, ], 'SearchFilterFilterStringString' => [ 'type' => 'string', 'max' => 2048, 'min' => 0, ], 'SearchInput' => [ 'type' => 'structure', 'required' => [ 'QueryString', ], 'members' => [ 'MaxResults' => [ 'shape' => 'SearchInputMaxResultsInteger', ], 'NextToken' => [ 'shape' => 'SearchInputNextTokenString', ], 'QueryString' => [ 'shape' => 'QueryString', ], 'ViewArn' => [ 'shape' => 'SearchInputViewArnString', ], ], ], 'SearchInputMaxResultsInteger' => [ 'type' => 'integer', 'box' => true, 'max' => 1000, 'min' => 1, ], 'SearchInputNextTokenString' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'SearchInputViewArnString' => [ 'type' => 'string', 'max' => 1000, 'min' => 0, ], 'SearchOutput' => [ 'type' => 'structure', 'members' => [ 'Count' => [ 'shape' => 'ResourceCount', ], 'NextToken' => [ 'shape' => 'SearchOutputNextTokenString', ], 'Resources' => [ 'shape' => 'ResourceList', ], 'ViewArn' => [ 'shape' => 'SearchOutputViewArnString', ], ], ], 'SearchOutputNextTokenString' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'SearchOutputViewArnString' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'Message', 'Name', 'Value', ], 'members' => [ 'Message' => [ 'shape' => 'String', ], 'Name' => [ 'shape' => 'String', ], 'Value' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'String' => [ 'type' => 'string', ], 'StringList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'SupportedResourceType' => [ 'type' => 'structure', 'members' => [ 'ResourceType' => [ 'shape' => 'String', ], 'Service' => [ 'shape' => 'String', ], ], ], 'SyntheticTimestamp_date_time' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'TagMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'TagResourceInput' => [ 'type' => 'structure', 'required' => [ 'resourceArn', ], 'members' => [ 'Tags' => [ 'shape' => 'TagMap', ], 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], ], ], 'TagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'UnauthorizedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 401, 'senderFault' => true, ], 'exception' => true, ], 'UntagResourceInput' => [ 'type' => 'structure', 'required' => [ 'resourceArn', 'tagKeys', ], 'members' => [ 'resourceArn' => [ 'shape' => 'String', 'location' => 'uri', 'locationName' => 'resourceArn', ], 'tagKeys' => [ 'shape' => 'StringList', 'location' => 'querystring', 'locationName' => 'tagKeys', ], ], ], 'UntagResourceOutput' => [ 'type' => 'structure', 'members' => [], ], 'UpdateIndexTypeInput' => [ 'type' => 'structure', 'required' => [ 'Arn', 'Type', ], 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'Type' => [ 'shape' => 'IndexType', ], ], ], 'UpdateIndexTypeOutput' => [ 'type' => 'structure', 'members' => [ 'Arn' => [ 'shape' => 'String', ], 'LastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'State' => [ 'shape' => 'IndexState', ], 'Type' => [ 'shape' => 'IndexType', ], ], ], 'UpdateViewInput' => [ 'type' => 'structure', 'required' => [ 'ViewArn', ], 'members' => [ 'Filters' => [ 'shape' => 'SearchFilter', ], 'IncludedProperties' => [ 'shape' => 'IncludedPropertyList', ], 'ViewArn' => [ 'shape' => 'UpdateViewInputViewArnString', ], ], ], 'UpdateViewInputViewArnString' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'UpdateViewOutput' => [ 'type' => 'structure', 'members' => [ 'View' => [ 'shape' => 'View', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'FieldList' => [ 'shape' => 'ValidationExceptionFieldList', ], 'Message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], 'ValidationExceptionField' => [ 'type' => 'structure', 'required' => [ 'Name', 'ValidationIssue', ], 'members' => [ 'Name' => [ 'shape' => 'String', ], 'ValidationIssue' => [ 'shape' => 'String', ], ], ], 'ValidationExceptionFieldList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ValidationExceptionField', ], ], 'View' => [ 'type' => 'structure', 'members' => [ 'Filters' => [ 'shape' => 'SearchFilter', ], 'IncludedProperties' => [ 'shape' => 'IncludedPropertyList', ], 'LastUpdatedAt' => [ 'shape' => 'SyntheticTimestamp_date_time', ], 'Owner' => [ 'shape' => 'String', ], 'Scope' => [ 'shape' => 'String', ], 'ViewArn' => [ 'shape' => 'String', ], ], ], 'ViewArnList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'ViewList' => [ 'type' => 'list', 'member' => [ 'shape' => 'View', ], ], 'ViewName' => [ 'type' => 'string', 'pattern' => '^[a-zA-Z0-9\\-]{1,64}$', ], ],];
