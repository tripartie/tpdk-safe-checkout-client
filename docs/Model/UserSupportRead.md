# # UserSupportRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**mainAddress** | [**\Tripartie\SafeCheckout\Model\UserAddressSupportRead**](UserAddressSupportRead.md) |  | [optional]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**publicName** | **string** |  | [optional]
**roleInCompany** | **string** |  | [optional]
**email** | **string** |  | [optional]
**roles** | **string[]** |  |
**totpEnabled** | **bool** |  | [optional]
**intlPhoneNumber** | **string** |  | [optional]
**lastSuccessfulLogIn** | **\DateTime** |  | [optional]
**avatar** | [**\Tripartie\SafeCheckout\Model\UserMediaSupportRead**](UserMediaSupportRead.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**timeZoneOffset** | **int** | Timezone offset. Expressed in minutes. Used for DT conversion and fraud prevention. | [optional]
**organization** | [**\Tripartie\SafeCheckout\Model\UserOrganizationSupportRead**](UserOrganizationSupportRead.md) |  | [optional]
**wallet** | [**\Tripartie\SafeCheckout\Model\UserWalletSupportRead**](UserWalletSupportRead.md) |  | [optional]
**externalId** | **string** |  | [optional]
**providerName** | **string** |  | [optional]
**providerCreatedAt** | **\DateTime** |  | [optional]
**providerUpdatedAt** | **\DateTime** |  | [optional]
**iri** | **string** |  | [optional] [readonly]
**secondAuthFactor** | **bool** |  | [optional] [readonly]
**processorStatus** | **string** | Automagically infer on what state the entity is at the Payment Processor. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
