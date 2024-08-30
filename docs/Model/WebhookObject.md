# # WebhookObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **string** |  |
**status** | **string** |  |
**publicUrl** | **string** | The public URL for your Ad/Offer on your marketplace. | [optional]
**redirectUrl** | **string** | Fill-in that field IF you intend to redirect your customer instead of using a WebView. | [optional]
**url** | **string** |  | [readonly]
**organization** | [**\Tripartie\SafeCheckout\Model\OfferOrganizationRead**](OfferOrganizationRead.md) |  | [optional]
**seller** | [**\Tripartie\SafeCheckout\Model\OfferPersonaRead**](OfferPersonaRead.md) |  |
**presetBuyer** | [**\Tripartie\SafeCheckout\Model\OfferPersonaRead**](OfferPersonaRead.md) |  | [optional]
**nature** | **string** | This WILL affect the assigned workflow. Choosing service will disable delivery for example. Refer to our technical hub for more information. | [default to 'physical_item']
**title** | **string** |  | [optional]
**unitPrice** | **float** |  | [optional]
**currencyCode** | **string** |  | [default to 'EUR']
**itemCount** | **int** |  | [optional] [default to 1]
**condition** | **string** |  | [optional] [default to 'USED']
**weightInGram** | **int** | Accepted values between 500g (0.5kg) and 10,000g (10kg). |
**shippingAllowed** | **bool** | That toggle allows the seller to propose shipping for its item. If set in conjunction of shippingCarrier, the label will be automatically generated. Also, it will restrict the carrier to the limited subset defined. |
**handDeliveryAllowed** | **bool** | Enable both parties to finalize the transaction in person rather than using delivery. A QR Code must be scanned by the seller once the buyer claims the product. | [default to true]
**shippingCarriers** | **string[]** | If you wish to enable automated shipping label generation through a specific provider, specify it there. | [optional]
**eanCode** | **string** |  | [optional]
**canBeSoldSeparately** | **bool** | Set this flag to false to forbid a potential buyer to acquire less than \&quot;itemCount\&quot; item(s) | [default to true]
**medias** | [**\Tripartie\SafeCheckout\Model\OfferMediaRead[]**](OfferMediaRead.md) |  |
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**iri** | **string** |  | [optional] [readonly]
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
**offerCount** | **int** | Issued Offers count owned by a given Persona | [optional] [readonly]
**purchaseCount** | **int** |  | [optional] [readonly]
**registered** | **bool** | Determine if the Persona have a Tripartie account | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
