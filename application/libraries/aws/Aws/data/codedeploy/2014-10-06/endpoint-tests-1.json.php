<?php
// This file was auto-generated from sdk-root/src/data/codedeploy/2014-10-06/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region ap-south-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-south-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-south-2', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-south-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-south-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-south-2', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-south-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-south-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-south-2', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-south-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-south-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-south-2', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-south-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-south-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-south-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-south-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-south-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-south-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-south-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-south-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-south-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-south-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-south-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-south-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-south-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-south-2.api.aws', ], ], 'params' => [ 'Region' => 'eu-south-2', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-south-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-south-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-south-2', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-south-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-south-2.api.aws', ], ], 'params' => [ 'Region' => 'eu-south-2', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-south-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-south-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-south-2', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-gov-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-gov-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region me-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.me-central-1.api.aws', ], ], 'params' => [ 'Region' => 'me-central-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region me-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.me-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'me-central-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region me-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.me-central-1.api.aws', ], ], 'params' => [ 'Region' => 'me-central-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region me-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.me-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'me-central-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ca-central-1.api.aws', ], ], 'params' => [ 'Region' => 'ca-central-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ca-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ca-central-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ca-central-1.api.aws', ], ], 'params' => [ 'Region' => 'ca-central-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ca-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ca-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ca-central-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-central-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-central-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-central-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-central-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-central-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-central-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-central-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-central-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-central-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-central-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-central-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-iso-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'Region' => 'us-iso-west-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-iso-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-iso-west-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-west-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-iso-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'Region' => 'us-iso-west-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-iso-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-iso-west-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-west-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-central-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-central-2.api.aws', ], ], 'params' => [ 'Region' => 'eu-central-2', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-central-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-central-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-central-2', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-central-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-central-2.api.aws', ], ], 'params' => [ 'Region' => 'eu-central-2', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-central-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-central-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-central-2', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-west-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-west-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-west-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-west-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-west-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-west-2.api.aws', ], ], 'params' => [ 'Region' => 'us-west-2', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-west-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-west-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-west-2', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-west-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-west-2.api.aws', ], ], 'params' => [ 'Region' => 'us-west-2', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-west-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-west-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-west-2', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region af-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.af-south-1.api.aws', ], ], 'params' => [ 'Region' => 'af-south-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region af-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.af-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'af-south-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region af-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.af-south-1.api.aws', ], ], 'params' => [ 'Region' => 'af-south-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region af-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.af-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'af-south-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-north-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-north-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-north-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-north-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-north-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-north-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-north-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-north-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-west-3 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-west-3.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-3', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-west-3 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-west-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-3', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-west-3 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-west-3.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-3', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-west-3 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-west-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-3', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-west-2.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-2', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-west-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-2', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-west-2.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-2', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-west-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-west-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-2', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-west-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.eu-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region eu-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-west-1.api.aws', ], ], 'params' => [ 'Region' => 'eu-west-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region eu-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.eu-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'eu-west-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-northeast-3.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-3', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-northeast-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-3', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-northeast-3.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-3', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-northeast-3 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-northeast-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-3', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-northeast-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-2', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-northeast-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-2', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-northeast-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-2', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-northeast-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-northeast-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-2', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-northeast-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-northeast-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-northeast-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-northeast-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-northeast-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-northeast-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-northeast-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region me-south-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.me-south-1.api.aws', ], ], 'params' => [ 'Region' => 'me-south-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region me-south-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.me-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'me-south-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region me-south-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.me-south-1.api.aws', ], ], 'params' => [ 'Region' => 'me-south-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region me-south-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.me-south-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'me-south-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region sa-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.sa-east-1.api.aws', ], ], 'params' => [ 'Region' => 'sa-east-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region sa-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.sa-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'sa-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region sa-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.sa-east-1.api.aws', ], ], 'params' => [ 'Region' => 'sa-east-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region sa-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.sa-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'sa-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-east-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-east-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-east-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-east-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-north-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-gov-west-1.api.aws', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-gov-west-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-gov-west-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-gov-west-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-southeast-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-southeast-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-southeast-1.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-southeast-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-southeast-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-2', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-southeast-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-2', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-southeast-2.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-2', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-southeast-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-2', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'Region' => 'us-iso-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-southeast-3.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-3', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-southeast-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-3', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-southeast-3.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-3', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-3 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-southeast-3.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-3', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-4 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-southeast-4.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-4', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-4 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.ap-southeast-4.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-4', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region ap-southeast-4 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-southeast-4.api.aws', ], ], 'params' => [ 'Region' => 'ap-southeast-4', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region ap-southeast-4 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.ap-southeast-4.amazonaws.com', ], ], 'params' => [ 'Region' => 'ap-southeast-4', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-east-1.api.aws', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-east-1.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-2 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-east-2.api.aws', ], ], 'params' => [ 'Region' => 'us-east-2', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-2 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-east-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-2', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-2 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-east-2.api.aws', ], ], 'params' => [ 'Region' => 'us-east-2', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-2 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-east-2.amazonaws.com', ], ], 'params' => [ 'Region' => 'us-east-2', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.cn-northwest-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-northwest-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.cn-northwest-1.amazonaws.com.cn', ], ], 'params' => [ 'Region' => 'cn-northwest-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseDualStack' => true, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseDualStack' => false, 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseDualStack' => true, 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://codedeploy.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'Region' => 'us-isob-east-1', 'UseDualStack' => false, 'UseFIPS' => false, ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => false, 'UseFIPS' => true, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'Region' => 'us-east-1', 'UseDualStack' => true, 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
