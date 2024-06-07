# # UserUserRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**publicName** | **string** |  | [optional]
**roleInCompany** | **string** |  | [optional]
**birthday** | **\DateTime** |  | [optional]
**email** | **string** |  |
**roles** | **string[]** |  | [optional]
**totpEnabled** | **bool** |  | [optional]
**intlPhoneNumber** | **string** |  | [optional]
**originCountry** | **string** | The originating country | [optional]
**preferredLanguage** | **string** |  | [optional]
**lastSuccessfulLogIn** | **\DateTime** |  | [optional]
**avatar** | [**\Tripartie\SafeCheckout\Model\MediaUserRead**](MediaUserRead.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**consentMailAds** | **bool** |  | [optional]
**lockdown** | **bool** |  | [optional]
**organization** | [**\Tripartie\SafeCheckout\Model\OrganizationUserRead**](OrganizationUserRead.md) |  | [optional]
**bankAccount** | [**\Tripartie\SafeCheckout\Model\BankAccountUserRead**](BankAccountUserRead.md) |  | [optional]
**identityVerifiedAt** | **\DateTime** |  | [optional]
**profiles** | [**\Tripartie\SafeCheckout\Model\PersonaUserRead[]**](PersonaUserRead.md) |  | [optional]
**wallet** | [**\Tripartie\SafeCheckout\Model\WalletUserRead**](WalletUserRead.md) |  | [optional]
**iri** | **string** |  | [optional] [readonly]
**impersonatingOrganization** | **bool** |  | [optional] [readonly]
**secondAuthFactor** | **bool** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
