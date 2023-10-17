<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace test_workspace-2\Konnect-API;

class APIProductVersions 
{

	private SDKConfiguration $sdkConfiguration;

	/**
	 * @param SDKConfiguration $sdkConfig
	 */
	public function __construct(SDKConfiguration $sdkConfig)
	{
		$this->sdkConfiguration = $sdkConfig;
	}
	
    /**
     * Create API Product Version
     * 
     * Creates a version of an API product.
     * 
     * @param \test_workspace-2\Konnect-API\Models\Operations\CreateApiProductVersionRequest $request
     * @return \test_workspace-2\Konnect-API\Models\Operations\CreateApiProductVersionResponse
     */
	public function createApiProductVersion(
        \test_workspace-2\Konnect-API\Models\Operations\CreateApiProductVersionRequest $request,
    ): \test_workspace-2\Konnect-API\Models\Operations\CreateApiProductVersionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api-products/{apiProductId}/product-versions', \test_workspace-2\Konnect-API\Models\Operations\CreateApiProductVersionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "createAPIProductVersionDTO", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/problem+json;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test_workspace-2\Konnect-API\Models\Operations\CreateApiProductVersionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 201) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiProductVersion = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\APIProductVersion', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequestError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\BadRequestError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorizedError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\UnauthorizedError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbiddenError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\ForbiddenError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFoundError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\NotFoundError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 415) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unsupportedMediaTypeError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\UnsupportedMediaTypeError', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Delete API Product Version
     * 
     * Removes an API product version.
     * 
     * @param \test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductVersionRequest $request
     * @return \test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductVersionResponse
     */
	public function deleteApiProductVersion(
        ?\test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductVersionRequest $request,
    ): \test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductVersionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api-products/{apiProductId}/product-versions/{id}', \test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductVersionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/problem+json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductVersionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 204) {
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorizedError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\UnauthorizedError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbiddenError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\ForbiddenError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFoundError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\NotFoundError', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Fetch API Product Version
     * 
     * Returns a version of an API product.
     * 
     * @param \test_workspace-2\Konnect-API\Models\Operations\GetApiProductVersionRequest $request
     * @return \test_workspace-2\Konnect-API\Models\Operations\GetApiProductVersionResponse
     */
	public function getApiProductVersion(
        ?\test_workspace-2\Konnect-API\Models\Operations\GetApiProductVersionRequest $request,
    ): \test_workspace-2\Konnect-API\Models\Operations\GetApiProductVersionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api-products/{apiProductId}/product-versions/{id}', \test_workspace-2\Konnect-API\Models\Operations\GetApiProductVersionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json;q=1, application/problem+json;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test_workspace-2\Konnect-API\Models\Operations\GetApiProductVersionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiProductVersion = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\APIProductVersion', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorizedError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\UnauthorizedError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbiddenError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\ForbiddenError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFoundError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\NotFoundError', 'json');
            }
        }

        return $response;
    }
	
    /**
     * List API Product Versions
     * 
     * Returns a collection of all versions for an API product.
     * 
     * @param \test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionRequest $request
     * @return \test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionResponse
     */
	public function getManyApiProductVersion(
        ?\test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionRequest $request,
    ): \test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api-products/{apiProductId}/product-versions', \test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $options = array_merge_recursive($options, Utils\Utils::getQueryParams(\test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionRequest::class, $request, null));
        $options['headers']['Accept'] = 'application/json;q=1, application/problem+json;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->listAPIProductVersionsResponse = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Operations\GetManyAPIProductVersionListAPIProductVersionsResponse', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequestError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\BadRequestError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorizedError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\UnauthorizedError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbiddenError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\ForbiddenError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFoundError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\NotFoundError', 'json');
            }
        }

        return $response;
    }
	
    /**
     * Update an API Product Version
     * 
     * Updates an API product version.
     * 
     * @param \test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductVersionRequest $request
     * @return \test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductVersionResponse
     */
	public function updateApiProductVersion(
        \test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductVersionRequest $request,
    ): \test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductVersionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/api-products/{apiProductId}/product-versions/{id}', \test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductVersionRequest::class, $request);
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "updateAPIProductVersionDTO", "json");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json;q=1, application/problem+json;q=0';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;
        
        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductVersionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->apiProductVersion = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\APIProductVersion', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 400) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->badRequestError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\BadRequestError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 401) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unauthorizedError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\UnauthorizedError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 403) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->forbiddenError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\ForbiddenError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->notFoundError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\NotFoundError', 'json');
            }
        }
        else if ($httpResponse->getStatusCode() === 415) {
            if (Utils\Utils::matchContentType($contentType, 'application/problem+json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->unsupportedMediaTypeError = $serializer->deserialize((string)$httpResponse->getBody(), 'test_workspace-2\Konnect-API\Models\Shared\UnsupportedMediaTypeError', 'json');
            }
        }

        return $response;
    }
}