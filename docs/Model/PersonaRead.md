# # PersonaRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**gender** | **string** |  | [optional] [default to 'RATHER_NOT_SAY']
**dateOfBirth** | **mixed** |  | [optional]
**language** | **string** | That data is used for rendering the frontend application with given language. If not set, will be inferred. Custom codes can be issued for specific requirements. | [optional]
**email** | **string** |  | [optional]
**mobilePhoneNumber** | **string** |  | [optional]
**address** | [**\Tripartie\SafeCheckout\Model\PersonaAddressRead**](PersonaAddressRead.md) |  | [optional]
**metadata** | [**\Tripartie\SafeCheckout\Model\PersonaMetadataRead[]**](PersonaMetadataRead.md) | You can assign different meta to your Persona object for different purposes. eg. Ease searching. | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**offerCount** | **int** | Issued Offers count owned by a given Persona | [optional] [readonly]
**purchaseCount** | **int** |  | [optional] [readonly]
**registered** | **bool** | Determine if the Persona have a Tripartie account | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
