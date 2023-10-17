# APIProductVersionSpecification
(*apiProductVersionSpecification*)

### Available Operations

* [createApiProductVersionSpec](#createapiproductversionspec) - Create API Product Version Specification
* [deleteApiProductVersionSpec](#deleteapiproductversionspec) - Delete API Product Version Specification
* [getApiProductVersionSpec](#getapiproductversionspec) - Fetch API Product Version Specification
* [getManyApiProductVersionSpec](#getmanyapiproductversionspec) - Fetch API Product Version Specifications
* [updateApiProductVersionSpec](#updateapiproductversionspec) - Update an API Product Version Specification

## createApiProductVersionSpec

Creates a specification for a version of an API product.
**Note:** You can only have one specification for a product version.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\CreateApiProductVersionSpecRequest;
use \test_workspace-2\Konnect-API\Models\Shared\CreateAPIProductVersionSpecDTO;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateApiProductVersionSpecRequest();
    $request->createAPIProductVersionSpecDTO = new CreateAPIProductVersionSpecDTO();
    $request->createAPIProductVersionSpecDTO->content = 'TXkgWUFNTCBvciBKU09OIGZvcm1hdHRlZCBPQVMgY29udGVudA==';
    $request->createAPIProductVersionSpecDTO->name = 'oas.yaml';
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->productVersionId = '9f5061ce-78f6-4452-9108-ad7c02821fd5';

    $response = $sdk->apiProductVersionSpecification->createApiProductVersionSpec($request);

    if ($response->apiProductVersionSpec !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\test_workspace-2\Konnect-API\Models\Operations\CreateApiProductVersionSpecRequest](../../models/operations/CreateApiProductVersionSpecRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\CreateApiProductVersionSpecResponse](../../models/operations/CreateApiProductVersionSpecResponse.md)**


## deleteApiProductVersionSpec

Removes a specification from a verion of an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductVersionSpecRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteApiProductVersionSpecRequest();
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->productVersionId = '9f5061ce-78f6-4452-9108-ad7c02821fd5';
    $request->specificationId = '742ff9f1-fb89-4aeb-a599-f0e278c7aeaa';

    $response = $sdk->apiProductVersionSpecification->deleteApiProductVersionSpec($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductVersionSpecRequest](../../models/operations/DeleteApiProductVersionSpecRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductVersionSpecResponse](../../models/operations/DeleteApiProductVersionSpecResponse.md)**


## getApiProductVersionSpec

Returns a specification for the version of an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\GetApiProductVersionSpecRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetApiProductVersionSpecRequest();
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->productVersionId = '9f5061ce-78f6-4452-9108-ad7c02821fd5';
    $request->specificationId = '742ff9f1-fb89-4aeb-a599-f0e278c7aeaa';

    $response = $sdk->apiProductVersionSpecification->getApiProductVersionSpec($request);

    if ($response->apiProductVersionSpec !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\test_workspace-2\Konnect-API\Models\Operations\GetApiProductVersionSpecRequest](../../models/operations/GetApiProductVersionSpecRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\GetApiProductVersionSpecResponse](../../models/operations/GetApiProductVersionSpecResponse.md)**


## getManyApiProductVersionSpec

Returns a list of specification for the version of an API product.
**Note:** You can only have one specification for a product version.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionSpecRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetManyApiProductVersionSpecRequest();
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->productVersionId = '9f5061ce-78f6-4452-9108-ad7c02821fd5';

    $response = $sdk->apiProductVersionSpecification->getManyApiProductVersionSpec($request);

    if ($response->listAPIProductVersionSpecResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionSpecRequest](../../models/operations/GetManyApiProductVersionSpecRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductVersionSpecResponse](../../models/operations/GetManyApiProductVersionSpecResponse.md)**


## updateApiProductVersionSpec

Updates a specification from an API product version.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductVersionSpecRequest;
use \test_workspace-2\Konnect-API\Models\Shared\UpdateAPIProductVersionSpecDTO;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateApiProductVersionSpecRequest();
    $request->updateAPIProductVersionSpecDTO = new UpdateAPIProductVersionSpecDTO();
    $request->updateAPIProductVersionSpecDTO->content = 'TXkgWUFNTCBvciBKU09OIGZvcm1hdHRlZCBPQVMgY29udGVudA==';
    $request->updateAPIProductVersionSpecDTO->name = 'oas.yaml';
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->productVersionId = '9f5061ce-78f6-4452-9108-ad7c02821fd5';
    $request->specificationId = '742ff9f1-fb89-4aeb-a599-f0e278c7aeaa';

    $response = $sdk->apiProductVersionSpecification->updateApiProductVersionSpec($request);

    if ($response->apiProductVersionSpec !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductVersionSpecRequest](../../models/operations/UpdateApiProductVersionSpecRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductVersionSpecResponse](../../models/operations/UpdateApiProductVersionSpecResponse.md)**

