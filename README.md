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

## API Endpoints

All URIs are relative to *https://staging-api.tripartie.app*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BrandingApi* | [**apiOrganizationsIdPatch**](docs/Api/BrandingApi.md#apiorganizationsidpatch) | **PATCH** /organizations/{id} | Update your Organization details, branding or parameters
*BrandingApi* | [**apiOrganizationsIdiconDelete**](docs/Api/BrandingApi.md#apiorganizationsidicondelete) | **DELETE** /organizations/{id}/icon | Unset your Organization Icon
*BrandingApi* | [**apiOrganizationsIdiconPost**](docs/Api/BrandingApi.md#apiorganizationsidiconpost) | **POST** /organizations/{id}/icon | Upload your Organization Icon
*BrandingApi* | [**apiOrganizationsIdlogoDelete**](docs/Api/BrandingApi.md#apiorganizationsidlogodelete) | **DELETE** /organizations/{id}/logo | Unset your Organization Logo
*BrandingApi* | [**apiOrganizationsIdlogoPost**](docs/Api/BrandingApi.md#apiorganizationsidlogopost) | **POST** /organizations/{id}/logo | Upload your Organization logo
*NotificationApi* | [**apiPersonasIdnotificationsGetCollection**](docs/Api/NotificationApi.md#apipersonasidnotificationsgetcollection) | **GET** /personas/{id}/notifications | Retrieve pending notifications for Persona
*NotificationApi* | [**apiPersonasPersonaIdnotificationsIdPatch**](docs/Api/NotificationApi.md#apipersonaspersonaidnotificationsidpatch) | **PATCH** /personas/{personaId}/notifications/{id} | Mark as read/unread a notification for Persona
*NotificationApi* | [**apiUsersIdnotificationsGetCollection**](docs/Api/NotificationApi.md#apiusersidnotificationsgetcollection) | **GET** /users/{id}/notifications | Retrieves the collection of Notification resources.
*NotificationApi* | [**apiUsersUserIdnotificationsIdPatch**](docs/Api/NotificationApi.md#apiusersuseridnotificationsidpatch) | **PATCH** /users/{userId}/notifications/{id} | Mark as read/unread a notification for User
*OrganizationApi* | [**apiOrganizationsGetCollection**](docs/Api/OrganizationApi.md#apiorganizationsgetcollection) | **GET** /organizations | Retrieves the collection of Organization resources.
*OrganizationApi* | [**apiOrganizationsIdGet**](docs/Api/OrganizationApi.md#apiorganizationsidget) | **GET** /organizations/{id} | Retrieves a Organization resource.
*PersonaApi* | [**apiPersonasGetCollection**](docs/Api/PersonaApi.md#apipersonasgetcollection) | **GET** /personas | Retrieves the collection of Persona resources.
*PersonaApi* | [**apiPersonasIdDelete**](docs/Api/PersonaApi.md#apipersonasiddelete) | **DELETE** /personas/{id} | Unregister a Persona (Your customer)
*PersonaApi* | [**apiPersonasIdGet**](docs/Api/PersonaApi.md#apipersonasidget) | **GET** /personas/{id} | Retrieves a Persona resource.
*PersonaApi* | [**apiPersonasIdPatch**](docs/Api/PersonaApi.md#apipersonasidpatch) | **PATCH** /personas/{id} | Updates the Persona resource.
*PersonaApi* | [**apiPersonasPost**](docs/Api/PersonaApi.md#apipersonaspost) | **POST** /personas | Register a Persona (Your customer)
*SafeCheckoutApi* | [**apiOffersGetCollection**](docs/Api/SafeCheckoutApi.md#apioffersgetcollection) | **GET** /offers | Search amongst Offers
*SafeCheckoutApi* | [**apiOffersPost**](docs/Api/SafeCheckoutApi.md#apiofferspost) | **POST** /offers | Create a public link for Offer
*SafeCheckoutApi* | [**apiOffersUlidGet**](docs/Api/SafeCheckoutApi.md#apioffersulidget) | **GET** /offers/{ulid} | Fetch a Offer details
*SafeCheckoutApi* | [**apiOffersUlidPatch**](docs/Api/SafeCheckoutApi.md#apioffersulidpatch) | **PATCH** /offers/{ulid} | Update existing Offer
*SafeCheckoutApi* | [**apiOffersUlidmediasIdDelete**](docs/Api/SafeCheckoutApi.md#apioffersulidmediasiddelete) | **DELETE** /offers/{ulid}/medias/{id} | Removes the Media resource.
*SafeCheckoutApi* | [**apiOffersUlidmediasPost**](docs/Api/SafeCheckoutApi.md#apioffersulidmediaspost) | **POST** /offers/{ulid}/medias | Upload a picture for a given Offer
*SafeCheckoutApi* | [**apiTransactionsUlidevaluationsPost**](docs/Api/SafeCheckoutApi.md#apitransactionsulidevaluationspost) | **POST** /transactions/{ulid}/evaluations | Submit an Evaluation for the Transaction
*SafeCheckoutApi* | [**apiTransactionsUlidparcelsGetCollection**](docs/Api/SafeCheckoutApi.md#apitransactionsulidparcelsgetcollection) | **GET** /transactions/{ulid}/parcels | Retrieves the collection of Parcel resources.
*SafeCheckoutApi* | [**apiTransactionsUlidparcelsIdDelete**](docs/Api/SafeCheckoutApi.md#apitransactionsulidparcelsiddelete) | **DELETE** /transactions/{ulid}/parcels/{id} | Removes the Parcel resource.
*SafeCheckoutApi* | [**apiTransactionsUlidparcelsPost**](docs/Api/SafeCheckoutApi.md#apitransactionsulidparcelspost) | **POST** /transactions/{ulid}/parcels | Creates a Parcel resource.
*UserApi* | [**apiApiClientsGetCollection**](docs/Api/UserApi.md#apiapiclientsgetcollection) | **GET** /api-clients | Retrieves the collection of ApiClient resources.
*UserApi* | [**apiApiClientsIdentifierDelete**](docs/Api/UserApi.md#apiapiclientsidentifierdelete) | **DELETE** /api-clients/{identifier} | Removes the ApiClient resource.
*UserApi* | [**apiApiClientsIdentifierGet**](docs/Api/UserApi.md#apiapiclientsidentifierget) | **GET** /api-clients/{identifier} | Retrieves a ApiClient resource.
*UserApi* | [**apiApiClientsPost**](docs/Api/UserApi.md#apiapiclientspost) | **POST** /api-clients | Creates a ApiClient resource.
*UserApi* | [**apiInvitePost**](docs/Api/UserApi.md#apiinvitepost) | **POST** /invite | Organization invite
*UserApi* | [**apiMeGet**](docs/Api/UserApi.md#apimeget) | **GET** /me | Retrieves a User resource.
*UserApi* | [**apiRegisterPost**](docs/Api/UserApi.md#apiregisterpost) | **POST** /register | Customer onboarding
*UserApi* | [**apiUsersGetCollection**](docs/Api/UserApi.md#apiusersgetcollection) | **GET** /users | Retrieves the collection of User resources.
*UserApi* | [**apiUsersIdDelete**](docs/Api/UserApi.md#apiusersiddelete) | **DELETE** /users/{id} | Removes the User resource.
*UserApi* | [**apiUsersIdGet**](docs/Api/UserApi.md#apiusersidget) | **GET** /users/{id} | Retrieves a User resource.
*UserApi* | [**apiUsersIdPatch**](docs/Api/UserApi.md#apiusersidpatch) | **PATCH** /users/{id} | Updates the User resource.
*UserApi* | [**apiUsersIdavatarDelete**](docs/Api/UserApi.md#apiusersidavatardelete) | **DELETE** /users/{id}/avatar | Unset your personal avatar
*UserApi* | [**apiUsersIdavatarPost**](docs/Api/UserApi.md#apiusersidavatarpost) | **POST** /users/{id}/avatar | Upload your personal avatar
*UserApi* | [**apiUsersIdemailPatch**](docs/Api/UserApi.md#apiusersidemailpatch) | **PATCH** /users/{id}/email | Update user email
*UserApi* | [**apiUsersIdemailValidationPatch**](docs/Api/UserApi.md#apiusersidemailvalidationpatch) | **PATCH** /users/{id}/email-validation | Validate email ownership
*UserApi* | [**apiUsersIdenablePatch**](docs/Api/UserApi.md#apiusersidenablepatch) | **PATCH** /users/{id}/enable | Updates the User resource.
*UserApi* | [**apiUsersIdpasswordPatch**](docs/Api/UserApi.md#apiusersidpasswordpatch) | **PATCH** /users/{id}/password | Updates the User resource.
*UserApi* | [**apiUsersIdtotpSetupPatch**](docs/Api/UserApi.md#apiusersidtotpsetuppatch) | **PATCH** /users/{id}/totp-setup | Updates the User resource.
*UserApi* | [**apiUsersIdtotpTogglePatch**](docs/Api/UserApi.md#apiusersidtotptogglepatch) | **PATCH** /users/{id}/totp-toggle | Updates the User resource.
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
- [ApiClientPostCreationRead](docs/Model/ApiClientPostCreationRead.md)
- [ApiClientRead](docs/Model/ApiClientRead.md)
- [ApiClientWrite](docs/Model/ApiClientWrite.md)
- [AuthError](docs/Model/AuthError.md)
- [BankAccountUserRead](docs/Model/BankAccountUserRead.md)
- [EvaluationRead](docs/Model/EvaluationRead.md)
- [EvaluationWrite](docs/Model/EvaluationWrite.md)
- [GenericError](docs/Model/GenericError.md)
- [InvalidQueryError](docs/Model/InvalidQueryError.md)
- [Media](docs/Model/Media.md)
- [MediaRead](docs/Model/MediaRead.md)
- [MediaUserRead](docs/Model/MediaUserRead.md)
- [MessageError](docs/Model/MessageError.md)
- [Metadata](docs/Model/Metadata.md)
- [NotFoundError](docs/Model/NotFoundError.md)
- [NotificationRead](docs/Model/NotificationRead.md)
- [NotificationUpdate](docs/Model/NotificationUpdate.md)
- [OfferAddressIndependentWrite](docs/Model/OfferAddressIndependentWrite.md)
- [OfferCollectionRead](docs/Model/OfferCollectionRead.md)
- [OfferIndependentWrite](docs/Model/OfferIndependentWrite.md)
- [OfferMediaRead](docs/Model/OfferMediaRead.md)
- [OfferMetadataIndependentWrite](docs/Model/OfferMetadataIndependentWrite.md)
- [OfferMetadataUpdate](docs/Model/OfferMetadataUpdate.md)
- [OfferOrganizationRead](docs/Model/OfferOrganizationRead.md)
- [OfferPersonaIndependentWrite](docs/Model/OfferPersonaIndependentWrite.md)
- [OfferPostCreationRead](docs/Model/OfferPostCreationRead.md)
- [OfferRead](docs/Model/OfferRead.md)
- [OfferUpdate](docs/Model/OfferUpdate.md)
- [OrganizationAddressUpdate](docs/Model/OrganizationAddressUpdate.md)
- [OrganizationCollectionRead](docs/Model/OrganizationCollectionRead.md)
- [OrganizationMediaCollectionRead](docs/Model/OrganizationMediaCollectionRead.md)
- [OrganizationMediaRead](docs/Model/OrganizationMediaRead.md)
- [OrganizationRead](docs/Model/OrganizationRead.md)
- [OrganizationUpdate](docs/Model/OrganizationUpdate.md)
- [OrganizationUserRead](docs/Model/OrganizationUserRead.md)
- [Parcel](docs/Model/Parcel.md)
- [ParcelWrite](docs/Model/ParcelWrite.md)
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
- [RateLimitError](docs/Model/RateLimitError.md)
- [UnprocessableEntity](docs/Model/UnprocessableEntity.md)
- [UnprocessableEntityViolationsInner](docs/Model/UnprocessableEntityViolationsInner.md)
- [UserAuthenticatedRead](docs/Model/UserAuthenticatedRead.md)
- [UserBankAccountAuthenticatedRead](docs/Model/UserBankAccountAuthenticatedRead.md)
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


### personaAuthKey

- **Type**: API key
- **API key parameter name**: X-Persona-Authorization
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

- API version: `2.0.20`
    - Generator version: `7.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
