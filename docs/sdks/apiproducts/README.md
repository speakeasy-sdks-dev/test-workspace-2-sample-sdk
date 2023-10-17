# APIProducts
(*apiProducts*)

### Available Operations

* [createApiProduct](#createapiproduct) - Create API Product
* [deleteApiProduct](#deleteapiproduct) - Delete API Product
* [getApiProduct](#getapiproduct) - Fetch API product
* [getManyApiProduct](#getmanyapiproduct) - List API Products
* [updateApiProduct](#updateapiproduct) - Update an individual API product

## createApiProduct

An API Product packages together associated APIs and their operations, backed by thorough documentation,
with the objective of making API consumption straightforward for developers.


### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Shared\CreateAPIProductDTO;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAPIProductDTO();
    $request->description = 'Text describing the API product';
    $request->labels = [
        'male' => 'invoice',
    ];
    $request->name = 'API Product';

    $response = $sdk->apiProducts->createApiProduct($request);

    if ($response->apiProduct !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\test_workspace-2\Konnect-API\Models\Shared\CreateAPIProductDTO](../../models/shared/CreateAPIProductDTO.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\CreateApiProductResponse](../../models/operations/CreateApiProductResponse.md)**


## deleteApiProduct

Removes an individual API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteApiProductRequest();
    $request->id = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';

    $response = $sdk->apiProducts->deleteApiProduct($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductRequest](../../models/operations/DeleteApiProductRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\DeleteApiProductResponse](../../models/operations/DeleteApiProductResponse.md)**


## getApiProduct

Returns an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\GetApiProductRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetApiProductRequest();
    $request->id = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';

    $response = $sdk->apiProducts->getApiProduct($request);

    if ($response->apiProduct !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\test_workspace-2\Konnect-API\Models\Operations\GetApiProductRequest](../../models/operations/GetApiProductRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\GetApiProductResponse](../../models/operations/GetApiProductResponse.md)**


## getManyApiProduct

Returns a collection of API products.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductRequest;
use \test_workspace-2\Konnect-API\Models\Shared\APIProductFilterParameters;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetManyApiProductRequest();
    $request->filter = new APIProductFilterParameters();
    $request->filter->name = 'Oganesson';
    $request->labels = 'key:value,keyExists';
    $request->pageNumber = 1;
    $request->pageSize = 10;
    $request->sort = 'name desc';

    $response = $sdk->apiProducts->getManyApiProduct($request);

    if ($response->listAPIProductsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductRequest](../../models/operations/GetManyApiProductRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\GetManyApiProductResponse](../../models/operations/GetManyApiProductResponse.md)**


## updateApiProduct

Updates an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \test_workspace-2\Konnect-API\KonnectAPI;
use \test_workspace-2\Konnect-API\Models\Shared\Security;
use \test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductRequest;
use \test_workspace-2\Konnect-API\Models\Shared\UpdateAPIProductDTO;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateApiProductRequest();
    $request->updateAPIProductDTO = new UpdateAPIProductDTO();
    $request->updateAPIProductDTO->description = 'Text describing the API product';
    $request->updateAPIProductDTO->labels = [
        'withdrawal' => 'kelvin',
    ];
    $request->updateAPIProductDTO->name = 'API Product';
    $request->updateAPIProductDTO->portalIds = [
        '25a2624c-49fc-4764-99e1-224ed819f200',
    ];
    $request->id = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';

    $response = $sdk->apiProducts->updateApiProduct($request);

    if ($response->apiProduct !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductRequest](../../models/operations/UpdateApiProductRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\test_workspace-2\Konnect-API\Models\Operations\UpdateApiProductResponse](../../models/operations/UpdateApiProductResponse.md)**

