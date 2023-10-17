<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test_workspace-2\Konnect-API\Models\Shared;


/**
 * UpdateAPIProductVersionSpecDTO - The request schema for updating a specification for a version of an API product.
 * 
 * @package test_workspace-2\Konnect-API\Models\Shared
 * @access public
 */
class UpdateAPIProductVersionSpecDTO
{
    /**
     * The base64 encoded contents of the API product version specification
     * 
     * @var ?string $content
     */
	#[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $content = null;
    
    /**
     * The name of the API product version specification
     * 
     * @var ?string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	public function __construct()
	{
		$this->content = null;
		$this->name = null;
	}
}
