<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace myapi\Models\Operations;

use \myapi\Utils\SpeakeasyMetadata;
class DeleteApiProductVersionRequest
{
    /**
     * The API product identifier
     * 
     * @var string $apiProductId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiProductId')]
    public string $apiProductId;
    
    /**
     * The API product version identifier
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->apiProductId = "";
		$this->id = "";
	}
}
