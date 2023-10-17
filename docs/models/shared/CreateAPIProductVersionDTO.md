# CreateAPIProductVersionDTO

The request schema to create a version of an API product.


## Fields

| Field                                                                                                      | Type                                                                                                       | Required                                                                                                   | Description                                                                                                | Example                                                                                                    |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `deprecated`                                                                                               | *?bool*                                                                                                    | :heavy_minus_sign:                                                                                         | Indicates if the version of the API product is deprecated.                                                 | false                                                                                                      |
| `gatewayService`                                                                                           | *mixed*                                                                                                    | :heavy_minus_sign:                                                                                         | N/A                                                                                                        |                                                                                                            |
| `name`                                                                                                     | *string*                                                                                                   | :heavy_check_mark:                                                                                         | The version name of the API product version.                                                               | v1                                                                                                         |
| `publishStatus`                                                                                            | [?CreateAPIProductVersionDTOPublishStatus](../../models/shared/CreateAPIProductVersionDTOPublishStatus.md) | :heavy_minus_sign:                                                                                         | The publish status of the API product version.                                                             | unpublished                                                                                                |