<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace myapi\Models\Operations;

use \myapi\Utils\SpeakeasyMetadata;
class GetManyApiProductVersionRequest
{
    /**
     * The API Product ID
     * 
     * @var string $apiProductId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiProductId')]
    public string $apiProductId;
    
    /**
     * Filters API Product Versions in the response.
     * 
     * @var ?\myapi\Models\Shared\APIProductVersionFilterParameters $filter
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=filter')]
    public ?\myapi\Models\Shared\APIProductVersionFilterParameters $filter = null;
    
    /**
     * Determines which page of the entities to retrieve.
     * 
     * @var ?int $pageNumber
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page[number]')]
    public ?int $pageNumber = null;
    
    /**
     * The maximum number of items to include per page. The last page of a collection may include fewer items.
     * 
     * @var ?int $pageSize
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=page[size]')]
    public ?int $pageSize = null;
    
    /**
     * Sorts a collection of API products versions. Supported sort attributes are:
     * 
     * 
     * 
     *   - name
     * 
     * 
     * @var ?string $sort
     */
	#[SpeakeasyMetadata('queryParam:style=form,explode=true,name=sort')]
    public ?string $sort = null;
    
	public function __construct()
	{
		$this->apiProductId = "";
		$this->filter = null;
		$this->pageNumber = null;
		$this->pageSize = null;
		$this->sort = null;
	}
}