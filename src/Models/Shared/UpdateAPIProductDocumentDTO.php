<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test_workspace-2\Konnect-API\Models\Shared;


/**
 * UpdateAPIProductDocumentDTO - a document payload
 * 
 * @package test_workspace-2\Konnect-API\Models\Shared
 * @access public
 */
class UpdateAPIProductDocumentDTO
{
    /**
     * base64 encoded string of the document content
     * 
     * @var ?string $content
     */
	#[\JMS\Serializer\Annotation\SerializedName('content')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $content = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('test_workspace-2\Konnect-API\Models\Shared\UpdateAPIProductDocumentDTOMetadata')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?UpdateAPIProductDocumentDTOMetadata $metadata = null;
    
    /**
     * Parent document Id. If this value is explicitly set to null, the
     * 
     * document will be put as a top level document at the bottom of the tree.
     * 
     * 
     * @var ?string $parentDocumentId
     */
	#[\JMS\Serializer\Annotation\SerializedName('parent_document_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentDocumentId = null;
    
    /**
     * document slug. must be unique accross documents belonging to an api product
     * 
     * @var ?string $slug
     */
	#[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $slug = null;
    
    /**
     * document publish status
     * 
     * @var ?\test_workspace-2\Konnect-API\Models\Shared\PublishStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<test_workspace-2\Konnect-API\Models\Shared\PublishStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PublishStatus $status = null;
    
    /**
     * document title
     * 
     * @var ?string $title
     */
	#[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;
    
	public function __construct()
	{
		$this->content = null;
		$this->metadata = null;
		$this->parentDocumentId = null;
		$this->slug = null;
		$this->status = null;
		$this->title = null;
	}
}
