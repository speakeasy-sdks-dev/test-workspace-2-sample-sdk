<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace myapi\Models\Shared;


class APIProductVersion
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
     * Indicates if this API product version is deprecated
     * 
     * @var bool $deprecated
     */
	#[\JMS\Serializer\Annotation\SerializedName('deprecated')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    public bool $deprecated;
    
	#[\JMS\Serializer\Annotation\SerializedName('gateway_service')]
    #[\JMS\Serializer\Annotation\Type('myapi\Models\Shared\APIProductVersionGatewayService')]
    public APIProductVersionGatewayService $gatewayService;
    
    /**
     * The API product version identifier.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The version of the API product
     * 
     * @var string $name
     */
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
    /**
     * The publish status of the API product version
     * 
     * @var \myapi\Models\Shared\APIProductVersionPublishStatus $publishStatus
     */
	#[\JMS\Serializer\Annotation\SerializedName('publish_status')]
    #[\JMS\Serializer\Annotation\Type('enum<myapi\Models\Shared\APIProductVersionPublishStatus>')]
    public APIProductVersionPublishStatus $publishStatus;
    
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
		$this->deprecated = false;
		$this->gatewayService = new \myapi\Models\Shared\APIProductVersionGatewayService();
		$this->id = "";
		$this->name = "";
		$this->publishStatus = \myapi\Models\Shared\APIProductVersionPublishStatus::Unpublished;
		$this->updatedAt = new \DateTime();
	}
}