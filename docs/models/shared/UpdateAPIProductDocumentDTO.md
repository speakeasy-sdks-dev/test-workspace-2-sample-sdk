# UpdateAPIProductDocumentDTO

a document payload


## Fields

| Field                                                                                                                                     | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               | Example                                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `content`                                                                                                                                 | *?string*                                                                                                                                 | :heavy_minus_sign:                                                                                                                        | base64 encoded string of the document content                                                                                             | YmFzZTY0LWVuY29kZWQgdGV4dCBzdHJpbmc=                                                                                                      |
| `metadata`                                                                                                                                | [?UpdateAPIProductDocumentDTOMetadata](../../models/shared/UpdateAPIProductDocumentDTOMetadata.md)                                        | :heavy_minus_sign:                                                                                                                        | N/A                                                                                                                                       |                                                                                                                                           |
| `parentDocumentId`                                                                                                                        | *?string*                                                                                                                                 | :heavy_minus_sign:                                                                                                                        | Parent document Id. If this value is explicitly set to null, the<br/>document will be put as a top level document at the bottom of the tree.<br/> | dd4e1b98-3629-4dd3-acc0-759a726ffee2                                                                                                      |
| `slug`                                                                                                                                    | *?string*                                                                                                                                 | :heavy_minus_sign:                                                                                                                        | document slug. must be unique accross documents belonging to an api product                                                               | path-for-seo                                                                                                                              |
| `status`                                                                                                                                  | [?PublishStatus](../../models/shared/PublishStatus.md)                                                                                    | :heavy_minus_sign:                                                                                                                        | document publish status                                                                                                                   |                                                                                                                                           |
| `title`                                                                                                                                   | *?string*                                                                                                                                 | :heavy_minus_sign:                                                                                                                        | document title                                                                                                                            | How to update a document in Konnect DocumentHub                                                                                           |