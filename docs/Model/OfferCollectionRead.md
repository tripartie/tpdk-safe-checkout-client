# # OfferCollectionRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **string** |  |
**status** | **string** |  |
**publicUrl** | **string** | The public URL for your Ad/Offer on your marketplace. | [optional]
**url** | **string** |  | [readonly]
**organization** | [**\Tripartie\SafeCheckout\Model\OfferOrganizationCollectionRead**](OfferOrganizationCollectionRead.md) |  | [optional]
**seller** | [**\Tripartie\SafeCheckout\Model\OfferPersonaCollectionRead**](OfferPersonaCollectionRead.md) |  |
**presetBuyer** | [**\Tripartie\SafeCheckout\Model\OfferPersonaCollectionRead**](OfferPersonaCollectionRead.md) |  | [optional]
**nature** | **string** | This WILL affect the assigned workflow. Choosing service will disable delivery for example. Refer to our technical hub for more information. | [optional] [default to 'physical_item']
**title** | **string** |  | [optional]
**unitPrice** | **float** |  | [optional]
**minNegotiableUnitPrice** | **float** |  | [optional]
**allowToNegotiateUnitPrice** | **bool** |  | [optional]
**currencyCode** | **string** |  | [optional] [default to 'EUR']
**itemCount** | **int** |  | [optional] [default to 1]
**condition** | **string** |  | [optional] [default to 'USED']
**shippingAllowed** | **bool** | That toggle allows the seller to propose shipping for its item. If set in conjunction of shippingCarrier, the label will be automatically generated. Also, it will restrict the carrier to the limited subset defined. | [optional]
**handDeliveryAllowed** | **bool** | Enable both parties to finalize the transaction in person rather than using delivery. A QR Code must be scanned by the seller once the buyer claims the product. | [optional] [default to true]
**shippingCarriers** | **string[]** | If you wish to enable automated shipping label generation through a specific provider, specify it there. | [optional]
**createdAt** | **\DateTime** |  | [optional] [readonly]
**updatedAt** | **\DateTime** |  | [optional] [readonly]
**iri** | **string** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
