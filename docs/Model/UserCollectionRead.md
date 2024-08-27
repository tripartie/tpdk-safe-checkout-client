# # UserCollectionRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**mainAddress** | **object** |  | [optional]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**publicName** | **string** |  | [optional]
**roleInCompany** | **string** |  | [optional]
**email** | **string** |  | [optional]
**roles** | **string[]** |  |
**totpEnabled** | **bool** |  | [optional]
**intlPhoneNumber** | **string** |  | [optional]
**lastSuccessfulLogIn** | **\DateTime** |  | [optional]
**avatar** | [**\Tripartie\SafeCheckout\Model\UserMediaCollectionRead**](UserMediaCollectionRead.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**organization** | [**\Tripartie\SafeCheckout\Model\UserOrganizationCollectionRead**](UserOrganizationCollectionRead.md) |  | [optional]
**wallet** | [**\Tripartie\SafeCheckout\Model\UserWalletCollectionRead**](UserWalletCollectionRead.md) |  | [optional]
**externalId** | **string** |  | [optional]
**providerName** | **string** |  | [optional]
**providerCreatedAt** | **\DateTime** |  | [optional] [readonly]
**providerUpdatedAt** | **\DateTime** |  | [optional] [readonly]
**iri** | **string** |  | [optional] [readonly]
**secondAuthFactor** | **bool** |  | [optional] [readonly]
**processorStatus** | **string** | Automagically infer on what state the entity is at the Payment Processor. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
