# # TransactionPersonaRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**firstName** | **string** |  | [optional]
**lastName** | **string** |  | [optional]
**language** | **string** | That data is used for rendering the frontend application with given language. If not set, will be inferred. Custom codes can be issued for specific requirements. | [optional]
**email** | **string** |  | [optional]
**mobilePhoneNumber** | **string** |  | [optional]
**address** | [**\Tripartie\SafeCheckout\Model\TransactionAddressRead**](TransactionAddressRead.md) |  | [optional]
**registered** | **bool** | Determine if the Persona have a Tripartie account | [optional] [readonly]
**verified** | **bool** | Determine if the Persona have a VERIFIED Tripartie account | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
