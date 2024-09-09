# OpenAPIClient-php

Simple, yet elegant web interfaces for your convenience. One request away from your first secured C2C transaction.

For more information, please visit [https://tripartie.com](https://tripartie.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/tripartie/safe-checkout.git"
    }
  ],
  "require": {
    "tripartie/safe-checkout": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://staging-api.tripartie.app*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AdminApi* | [**apiApiClientsGetCollection**](docs/Api/AdminApi.md#apiapiclientsgetcollection) | **GET** /api-clients | Retrieves the collection of ApiClient resources.
*AdminApi* | [**apiApiClientsIdentifierDelete**](docs/Api/AdminApi.md#apiapiclientsidentifierdelete) | **DELETE** /api-clients/{identifier} | Removes the ApiClient resource.
*AdminApi* | [**apiApiClientsIdentifierGet**](docs/Api/AdminApi.md#apiapiclientsidentifierget) | **GET** /api-clients/{identifier} | Retrieves a ApiClient resource.
*AdminApi* | [**apiApiClientsPost**](docs/Api/AdminApi.md#apiapiclientspost) | **POST** /api-clients | Creates a ApiClient resource.
*AdminApi* | [**apiInvitePost**](docs/Api/AdminApi.md#apiinvitepost) | **POST** /invite | Organization invite
*AdminApi* | [**apiOrganizationsGetCollection**](docs/Api/AdminApi.md#apiorganizationsgetcollection) | **GET** /organizations | Retrieves the collection of Organization resources.
*AdminApi* | [**apiOrganizationsIdGet**](docs/Api/AdminApi.md#apiorganizationsidget) | **GET** /organizations/{id} | Retrieves a Organization resource.
*AdminApi* | [**apiUsersGetCollection**](docs/Api/AdminApi.md#apiusersgetcollection) | **GET** /users | Retrieves the collection of User resources.
*AdminApi* | [**apiUsersIdGet**](docs/Api/AdminApi.md#apiusersidget) | **GET** /users/{id} | Retrieves a User resource.
*AdminApi* | [**apiUsersIddisablePatch**](docs/Api/AdminApi.md#apiusersiddisablepatch) | **PATCH** /users/{id}/disable | Updates the User resource.
*AdminApi* | [**apiUsersIdenablePatch**](docs/Api/AdminApi.md#apiusersidenablepatch) | **PATCH** /users/{id}/enable | Updates the User resource.
*AdminApi* | [**authenticationPost**](docs/Api/AdminApi.md#authenticationpost) | **POST** /authentication | User authentication
*BrandingApi* | [**apiOrganizationsIdPatch**](docs/Api/BrandingApi.md#apiorganizationsidpatch) | **PATCH** /organizations/{id} | Update your Organization details, branding or parameters
*BrandingApi* | [**apiOrganizationsIdiconDelete**](docs/Api/BrandingApi.md#apiorganizationsidicondelete) | **DELETE** /organizations/{id}/icon | Unset your Organization Icon
*BrandingApi* | [**apiOrganizationsIdiconPost**](docs/Api/BrandingApi.md#apiorganizationsidiconpost) | **POST** /organizations/{id}/icon | Upload your Organization Icon
*BrandingApi* | [**apiOrganizationsIdlogoDelete**](docs/Api/BrandingApi.md#apiorganizationsidlogodelete) | **DELETE** /organizations/{id}/logo | Unset your Organization Logo
*BrandingApi* | [**apiOrganizationsIdlogoPost**](docs/Api/BrandingApi.md#apiorganizationsidlogopost) | **POST** /organizations/{id}/logo | Upload your Organization logo
*PersonaApi* | [**apiPersonasGetCollection**](docs/Api/PersonaApi.md#apipersonasgetcollection) | **GET** /personas | Retrieves the collection of Persona resources.
*PersonaApi* | [**apiPersonasIdDelete**](docs/Api/PersonaApi.md#apipersonasiddelete) | **DELETE** /personas/{id} | Unregister a Persona (Your customer)
*PersonaApi* | [**apiPersonasIdGet**](docs/Api/PersonaApi.md#apipersonasidget) | **GET** /personas/{id} | Retrieves a Persona resource.
*PersonaApi* | [**apiPersonasIdPatch**](docs/Api/PersonaApi.md#apipersonasidpatch) | **PATCH** /personas/{id} | Updates the Persona resource.
*PersonaApi* | [**apiPersonasPost**](docs/Api/PersonaApi.md#apipersonaspost) | **POST** /personas | Register a Persona (Your customer)
*SafeCheckoutApi* | [**apiOffersGetCollection**](docs/Api/SafeCheckoutApi.md#apioffersgetcollection) | **GET** /offers | Search amongst Offers
*SafeCheckoutApi* | [**apiOffersPost**](docs/Api/SafeCheckoutApi.md#apiofferspost) | **POST** /offers | Create a public link for Offer
*SafeCheckoutApi* | [**apiOffersUlidDelete**](docs/Api/SafeCheckoutApi.md#apioffersuliddelete) | **DELETE** /offers/{ulid} | Disable existing Offer
*SafeCheckoutApi* | [**apiOffersUlidGet**](docs/Api/SafeCheckoutApi.md#apioffersulidget) | **GET** /offers/{ulid} | Fetch a Offer details
*SafeCheckoutApi* | [**apiOffersUlidPatch**](docs/Api/SafeCheckoutApi.md#apioffersulidpatch) | **PATCH** /offers/{ulid} | Update existing Offer
*SafeCheckoutApi* | [**apiOffersUlidmediasIdDelete**](docs/Api/SafeCheckoutApi.md#apioffersulidmediasiddelete) | **DELETE** /offers/{ulid}/medias/{id} | Removes the Media resource.
*SafeCheckoutApi* | [**apiOffersUlidmediasPost**](docs/Api/SafeCheckoutApi.md#apioffersulidmediaspost) | **POST** /offers/{ulid}/medias | Upload a picture for a given Offer
*SafeCheckoutApi* | [**apiUsersIdoffersPost**](docs/Api/SafeCheckoutApi.md#apiusersidofferspost) | **POST** /users/{id}/offers | Issue an Offer as User
*TransactionApi* | [**apiQuotesPost**](docs/Api/TransactionApi.md#apiquotespost) | **POST** /quotes | Create a Quote prior to issuing a Transaction
*TransactionApi* | [**apiQuotesUlidGet**](docs/Api/TransactionApi.md#apiquotesulidget) | **GET** /quotes/{ulid} | Retrieve a Quote
*TransactionApi* | [**apiQuotesUlidPatch**](docs/Api/TransactionApi.md#apiquotesulidpatch) | **PATCH** /quotes/{ulid} | Update a Quote prior to issuing a Transaction
*TransactionApi* | [**apiTransactionsGetCollection**](docs/Api/TransactionApi.md#apitransactionsgetcollection) | **GET** /transactions | List all Transaction
*TransactionApi* | [**apiTransactionsPost**](docs/Api/TransactionApi.md#apitransactionspost) | **POST** /transactions | Initialize a new Transaction
*TransactionApi* | [**apiTransactionsUlidGet**](docs/Api/TransactionApi.md#apitransactionsulidget) | **GET** /transactions/{ulid} | Get a Transaction
*TransactionApi* | [**apiTransactionsUlidPatch**](docs/Api/TransactionApi.md#apitransactionsulidpatch) | **PATCH** /transactions/{ulid} | Interact with a Transaction
*UserApi* | [**apiBankAccountsIdDelete**](docs/Api/UserApi.md#apibankaccountsiddelete) | **DELETE** /bank-accounts/{id} | Removes the BankAccount resource.
*UserApi* | [**apiBankAccountsIdGet**](docs/Api/UserApi.md#apibankaccountsidget) | **GET** /bank-accounts/{id} | Retrieves a BankAccount resource.
*UserApi* | [**apiBankAccountsPost**](docs/Api/UserApi.md#apibankaccountspost) | **POST** /bank-accounts | Creates a BankAccount resource.
*UserApi* | [**apiCardsGetCollection**](docs/Api/UserApi.md#apicardsgetcollection) | **GET** /cards | Retrieves the collection of Card resources.
*UserApi* | [**apiCardsIdDelete**](docs/Api/UserApi.md#apicardsiddelete) | **DELETE** /cards/{id} | Removes the Card resource.
*UserApi* | [**apiCardsIdGet**](docs/Api/UserApi.md#apicardsidget) | **GET** /cards/{id} | Retrieves a Card resource.
*UserApi* | [**apiCardsIdPatch**](docs/Api/UserApi.md#apicardsidpatch) | **PATCH** /cards/{id} | Push back the tokenization output from the external provider
*UserApi* | [**apiCardsPost**](docs/Api/UserApi.md#apicardspost) | **POST** /cards | Creates a Card resource.
*UserApi* | [**apiCashOutsGetCollection**](docs/Api/UserApi.md#apicashoutsgetcollection) | **GET** /cash-outs | Retrieves the collection of CashOut resources.
*UserApi* | [**apiCashOutsIdGet**](docs/Api/UserApi.md#apicashoutsidget) | **GET** /cash-outs/{id} | Retrieves a CashOut resource.
*UserApi* | [**apiCashOutsPost**](docs/Api/UserApi.md#apicashoutspost) | **POST** /cash-outs | Withdraw the full amount available in the user wallet to set bank account
*UserApi* | [**apiMeGet**](docs/Api/UserApi.md#apimeget) | **GET** /me | Retrieves a User resource.
*UserApi* | [**apiProofOfIdentitiesGetCollection**](docs/Api/UserApi.md#apiproofofidentitiesgetcollection) | **GET** /proof-of-identities | List all submitted PoI
*UserApi* | [**apiProofOfIdentitiesIdGet**](docs/Api/UserApi.md#apiproofofidentitiesidget) | **GET** /proof-of-identities/{id} | Retrieve a specific PoI
*UserApi* | [**apiProofOfIdentitiesIddocumentPost**](docs/Api/UserApi.md#apiproofofidentitiesiddocumentpost) | **POST** /proof-of-identities/{id}/document | Upload the document for your PoI slot
*UserApi* | [**apiProofOfIdentitiesPost**](docs/Api/UserApi.md#apiproofofidentitiespost) | **POST** /proof-of-identities | Submit a slot for a PoI
*UserApi* | [**apiRegisterPost**](docs/Api/UserApi.md#apiregisterpost) | **POST** /register | Customer onboarding
*UserApi* | [**apiUsersIdDelete**](docs/Api/UserApi.md#apiusersiddelete) | **DELETE** /users/{id} | Removes the User resource.
*UserApi* | [**apiUsersIdPatch**](docs/Api/UserApi.md#apiusersidpatch) | **PATCH** /users/{id} | Update your profile
*UserApi* | [**apiUsersIdavatarDelete**](docs/Api/UserApi.md#apiusersidavatardelete) | **DELETE** /users/{id}/avatar | Unset your personal avatar
*UserApi* | [**apiUsersIdavatarPost**](docs/Api/UserApi.md#apiusersidavatarpost) | **POST** /users/{id}/avatar | Upload your personal avatar
*UserApi* | [**apiUsersIdemailPatch**](docs/Api/UserApi.md#apiusersidemailpatch) | **PATCH** /users/{id}/email | Update user email
*UserApi* | [**apiUsersIdemailValidationPatch**](docs/Api/UserApi.md#apiusersidemailvalidationpatch) | **PATCH** /users/{id}/email-validation | Validate email ownership
*UserApi* | [**apiUsersIdpasswordPatch**](docs/Api/UserApi.md#apiusersidpasswordpatch) | **PATCH** /users/{id}/password | Change your password
*UserApi* | [**apiUsersIdtotpSetupPatch**](docs/Api/UserApi.md#apiusersidtotpsetuppatch) | **PATCH** /users/{id}/totp-setup | Setup an additional authentication factor
*UserApi* | [**apiUsersIdtotpTogglePatch**](docs/Api/UserApi.md#apiusersidtotptogglepatch) | **PATCH** /users/{id}/totp-toggle | Disable the second authentication factor
*UserApi* | [**authenticationPost**](docs/Api/UserApi.md#authenticationpost) | **POST** /authentication | User authentication
*WebhookApi* | [**apiWebhookHistoriesGetCollection**](docs/Api/WebhookApi.md#apiwebhookhistoriesgetcollection) | **GET** /webhook-histories | Retrieves the collection of WebhookHistory resources.
*WebhookApi* | [**apiWebhookHistoriesIdGet**](docs/Api/WebhookApi.md#apiwebhookhistoriesidget) | **GET** /webhook-histories/{id} | Retrieves a WebhookHistory resource.
*WebhookApi* | [**apiWebhookHistoriesIdPut**](docs/Api/WebhookApi.md#apiwebhookhistoriesidput) | **PUT** /webhook-histories/{id} | Replay a Webhook that ended up in failure
*WebhookApi* | [**apiWebhookSubscriptionsGetCollection**](docs/Api/WebhookApi.md#apiwebhooksubscriptionsgetcollection) | **GET** /webhook-subscriptions | Retrieves the collection of WebhookSubscription resources.
*WebhookApi* | [**apiWebhookSubscriptionsIdDelete**](docs/Api/WebhookApi.md#apiwebhooksubscriptionsiddelete) | **DELETE** /webhook-subscriptions/{id} | Removes the WebhookSubscription resource.
*WebhookApi* | [**apiWebhookSubscriptionsPost**](docs/Api/WebhookApi.md#apiwebhooksubscriptionspost) | **POST** /webhook-subscriptions | Subscribe to Event(s)

## Models

- [AccessError](docs/Model/AccessError.md)
- [Address](docs/Model/Address.md)
- [AddressUserRead](docs/Model/AddressUserRead.md)
- [ApiClientPostCreationRead](docs/Model/ApiClientPostCreationRead.md)
- [ApiClientRead](docs/Model/ApiClientRead.md)
- [ApiClientWrite](docs/Model/ApiClientWrite.md)
- [AuthError](docs/Model/AuthError.md)
- [BankAccountRead](docs/Model/BankAccountRead.md)
- [BankAccountUserRead](docs/Model/BankAccountUserRead.md)
- [BankAccountWrite](docs/Model/BankAccountWrite.md)
- [CardCollectionRead](docs/Model/CardCollectionRead.md)
- [CardMetadataCollectionRead](docs/Model/CardMetadataCollectionRead.md)
- [CardMetadataRead](docs/Model/CardMetadataRead.md)
- [CardMetadataUpdate](docs/Model/CardMetadataUpdate.md)
- [CardRead](docs/Model/CardRead.md)
- [CardUpdate](docs/Model/CardUpdate.md)
- [CardUserRead](docs/Model/CardUserRead.md)
- [CardWrite](docs/Model/CardWrite.md)
- [CashoutCashOutCollectionRead](docs/Model/CashoutCashOutCollectionRead.md)
- [CashoutCashOutRead](docs/Model/CashoutCashOutRead.md)
- [CashoutCashOutWrite](docs/Model/CashoutCashOutWrite.md)
- [GenericError](docs/Model/GenericError.md)
- [InvalidQueryError](docs/Model/InvalidQueryError.md)
- [Media](docs/Model/Media.md)
- [MediaRead](docs/Model/MediaRead.md)
- [MediaUserRead](docs/Model/MediaUserRead.md)
- [MessageError](docs/Model/MessageError.md)
- [Metadata](docs/Model/Metadata.md)
- [NotFoundError](docs/Model/NotFoundError.md)
- [Offer](docs/Model/Offer.md)
- [OfferAddressIndependentWrite](docs/Model/OfferAddressIndependentWrite.md)
- [OfferCollectionRead](docs/Model/OfferCollectionRead.md)
- [OfferIndependentWrite](docs/Model/OfferIndependentWrite.md)
- [OfferMediaCollectionRead](docs/Model/OfferMediaCollectionRead.md)
- [OfferMediaRead](docs/Model/OfferMediaRead.md)
- [OfferMetadataIndependentWrite](docs/Model/OfferMetadataIndependentWrite.md)
- [OfferMetadataUpdate](docs/Model/OfferMetadataUpdate.md)
- [OfferOrganizationCollectionRead](docs/Model/OfferOrganizationCollectionRead.md)
- [OfferOrganizationRead](docs/Model/OfferOrganizationRead.md)
- [OfferPersonaIndependentWrite](docs/Model/OfferPersonaIndependentWrite.md)
- [OfferPersonaRead](docs/Model/OfferPersonaRead.md)
- [OfferPostCreationRead](docs/Model/OfferPostCreationRead.md)
- [OfferRead](docs/Model/OfferRead.md)
- [OfferSoloWrite](docs/Model/OfferSoloWrite.md)
- [OfferUpdate](docs/Model/OfferUpdate.md)
- [OrganizationAddressUpdate](docs/Model/OrganizationAddressUpdate.md)
- [OrganizationCollectionRead](docs/Model/OrganizationCollectionRead.md)
- [OrganizationMediaCollectionRead](docs/Model/OrganizationMediaCollectionRead.md)
- [OrganizationMediaRead](docs/Model/OrganizationMediaRead.md)
- [OrganizationRead](docs/Model/OrganizationRead.md)
- [OrganizationUpdate](docs/Model/OrganizationUpdate.md)
- [OrganizationUserRead](docs/Model/OrganizationUserRead.md)
- [Persona](docs/Model/Persona.md)
- [PersonaAddressRead](docs/Model/PersonaAddressRead.md)
- [PersonaAddressUpdate](docs/Model/PersonaAddressUpdate.md)
- [PersonaAddressWrite](docs/Model/PersonaAddressWrite.md)
- [PersonaCollectionRead](docs/Model/PersonaCollectionRead.md)
- [PersonaMetadataRead](docs/Model/PersonaMetadataRead.md)
- [PersonaMetadataUpdate](docs/Model/PersonaMetadataUpdate.md)
- [PersonaMetadataWrite](docs/Model/PersonaMetadataWrite.md)
- [PersonaRead](docs/Model/PersonaRead.md)
- [PersonaUpdate](docs/Model/PersonaUpdate.md)
- [PersonaUserRead](docs/Model/PersonaUserRead.md)
- [PersonaWrite](docs/Model/PersonaWrite.md)
- [ProofOfIdentityCollectionRead](docs/Model/ProofOfIdentityCollectionRead.md)
- [ProofOfIdentityRead](docs/Model/ProofOfIdentityRead.md)
- [ProofOfIdentityWrite](docs/Model/ProofOfIdentityWrite.md)
- [QuoteAddressRead](docs/Model/QuoteAddressRead.md)
- [QuoteAddressUpdate](docs/Model/QuoteAddressUpdate.md)
- [QuoteAddressWrite](docs/Model/QuoteAddressWrite.md)
- [QuoteRead](docs/Model/QuoteRead.md)
- [QuoteUpdate](docs/Model/QuoteUpdate.md)
- [QuoteWrite](docs/Model/QuoteWrite.md)
- [RateLimitError](docs/Model/RateLimitError.md)
- [TransactionAddressRead](docs/Model/TransactionAddressRead.md)
- [TransactionCardRead](docs/Model/TransactionCardRead.md)
- [TransactionCollectionRead](docs/Model/TransactionCollectionRead.md)
- [TransactionMediaCollectionRead](docs/Model/TransactionMediaCollectionRead.md)
- [TransactionMediaRead](docs/Model/TransactionMediaRead.md)
- [TransactionMetadataRead](docs/Model/TransactionMetadataRead.md)
- [TransactionOfferCollectionRead](docs/Model/TransactionOfferCollectionRead.md)
- [TransactionOfferRead](docs/Model/TransactionOfferRead.md)
- [TransactionOrganizationCollectionRead](docs/Model/TransactionOrganizationCollectionRead.md)
- [TransactionOrganizationRead](docs/Model/TransactionOrganizationRead.md)
- [TransactionParcelRead](docs/Model/TransactionParcelRead.md)
- [TransactionPersonaCollectionRead](docs/Model/TransactionPersonaCollectionRead.md)
- [TransactionPersonaRead](docs/Model/TransactionPersonaRead.md)
- [TransactionQuoteCollectionRead](docs/Model/TransactionQuoteCollectionRead.md)
- [TransactionQuoteRead](docs/Model/TransactionQuoteRead.md)
- [TransactionRead](docs/Model/TransactionRead.md)
- [TransactionUpdate](docs/Model/TransactionUpdate.md)
- [TransactionWalletRead](docs/Model/TransactionWalletRead.md)
- [TransactionWrite](docs/Model/TransactionWrite.md)
- [UnprocessableEntity](docs/Model/UnprocessableEntity.md)
- [UnprocessableEntityViolationsInner](docs/Model/UnprocessableEntityViolationsInner.md)
- [UserAddressAuthenticatedRead](docs/Model/UserAddressAuthenticatedRead.md)
- [UserAddressCollectionRead](docs/Model/UserAddressCollectionRead.md)
- [UserAddressSupportRead](docs/Model/UserAddressSupportRead.md)
- [UserAddressUpdate](docs/Model/UserAddressUpdate.md)
- [UserAuthenticatedRead](docs/Model/UserAuthenticatedRead.md)
- [UserBankAccountAuthenticatedRead](docs/Model/UserBankAccountAuthenticatedRead.md)
- [UserCardAuthenticatedRead](docs/Model/UserCardAuthenticatedRead.md)
- [UserCollectionRead](docs/Model/UserCollectionRead.md)
- [UserEmailValidationWrite](docs/Model/UserEmailValidationWrite.md)
- [UserInvite](docs/Model/UserInvite.md)
- [UserJwtCreated](docs/Model/UserJwtCreated.md)
- [UserJwtWrite](docs/Model/UserJwtWrite.md)
- [UserMediaAuthenticatedRead](docs/Model/UserMediaAuthenticatedRead.md)
- [UserMediaCollectionRead](docs/Model/UserMediaCollectionRead.md)
- [UserMediaRead](docs/Model/UserMediaRead.md)
- [UserMediaSupportRead](docs/Model/UserMediaSupportRead.md)
- [UserOrganizationAuthenticatedRead](docs/Model/UserOrganizationAuthenticatedRead.md)
- [UserOrganizationCollectionRead](docs/Model/UserOrganizationCollectionRead.md)
- [UserOrganizationRead](docs/Model/UserOrganizationRead.md)
- [UserOrganizationSupportRead](docs/Model/UserOrganizationSupportRead.md)
- [UserPersonaAuthenticatedRead](docs/Model/UserPersonaAuthenticatedRead.md)
- [UserPostRegisterRead](docs/Model/UserPostRegisterRead.md)
- [UserSupportRead](docs/Model/UserSupportRead.md)
- [UserTotpSetupRead](docs/Model/UserTotpSetupRead.md)
- [UserTotpToggleWrite](docs/Model/UserTotpToggleWrite.md)
- [UserUpdate](docs/Model/UserUpdate.md)
- [UserUserEmailUpdate](docs/Model/UserUserEmailUpdate.md)
- [UserUserPasswordUpdate](docs/Model/UserUserPasswordUpdate.md)
- [UserUserRead](docs/Model/UserUserRead.md)
- [UserUserSubscribed](docs/Model/UserUserSubscribed.md)
- [UserWalletAuthenticatedRead](docs/Model/UserWalletAuthenticatedRead.md)
- [UserWalletCollectionRead](docs/Model/UserWalletCollectionRead.md)
- [UserWalletSupportRead](docs/Model/UserWalletSupportRead.md)
- [UserWrite](docs/Model/UserWrite.md)
- [View](docs/Model/View.md)
- [WalletUserRead](docs/Model/WalletUserRead.md)
- [Webhook](docs/Model/Webhook.md)
- [WebhookHistoryCollectionRead](docs/Model/WebhookHistoryCollectionRead.md)
- [WebhookHistoryRead](docs/Model/WebhookHistoryRead.md)
- [WebhookObject](docs/Model/WebhookObject.md)
- [WebhookSubscriptionRead](docs/Model/WebhookSubscriptionRead.md)
- [WebhookSubscriptionWrite](docs/Model/WebhookSubscriptionWrite.md)

## Authorization

Authentication schemes defined for the API:
### oauth

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: ``
- **Scopes**: 
    - **OFFER_READ**: Read-only operations on safe-checkout offers
    - **OFFER_WRITE**: Write permissions on safe-checkout offers
    - **ORGANIZATION_READ**: Read organization details and stats
    - **PERSONA_READ**: Read operations on the shared user-base knowledge
    - **PERSONA_WRITE**: Write permissions on the shared user-base knowledge
    - **PERSONA_AUTH**: Capability to issue short-term lived authenticated URL

### jwtPersonalKey

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

noc@tripartie.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.60`
    - Generator version: `7.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
