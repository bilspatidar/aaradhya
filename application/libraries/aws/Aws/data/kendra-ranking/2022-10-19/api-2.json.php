<?php
// This file was auto-generated from sdk-root/src/data/kendra-ranking/2022-10-19/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2022-10-19', 'endpointPrefix' => 'kendra-ranking', 'jsonVersion' => '1.0', 'protocol' => 'json', 'serviceAbbreviation' => 'Kendra Ranking', 'serviceFullName' => 'Amazon Kendra Intelligent Ranking', 'serviceId' => 'Kendra Ranking', 'signatureVersion' => 'v4', 'signingName' => 'kendra-ranking', 'targetPrefix' => 'AWSKendraRerankingFrontendService', 'uid' => 'kendra-ranking-2022-10-19', ], 'operations' => [ 'CreateRescoreExecutionPlan' => [ 'name' => 'CreateRescoreExecutionPlan', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'CreateRescoreExecutionPlanRequest', ], 'output' => [ 'shape' => 'CreateRescoreExecutionPlanResponse', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DeleteRescoreExecutionPlan' => [ 'name' => 'DeleteRescoreExecutionPlan', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DeleteRescoreExecutionPlanRequest', ], 'errors' => [ [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'DescribeRescoreExecutionPlan' => [ 'name' => 'DescribeRescoreExecutionPlan', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'DescribeRescoreExecutionPlanRequest', ], 'output' => [ 'shape' => 'DescribeRescoreExecutionPlanResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListRescoreExecutionPlans' => [ 'name' => 'ListRescoreExecutionPlans', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListRescoreExecutionPlansRequest', ], 'output' => [ 'shape' => 'ListRescoreExecutionPlansResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'ListTagsForResource' => [ 'name' => 'ListTagsForResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'ListTagsForResourceRequest', ], 'output' => [ 'shape' => 'ListTagsForResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'Rescore' => [ 'name' => 'Rescore', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'RescoreRequest', ], 'output' => [ 'shape' => 'RescoreResult', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'InternalServerException', ], ], ], 'TagResource' => [ 'name' => 'TagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'TagResourceRequest', ], 'output' => [ 'shape' => 'TagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UntagResource' => [ 'name' => 'UntagResource', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UntagResourceRequest', ], 'output' => [ 'shape' => 'UntagResourceResponse', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceUnavailableException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'InternalServerException', ], ], ], 'UpdateRescoreExecutionPlan' => [ 'name' => 'UpdateRescoreExecutionPlan', 'http' => [ 'method' => 'POST', 'requestUri' => '/', ], 'input' => [ 'shape' => 'UpdateRescoreExecutionPlanRequest', ], 'errors' => [ [ 'shape' => 'ValidationException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'InternalServerException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'AmazonResourceName' => [ 'type' => 'string', 'max' => 1011, 'min' => 1, ], 'BodyTokensList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tokens', ], 'min' => 1, ], 'CapacityUnitsConfiguration' => [ 'type' => 'structure', 'required' => [ 'RescoreCapacityUnits', ], 'members' => [ 'RescoreCapacityUnits' => [ 'shape' => 'RescoreCapacityUnit', ], ], ], 'ClientTokenName' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^$|[\\x00-\\x7F]+', ], 'ConflictException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'CreateRescoreExecutionPlanRequest' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'RescoreExecutionPlanName', ], 'Description' => [ 'shape' => 'Description', ], 'CapacityUnits' => [ 'shape' => 'CapacityUnitsConfiguration', ], 'Tags' => [ 'shape' => 'TagList', ], 'ClientToken' => [ 'shape' => 'ClientTokenName', 'idempotencyToken' => true, ], ], ], 'CreateRescoreExecutionPlanResponse' => [ 'type' => 'structure', 'required' => [ 'Id', 'Arn', ], 'members' => [ 'Id' => [ 'shape' => 'RescoreExecutionPlanId', ], 'Arn' => [ 'shape' => 'RescoreExecutionPlanArn', ], ], ], 'DeleteRescoreExecutionPlanRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'RescoreExecutionPlanId', ], ], ], 'DescribeRescoreExecutionPlanRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'RescoreExecutionPlanId', ], ], ], 'DescribeRescoreExecutionPlanResponse' => [ 'type' => 'structure', 'members' => [ 'Id' => [ 'shape' => 'RescoreExecutionPlanId', ], 'Arn' => [ 'shape' => 'RescoreExecutionPlanArn', ], 'Name' => [ 'shape' => 'RescoreExecutionPlanName', ], 'Description' => [ 'shape' => 'Description', ], 'CapacityUnits' => [ 'shape' => 'CapacityUnitsConfiguration', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'UpdatedAt' => [ 'shape' => 'Timestamp', ], 'Status' => [ 'shape' => 'RescoreExecutionPlanStatus', ], 'ErrorMessage' => [ 'shape' => 'ErrorMessage', ], ], ], 'Description' => [ 'type' => 'string', 'max' => 1000, 'min' => 0, 'pattern' => '^\\P{C}*$', ], 'Document' => [ 'type' => 'structure', 'required' => [ 'Id', 'OriginalScore', ], 'members' => [ 'Id' => [ 'shape' => 'DocumentId', ], 'GroupId' => [ 'shape' => 'GroupId', ], 'Title' => [ 'shape' => 'DocumentTitle', ], 'Body' => [ 'shape' => 'DocumentBody', ], 'TokenizedTitle' => [ 'shape' => 'TitleTokensList', ], 'TokenizedBody' => [ 'shape' => 'BodyTokensList', ], 'OriginalScore' => [ 'shape' => 'Float', ], ], ], 'DocumentBody' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^\\P{C}*$', ], 'DocumentId' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'DocumentList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Document', ], 'min' => 1, ], 'DocumentTitle' => [ 'type' => 'string', 'max' => 1024, 'min' => 1, ], 'ErrorMessage' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, 'pattern' => '^\\P{C}*$', ], 'Float' => [ 'type' => 'float', 'max' => 100000, 'min' => -100000, ], 'GroupId' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'InternalServerException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, 'fault' => true, ], 'ListRescoreExecutionPlansRequest' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'MaxResults' => [ 'shape' => 'MaxResultsIntegerForListRescoreExecutionPlansRequest', ], ], ], 'ListRescoreExecutionPlansResponse' => [ 'type' => 'structure', 'members' => [ 'SummaryItems' => [ 'shape' => 'RescoreExecutionPlanSummaryList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsForResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'AmazonResourceName', ], ], ], 'ListTagsForResourceResponse' => [ 'type' => 'structure', 'members' => [ 'Tags' => [ 'shape' => 'TagList', ], ], ], 'MaxResultsIntegerForListRescoreExecutionPlansRequest' => [ 'type' => 'integer', 'max' => 50, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'max' => 800, 'min' => 1, 'pattern' => '^\\P{C}*$', ], 'RescoreCapacityUnit' => [ 'type' => 'integer', 'min' => 0, ], 'RescoreExecutionPlanArn' => [ 'type' => 'string', 'max' => 1284, 'min' => 0, 'pattern' => 'arn:[a-z0-9-\\.]{1,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[a-z0-9-\\.]{0,63}:[^/].{0,1023}', ], 'RescoreExecutionPlanId' => [ 'type' => 'string', 'max' => 36, 'min' => 36, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9-]*', ], 'RescoreExecutionPlanName' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9_-]*', ], 'RescoreExecutionPlanStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'UPDATING', 'ACTIVE', 'DELETING', 'FAILED', ], ], 'RescoreExecutionPlanSummary' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'RescoreExecutionPlanName', ], 'Id' => [ 'shape' => 'RescoreExecutionPlanId', ], 'CreatedAt' => [ 'shape' => 'Timestamp', ], 'UpdatedAt' => [ 'shape' => 'Timestamp', ], 'Status' => [ 'shape' => 'RescoreExecutionPlanStatus', ], ], ], 'RescoreExecutionPlanSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RescoreExecutionPlanSummary', ], ], 'RescoreId' => [ 'type' => 'string', 'max' => 36, 'min' => 1, 'pattern' => '[a-zA-Z0-9][a-zA-Z0-9-]', ], 'RescoreRequest' => [ 'type' => 'structure', 'required' => [ 'RescoreExecutionPlanId', 'SearchQuery', 'Documents', ], 'members' => [ 'RescoreExecutionPlanId' => [ 'shape' => 'RescoreExecutionPlanId', ], 'SearchQuery' => [ 'shape' => 'SearchQuery', ], 'Documents' => [ 'shape' => 'DocumentList', ], ], ], 'RescoreResult' => [ 'type' => 'structure', 'members' => [ 'RescoreId' => [ 'shape' => 'RescoreId', ], 'ResultItems' => [ 'shape' => 'RescoreResultItemList', ], ], ], 'RescoreResultItem' => [ 'type' => 'structure', 'members' => [ 'DocumentId' => [ 'shape' => 'DocumentId', ], 'Score' => [ 'shape' => 'Float', ], ], ], 'RescoreResultItemList' => [ 'type' => 'list', 'member' => [ 'shape' => 'RescoreResultItem', ], 'min' => 1, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'ResourceUnavailableException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'SearchQuery' => [ 'type' => 'string', 'max' => 1000, 'min' => 1, ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagKeyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'TagKey', ], 'max' => 200, 'min' => 0, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], 'max' => 200, 'min' => 0, ], 'TagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'Tags', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'AmazonResourceName', ], 'Tags' => [ 'shape' => 'TagList', ], ], ], 'TagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'ThrottlingException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', ], 'TitleTokensList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tokens', ], 'min' => 1, ], 'Tokens' => [ 'type' => 'string', 'max' => 2048, 'min' => 1, ], 'UntagResourceRequest' => [ 'type' => 'structure', 'required' => [ 'ResourceARN', 'TagKeys', ], 'members' => [ 'ResourceARN' => [ 'shape' => 'AmazonResourceName', ], 'TagKeys' => [ 'shape' => 'TagKeyList', ], ], ], 'UntagResourceResponse' => [ 'type' => 'structure', 'members' => [], ], 'UpdateRescoreExecutionPlanRequest' => [ 'type' => 'structure', 'required' => [ 'Id', ], 'members' => [ 'Id' => [ 'shape' => 'RescoreExecutionPlanId', ], 'Name' => [ 'shape' => 'RescoreExecutionPlanName', ], 'Description' => [ 'shape' => 'Description', ], 'CapacityUnits' => [ 'shape' => 'CapacityUnitsConfiguration', ], ], ], 'ValidationException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], ],];
