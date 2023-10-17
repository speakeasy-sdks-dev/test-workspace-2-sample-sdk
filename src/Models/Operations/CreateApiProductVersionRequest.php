<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace myapi\Models\Operations;

use \myapi\Utils\SpeakeasyMetadata;
class CreateApiProductVersionRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \myapi\Models\Shared\CreateAPIProductVersionDTO $createAPIProductVersionDTO;
    
    /**
     * The API Product ID
     * 
     * @var string $apiProductId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiProductId')]
    public string $apiProductId;
    
	public function __construct()
	{
		$this->createAPIProductVersionDTO = new \myapi\Models\Shared\CreateAPIProductVersionDTO();
		$this->apiProductId = "";
	}
}
