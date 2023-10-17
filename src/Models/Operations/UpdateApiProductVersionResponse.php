<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test_workspace-2\Konnect-API\Models\Operations;


class UpdateApiProductVersionResponse
{
    /**
     * API product
     * 
     * @var ?\test_workspace-2\Konnect-API\Models\Shared\APIProductVersion $apiProductVersion
     */
	
    public ?\test_workspace-2\Konnect-API\Models\Shared\APIProductVersion $apiProductVersion = null;
    
    /**
     * Bad Request
     * 
     * @var ?\test_workspace-2\Konnect-API\Models\Shared\BadRequestError $badRequestError
     */
	
    public ?\test_workspace-2\Konnect-API\Models\Shared\BadRequestError $badRequestError = null;
    
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Forbidden
     * 
     * @var ?\test_workspace-2\Konnect-API\Models\Shared\ForbiddenError $forbiddenError
     */
	
    public ?\test_workspace-2\Konnect-API\Models\Shared\ForbiddenError $forbiddenError = null;
    
    /**
     * Not Found
     * 
     * @var ?\test_workspace-2\Konnect-API\Models\Shared\NotFoundError $notFoundError
     */
	
    public ?\test_workspace-2\Konnect-API\Models\Shared\NotFoundError $notFoundError = null;
    
    /**
     * HTTP response status code for this operation
     * 
     * @var int $statusCode
     */
	
    public int $statusCode;
    
    /**
     * Raw HTTP response; suitable for custom response parsing
     * 
     * @var ?\Psr\Http\Message\ResponseInterface $rawResponse
     */
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Unauthorized
     * 
     * @var ?\test_workspace-2\Konnect-API\Models\Shared\UnauthorizedError $unauthorizedError
     */
	
    public ?\test_workspace-2\Konnect-API\Models\Shared\UnauthorizedError $unauthorizedError = null;
    
    /**
     * Unsupported Media Type
     * 
     * @var ?\test_workspace-2\Konnect-API\Models\Shared\UnsupportedMediaTypeError $unsupportedMediaTypeError
     */
	
    public ?\test_workspace-2\Konnect-API\Models\Shared\UnsupportedMediaTypeError $unsupportedMediaTypeError = null;
    
	public function __construct()
	{
		$this->apiProductVersion = null;
		$this->badRequestError = null;
		$this->contentType = "";
		$this->forbiddenError = null;
		$this->notFoundError = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->unauthorizedError = null;
		$this->unsupportedMediaTypeError = null;
	}
}
