# # CardRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**primaryAccountNumber** | **string** |  | [optional]
**expireAt** | **\DateTime** |  | [optional]
**currency** | **string** |  | [optional]
**countryCode** | **string** |  | [optional]
**brand** | **string** |  | [optional]
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  | [optional]
**metadata** | [**\Tripartie\SafeCheckout\Model\CardMetadataRead[]**](CardMetadataRead.md) |  | [optional]
**providerName** | **string** |  | [optional]
**providerCreatedAt** | **\DateTime** |  | [optional]
**providerUpdatedAt** | **\DateTime** |  | [optional]
**iri** | **string** |  | [optional] [readonly]
**processorStatus** | **string** | Automagically infer on what state the entity is at the Payment Processor. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
