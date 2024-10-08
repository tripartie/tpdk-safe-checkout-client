# Tripartie\SafeCheckout\UserApi

All URIs are relative to https://staging-api.tripartie.app, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**apiBankAccountsIdDelete()**](UserApi.md#apiBankAccountsIdDelete) | **DELETE** /bank-accounts/{id} | Removes the BankAccount resource. |
| [**apiBankAccountsIdGet()**](UserApi.md#apiBankAccountsIdGet) | **GET** /bank-accounts/{id} | Retrieves a BankAccount resource. |
| [**apiBankAccountsPost()**](UserApi.md#apiBankAccountsPost) | **POST** /bank-accounts | Creates a BankAccount resource. |
| [**apiCardsGetCollection()**](UserApi.md#apiCardsGetCollection) | **GET** /cards | Retrieves the collection of Card resources. |
| [**apiCardsIdDelete()**](UserApi.md#apiCardsIdDelete) | **DELETE** /cards/{id} | Removes the Card resource. |
| [**apiCardsIdGet()**](UserApi.md#apiCardsIdGet) | **GET** /cards/{id} | Retrieves a Card resource. |
| [**apiCardsIdPatch()**](UserApi.md#apiCardsIdPatch) | **PATCH** /cards/{id} | Push back the tokenization output from the external provider |
| [**apiCardsPost()**](UserApi.md#apiCardsPost) | **POST** /cards | Creates a Card resource. |
| [**apiCashOutsGetCollection()**](UserApi.md#apiCashOutsGetCollection) | **GET** /cash-outs | Retrieves the collection of CashOut resources. |
| [**apiCashOutsIdGet()**](UserApi.md#apiCashOutsIdGet) | **GET** /cash-outs/{id} | Retrieves a CashOut resource. |
| [**apiCashOutsPost()**](UserApi.md#apiCashOutsPost) | **POST** /cash-outs | Withdraw the full amount available in the user wallet to set bank account |
| [**apiMeGet()**](UserApi.md#apiMeGet) | **GET** /me | Retrieves a User resource. |
| [**apiProofOfIdentitiesGetCollection()**](UserApi.md#apiProofOfIdentitiesGetCollection) | **GET** /proof-of-identities | List all submitted PoI |
| [**apiProofOfIdentitiesIdGet()**](UserApi.md#apiProofOfIdentitiesIdGet) | **GET** /proof-of-identities/{id} | Retrieve a specific PoI |
| [**apiProofOfIdentitiesIddocumentPost()**](UserApi.md#apiProofOfIdentitiesIddocumentPost) | **POST** /proof-of-identities/{id}/document | Upload the document for your PoI slot |
| [**apiProofOfIdentitiesPost()**](UserApi.md#apiProofOfIdentitiesPost) | **POST** /proof-of-identities | Submit a slot for a PoI |
| [**apiRegisterPost()**](UserApi.md#apiRegisterPost) | **POST** /register | Customer onboarding |
| [**apiUsersIdDelete()**](UserApi.md#apiUsersIdDelete) | **DELETE** /users/{id} | Removes the User resource. |
| [**apiUsersIdPatch()**](UserApi.md#apiUsersIdPatch) | **PATCH** /users/{id} | Update your profile |
| [**apiUsersIdavatarDelete()**](UserApi.md#apiUsersIdavatarDelete) | **DELETE** /users/{id}/avatar | Unset your personal avatar |
| [**apiUsersIdavatarPost()**](UserApi.md#apiUsersIdavatarPost) | **POST** /users/{id}/avatar | Upload your personal avatar |
| [**apiUsersIdemailPatch()**](UserApi.md#apiUsersIdemailPatch) | **PATCH** /users/{id}/email | Update user email |
| [**apiUsersIdemailValidationPatch()**](UserApi.md#apiUsersIdemailValidationPatch) | **PATCH** /users/{id}/email-validation | Validate email ownership |
| [**apiUsersIdpasswordPatch()**](UserApi.md#apiUsersIdpasswordPatch) | **PATCH** /users/{id}/password | Change your password |
| [**apiUsersIdtotpSetupPatch()**](UserApi.md#apiUsersIdtotpSetupPatch) | **PATCH** /users/{id}/totp-setup | Setup an additional authentication factor |
| [**apiUsersIdtotpTogglePatch()**](UserApi.md#apiUsersIdtotpTogglePatch) | **PATCH** /users/{id}/totp-toggle | Disable the second authentication factor |
| [**authenticationPost()**](UserApi.md#authenticationPost) | **POST** /authentication | User authentication |
| [**statisticsPost()**](UserApi.md#statisticsPost) | **POST** /statistics | Statistics Generator |


## `apiBankAccountsIdDelete()`

```php
apiBankAccountsIdDelete($id)
```

Removes the BankAccount resource.

Removes the BankAccount resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | BankAccount identifier

try {
    $apiInstance->apiBankAccountsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiBankAccountsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| BankAccount identifier | |

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

## `apiBankAccountsIdGet()`

```php
apiBankAccountsIdGet($id): \Tripartie\SafeCheckout\Model\BankAccountRead
```

Retrieves a BankAccount resource.

Retrieves a BankAccount resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | BankAccount identifier

try {
    $result = $apiInstance->apiBankAccountsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiBankAccountsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| BankAccount identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\BankAccountRead**](../Model/BankAccountRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiBankAccountsPost()`

```php
apiBankAccountsPost($bankAccountWrite): \Tripartie\SafeCheckout\Model\BankAccountRead
```

Creates a BankAccount resource.

Creates a BankAccount resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bankAccountWrite = new \Tripartie\SafeCheckout\Model\BankAccountWrite(); // \Tripartie\SafeCheckout\Model\BankAccountWrite | The new BankAccount resource

try {
    $result = $apiInstance->apiBankAccountsPost($bankAccountWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiBankAccountsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bankAccountWrite** | [**\Tripartie\SafeCheckout\Model\BankAccountWrite**](../Model/BankAccountWrite.md)| The new BankAccount resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\BankAccountRead**](../Model/BankAccountRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCardsGetCollection()`

```php
apiCardsGetCollection($page): \Tripartie\SafeCheckout\Model\CardCollectionRead[]
```

Retrieves the collection of Card resources.

Retrieves the collection of Card resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiCardsGetCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiCardsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\Tripartie\SafeCheckout\Model\CardCollectionRead[]**](../Model/CardCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCardsIdDelete()`

```php
apiCardsIdDelete($id)
```

Removes the Card resource.

Removes the Card resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Card identifier

try {
    $apiInstance->apiCardsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiCardsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Card identifier | |

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

## `apiCardsIdGet()`

```php
apiCardsIdGet($id): \Tripartie\SafeCheckout\Model\CardRead
```

Retrieves a Card resource.

Retrieves a Card resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Card identifier

try {
    $result = $apiInstance->apiCardsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiCardsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Card identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\CardRead**](../Model/CardRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCardsIdPatch()`

```php
apiCardsIdPatch($id, $cardUpdate): \Tripartie\SafeCheckout\Model\CardRead
```

Push back the tokenization output from the external provider

Updates the Card resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Card identifier
$cardUpdate = new \Tripartie\SafeCheckout\Model\CardUpdate(); // \Tripartie\SafeCheckout\Model\CardUpdate | The updated Card resource

try {
    $result = $apiInstance->apiCardsIdPatch($id, $cardUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiCardsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Card identifier | |
| **cardUpdate** | [**\Tripartie\SafeCheckout\Model\CardUpdate**](../Model/CardUpdate.md)| The updated Card resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\CardRead**](../Model/CardRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCardsPost()`

```php
apiCardsPost($cardWrite): \Tripartie\SafeCheckout\Model\CardRead
```

Creates a Card resource.

Creates a Card resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cardWrite = new \Tripartie\SafeCheckout\Model\CardWrite(); // \Tripartie\SafeCheckout\Model\CardWrite | The new Card resource

try {
    $result = $apiInstance->apiCardsPost($cardWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiCardsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cardWrite** | [**\Tripartie\SafeCheckout\Model\CardWrite**](../Model/CardWrite.md)| The new Card resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\CardRead**](../Model/CardRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCashOutsGetCollection()`

```php
apiCashOutsGetCollection($page): \Tripartie\SafeCheckout\Model\CashoutCashOutCollectionRead[]
```

Retrieves the collection of CashOut resources.

Retrieves the collection of CashOut resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiCashOutsGetCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiCashOutsGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\Tripartie\SafeCheckout\Model\CashoutCashOutCollectionRead[]**](../Model/CashoutCashOutCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCashOutsIdGet()`

```php
apiCashOutsIdGet($id): \Tripartie\SafeCheckout\Model\CashoutCashOutRead
```

Retrieves a CashOut resource.

Retrieves a CashOut resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | CashOut identifier

try {
    $result = $apiInstance->apiCashOutsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiCashOutsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| CashOut identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\CashoutCashOutRead**](../Model/CashoutCashOutRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCashOutsPost()`

```php
apiCashOutsPost($cashoutCashOutWrite): \Tripartie\SafeCheckout\Model\CashoutCashOutRead
```

Withdraw the full amount available in the user wallet to set bank account

Creates a CashOut resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cashoutCashOutWrite = new \Tripartie\SafeCheckout\Model\CashoutCashOutWrite(); // \Tripartie\SafeCheckout\Model\CashoutCashOutWrite | The new CashOut resource

try {
    $result = $apiInstance->apiCashOutsPost($cashoutCashOutWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiCashOutsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cashoutCashOutWrite** | [**\Tripartie\SafeCheckout\Model\CashoutCashOutWrite**](../Model/CashoutCashOutWrite.md)| The new CashOut resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\CashoutCashOutRead**](../Model/CashoutCashOutRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiMeGet()`

```php
apiMeGet(): \Tripartie\SafeCheckout\Model\UserAuthenticatedRead
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

// Configure OAuth2 access token for authorization: oauth
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiMeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiMeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Tripartie\SafeCheckout\Model\UserAuthenticatedRead**](../Model/UserAuthenticatedRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProofOfIdentitiesGetCollection()`

```php
apiProofOfIdentitiesGetCollection($page): \Tripartie\SafeCheckout\Model\ProofOfIdentityCollectionRead[]
```

List all submitted PoI

Retrieves the collection of ProofOfIdentity resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiProofOfIdentitiesGetCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiProofOfIdentitiesGetCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| The collection page number | [optional] [default to 1] |

### Return type

[**\Tripartie\SafeCheckout\Model\ProofOfIdentityCollectionRead[]**](../Model/ProofOfIdentityCollectionRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProofOfIdentitiesIdGet()`

```php
apiProofOfIdentitiesIdGet($id): \Tripartie\SafeCheckout\Model\ProofOfIdentityRead
```

Retrieve a specific PoI

Retrieves a ProofOfIdentity resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | ProofOfIdentity identifier

try {
    $result = $apiInstance->apiProofOfIdentitiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiProofOfIdentitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ProofOfIdentity identifier | |

### Return type

[**\Tripartie\SafeCheckout\Model\ProofOfIdentityRead**](../Model/ProofOfIdentityRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProofOfIdentitiesIddocumentPost()`

```php
apiProofOfIdentitiesIddocumentPost($id, $file): \Tripartie\SafeCheckout\Model\ProofOfIdentityRead
```

Upload the document for your PoI slot

Creates a ProofOfIdentity resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 3.4; // float | 
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apiProofOfIdentitiesIddocumentPost($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiProofOfIdentitiesIddocumentPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **float**|  | |
| **file** | **\SplFileObject****\SplFileObject**|  | [optional] |

### Return type

[**\Tripartie\SafeCheckout\Model\ProofOfIdentityRead**](../Model/ProofOfIdentityRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProofOfIdentitiesPost()`

```php
apiProofOfIdentitiesPost($proofOfIdentityWrite): \Tripartie\SafeCheckout\Model\ProofOfIdentityRead
```

Submit a slot for a PoI

Creates a ProofOfIdentity resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$proofOfIdentityWrite = new \Tripartie\SafeCheckout\Model\ProofOfIdentityWrite(); // \Tripartie\SafeCheckout\Model\ProofOfIdentityWrite | The new ProofOfIdentity resource

try {
    $result = $apiInstance->apiProofOfIdentitiesPost($proofOfIdentityWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiProofOfIdentitiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **proofOfIdentityWrite** | [**\Tripartie\SafeCheckout\Model\ProofOfIdentityWrite**](../Model/ProofOfIdentityWrite.md)| The new ProofOfIdentity resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\ProofOfIdentityRead**](../Model/ProofOfIdentityRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiRegisterPost()`

```php
apiRegisterPost($userWrite): \Tripartie\SafeCheckout\Model\UserPostRegisterRead
```

Customer onboarding

Internal-use only, protected by a captcha. User first-enrollment

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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$userWrite = new \Tripartie\SafeCheckout\Model\UserWrite(); // \Tripartie\SafeCheckout\Model\UserWrite | The new User resource

try {
    $result = $apiInstance->apiRegisterPost($userWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiRegisterPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **userWrite** | [**\Tripartie\SafeCheckout\Model\UserWrite**](../Model/UserWrite.md)| The new User resource | |

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

## `apiUsersIdDelete()`

```php
apiUsersIdDelete($id)
```

Removes the User resource.

Removes the User resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier

try {
    $apiInstance->apiUsersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |

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

## `apiUsersIdPatch()`

```php
apiUsersIdPatch($id, $userUpdate): \Tripartie\SafeCheckout\Model\UserPostRegisterRead
```

Update your profile

Updates the User resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$userUpdate = new \Tripartie\SafeCheckout\Model\UserUpdate(); // \Tripartie\SafeCheckout\Model\UserUpdate | The updated User resource

try {
    $result = $apiInstance->apiUsersIdPatch($id, $userUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **userUpdate** | [**\Tripartie\SafeCheckout\Model\UserUpdate**](../Model/UserUpdate.md)| The updated User resource | |

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

## `apiUsersIdavatarDelete()`

```php
apiUsersIdavatarDelete($id)
```

Unset your personal avatar

Removes the Media resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | User identifier

try {
    $apiInstance->apiUsersIdavatarDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdavatarDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| User identifier | |

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

## `apiUsersIdavatarPost()`

```php
apiUsersIdavatarPost($id, $file): \Tripartie\SafeCheckout\Model\MediaRead
```

Upload your personal avatar

Creates a Media resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: jwtPersonalKey
$config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Tripartie\SafeCheckout\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | User identifier
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->apiUsersIdavatarPost($id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdavatarPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| User identifier | |
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

## `apiUsersIdemailPatch()`

```php
apiUsersIdemailPatch($id, $userUserEmailUpdate): \Tripartie\SafeCheckout\Model\UserUserRead
```

Update user email

Updates the User resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$userUserEmailUpdate = new \Tripartie\SafeCheckout\Model\UserUserEmailUpdate(); // \Tripartie\SafeCheckout\Model\UserUserEmailUpdate | The updated User resource

try {
    $result = $apiInstance->apiUsersIdemailPatch($id, $userUserEmailUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdemailPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **userUserEmailUpdate** | [**\Tripartie\SafeCheckout\Model\UserUserEmailUpdate**](../Model/UserUserEmailUpdate.md)| The updated User resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\UserUserRead**](../Model/UserUserRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdemailValidationPatch()`

```php
apiUsersIdemailValidationPatch($id, $userEmailValidationWrite): \Tripartie\SafeCheckout\Model\UserPostRegisterRead
```

Validate email ownership

Updates the User resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$userEmailValidationWrite = new \Tripartie\SafeCheckout\Model\UserEmailValidationWrite(); // \Tripartie\SafeCheckout\Model\UserEmailValidationWrite | The updated User resource

try {
    $result = $apiInstance->apiUsersIdemailValidationPatch($id, $userEmailValidationWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdemailValidationPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **userEmailValidationWrite** | [**\Tripartie\SafeCheckout\Model\UserEmailValidationWrite**](../Model/UserEmailValidationWrite.md)| The updated User resource | |

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

## `apiUsersIdpasswordPatch()`

```php
apiUsersIdpasswordPatch($id, $userUserPasswordUpdate): \Tripartie\SafeCheckout\Model\UserUserRead
```

Change your password

Updates the User resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$userUserPasswordUpdate = new \Tripartie\SafeCheckout\Model\UserUserPasswordUpdate(); // \Tripartie\SafeCheckout\Model\UserUserPasswordUpdate | The updated User resource

try {
    $result = $apiInstance->apiUsersIdpasswordPatch($id, $userUserPasswordUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdpasswordPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **userUserPasswordUpdate** | [**\Tripartie\SafeCheckout\Model\UserUserPasswordUpdate**](../Model/UserUserPasswordUpdate.md)| The updated User resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\UserUserRead**](../Model/UserUserRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdtotpSetupPatch()`

```php
apiUsersIdtotpSetupPatch($id, $body): \Tripartie\SafeCheckout\Model\UserTotpSetupRead
```

Setup an additional authentication factor

Updates the User resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$body = array('key' => new \stdClass); // object | The updated User resource

try {
    $result = $apiInstance->apiUsersIdtotpSetupPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdtotpSetupPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **body** | **object**| The updated User resource | |

### Return type

[**\Tripartie\SafeCheckout\Model\UserTotpSetupRead**](../Model/UserTotpSetupRead.md)

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiUsersIdtotpTogglePatch()`

```php
apiUsersIdtotpTogglePatch($id, $userTotpToggleWrite): object
```

Disable the second authentication factor

Updates the User resource.

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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | User identifier
$userTotpToggleWrite = new \Tripartie\SafeCheckout\Model\UserTotpToggleWrite(); // \Tripartie\SafeCheckout\Model\UserTotpToggleWrite | The updated User resource

try {
    $result = $apiInstance->apiUsersIdtotpTogglePatch($id, $userTotpToggleWrite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->apiUsersIdtotpTogglePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| User identifier | |
| **userTotpToggleWrite** | [**\Tripartie\SafeCheckout\Model\UserTotpToggleWrite**](../Model/UserTotpToggleWrite.md)| The updated User resource | |

### Return type

**object**

### Authorization

[jwtPersonalKey](../../README.md#jwtPersonalKey), [oauth](../../README.md#oauth)

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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
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
    echo 'Exception when calling UserApi->authenticationPost: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Tripartie\SafeCheckout\Api\UserApi(
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
    echo 'Exception when calling UserApi->statisticsPost: ', $e->getMessage(), PHP_EOL;
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
