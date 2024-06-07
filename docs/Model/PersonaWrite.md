# # PersonaWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**firstName** | **string** |  |
**lastName** | **string** |  |
**gender** | **string** |  | [default to 'RATHER_NOT_SAY']
**dateOfBirth** | **\DateTime** |  | [optional]
**language** | **string** | That data is used for rendering the frontend application with given language. If not set, will be inferred. Custom codes can be issued for specific requirements. | [optional]
**email** | **string** |  | [optional]
**mobilePhoneNumber** | **string** |  | [optional]
**address** | [**\Tripartie\SafeCheckout\Model\PersonaAddressWrite**](PersonaAddressWrite.md) |  | [optional]
**metadata** | [**\Tripartie\SafeCheckout\Model\PersonaMetadataWrite[]**](PersonaMetadataWrite.md) | You can assign different meta to your Persona object for different purposes. eg. Ease searching. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
