# Tripartie\SafeCheckout\AdminApi

All URIs are relative to https://staging-api.tripartie.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiApiClientsGetCollection()**](AdminApi.md#apiApiClientsGetCollection) | **GET** /api-clients | Retrieves the collection of ApiClient resources. |
| [**apiApiClientsIdentifierDelete()**](AdminApi.md#apiApiClientsIdentifierDelete) | **DELETE** /api-clients/{identifier} | Removes the ApiClient resource. |
| [**apiApiClientsIdentifierGet()**](AdminApi.md#apiApiClientsIdentifierGet) | **GET** /api-clients/{identifier} | Retrieves a ApiClient resource. |
| [**apiApiClientsPost()**](AdminApi.md#apiApiClientsPost) | **POST** /api-clients | Creates a ApiClient resource. |
| [**apiInvitePost()**](AdminApi.md#apiInvitePost) | **POST** /invite | Organization invite |
| [**apiOrganizationsGetCollection()**](AdminApi.md#apiOrganizationsGetCollection) | **GET** /organizations | Retrieves the collection of Organization resources. |
| [**apiOrganizationsIdGet()**](AdminApi.md#apiOrganizationsIdGet) | **GET** /organizations/{id} | Retrieves a Organization resource. |
| [**apiUsersGetCollection()**](AdminApi.md#apiUsersGetCollection) | **GET** /users | Retrieves the collection of User resources. |
| [**apiUsersIdGet()**](AdminApi.md#apiUsersIdGet) | **GET** /users/{id} | Retrieves a User resource. |
| [**apiUsersIddisablePatch()**](AdminApi.md#apiUsersIddisablePatch) | **PATCH** /users/{id}/disable | Updates the User resource. |
| [**apiUsersIdenablePatch()**](AdminApi.md#apiUsersIdenablePatch) | **PATCH** /users/{id}/enable | Updates the User resource. |
| [**authenticationPost()**](AdminApi.md#authenticationPost) | **POST** /authentication | User authentication |
| [**statisticsPost()**](AdminApi.md#statisticsPost) | **POST** /statistics | Statistics Generator |


## `apiApiClientsGetCollection()`

```php
apiApiClientsGetCollection($page): \Tripartie\SafeCheckout\Model\ApiClientRead[]
```

Retrieves the collection of ApiClient resources.

Retrieves the collection of ApiClient resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiApiClientsGetCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiApiClientsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\Tripartie\SafeCheckout\Model\ApiClientRead[]**](../Model/ApiClientRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApiClientsIdentifierDelete()`

```php
apiApiClientsIdentifierDelete($identifier)
```

Removes the ApiClient resource.

Removes the ApiClient resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | ApiClient identifier

try {
    $apiInstance->apiApiClientsIdentifierDelete($identifier);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiApiClientsIdentifierDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| ApiClient identifier | |

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

## `apiApiClientsIdentifierGet()`

```php
apiApiClientsIdentifierGet($identifier): \Tripartie\SafeCheckout\Model\ApiClientRead
```

Retrieves a ApiClient resource.

Retrieves a ApiClient resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | ApiClient identifier

try {
    $result = $apiInstance->apiApiClientsIdentifierGet($identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiApiClientsIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| ApiClient identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\ApiClientRead**](../Model/ApiClientRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiApiClientsPost()`

```php
apiApiClientsPost($apiClientWrite): \Tripartie\SafeCheckout\Model\ApiClientPostCreationRead
```

Creates a ApiClient resource.

Creates a ApiClient resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$apiClientWrite = new \Tripartie\SafeCheckout\Model\ApiClientWrite(); // \Tripartie\SafeCheckout\Model\ApiClientWrite | The new ApiClient resource

try {
    $result = $apiInstance->apiApiClientsPost($apiClientWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiApiClientsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apiClientWrite** | [**\Tripartie\SafeCheckout\Model\ApiClientWrite**](../Model/ApiClientWrite.md)| The new ApiClient resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\ApiClientPostCreationRead**](../Model/ApiClientPostCreationRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiInvitePost()`

```php
apiInvitePost($userInvite): \Tripartie\SafeCheckout\Model\UserPostRegisterRead
```

Organization invite

Invite a user to your organization workspace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userInvite = new \Tripartie\SafeCheckout\Model\UserInvite(); // \Tripartie\SafeCheckout\Model\UserInvite | The new User resource

try {
    $result = $apiInstance->apiInvitePost($userInvite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiInvitePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userInvite** | [**\Tripartie\SafeCheckout\Model\UserInvite**](../Model/UserInvite.md)| The new User resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\UserPostRegisterRead**](../Model/UserPostRegisterRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrganizationsGetCollection()`

```php
apiOrganizationsGetCollection($page, $itemsPerPage, $name): \Tripartie\SafeCheckout\Model\OrganizationCollectionRead[]
```

Retrieves the collection of Organization resources.

Retrieves the collection of Organization resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$itemsPerPage = 30; // int | The number of items per page
$name = 'name_example'; // string | 

try {
    $result = $apiInstance->apiOrganizationsGetCollection($page, $itemsPerPage, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiOrganizationsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **itemsPerPage** | **int**| The number of items per page | [optional] [default to 30] |
| **name** | **string**|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\OrganizationCollectionRead[]**](../Model/OrganizationCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOrganizationsIdGet()`

```php
apiOrganizationsIdGet($id): \Tripartie\SafeCheckout\Model\OrganizationRead
```

Retrieves a Organization resource.

Retrieves a Organization resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Organization identifier

try {
    $result = $apiInstance->apiOrganizationsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiOrganizationsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Organization identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\OrganizationRead**](../Model/OrganizationRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersGetCollection()`

```php
apiUsersGetCollection($page): \Tripartie\SafeCheckout\Model\UserCollectionRead[]
```

Retrieves the collection of User resources.

Retrieves the collection of User resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiUsersGetCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiUsersGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\Tripartie\SafeCheckout\Model\UserCollectionRead[]**](../Model/UserCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdGet()`

```php
apiUsersIdGet($id): \Tripartie\SafeCheckout\Model\UserSupportRead
```

Retrieves a User resource.

Retrieves a User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier

try {
    $result = $apiInstance->apiUsersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiUsersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\UserSupportRead**](../Model/UserSupportRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIddisablePatch()`

```php
apiUsersIddisablePatch($id, $body): \Tripartie\SafeCheckout\Model\UserUserSubscribed
```

Updates the User resource.

Updates the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$body = array('key' => new \stdClass); // object | The updated User resource

try {
    $result = $apiInstance->apiUsersIddisablePatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiUsersIddisablePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **body** | **object**| The updated User resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\UserUserSubscribed**](../Model/UserUserSubscribed.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdenablePatch()`

```php
apiUsersIdenablePatch($id, $body): \Tripartie\SafeCheckout\Model\UserUserSubscribed
```

Updates the User resource.

Updates the User resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$body = array('key' => new \stdClass); // object | The updated User resource

try {
    $result = $apiInstance->apiUsersIdenablePatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->apiUsersIdenablePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **body** | **object**| The updated User resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\UserUserSubscribed**](../Model/UserUserSubscribed.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `authenticationPost()`

```php
authenticationPost($userJwtWrite): \Tripartie\SafeCheckout\Model\UserJwtCreated
```

User authentication

This endpoint is protected by a captcha, do not try to use it to consume our API. IP/CIDR to be banned upon fraudulent/irregular usage. Follow the oauth 2.0 authentication challenge as described in the documentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userJwtWrite = new \Tripartie\SafeCheckout\Model\UserJwtWrite(); // \Tripartie\SafeCheckout\Model\UserJwtWrite | 

try {
    $result = $apiInstance->authenticationPost($userJwtWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->authenticationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userJwtWrite** | [**\Tripartie\SafeCheckout\Model\UserJwtWrite**](../Model/UserJwtWrite.md)|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\UserJwtCreated**](../Model/UserJwtCreated.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `statisticsPost()`

```php
statisticsPost($statisticWrite): \Tripartie\SafeCheckout\Model\StatisticRead
```

Statistics Generator

Generate statistics based on a set of parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\AdminApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statisticWrite = new \Tripartie\SafeCheckout\Model\StatisticWrite(); // \Tripartie\SafeCheckout\Model\StatisticWrite | 

try {
    $result = $apiInstance->statisticsPost($statisticWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdminApi->statisticsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **statisticWrite** | [**\Tripartie\SafeCheckout\Model\StatisticWrite**](../Model/StatisticWrite.md)|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\StatisticRead**](../Model/StatisticRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
