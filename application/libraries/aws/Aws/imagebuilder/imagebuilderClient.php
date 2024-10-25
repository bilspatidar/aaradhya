<?php
namespace Aws\imagebuilder;

use Aws\AwsClient;

/**
 * This client is used to interact with the **EC2 Image Builder** service.
 * @method \Aws\Result cancelImageCreation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelImageCreationAsync(array $args = [])
 * @method \Aws\Result createComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createComponentAsync(array $args = [])
 * @method \Aws\Result createContainerRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createContainerRecipeAsync(array $args = [])
 * @method \Aws\Result createDistributionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDistributionConfigurationAsync(array $args = [])
 * @method \Aws\Result createImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageAsync(array $args = [])
 * @method \Aws\Result createImagePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImagePipelineAsync(array $args = [])
 * @method \Aws\Result createImageRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageRecipeAsync(array $args = [])
 * @method \Aws\Result createInfrastructureConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInfrastructureConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteComponentAsync(array $args = [])
 * @method \Aws\Result deleteContainerRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteContainerRecipeAsync(array $args = [])
 * @method \Aws\Result deleteDistributionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDistributionConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageAsync(array $args = [])
 * @method \Aws\Result deleteImagePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImagePipelineAsync(array $args = [])
 * @method \Aws\Result deleteImageRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteImageRecipeAsync(array $args = [])
 * @method \Aws\Result deleteInfrastructureConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInfrastructureConfigurationAsync(array $args = [])
 * @method \Aws\Result getComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComponentAsync(array $args = [])
 * @method \Aws\Result getComponentPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getComponentPolicyAsync(array $args = [])
 * @method \Aws\Result getContainerRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerRecipeAsync(array $args = [])
 * @method \Aws\Result getContainerRecipePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getContainerRecipePolicyAsync(array $args = [])
 * @method \Aws\Result getDistributionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDistributionConfigurationAsync(array $args = [])
 * @method \Aws\Result getImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImageAsync(array $args = [])
 * @method \Aws\Result getImagePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImagePipelineAsync(array $args = [])
 * @method \Aws\Result getImagePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImagePolicyAsync(array $args = [])
 * @method \Aws\Result getImageRecipe(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImageRecipeAsync(array $args = [])
 * @method \Aws\Result getImageRecipePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getImageRecipePolicyAsync(array $args = [])
 * @method \Aws\Result getInfrastructureConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInfrastructureConfigurationAsync(array $args = [])
 * @method \Aws\Result getWorkflowExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkflowExecutionAsync(array $args = [])
 * @method \Aws\Result getWorkflowStepExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getWorkflowStepExecutionAsync(array $args = [])
 * @method \Aws\Result importComponent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importComponentAsync(array $args = [])
 * @method \Aws\Result importVmImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importVmImageAsync(array $args = [])
 * @method \Aws\Result listComponentBuildVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentBuildVersionsAsync(array $args = [])
 * @method \Aws\Result listComponents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listComponentsAsync(array $args = [])
 * @method \Aws\Result listContainerRecipes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listContainerRecipesAsync(array $args = [])
 * @method \Aws\Result listDistributionConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDistributionConfigurationsAsync(array $args = [])
 * @method \Aws\Result listImageBuildVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImageBuildVersionsAsync(array $args = [])
 * @method \Aws\Result listImagePackages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagePackagesAsync(array $args = [])
 * @method \Aws\Result listImagePipelineImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagePipelineImagesAsync(array $args = [])
 * @method \Aws\Result listImagePipelines(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagePipelinesAsync(array $args = [])
 * @method \Aws\Result listImageRecipes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImageRecipesAsync(array $args = [])
 * @method \Aws\Result listImageScanFindingAggregations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImageScanFindingAggregationsAsync(array $args = [])
 * @method \Aws\Result listImageScanFindings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImageScanFindingsAsync(array $args = [])
 * @method \Aws\Result listImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listImagesAsync(array $args = [])
 * @method \Aws\Result listInfrastructureConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listInfrastructureConfigurationsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listWorkflowExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkflowExecutionsAsync(array $args = [])
 * @method \Aws\Result listWorkflowStepExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listWorkflowStepExecutionsAsync(array $args = [])
 * @method \Aws\Result putComponentPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putComponentPolicyAsync(array $args = [])
 * @method \Aws\Result putContainerRecipePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putContainerRecipePolicyAsync(array $args = [])
 * @method \Aws\Result putImagePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImagePolicyAsync(array $args = [])
 * @method \Aws\Result putImageRecipePolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putImageRecipePolicyAsync(array $args = [])
 * @method \Aws\Result startImagePipelineExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startImagePipelineExecutionAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateDistributionConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDistributionConfigurationAsync(array $args = [])
 * @method \Aws\Result updateImagePipeline(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateImagePipelineAsync(array $args = [])
 * @method \Aws\Result updateInfrastructureConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateInfrastructureConfigurationAsync(array $args = [])
 */
class imagebuilderClient extends AwsClient {}
