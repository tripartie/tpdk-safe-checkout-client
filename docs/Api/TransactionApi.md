# Tripartie\SafeCheckout\TransactionApi

All URIs are relative to https://staging-api.tripartie.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiQuotesPost()**](TransactionApi.md#apiQuotesPost) | **POST** /quotes | Create a Quote prior to issuing a Transaction |
| [**apiQuotesUlidGet()**](TransactionApi.md#apiQuotesUlidGet) | **GET** /quotes/{ulid} | Retrieve a Quote |
| [**apiQuotesUlidPatch()**](TransactionApi.md#apiQuotesUlidPatch) | **PATCH** /quotes/{ulid} | Update a Quote prior to issuing a Transaction |
| [**apiTransactionsGetCollection()**](TransactionApi.md#apiTransactionsGetCollection) | **GET** /transactions | List all Transaction |
| [**apiTransactionsPost()**](TransactionApi.md#apiTransactionsPost) | **POST** /transactions | Initialize a new Transaction |
| [**apiTransactionsUlidGet()**](TransactionApi.md#apiTransactionsUlidGet) | **GET** /transactions/{ulid} | Get a Transaction |
| [**apiTransactionsUlidPatch()**](TransactionApi.md#apiTransactionsUlidPatch) | **PATCH** /transactions/{ulid} | Interact with a Transaction |


## `apiQuotesPost()`

```php
apiQuotesPost($quoteWrite): \Tripartie\SafeCheckout\Model\QuoteRead
```

Create a Quote prior to issuing a Transaction

Creates a Quote resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quoteWrite = new \Tripartie\SafeCheckout\Model\QuoteWrite(); // \Tripartie\SafeCheckout\Model\QuoteWrite | The new Quote resource

try {
    $result = $apiInstance->apiQuotesPost($quoteWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->apiQuotesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **quoteWrite** | [**\Tripartie\SafeCheckout\Model\QuoteWrite**](../Model/QuoteWrite.md)| The new Quote resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\QuoteRead**](../Model/QuoteRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiQuotesUlidGet()`

```php
apiQuotesUlidGet($ulid): \Tripartie\SafeCheckout\Model\QuoteRead
```

Retrieve a Quote

Retrieves a Quote resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | Quote identifier

try {
    $result = $apiInstance->apiQuotesUlidGet($ulid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->apiQuotesUlidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**| Quote identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\QuoteRead**](../Model/QuoteRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiQuotesUlidPatch()`

```php
apiQuotesUlidPatch($ulid, $quoteUpdate): \Tripartie\SafeCheckout\Model\QuoteRead
```

Update a Quote prior to issuing a Transaction

Updates the Quote resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | Quote identifier
$quoteUpdate = new \Tripartie\SafeCheckout\Model\QuoteUpdate(); // \Tripartie\SafeCheckout\Model\QuoteUpdate | The updated Quote resource

try {
    $result = $apiInstance->apiQuotesUlidPatch($ulid, $quoteUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->apiQuotesUlidPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**| Quote identifier | |
| **quoteUpdate** | [**\Tripartie\SafeCheckout\Model\QuoteUpdate**](../Model/QuoteUpdate.md)| The updated Quote resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\QuoteRead**](../Model/QuoteRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTransactionsGetCollection()`

```php
apiTransactionsGetCollection($page, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $status, $status2, $offerTitle): \Tripartie\SafeCheckout\Model\TransactionCollectionRead[]
```

List all Transaction

Retrieve a list of Transaction paginated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$orderUpdatedAt = 'orderUpdatedAt_example'; // string | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$updatedAtBefore = 'updatedAtBefore_example'; // string | 
$updatedAtStrictlyBefore = 'updatedAtStrictlyBefore_example'; // string | 
$updatedAtAfter = 'updatedAtAfter_example'; // string | 
$updatedAtStrictlyAfter = 'updatedAtStrictlyAfter_example'; // string | 
$status = CREATED; // string | Filter on a specific value of status
$status2 = array('status_example'); // string[] | Filter on a limited subset of status
$offerTitle = 'offerTitle_example'; // string | 

try {
    $result = $apiInstance->apiTransactionsGetCollection($page, $orderCreatedAt, $orderUpdatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $updatedAtBefore, $updatedAtStrictlyBefore, $updatedAtAfter, $updatedAtStrictlyAfter, $status, $status2, $offerTitle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->apiTransactionsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **orderCreatedAt** | **string**|  | [optional] |
| **orderUpdatedAt** | **string**|  | [optional] |
| **createdAtBefore** | **string**|  | [optional] |
| **createdAtStrictlyBefore** | **string**|  | [optional] |
| **createdAtAfter** | **string**|  | [optional] |
| **createdAtStrictlyAfter** | **string**|  | [optional] |
| **updatedAtBefore** | **string**|  | [optional] |
| **updatedAtStrictlyBefore** | **string**|  | [optional] |
| **updatedAtAfter** | **string**|  | [optional] |
| **updatedAtStrictlyAfter** | **string**|  | [optional] |
| **status** | **string**| Filter on a specific value of status | [optional] |
| **status2** | [**string[]**](../Model/string.md)| Filter on a limited subset of status | [optional] |
| **offerTitle** | **string**|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\TransactionCollectionRead[]**](../Model/TransactionCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTransactionsPost()`

```php
apiTransactionsPost($transactionWrite): \Tripartie\SafeCheckout\Model\TransactionRead
```

Initialize a new Transaction

Create a new Transaction for Preauthorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transactionWrite = new \Tripartie\SafeCheckout\Model\TransactionWrite(); // \Tripartie\SafeCheckout\Model\TransactionWrite | The new Transaction resource

try {
    $result = $apiInstance->apiTransactionsPost($transactionWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->apiTransactionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transactionWrite** | [**\Tripartie\SafeCheckout\Model\TransactionWrite**](../Model/TransactionWrite.md)| The new Transaction resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\TransactionRead**](../Model/TransactionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTransactionsUlidGet()`

```php
apiTransactionsUlidGet($ulid): \Tripartie\SafeCheckout\Model\TransactionRead
```

Get a Transaction

Retrieve a single Transaction by ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | Transaction identifier

try {
    $result = $apiInstance->apiTransactionsUlidGet($ulid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->apiTransactionsUlidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**| Transaction identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\TransactionRead**](../Model/TransactionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTransactionsUlidPatch()`

```php
apiTransactionsUlidPatch($ulid, $transactionUpdate): \Tripartie\SafeCheckout\Model\TransactionRead
```

Interact with a Transaction

Make decision upon a Transaction in order to make it evolve

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\TransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | Transaction identifier
$transactionUpdate = new \Tripartie\SafeCheckout\Model\TransactionUpdate(); // \Tripartie\SafeCheckout\Model\TransactionUpdate | The updated Transaction resource

try {
    $result = $apiInstance->apiTransactionsUlidPatch($ulid, $transactionUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionApi->apiTransactionsUlidPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**| Transaction identifier | |
| **transactionUpdate** | [**\Tripartie\SafeCheckout\Model\TransactionUpdate**](../Model/TransactionUpdate.md)| The updated Transaction resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\TransactionRead**](../Model/TransactionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
