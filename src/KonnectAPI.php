<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace myapi;

/**
 * KonnectAPI - Konnect API: The Konnect platform API
 * 
 * @package myapi
 * @access public
 */
class KonnectAPI
{
	public const SERVERS = [
		'https://global.api.konghq.com/v2',
		'https://us.api.konghq.com/v2',
        /** Production */
		'https://eu.api.konghq.com/v2',
	];
  	
	public APIProductDocumentation $apiProductDocumentation;
	
	public APIProductVersionSpecification $apiProductVersionSpecification;
	
	public APIProductVersions $apiProductVersions;
	
	public APIProducts $apiProducts;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return KonnectAPIBuilder
	 */
	public static function builder(): KonnectAPIBuilder
	{
		return new KonnectAPIBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->apiProductDocumentation = new APIProductDocumentation($this->sdkConfiguration);
		
		$this->apiProductVersionSpecification = new APIProductVersionSpecification($this->sdkConfiguration);
		
		$this->apiProductVersions = new APIProductVersions($this->sdkConfiguration);
		
		$this->apiProducts = new APIProducts($this->sdkConfiguration);
	}
}