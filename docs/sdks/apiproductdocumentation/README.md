# APIProductDocumentation
(*apiProductDocumentation*)

### Available Operations

* [createApiProductDocument](#createapiproductdocument) - Create API Product Document
* [deleteApiProductDocument](#deleteapiproductdocument) - Delete API Product Documentation
* [getApiProductDocument](#getapiproductdocument) - Fetch API Product Document
* [getManyApiProductDocument](#getmanyapiproductdocument) - List API Product Documents
* [updateApiProductDocument](#updateapiproductdocument) - Update an API Product Document

## createApiProductDocument

Creates a document for an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\CreateApiProductDocumentRequest;
use \test_workspace-2\Konnect-API\Models\Shared\CreateAPIProductDocumentDTO;
use \test_workspace-2\Konnect-API\Models\Shared\CreateAPIProductDocumentDTOMetadata;
use \test_workspace-2\Konnect-API\Models\Shared\PublishStatus;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateApiProductDocumentRequest();
    $request->createAPIProductDocumentDTO = new CreateAPIProductDocumentDTO();
    $request->createAPIProductDocumentDTO->content = 'YmFzZTY0LWVuY29kZWQgdGV4dCBzdHJpbmc=';
    $request->createAPIProductDocumentDTO->metadata = new CreateAPIProductDocumentDTOMetadata();
    $request->createAPIProductDocumentDTO->parentDocumentId = 'dd4e1b98-3629-4dd3-acc0-759a726ffee2';
    $request->createAPIProductDocumentDTO->slug = 'path-for-seo';
    $request->createAPIProductDocumentDTO->status = PublishStatus::Unpublished;
    $request->createAPIProductDocumentDTO->title = 'How to create a document in Konnect DocumentHub';
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';

    $response = $sdk->apiProductDocumentation->createApiProductDocument($request);

    if ($response->apiProductDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\test_workspace-2\Konnect-API\Models\Operations\CreateApiProductDocumentRequest](../../models/operations/CreateApiProductDocumentRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\CreateApiProductDocumentResponse](../../models/operations/CreateApiProductDocumentResponse.md)**


## deleteApiProductDocument

Removes a document from an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductDocumentRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteApiProductDocumentRequest();
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->id = 'de5c9818-be5c-42e6-b514-e3d4bc30ddeb';

    $response = $sdk->apiProductDocumentation->deleteApiProductDocument($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductDocumentRequest](../../models/operations/DeleteApiProductDocumentRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductDocumentResponse](../../models/operations/DeleteApiProductDocumentResponse.md)**


## getApiProductDocument

Returns a document for the API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\GetApiProductDocumentRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetApiProductDocumentRequest();
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->id = 'de5c9818-be5c-42e6-b514-e3d4bc30ddeb';

    $response = $sdk->apiProductDocumentation->getApiProductDocument($request);

    if ($response->apiProductDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\test_workspace-2\Konnect-API\Models\Operations\GetApiProductDocumentRequest](../../models/operations/GetApiProductDocumentRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\GetApiProductDocumentResponse](../../models/operations/GetApiProductDocumentResponse.md)**


## getManyApiProductDocument

Returns a collection of all documents for an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductDocumentRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetManyApiProductDocumentRequest();
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->pageNumber = 1;
    $request->pageSize = 10;

    $response = $sdk->apiProductDocumentation->getManyApiProductDocument($request);

    if ($response->getManyApiProductDocument200ApplicationJSONObject !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductDocumentRequest](../../models/operations/GetManyApiProductDocumentRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductDocumentResponse](../../models/operations/GetManyApiProductDocumentResponse.md)**


## updateApiProductDocument

Updates a document for an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductDocumentRequest;
use \test_workspace-2\Konnect-API\Models\Shared\UpdateAPIProductDocumentDTO;
use \test_workspace-2\Konnect-API\Models\Shared\UpdateAPIProductDocumentDTOMetadata;
use \test_workspace-2\Konnect-API\Models\Shared\PublishStatus;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateApiProductDocumentRequest();
    $request->updateAPIProductDocumentDTO = new UpdateAPIProductDocumentDTO();
    $request->updateAPIProductDocumentDTO->content = 'YmFzZTY0LWVuY29kZWQgdGV4dCBzdHJpbmc=';
    $request->updateAPIProductDocumentDTO->metadata = new UpdateAPIProductDocumentDTOMetadata();
    $request->updateAPIProductDocumentDTO->parentDocumentId = 'dd4e1b98-3629-4dd3-acc0-759a726ffee2';
    $request->updateAPIProductDocumentDTO->slug = 'path-for-seo';
    $request->updateAPIProductDocumentDTO->status = PublishStatus::Unpublished;
    $request->updateAPIProductDocumentDTO->title = 'How to update a document in Konnect DocumentHub';
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->id = 'de5c9818-be5c-42e6-b514-e3d4bc30ddeb';

    $response = $sdk->apiProductDocumentation->updateApiProductDocument($request);

    if ($response->apiProductDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductDocumentRequest](../../models/operations/UpdateApiProductDocumentRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductDocumentResponse](../../models/operations/UpdateApiProductDocumentResponse.md)**

