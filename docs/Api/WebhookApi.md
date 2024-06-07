# Tripartie\SafeCheckout\WebhookApi

All URIs are relative to https://staging-api.tripartie.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiWebhookHistoriesGetCollection()**](WebhookApi.md#apiWebhookHistoriesGetCollection) | **GET** /webhook-histories | Retrieves the collection of WebhookHistory resources. |
| [**apiWebhookHistoriesIdGet()**](WebhookApi.md#apiWebhookHistoriesIdGet) | **GET** /webhook-histories/{id} | Retrieves a WebhookHistory resource. |
| [**apiWebhookHistoriesIdPut()**](WebhookApi.md#apiWebhookHistoriesIdPut) | **PUT** /webhook-histories/{id} | Replay a Webhook that ended up in failure |
| [**apiWebhookSubscriptionsGetCollection()**](WebhookApi.md#apiWebhookSubscriptionsGetCollection) | **GET** /webhook-subscriptions | Retrieves the collection of WebhookSubscription resources. |
| [**apiWebhookSubscriptionsIdDelete()**](WebhookApi.md#apiWebhookSubscriptionsIdDelete) | **DELETE** /webhook-subscriptions/{id} | Removes the WebhookSubscription resource. |
| [**apiWebhookSubscriptionsPost()**](WebhookApi.md#apiWebhookSubscriptionsPost) | **POST** /webhook-subscriptions | Subscribe to Event(s) |


## `apiWebhookHistoriesGetCollection()`

```php
apiWebhookHistoriesGetCollection($page, $event, $event2, $objectId, $objectId2): \Tripartie\SafeCheckout\Model\WebhookHistoryCollectionRead[]
```

Retrieves the collection of WebhookHistory resources.

Retrieves the collection of WebhookHistory resources.

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


$apiInstance = new Tripartie\SafeCheckout\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$event = 'event_example'; // string | 
$event2 = array('event_example'); // string[] | 
$objectId = 'objectId_example'; // string | 
$objectId2 = array('objectId_example'); // string[] | 

try {
    $result = $apiInstance->apiWebhookHistoriesGetCollection($page, $event, $event2, $objectId, $objectId2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->apiWebhookHistoriesGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **event** | **string**|  | [optional] |
| **event2** | [**string[]**](../Model/string.md)|  | [optional] |
| **objectId** | **string**|  | [optional] |
| **objectId2** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\WebhookHistoryCollectionRead[]**](../Model/WebhookHistoryCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWebhookHistoriesIdGet()`

```php
apiWebhookHistoriesIdGet($id): \Tripartie\SafeCheckout\Model\WebhookHistoryRead
```

Retrieves a WebhookHistory resource.

Retrieves a WebhookHistory resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | WebhookHistory identifier

try {
    $result = $apiInstance->apiWebhookHistoriesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->apiWebhookHistoriesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| WebhookHistory identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\WebhookHistoryRead**](../Model/WebhookHistoryRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWebhookHistoriesIdPut()`

```php
apiWebhookHistoriesIdPut($id, $body): \Tripartie\SafeCheckout\Model\WebhookHistoryRead
```

Replay a Webhook that ended up in failure

Replaces the WebhookHistory resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | WebhookHistory identifier
$body = array('key' => new \stdClass); // object | The updated WebhookHistory resource

try {
    $result = $apiInstance->apiWebhookHistoriesIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->apiWebhookHistoriesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| WebhookHistory identifier | |
| **body** | **object**| The updated WebhookHistory resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\WebhookHistoryRead**](../Model/WebhookHistoryRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWebhookSubscriptionsGetCollection()`

```php
apiWebhookSubscriptionsGetCollection($page, $event): \Tripartie\SafeCheckout\Model\WebhookSubscriptionRead[]
```

Retrieves the collection of WebhookSubscription resources.

Retrieves the collection of WebhookSubscription resources.

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


$apiInstance = new Tripartie\SafeCheckout\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$event = offer.transaction.authorized; // string | Filter on a limited subset of event

try {
    $result = $apiInstance->apiWebhookSubscriptionsGetCollection($page, $event);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->apiWebhookSubscriptionsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **event** | **string**| Filter on a limited subset of event | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\WebhookSubscriptionRead[]**](../Model/WebhookSubscriptionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiWebhookSubscriptionsIdDelete()`

```php
apiWebhookSubscriptionsIdDelete($id)
```

Removes the WebhookSubscription resource.

Removes the WebhookSubscription resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | WebhookSubscription identifier

try {
    $apiInstance->apiWebhookSubscriptionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->apiWebhookSubscriptionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| WebhookSubscription identifier | |

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

## `apiWebhookSubscriptionsPost()`

```php
apiWebhookSubscriptionsPost($webhookSubscriptionWrite): \Tripartie\SafeCheckout\Model\WebhookSubscriptionRead
```

Subscribe to Event(s)

Creates a WebhookSubscription resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookSubscriptionWrite = new \Tripartie\SafeCheckout\Model\WebhookSubscriptionWrite(); // \Tripartie\SafeCheckout\Model\WebhookSubscriptionWrite | The new WebhookSubscription resource

try {
    $result = $apiInstance->apiWebhookSubscriptionsPost($webhookSubscriptionWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->apiWebhookSubscriptionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookSubscriptionWrite** | [**\Tripartie\SafeCheckout\Model\WebhookSubscriptionWrite**](../Model/WebhookSubscriptionWrite.md)| The new WebhookSubscription resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\WebhookSubscriptionRead**](../Model/WebhookSubscriptionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
