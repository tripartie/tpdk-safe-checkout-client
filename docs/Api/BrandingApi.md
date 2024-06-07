# Tripartie\SafeCheckout\BrandingApi

All URIs are relative to https://staging-api.tripartie.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiOrganizationsIdPatch()**](BrandingApi.md#apiOrganizationsIdPatch) | **PATCH** /organizations/{id} | Update your Organization details, branding or parameters |
| [**apiOrganizationsIdiconDelete()**](BrandingApi.md#apiOrganizationsIdiconDelete) | **DELETE** /organizations/{id}/icon | Unset your Organization Icon |
| [**apiOrganizationsIdiconPost()**](BrandingApi.md#apiOrganizationsIdiconPost) | **POST** /organizations/{id}/icon | Upload your Organization Icon |
| [**apiOrganizationsIdlogoDelete()**](BrandingApi.md#apiOrganizationsIdlogoDelete) | **DELETE** /organizations/{id}/logo | Unset your Organization Logo |
| [**apiOrganizationsIdlogoPost()**](BrandingApi.md#apiOrganizationsIdlogoPost) | **POST** /organizations/{id}/logo | Upload your Organization logo |


## `apiOrganizationsIdPatch()`

```php
apiOrganizationsIdPatch($id, $organizationUpdate): \Tripartie\SafeCheckout\Model\UserOrganizationRead
```

Update your Organization details, branding or parameters

Updates the Organization resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Organization identifier
$organizationUpdate = new \Tripartie\SafeCheckout\Model\OrganizationUpdate(); // \Tripartie\SafeCheckout\Model\OrganizationUpdate | The updated Organization resource

try {
    $result = $apiInstance->apiOrganizationsIdPatch($id, $organizationUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->apiOrganizationsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Organization identifier | |
| **organizationUpdate** | [**\Tripartie\SafeCheckout\Model\OrganizationUpdate**](../Model/OrganizationUpdate.md)| The updated Organization resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\UserOrganizationRead**](../Model/UserOrganizationRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrganizationsIdiconDelete()`

```php
apiOrganizationsIdiconDelete($id)
```

Unset your Organization Icon

Removes the Media resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Organization identifier

try {
    $apiInstance->apiOrganizationsIdiconDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->apiOrganizationsIdiconDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Organization identifier | |

### Return type

void (empty response body)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrganizationsIdiconPost()`

```php
apiOrganizationsIdiconPost($id, $file): \Tripartie\SafeCheckout\Model\MediaRead
```

Upload your Organization Icon

Creates a Media resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Organization identifier
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apiOrganizationsIdiconPost($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->apiOrganizationsIdiconPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Organization identifier | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\MediaRead**](../Model/MediaRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrganizationsIdlogoDelete()`

```php
apiOrganizationsIdlogoDelete($id)
```

Unset your Organization Logo

Removes the Media resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Organization identifier

try {
    $apiInstance->apiOrganizationsIdlogoDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->apiOrganizationsIdlogoDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Organization identifier | |

### Return type

void (empty response body)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrganizationsIdlogoPost()`

```php
apiOrganizationsIdlogoPost($id, $file): \Tripartie\SafeCheckout\Model\MediaRead
```

Upload your Organization logo

Creates a Media resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\BrandingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Organization identifier
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apiOrganizationsIdlogoPost($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BrandingApi->apiOrganizationsIdlogoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Organization identifier | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\MediaRead**](../Model/MediaRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
