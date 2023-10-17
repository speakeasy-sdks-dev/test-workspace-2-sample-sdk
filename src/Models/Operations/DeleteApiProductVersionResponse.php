<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace myapi\Models\Operations;


class DeleteApiProductVersionResponse
{
    /**
     * HTTP response content type for this operation
     * 
     * @var string $contentType
     */
	
    public string $contentType;
    
    /**
     * Forbidden
     * 
     * @var ?\myapi\Models\Shared\ForbiddenError $forbiddenError
     */
	
    public ?\myapi\Models\Shared\ForbiddenError $forbiddenError = null;
    
    /**
     * Not Found
     * 
     * @var ?\myapi\Models\Shared\NotFoundError $notFoundError
     */
	
    public ?\myapi\Models\Shared\NotFoundError $notFoundError = null;
    
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
     * @var ?\myapi\Models\Shared\UnauthorizedError $unauthorizedError
     */
	
    public ?\myapi\Models\Shared\UnauthorizedError $unauthorizedError = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->forbiddenError = null;
		$this->notFoundError = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->unauthorizedError = null;
	}
}