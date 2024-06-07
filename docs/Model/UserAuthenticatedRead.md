# # UserAuthenticatedRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**publicName** | **string** |  | [optional]
**roleInCompany** | **string** |  | [optional]
**birthday** | **\DateTime** |  | [optional]
**email** | **string** |  | [optional]
**roles** | **string[]** |  |
**totpEnabled** | **bool** |  | [optional]
**intlPhoneNumber** | **string** |  | [optional]
**originCountry** | **string** | The originating country | [optional]
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
**wallet** | [**\Tripartie\SafeCheckout\Model\UserWalletAuthenticatedRead**](UserWalletAuthenticatedRead.md) |  | [optional]
**iri** | **string** |  | [optional] [readonly]
**impersonatingOrganization** | **bool** |  | [optional] [readonly]
**secondAuthFactor** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
