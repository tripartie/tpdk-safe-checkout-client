# # UserUserRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**mainAddress** | **object** |  | [optional]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**publicName** | **string** |  | [optional]
**roleInCompany** | **string** |  | [optional]
**birthday** | **\DateTime** |  | [optional]
**email** | **string** |  |
**roles** | **string[]** |  | [optional]
**totpEnabled** | **bool** |  | [optional]
**intlPhoneNumber** | **string** |  | [optional]
**originCountry** | **string** | The nationality of the current user. | [optional]
**homeCountry** | **string** | The originating country | [optional]
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
**cards** | [**\Tripartie\SafeCheckout\Model\CardUserRead[]**](CardUserRead.md) |  | [optional]
**wallet** | [**\Tripartie\SafeCheckout\Model\WalletUserRead**](WalletUserRead.md) |  | [optional]
**providerName** | **string** |  | [optional]
**providerCreatedAt** | **\DateTime** |  | [optional] [readonly]
**providerUpdatedAt** | **\DateTime** |  | [optional] [readonly]
**iri** | **string** |  | [optional] [readonly]
**impersonatingOrganization** | **bool** |  | [optional] [readonly]
**secondAuthFactor** | **bool** |  | [optional] [readonly]
**processorStatus** | **string** | Automagically infer on what state the entity is at the Payment Processor. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
