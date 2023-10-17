# CreateAPIProductVersionSpecDTO

The request schema to create a specification for a version of an API product.


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          | Example                                                              |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `content`                                                            | *string*                                                             | :heavy_check_mark:                                                   | The base64 encoded contents of the API product version specification | TXkgWUFNTCBvciBKU09OIGZvcm1hdHRlZCBPQVMgY29udGVudA==                 |
| `name`                                                               | *string*                                                             | :heavy_check_mark:                                                   | The name of the API product version specification                    | oas.yaml                                                             |