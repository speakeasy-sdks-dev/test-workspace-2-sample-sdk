# APIProductVersions
(*apiProductVersions*)

### Available Operations

* [createApiProductVersion](#createapiproductversion) - Create API Product Version
* [deleteApiProductVersion](#deleteapiproductversion) - Delete API Product Version
* [getApiProductVersion](#getapiproductversion) - Fetch API Product Version
* [getManyApiProductVersion](#getmanyapiproductversion) - List API Product Versions
* [updateApiProductVersion](#updateapiproductversion) - Update an API Product Version

## createApiProductVersion

Creates a version of an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \myapi\KonnectAPI;
use \myapi\Models\Shared\Security;
use \myapi\Models\Operations\CreateApiProductVersionRequest;
use \myapi\Models\Shared\CreateAPIProductVersionDTO;
use \myapi\Models\Shared\CreateAPIProductVersionDTOPublishStatus;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateApiProductVersionRequest();
    $request->createAPIProductVersionDTO = new CreateAPIProductVersionDTO();
    $request->createAPIProductVersionDTO->deprecated = false;
    $request->createAPIProductVersionDTO->gatewayService = 'ability';
    $request->createAPIProductVersionDTO->name = 'v1';
    $request->createAPIProductVersionDTO->publishStatus = CreateAPIProductVersionDTOPublishStatus::Unpublished;
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';

    $response = $sdk->apiProductVersions->createApiProductVersion($request);

    if ($response->apiProductVersion !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\myapi\Models\Operations\CreateApiProductVersionRequest](../../models/operations/CreateApiProductVersionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\myapi\Models\Operations\CreateApiProductVersionResponse](../../models/operations/CreateApiProductVersionResponse.md)**


## deleteApiProductVersion

Removes an API product version.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \myapi\KonnectAPI;
use \myapi\Models\Shared\Security;
use \myapi\Models\Operations\DeleteApiProductVersionRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteApiProductVersionRequest();
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->id = '9f5061ce-78f6-4452-9108-ad7c02821fd5';

    $response = $sdk->apiProductVersions->deleteApiProductVersion($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\myapi\Models\Operations\DeleteApiProductVersionRequest](../../models/operations/DeleteApiProductVersionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\myapi\Models\Operations\DeleteApiProductVersionResponse](../../models/operations/DeleteApiProductVersionResponse.md)**


## getApiProductVersion

Returns a version of an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \myapi\KonnectAPI;
use \myapi\Models\Shared\Security;
use \myapi\Models\Operations\GetApiProductVersionRequest;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetApiProductVersionRequest();
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->id = '9f5061ce-78f6-4452-9108-ad7c02821fd5';

    $response = $sdk->apiProductVersions->getApiProductVersion($request);

    if ($response->apiProductVersion !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [\myapi\Models\Operations\GetApiProductVersionRequest](../../models/operations/GetApiProductVersionRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |


### Response

**[?\myapi\Models\Operations\GetApiProductVersionResponse](../../models/operations/GetApiProductVersionResponse.md)**


## getManyApiProductVersion

Returns a collection of all versions for an API product.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \myapi\KonnectAPI;
use \myapi\Models\Shared\Security;
use \myapi\Models\Operations\GetManyApiProductVersionRequest;
use \myapi\Models\Shared\APIProductVersionFilterParameters;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetManyApiProductVersionRequest();
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->filter = new APIProductVersionFilterParameters();
    $request->filter->name = 'male';
    $request->pageNumber = 1;
    $request->pageSize = 10;
    $request->sort = 'name desc';

    $response = $sdk->apiProductVersions->getManyApiProductVersion($request);

    if ($response->listAPIProductVersionsResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [\myapi\Models\Operations\GetManyApiProductVersionRequest](../../models/operations/GetManyApiProductVersionRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |


### Response

**[?\myapi\Models\Operations\GetManyApiProductVersionResponse](../../models/operations/GetManyApiProductVersionResponse.md)**


## updateApiProductVersion

Updates an API product version.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \myapi\KonnectAPI;
use \myapi\Models\Shared\Security;
use \myapi\Models\Operations\UpdateApiProductVersionRequest;
use \myapi\Models\Shared\UpdateAPIProductVersionDTO;
use \myapi\Models\Shared\UpdateAPIProductVersionDTOPublishStatus;

$security = new Security();
$security->personalAccessToken = '';

$sdk = KonnectAPI::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateApiProductVersionRequest();
    $request->updateAPIProductVersionDTO = new UpdateAPIProductVersionDTO();
    $request->updateAPIProductVersionDTO->deprecated = false;
    $request->updateAPIProductVersionDTO->gatewayService = 'models';
    $request->updateAPIProductVersionDTO->name = 'v1';
    $request->updateAPIProductVersionDTO->notify = true;
    $request->updateAPIProductVersionDTO->publishStatus = UpdateAPIProductVersionDTOPublishStatus::Unpublished;
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';
    $request->id = '9f5061ce-78f6-4452-9108-ad7c02821fd5';

    $response = $sdk->apiProductVersions->updateApiProductVersion($request);

    if ($response->apiProductVersion !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [\myapi\Models\Operations\UpdateApiProductVersionRequest](../../models/operations/UpdateApiProductVersionRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |


### Response

**[?\myapi\Models\Operations\UpdateApiProductVersionResponse](../../models/operations/UpdateApiProductVersionResponse.md)**

