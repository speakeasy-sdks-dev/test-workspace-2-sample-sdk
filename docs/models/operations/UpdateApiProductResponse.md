# UpdateApiProductResponse


## Fields

| Field                                                                                                        | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `apiProduct`                                                                                                 | [?\myapi\Models\Shared\APIProduct](../../models/shared/APIProduct.md)                                        | :heavy_minus_sign:                                                                                           | API product                                                                                                  |
| `badRequestError`                                                                                            | [?\myapi\Models\Shared\BadRequestError](../../models/shared/BadRequestError.md)                              | :heavy_minus_sign:                                                                                           | Bad Request                                                                                                  |
| `contentType`                                                                                                | *string*                                                                                                     | :heavy_check_mark:                                                                                           | HTTP response content type for this operation                                                                |
| `forbiddenError`                                                                                             | [?\myapi\Models\Shared\ForbiddenError](../../models/shared/ForbiddenError.md)                                | :heavy_minus_sign:                                                                                           | Forbidden                                                                                                    |
| `notFoundError`                                                                                              | [?\myapi\Models\Shared\NotFoundError](../../models/shared/NotFoundError.md)                                  | :heavy_minus_sign:                                                                                           | Not Found                                                                                                    |
| `statusCode`                                                                                                 | *int*                                                                                                        | :heavy_check_mark:                                                                                           | HTTP response status code for this operation                                                                 |
| `rawResponse`                                                                                                | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface) | :heavy_minus_sign:                                                                                           | Raw HTTP response; suitable for custom response parsing                                                      |
| `unauthorizedError`                                                                                          | [?\myapi\Models\Shared\UnauthorizedError](../../models/shared/UnauthorizedError.md)                          | :heavy_minus_sign:                                                                                           | Unauthorized                                                                                                 |
| `unsupportedMediaTypeError`                                                                                  | [?\myapi\Models\Shared\UnsupportedMediaTypeError](../../models/shared/UnsupportedMediaTypeError.md)          | :heavy_minus_sign:                                                                                           | Unsupported Media Type                                                                                       |