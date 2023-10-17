<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test_workspace-2\Konnect-API\Models\Shared;


/**
 * CreateAPIProductDTO - The request schema to create an API product.
 * 
 * @package test_workspace-2\Konnect-API\Models\Shared
 * @access public
 */
class CreateAPIProductDTO
{
    /**
     * The description of the API product.
     * 
     * @var ?string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * description: A maximum of 5 user-defined labels are allowed on this resource.
     * 
     * Keys must not start with kong, konnect, insomnia, mesh, kic or _, which are reserved for Kong.
     * Keys are case-sensitive.
     * 
     * 
     * @var ?array<string, string> $labels
     */
	#[\JMS\Serializer\Annotation\SerializedName('labels')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $labels = null;
    
    /**
     * The name of the API product.
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	public function __construct()
	{
		$this->description = null;
		$this->labels = null;
		$this->name = "";
	}
}
