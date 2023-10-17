# APIProductDocumentSummary


## Fields

| Field                                                 | Type                                                  | Required                                              | Description                                           | Example                                               |
| ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- | ----------------------------------------------------- |
| `id`                                                  | *string*                                              | :heavy_check_mark:                                    | The API product document identifier.                  | de5c9818-be5c-42e6-b514-e3d4bc30ddeb                  |
| `parentDocumentId`                                    | *string*                                              | :heavy_check_mark:                                    | The parent API product document identifier.           | null                                                  |
| `slug`                                                | *string*                                              | :heavy_check_mark:                                    | API product document slug                             | api-product-document                                  |
| `status`                                              | [PublishStatus](../../models/shared/PublishStatus.md) | :heavy_check_mark:                                    | document publish status                               |                                                       |
| `title`                                               | *string*                                              | :heavy_check_mark:                                    | API product document title                            | API Product Document                                  |