<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace myapi\Models\Operations;


/**
 * GetManyAPIProductVersionListAPIProductVersionsResponse - List of API products
 * 
 * @package myapi\Models\Operations
 * @access public
 */
class GetManyAPIProductVersionListAPIProductVersionsResponse
{
    /**
     * $data
     * 
     * @var array<\myapi\Models\Shared\APIProductVersion> $data
     */
	#[\JMS\Serializer\Annotation\SerializedName('data')]
    #[\JMS\Serializer\Annotation\Type('array<myapi\Models\Shared\APIProductVersion>')]
    public array $data;
    
    /**
     * returns the pagination information
     * 
     * @var \myapi\Models\Shared\PaginatedMeta $meta
     */
	#[\JMS\Serializer\Annotation\SerializedName('meta')]
    #[\JMS\Serializer\Annotation\Type('myapi\Models\Shared\PaginatedMeta')]
    public \myapi\Models\Shared\PaginatedMeta $meta;
    
	public function __construct()
	{
		$this->data = [];
		$this->meta = new \myapi\Models\Shared\PaginatedMeta();
	}
}