# test-workspace-2/konnect-api

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://github.com/speakeasy-sdks-dev/test-workspace-2-sample-sdk.git/actions"><img src="https://img.shields.io/github/actions/workflow/status/speakeasy-sdks-dev/test-workspace-2-sample-sdk/speakeasy_sdk_generation.yml?style=for-the-badge" /></a>
    
</div>

<!-- Start SDK Installation -->
# SDK Installation

## Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/speakeasy-sdks-dev/test-workspace-2-sample-sdk.git"
        }
    ],
    "require": {
        "test-workspace-2/konnect-api": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation -->

## SDK Example Usage
<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use myapi\KonnectAPI;
use myapi\Models\Shared\Security;
use myapi\Models\Operations\CreateApiProductDocumentRequest;
use myapi\Models\Shared\CreateAPIProductDocumentDTO;
use myapi\Models\Shared\CreateAPIProductDocumentDTOMetadata;
use myapi\Models\Shared\PublishStatus;

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
    $request->createAPIProductDocumentDTO->parentDocumentId =
        'dd4e1b98-3629-4dd3-acc0-759a726ffee2';
    $request->createAPIProductDocumentDTO->slug = 'path-for-seo';
    $request->createAPIProductDocumentDTO->status = PublishStatus::Unpublished;
    $request->createAPIProductDocumentDTO->title =
        'How to create a document in Konnect DocumentHub';
    $request->apiProductId = 'd32d905a-ed33-46a3-a093-d8f536af9a8a';

    $response = $sdk->apiProductDocumentation->createApiProductDocument($request);

    if ($response->apiProductDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
# Available Resources and Operations


## [apiProductDocumentation](docs/sdks/apiproductdocumentation/README.md)

* [createApiProductDocument](docs/sdks/apiproductdocumentation/README.md#createapiproductdocument) - Create API Product Document
* [deleteApiProductDocument](docs/sdks/apiproductdocumentation/README.md#deleteapiproductdocument) - Delete API Product Documentation
* [getApiProductDocument](docs/sdks/apiproductdocumentation/README.md#getapiproductdocument) - Fetch API Product Document
* [getManyApiProductDocument](docs/sdks/apiproductdocumentation/README.md#getmanyapiproductdocument) - List API Product Documents
* [updateApiProductDocument](docs/sdks/apiproductdocumentation/README.md#updateapiproductdocument) - Update an API Product Document

## [apiProductVersionSpecification](docs/sdks/apiproductversionspecification/README.md)

* [createApiProductVersionSpec](docs/sdks/apiproductversionspecification/README.md#createapiproductversionspec) - Create API Product Version Specification
* [deleteApiProductVersionSpec](docs/sdks/apiproductversionspecification/README.md#deleteapiproductversionspec) - Delete API Product Version Specification
* [getApiProductVersionSpec](docs/sdks/apiproductversionspecification/README.md#getapiproductversionspec) - Fetch API Product Version Specification
* [getManyApiProductVersionSpec](docs/sdks/apiproductversionspecification/README.md#getmanyapiproductversionspec) - Fetch API Product Version Specifications
* [updateApiProductVersionSpec](docs/sdks/apiproductversionspecification/README.md#updateapiproductversionspec) - Update an API Product Version Specification

## [apiProductVersions](docs/sdks/apiproductversions/README.md)

* [createApiProductVersion](docs/sdks/apiproductversions/README.md#createapiproductversion) - Create API Product Version
* [deleteApiProductVersion](docs/sdks/apiproductversions/README.md#deleteapiproductversion) - Delete API Product Version
* [getApiProductVersion](docs/sdks/apiproductversions/README.md#getapiproductversion) - Fetch API Product Version
* [getManyApiProductVersion](docs/sdks/apiproductversions/README.md#getmanyapiproductversion) - List API Product Versions
* [updateApiProductVersion](docs/sdks/apiproductversions/README.md#updateapiproductversion) - Update an API Product Version

## [apiProducts](docs/sdks/apiproducts/README.md)

* [createApiProduct](docs/sdks/apiproducts/README.md#createapiproduct) - Create API Product
* [deleteApiProduct](docs/sdks/apiproducts/README.md#deleteapiproduct) - Delete API Product
* [getApiProduct](docs/sdks/apiproducts/README.md#getapiproduct) - Fetch API product
* [getManyApiProduct](docs/sdks/apiproducts/README.md#getmanyapiproduct) - List API Products
* [updateApiProduct](docs/sdks/apiproducts/README.md#updateapiproduct) - Update an individual API product
<!-- End SDK Available Operations -->

<!-- Start Dev Containers -->



<!-- End Dev Containers -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
