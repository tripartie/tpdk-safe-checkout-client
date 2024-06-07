# Tripartie\SafeCheckout\SafeCheckoutApi

All URIs are relative to https://staging-api.tripartie.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiOffersGetCollection()**](SafeCheckoutApi.md#apiOffersGetCollection) | **GET** /offers | Search amongst Offers |
| [**apiOffersPost()**](SafeCheckoutApi.md#apiOffersPost) | **POST** /offers | Create a public link for Offer |
| [**apiOffersUlidGet()**](SafeCheckoutApi.md#apiOffersUlidGet) | **GET** /offers/{ulid} | Fetch a Offer details |
| [**apiOffersUlidPatch()**](SafeCheckoutApi.md#apiOffersUlidPatch) | **PATCH** /offers/{ulid} | Update existing Offer |
| [**apiOffersUlidmediasIdDelete()**](SafeCheckoutApi.md#apiOffersUlidmediasIdDelete) | **DELETE** /offers/{ulid}/medias/{id} | Removes the Media resource. |
| [**apiOffersUlidmediasPost()**](SafeCheckoutApi.md#apiOffersUlidmediasPost) | **POST** /offers/{ulid}/medias | Upload a picture for a given Offer |
| [**apiTransactionsUlidevaluationsPost()**](SafeCheckoutApi.md#apiTransactionsUlidevaluationsPost) | **POST** /transactions/{ulid}/evaluations | Submit an Evaluation for the Transaction |
| [**apiTransactionsUlidparcelsGetCollection()**](SafeCheckoutApi.md#apiTransactionsUlidparcelsGetCollection) | **GET** /transactions/{ulid}/parcels | Retrieves the collection of Parcel resources. |
| [**apiTransactionsUlidparcelsIdDelete()**](SafeCheckoutApi.md#apiTransactionsUlidparcelsIdDelete) | **DELETE** /transactions/{ulid}/parcels/{id} | Removes the Parcel resource. |
| [**apiTransactionsUlidparcelsPost()**](SafeCheckoutApi.md#apiTransactionsUlidparcelsPost) | **POST** /transactions/{ulid}/parcels | Creates a Parcel resource. |


## `apiOffersGetCollection()`

```php
apiOffersGetCollection($page, $title, $publicUrl, $publicUrl2, $unitPrice, $unitPrice2, $itemCount, $itemCount2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $metadata, $offerMetadata, $sellerMetadata, $nature, $condition, $shippingAllowed): \Tripartie\SafeCheckout\Model\OfferCollectionRead[]
```

Search amongst Offers

Retrieves the collection of Offer resources.

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
$shippingAllowed = True; // bool | 

try {
    $result = $apiInstance->apiOffersGetCollection($page, $title, $publicUrl, $publicUrl2, $unitPrice, $unitPrice2, $itemCount, $itemCount2, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $metadata, $offerMetadata, $sellerMetadata, $nature, $condition, $shippingAllowed);
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
| **shippingAllowed** | **bool**|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\OfferCollectionRead[]**](../Model/OfferCollectionRead.md)

### Authorization

[oauth](../../README.md#oauth)

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

// Configure API key authorization: personaAuthKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

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

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

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

[oauth](../../README.md#oauth)

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

// Configure API key authorization: personaAuthKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

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

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

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


// Configure API key authorization: personaAuthKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

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

[personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTransactionsUlidevaluationsPost()`

```php
apiTransactionsUlidevaluationsPost($ulid, $evaluationWrite): \Tripartie\SafeCheckout\Model\EvaluationRead
```

Submit an Evaluation for the Transaction

**Only authenticated** complainant and seller **CAN** issue an evaluation **WHEN** the transaction reached a final state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: personaAuthKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | Evaluation identifier
$evaluationWrite = new \Tripartie\SafeCheckout\Model\EvaluationWrite(); // \Tripartie\SafeCheckout\Model\EvaluationWrite | The new Evaluation resource

try {
    $result = $apiInstance->apiTransactionsUlidevaluationsPost($ulid, $evaluationWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiTransactionsUlidevaluationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**| Evaluation identifier | |
| **evaluationWrite** | [**\Tripartie\SafeCheckout\Model\EvaluationWrite**](../Model/EvaluationWrite.md)| The new Evaluation resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\EvaluationRead**](../Model/EvaluationRead.md)

### Authorization

[personaAuthKey](../../README.md#personaAuthKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTransactionsUlidparcelsGetCollection()`

```php
apiTransactionsUlidparcelsGetCollection($ulid, $page): object[]
```

Retrieves the collection of Parcel resources.

Retrieves the collection of Parcel resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: personaAuthKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | 
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiTransactionsUlidparcelsGetCollection($ulid, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiTransactionsUlidparcelsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**|  | |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

**object[]**

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTransactionsUlidparcelsIdDelete()`

```php
apiTransactionsUlidparcelsIdDelete($ulid, $id)
```

Removes the Parcel resource.

Removes the Parcel resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | 
$id = 56; // int | 

try {
    $apiInstance->apiTransactionsUlidparcelsIdDelete($ulid, $id);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiTransactionsUlidparcelsIdDelete: ', $e->getMessage(), PHP_EOL;
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

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTransactionsUlidparcelsPost()`

```php
apiTransactionsUlidparcelsPost($ulid, $parcelWrite): object
```

Creates a Parcel resource.

Creates a Parcel resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

// Configure API key authorization: personaAuthKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('X-Persona-Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-Persona-Authorization', 'Bearer');

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\SafeCheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ulid = 'ulid_example'; // string | 
$parcelWrite = new \Tripartie\SafeCheckout\Model\ParcelWrite(); // \Tripartie\SafeCheckout\Model\ParcelWrite | The new Parcel resource

try {
    $result = $apiInstance->apiTransactionsUlidparcelsPost($ulid, $parcelWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SafeCheckoutApi->apiTransactionsUlidparcelsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ulid** | **string**|  | |
| **parcelWrite** | [**\Tripartie\SafeCheckout\Model\ParcelWrite**](../Model/ParcelWrite.md)| The new Parcel resource | |

### Return type

**object**

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [personaAuthKey](../../README.md#personaAuthKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
