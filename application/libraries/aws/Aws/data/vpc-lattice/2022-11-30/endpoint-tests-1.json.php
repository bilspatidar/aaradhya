<?php
// This file was auto-generated from sdk-root/src/data/vpc-lattice/2022-11-30/endpoint-tests-1.json
return [ 'testCases' => [ [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice-fips.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-gov-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice-fips.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-gov-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice.us-gov-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-gov-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-gov-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice.us-gov-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-gov-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice-fips.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'cn-north-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice-fips.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'cn-north-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice.cn-north-1.api.amazonwebservices.com.cn', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'cn-north-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region cn-north-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice.cn-north-1.amazonaws.com.cn', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'cn-north-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-iso-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice-fips.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-iso-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-iso-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-iso-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice.us-iso-east-1.c2s.ic.gov', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-iso-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice-fips.us-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice-fips.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice.us-east-1.api.aws', ], ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice.us-east-1.amazonaws.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack enabled', 'expect' => [ 'error' => 'FIPS and DualStack are enabled, but this partition does not support one or both', ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-isob-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS enabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice-fips.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-isob-east-1', 'UseFIPS' => true, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack enabled', 'expect' => [ 'error' => 'DualStack is enabled but this partition does not support DualStack', ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-isob-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For region us-isob-east-1 with FIPS disabled and DualStack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://vpc-lattice.us-isob-east-1.sc2s.sgov.gov', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-isob-east-1', 'UseFIPS' => false, ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack disabled', 'expect' => [ 'endpoint' => [ 'url' => 'https://example.com', ], ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-east-1', 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips enabled and dualstack disabled', 'expect' => [ 'error' => 'Invalid Configuration: FIPS and custom endpoint are not supported', ], 'params' => [ 'UseDualStack' => false, 'Region' => 'us-east-1', 'UseFIPS' => true, 'Endpoint' => 'https://example.com', ], ], [ 'documentation' => 'For custom endpoint with fips disabled and dualstack enabled', 'expect' => [ 'error' => 'Invalid Configuration: Dualstack and custom endpoint are not supported', ], 'params' => [ 'UseDualStack' => true, 'Region' => 'us-east-1', 'UseFIPS' => false, 'Endpoint' => 'https://example.com', ], ], ], 'version' => '1.0',];
