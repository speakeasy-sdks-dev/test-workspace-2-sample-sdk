<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace myapi\Models\Shared;


class APIProductDocumentSummary
{
    /**
     * The API product document identifier.
     * 
     * @var string $id
     */
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * The parent API product document identifier.
     * 
     * @var string $parentDocumentId
     */
	#[\JMS\Serializer\Annotation\SerializedName('parent_document_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $parentDocumentId;
    
    /**
     * API product document slug
     * 
     * @var string $slug
     */
	#[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $slug;
    
    /**
     * document publish status
     * 
     * @var \myapi\Models\Shared\PublishStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<myapi\Models\Shared\PublishStatus>')]
    public PublishStatus $status;
    
    /**
     * API product document title
     * 
     * @var string $title
     */
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $title;
    
	public function __construct()
	{
		$this->id = "";
		$this->parentDocumentId = "";
		$this->slug = "";
		$this->status = \myapi\Models\Shared\PublishStatus::Published;
		$this->title = "";
	}
}
