# Tripartie\SafeCheckout\PersonaApi

All URIs are relative to https://staging-api.tripartie.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiPersonasGetCollection()**](PersonaApi.md#apiPersonasGetCollection) | **GET** /personas | Retrieves the collection of Persona resources. |
| [**apiPersonasIdDelete()**](PersonaApi.md#apiPersonasIdDelete) | **DELETE** /personas/{id} | Unregister a Persona (Your customer) |
| [**apiPersonasIdGet()**](PersonaApi.md#apiPersonasIdGet) | **GET** /personas/{id} | Retrieves a Persona resource. |
| [**apiPersonasIdPatch()**](PersonaApi.md#apiPersonasIdPatch) | **PATCH** /personas/{id} | Updates the Persona resource. |
| [**apiPersonasPost()**](PersonaApi.md#apiPersonasPost) | **POST** /personas | Register a Persona (Your customer) |


## `apiPersonasGetCollection()`

```php
apiPersonasGetCollection($page, $firstName, $lastName, $email, $email2, $mobilePhoneNumber, $mobilePhoneNumber2, $gender, $gender2, $orderCreatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $dateOfBirthBefore, $dateOfBirthStrictlyBefore, $dateOfBirthAfter, $dateOfBirthStrictlyAfter, $metadata): \Tripartie\SafeCheckout\Model\PersonaCollectionRead[]
```

Retrieves the collection of Persona resources.

Retrieves the collection of Persona resources.

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


$apiInstance = new Tripartie\SafeCheckout\Api\PersonaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number
$firstName = 'firstName_example'; // string | 
$lastName = 'lastName_example'; // string | 
$email = 'email_example'; // string | 
$email2 = array('email_example'); // string[] | 
$mobilePhoneNumber = 'mobilePhoneNumber_example'; // string | 
$mobilePhoneNumber2 = array('mobilePhoneNumber_example'); // string[] | 
$gender = MALE; // string | Filter on a specific value of gender
$gender2 = array('gender_example'); // string[] | Filter on a limited subset of gender
$orderCreatedAt = 'orderCreatedAt_example'; // string | 
$createdAtBefore = 'createdAtBefore_example'; // string | 
$createdAtStrictlyBefore = 'createdAtStrictlyBefore_example'; // string | 
$createdAtAfter = 'createdAtAfter_example'; // string | 
$createdAtStrictlyAfter = 'createdAtStrictlyAfter_example'; // string | 
$dateOfBirthBefore = 'dateOfBirthBefore_example'; // string | 
$dateOfBirthStrictlyBefore = 'dateOfBirthStrictlyBefore_example'; // string | 
$dateOfBirthAfter = 'dateOfBirthAfter_example'; // string | 
$dateOfBirthStrictlyAfter = 'dateOfBirthStrictlyAfter_example'; // string | 
$metadata = [External-ID, 1254A]; // string[] | Flattened OrderedMap for metadata. Must be a multiple of two items count. Explicitly set \"null\" for desired value.

try {
    $result = $apiInstance->apiPersonasGetCollection($page, $firstName, $lastName, $email, $email2, $mobilePhoneNumber, $mobilePhoneNumber2, $gender, $gender2, $orderCreatedAt, $createdAtBefore, $createdAtStrictlyBefore, $createdAtAfter, $createdAtStrictlyAfter, $dateOfBirthBefore, $dateOfBirthStrictlyBefore, $dateOfBirthAfter, $dateOfBirthStrictlyAfter, $metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonaApi->apiPersonasGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |
| **firstName** | **string**|  | [optional] |
| **lastName** | **string**|  | [optional] |
| **email** | **string**|  | [optional] |
| **email2** | [**string[]**](../Model/string.md)|  | [optional] |
| **mobilePhoneNumber** | **string**|  | [optional] |
| **mobilePhoneNumber2** | [**string[]**](../Model/string.md)|  | [optional] |
| **gender** | **string**| Filter on a specific value of gender | [optional] |
| **gender2** | [**string[]**](../Model/string.md)| Filter on a limited subset of gender | [optional] |
| **orderCreatedAt** | **string**|  | [optional] |
| **createdAtBefore** | **string**|  | [optional] |
| **createdAtStrictlyBefore** | **string**|  | [optional] |
| **createdAtAfter** | **string**|  | [optional] |
| **createdAtStrictlyAfter** | **string**|  | [optional] |
| **dateOfBirthBefore** | **string**|  | [optional] |
| **dateOfBirthStrictlyBefore** | **string**|  | [optional] |
| **dateOfBirthAfter** | **string**|  | [optional] |
| **dateOfBirthStrictlyAfter** | **string**|  | [optional] |
| **metadata** | [**string[]**](../Model/string.md)| Flattened OrderedMap for metadata. Must be a multiple of two items count. Explicitly set \&quot;null\&quot; for desired value. | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\PersonaCollectionRead[]**](../Model/PersonaCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonasIdDelete()`

```php
apiPersonasIdDelete($id)
```

Unregister a Persona (Your customer)

You **MAY** unregister (or free the email/phone number) your Persona entry using that endpoint. *Please note that* this operation will fail if that Persona have any ongoing operations.

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


$apiInstance = new Tripartie\SafeCheckout\Api\PersonaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Persona identifier

try {
    $apiInstance->apiPersonasIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PersonaApi->apiPersonasIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Persona identifier | |

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

## `apiPersonasIdGet()`

```php
apiPersonasIdGet($id): \Tripartie\SafeCheckout\Model\PersonaRead
```

Retrieves a Persona resource.

Retrieves a Persona resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\PersonaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Persona identifier

try {
    $result = $apiInstance->apiPersonasIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonaApi->apiPersonasIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Persona identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\PersonaRead**](../Model/PersonaRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonasIdPatch()`

```php
apiPersonasIdPatch($id, $personaUpdate): \Tripartie\SafeCheckout\Model\PersonaRead
```

Updates the Persona resource.

Update your Persona (eg. your customer/user entry) through that API call. _Beware that updating_ **email** and/or the **mobile phone number** must be done using non reserved values. Otherwise this operation will be rejected.

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


$apiInstance = new Tripartie\SafeCheckout\Api\PersonaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Persona identifier
$personaUpdate = new \Tripartie\SafeCheckout\Model\PersonaUpdate(); // \Tripartie\SafeCheckout\Model\PersonaUpdate | The updated Persona resource

try {
    $result = $apiInstance->apiPersonasIdPatch($id, $personaUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonaApi->apiPersonasIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Persona identifier | |
| **personaUpdate** | [**\Tripartie\SafeCheckout\Model\PersonaUpdate**](../Model/PersonaUpdate.md)| The updated Persona resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\PersonaRead**](../Model/PersonaRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPersonasPost()`

```php
apiPersonasPost($personaWrite): \Tripartie\SafeCheckout\Model\PersonaRead
```

Register a Persona (Your customer)

You should not register your whole database of users, only those who are concerned by a Transaction operation. One Persona entry for your organization can be assigned as a seller or buyer.  **Notes:**   - (i) There is a unique constraint for the mobile phone numbers and email.   - (ii) You will have to issue a DELETE operation on a Persona that withhold a specific phone number or email.   - (iii) You are NOT REQUIRED to provide email OR a mobile phone number but it is highly recommended, if none provided the email will be generated as '{ulid}@your-domain.tld'. In that case, please specify at least one metadata in order to find your entry with ease.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\PersonaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$personaWrite = new \Tripartie\SafeCheckout\Model\PersonaWrite(); // \Tripartie\SafeCheckout\Model\PersonaWrite | The new Persona resource

try {
    $result = $apiInstance->apiPersonasPost($personaWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PersonaApi->apiPersonasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **personaWrite** | [**\Tripartie\SafeCheckout\Model\PersonaWrite**](../Model/PersonaWrite.md)| The new Persona resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\PersonaRead**](../Model/PersonaRead.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
