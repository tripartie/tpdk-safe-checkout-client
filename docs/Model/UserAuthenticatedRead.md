# # UserAuthenticatedRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**mainAddress** | [**\Tripartie\SafeCheckout\Model\UserAddressAuthenticatedRead**](UserAddressAuthenticatedRead.md) |  | [optional]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**publicName** | **string** |  | [optional]
**roleInCompany** | **string** |  | [optional]
**birthday** | **\DateTime** |  | [optional]
**email** | **string** |  | [optional]
**roles** | **string[]** |  |
**totpEnabled** | **bool** |  | [optional]
**intlPhoneNumber** | **string** |  | [optional]
**originCountry** | **string** | The nationality of the current user. | [optional]
**homeCountry** | **string** | The originating country | [optional]
**preferredLanguage** | **string** |  | [optional]
**lastSuccessfulLogIn** | **\DateTime** |  | [optional]
**avatar** | [**\Tripartie\SafeCheckout\Model\UserMediaAuthenticatedRead**](UserMediaAuthenticatedRead.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**consentMailAds** | **bool** |  |
**lockdown** | **bool** |  |
**organization** | [**\Tripartie\SafeCheckout\Model\UserOrganizationAuthenticatedRead**](UserOrganizationAuthenticatedRead.md) |  | [optional]
**bankAccount** | [**\Tripartie\SafeCheckout\Model\UserBankAccountAuthenticatedRead**](UserBankAccountAuthenticatedRead.md) |  | [optional]
**identityVerifiedAt** | **\DateTime** |  | [optional]
**profiles** | [**\Tripartie\SafeCheckout\Model\UserPersonaAuthenticatedRead[]**](UserPersonaAuthenticatedRead.md) |  |
**cards** | [**\Tripartie\SafeCheckout\Model\UserCardAuthenticatedRead[]**](UserCardAuthenticatedRead.md) |  | [optional]
**wallet** | [**\Tripartie\SafeCheckout\Model\UserWalletAuthenticatedRead**](UserWalletAuthenticatedRead.md) |  | [optional]
**providerName** | **string** |  | [optional]
**providerCreatedAt** | **\DateTime** |  | [optional] [readonly]
**providerUpdatedAt** | **\DateTime** |  | [optional] [readonly]
**iri** | **string** |  | [optional] [readonly]
**impersonatingOrganization** | **bool** |  | [optional] [readonly]
**secondAuthFactor** | **bool** |  | [optional] [readonly]
**processorStatus** | **string** | Automagically infer on what state the entity is at the Payment Processor. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
