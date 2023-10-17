<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test_workspace-2\Konnect-API\Models\Operations;

use \test_workspace-2\Konnect-API\Utils\SpeakeasyMetadata;
class CreateApiProductVersionRequest
{
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public \test_workspace-2\Konnect-API\Models\Shared\CreateAPIProductVersionDTO $createAPIProductVersionDTO;
    
    /**
     * The API Product ID
     * 
     * @var string $apiProductId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=apiProductId')]
    public string $apiProductId;
    
	public function __construct()
	{
		$this->createAPIProductVersionDTO = new \test_workspace-2\Konnect-API\Models\Shared\CreateAPIProductVersionDTO();
		$this->apiProductId = "";
	}
}
