<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace myapi\Models\Shared;


/**
 * DocumentTree - a document tree
 * 
 * @package myapi\Models\Shared
 * @access public
 */
class DocumentTree
{
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
    /**
     * metadata of the document
     * 
     * @var \myapi\Models\Shared\DocumentTreeMetadata $metadata
     */
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('myapi\Models\Shared\DocumentTreeMetadata')]
    public DocumentTreeMetadata $metadata;
    
	#[\JMS\Serializer\Annotation\SerializedName('parent_document_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentDocumentId = null;
    
    /**
     * document slug
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
    
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $title;
    
	public function __construct()
	{
		$this->id = "";
		$this->metadata = new \myapi\Models\Shared\DocumentTreeMetadata();
		$this->parentDocumentId = null;
		$this->slug = "";
		$this->status = \myapi\Models\Shared\PublishStatus::Published;
		$this->title = "";
	}
}
