<!-- Start SDK Example Usage -->


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
<!-- End SDK Example Usage -->