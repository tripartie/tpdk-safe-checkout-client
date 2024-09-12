# # TransactionOfferCollectionRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **string** |  |
**status** | **string** |  |
**publicUrl** | **string** | The public URL for your Ad/Offer on your marketplace. | [optional]
**organization** | [**\Tripartie\SafeCheckout\Model\TransactionOrganizationCollectionRead**](TransactionOrganizationCollectionRead.md) |  | [optional]
**seller** | [**\Tripartie\SafeCheckout\Model\TransactionPersonaCollectionRead**](TransactionPersonaCollectionRead.md) |  |
**presetBuyer** | [**\Tripartie\SafeCheckout\Model\TransactionPersonaCollectionRead**](TransactionPersonaCollectionRead.md) |  | [optional]
**nature** | **string** | This WILL affect the assigned workflow. Choosing service will disable delivery for example. Refer to our technical hub for more information. | [optional] [default to 'physical_item']
**title** | **string** |  | [optional]
**unitPrice** | **float** |  | [optional]
**minNegotiableUnitPrice** | **float** |  | [optional]
**allowToNegotiateUnitPrice** | **bool** |  | [optional]
**currencyCode** | **string** |  | [optional] [default to 'EUR']
**itemCount** | **int** |  | [optional] [default to 1]
**condition** | **string** |  | [optional] [default to 'USED']
**medias** | [**\Tripartie\SafeCheckout\Model\TransactionMediaCollectionRead[]**](TransactionMediaCollectionRead.md) |  |
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
