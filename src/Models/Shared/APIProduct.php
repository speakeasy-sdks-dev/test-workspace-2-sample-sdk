<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test_workspace-2\Konnect-API\Models\Shared;


class APIProduct
{
    /**
     * An ISO-8601 timestamp representation of entity creation date.
     * 
     * @var \DateTime $createdAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $createdAt;
    
    /**
     * The description of the API product
     * 
     * @var string $description
     */
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $description;
    
    /**
     * The API product ID.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * description: A maximum of 5 user-defined labels are allowed on this resource.
     * 
     * Keys must not start with kong, konnect, insomnia, mesh, kic or _, which are reserved for Kong.
     * Keys are case-sensitive.
     * 
     * 
     * @var array<string, string> $labels
     */
	#[\JMS\Serializer\Annotation\SerializedName('labels')]
    #[\JMS\Serializer\Annotation\Type('array<string, string>')]
    public array $labels;
    
    /**
     * The name of the API product
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The list of portal identifiers which this API product is published to
     * 
     * @var array<string> $portalIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('portal_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    public array $portalIds;
    
    /**
     * An ISO-8601 timestamp representation of entity update date.
     * 
     * @var \DateTime $updatedAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    public \DateTime $updatedAt;
    
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->description = "";
		$this->id = "";
		$this->labels = [];
		$this->name = "";
		$this->portalIds = [];
		$this->updatedAt = new \DateTime();
	}
}
