# Tripartie\SafeCheckout\SafeCheckoutApi

All URIs are relative to https://staging-api.tripartie.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiOffersGetCollection()**](SafeCheckoutApi.md#apiOffersGetCollection) | **GET** /offers | Search amongst Offers |
| [**apiOffersPost()**](SafeCheckoutApi.md#apiOffersPost) | **POST** /offers | Create a public link for Offer |
| [**apiOffersUlidDelete()**](SafeCheckoutApi.md#apiOffersUlidDelete) | **DELETE** /offers/{ulid} | Disable existing Offer |
| [**apiOffersUlidGet()**](SafeCheckoutApi.md#apiOffersUlidGet) | **GET** /offers/{ulid} | Fetch a Offer details |
| [**apiOffersUlidPatch()**](SafeCheckoutApi.md#apiOffersUlidPatch) | **PATCH** /offers/{ulid} | Update existing Offer |
| [**apiOffersUlidmediasIdDelete()**](SafeCheckoutApi.md#apiOffersUlidmediasIdDelete) | **DELETE** /offers/{ulid}/medias/{id} | Removes the Media resource. |
| [**apiOffersUlidmediasPost()**](SafeCheckoutApi.md#apiOffersUlidmediasPost) | **POST** /offers/{ulid}/medias | Upload a picture for a given Offer |
| [**apiUsersIdoffersPost()**](SafeCheckoutApi.md#apiUsersIdoffersPost) | **POST** /users/{id}/offers | Create a public link for Offer |


## `apiOffersGetCollection()`

```php
apiOffersGetCollection($page, $title, $publicUrl, $publicUrl2, $unitPrice, $unitPrice2, $itemCount, $itemCount2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $metadata, $offerMetadata, $sellerMetadata, $nature, $condition, $status, $shippingAllowed): \Tripartie\SafeCheckout\Model\OfferCollectionRead[]
```

Search amongst Offers

Retrieves the collection of Offer resources.

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


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$title = 'title_example'; // string | 
$publicUrl = 'publicUrl_example'; // string | 
$publicUrl2 = array('publicUrl_example'); // string[] | 
$unitPrice = 'unitPrice_example'; // string | 
$unitPrice2 = array('unitPrice_example'); // string[] | 
$itemCount = 56; // int | 
$itemCount2 = array(56); // int[] | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$metadata = ["External-ID","1254A"]; // string[] | Flattened OrderedMap for metadata. Must be a multiple of two items count. Explicitly set \"null\" for desired value.
$offerMetadata = ["External-ID","1254A"]; // string[] | Flattened OrderedMap for offer.metadata. Must be a multiple of two items count. Explicitly set \"null\" for desired value.
$sellerMetadata = ["External-ID","1254A"]; // string[] | Flattened OrderedMap for seller.metadata. Must be a multiple of two items count. Explicitly set \"null\" for desired value.
$nature = service; // string | Filter on a limited subset of nature
$condition = NEW; // string | Filter on a limited subset of condition
$status = issued; // string | Filter on a limited subset of status
$shippingAllowed = True; // bool | 

try {
    $result = $apiInstance->apiOffersGetCollection($page, $title, $publicUrl, $publicUrl2, $unitPrice, $unitPrice2, $itemCount, $itemCount2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $metadata, $offerMetadata, $sellerMetadata, $nature, $condition, $status, $shippingAllowed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiOffersGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **title** | **string**|  | [optional] |
| **publicUrl** | **string**|  | [optional] |
| **publicUrl2** | [**string[]**](../Model/string.md)|  | [optional] |
| **unitPrice** | **string**|  | [optional] |
| **unitPrice2** | [**string[]**](../Model/string.md)|  | [optional] |
| **itemCount** | **int**|  | [optional] |
| **itemCount2** | [**int[]**](../Model/int.md)|  | [optional] |
| **createdAtBefore** | **string**|  | [optional] |
| **createdAtStrictlyBefore** | **string**|  | [optional] |
| **createdAtAfter** | **string**|  | [optional] |
| **createdAtStrictlyAfter** | **string**|  | [optional] |
| **metadata** | [**string[]**](../Model/string.md)| Flattened OrderedMap for metadata. Must be a multiple of two items count. Explicitly set \&quot;null\&quot; for desired value. | [optional] |
| **offerMetadata** | [**string[]**](../Model/string.md)| Flattened OrderedMap for offer.metadata. Must be a multiple of two items count. Explicitly set \&quot;null\&quot; for desired value. | [optional] |
| **sellerMetadata** | [**string[]**](../Model/string.md)| Flattened OrderedMap for seller.metadata. Must be a multiple of two items count. Explicitly set \&quot;null\&quot; for desired value. | [optional] |
| **nature** | **string**| Filter on a limited subset of nature | [optional] |
| **condition** | **string**| Filter on a limited subset of condition | [optional] |
| **status** | **string**| Filter on a limited subset of status | [optional] |
| **shippingAllowed** | **bool**|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\OfferCollectionRead[]**](../Model/OfferCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOffersPost()`

```php
apiOffersPost($offerIndependentWrite): \Tripartie\SafeCheckout\Model\OfferPostCreationRead
```

Create a public link for Offer

Create a public listening Offer linked to a specific Seller

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offerIndependentWrite = new \Tripartie\SafeCheckout\Model\OfferIndependentWrite(); // \Tripartie\SafeCheckout\Model\OfferIndependentWrite | The new Offer resource

try {
    $result = $apiInstance->apiOffersPost($offerIndependentWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiOffersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offerIndependentWrite** | [**\Tripartie\SafeCheckout\Model\OfferIndependentWrite**](../Model/OfferIndependentWrite.md)| The new Offer resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\OfferPostCreationRead**](../Model/OfferPostCreationRead.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOffersUlidDelete()`

```php
apiOffersUlidDelete($ulid)
```

Disable existing Offer

Make a specific Offer as non longer active

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


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | Offer identifier

try {
    $apiInstance->apiOffersUlidDelete($ulid);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiOffersUlidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**| Offer identifier | |

### Return type

void (empty response body)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOffersUlidGet()`

```php
apiOffersUlidGet($ulid): \Tripartie\SafeCheckout\Model\OfferRead
```

Fetch a Offer details

Retrieves a Offer resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | Offer identifier

try {
    $result = $apiInstance->apiOffersUlidGet($ulid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiOffersUlidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**| Offer identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\OfferRead**](../Model/OfferRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOffersUlidPatch()`

```php
apiOffersUlidPatch($ulid, $offerUpdate): \Tripartie\SafeCheckout\Model\OfferPostCreationRead
```

Update existing Offer

Update your existing Offer and reuse existing generated link

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


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | Offer identifier
$offerUpdate = new \Tripartie\SafeCheckout\Model\OfferUpdate(); // \Tripartie\SafeCheckout\Model\OfferUpdate | The updated Offer resource

try {
    $result = $apiInstance->apiOffersUlidPatch($ulid, $offerUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiOffersUlidPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**| Offer identifier | |
| **offerUpdate** | [**\Tripartie\SafeCheckout\Model\OfferUpdate**](../Model/OfferUpdate.md)| The updated Offer resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\OfferPostCreationRead**](../Model/OfferPostCreationRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOffersUlidmediasIdDelete()`

```php
apiOffersUlidmediasIdDelete($ulid, $id)
```

Removes the Media resource.

Removes the Media resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | 
$id = 56; // int | 

try {
    $apiInstance->apiOffersUlidmediasIdDelete($ulid, $id);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiOffersUlidmediasIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**|  | |
| **id** | **int**|  | |

### Return type

void (empty response body)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiOffersUlidmediasPost()`

```php
apiOffersUlidmediasPost($ulid, $file): \Tripartie\SafeCheckout\Model\MediaRead
```

Upload a picture for a given Offer

Creates a Media resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | 
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apiOffersUlidmediasPost($ulid, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiOffersUlidmediasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\MediaRead**](../Model/MediaRead.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdoffersPost()`

```php
apiUsersIdoffersPost($id, $ulid, $offerSoloWrite): \Tripartie\SafeCheckout\Model\OfferPostCreationRead
```

Create a public link for Offer

Create a public listening Offer linked to a specific User

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


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | User identifier
$ulid = 'ulid_example'; // string | Offer identifier
$offerSoloWrite = new \Tripartie\SafeCheckout\Model\OfferSoloWrite(); // \Tripartie\SafeCheckout\Model\OfferSoloWrite | The new Offer resource

try {
    $result = $apiInstance->apiUsersIdoffersPost($id, $ulid, $offerSoloWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiUsersIdoffersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| User identifier | |
| **ulid** | **string**| Offer identifier | |
| **offerSoloWrite** | [**\Tripartie\SafeCheckout\Model\OfferSoloWrite**](../Model/OfferSoloWrite.md)| The new Offer resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\OfferPostCreationRead**](../Model/OfferPostCreationRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
