# # OfferIndependentWrite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**publicUrl** | **string** | The public URL for your Ad/Offer on your marketplace. | [optional]
**redirectUrl** | **string** | Fill-in that field IF you intend to redirect your customer instead of using a WebView. | [optional]
**seller** | [**\Tripartie\SafeCheckout\Model\OfferPersonaIndependentWrite**](OfferPersonaIndependentWrite.md) |  |
**presetBuyer** | [**\Tripartie\SafeCheckout\Model\OfferPersonaIndependentWrite**](OfferPersonaIndependentWrite.md) |  | [optional]
**nature** | **string** | This WILL affect the assigned workflow. Choosing service will disable delivery for example. Refer to our technical hub for more information. | [default to 'physical_item']
**title** | **string** |  |
**description** | **string** |  |
**unitPrice** | **float** |  | [optional]
**minNegotiableUnitPrice** | **float** |  | [optional]
**allowToNegotiateUnitPrice** | **bool** |  |
**currencyCode** | **string** |  | [default to 'EUR']
**itemCount** | **int** |  | [optional] [default to 1]
**condition** | **string** |  | [optional] [default to 'USED']
**weightInGram** | **int** | Accepted values between 500g (0.5kg) and 10,000g (10kg). |
**shippingAllowed** | **bool** | That toggle allows the seller to propose shipping for its item. If set in conjunction of shippingCarrier, the label will be automatically generated. Also, it will restrict the carrier to the limited subset defined. |
**handDeliveryAllowed** | **bool** | Enable both parties to finalize the transaction in person rather than using delivery. A QR Code must be scanned by the seller once the buyer claims the product. | [default to true]
**shippingCarriers** | **string[]** | If you wish to enable automated shipping label generation through a specific provider, specify it there. | [optional]
**eanCode** | **string** |  | [optional]
**canBeSoldSeparately** | **bool** | Set this flag to false to forbid a potential buyer to acquire less than \&quot;itemCount\&quot; item(s) | [default to true]
**metadata** | [**\Tripartie\SafeCheckout\Model\OfferMetadataIndependentWrite[]**](OfferMetadataIndependentWrite.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
