# # QuoteRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **string** |  | [optional]
**shippingCarrier** | **string** |  | [optional]
**pickupCode** | **string** |  | [optional]
**quantityToBeAcquired** | **int** |  | [optional] [default to 1]
**attemptUnitPrice** | **float** |  | [optional]
**currency** | **string** | Expect &#39;EUR&#39; only for now. | [optional] [default to 'EUR']
**originalUnitPrice** | **float** |  | [optional]
**originalUnitPriceUnconverted** | **float** |  | [optional]
**transactionFees** | **float** |  | [optional]
**shippingFees** | **float** |  | [optional]
**thirdPartyRecipientFirstName** | **string** |  | [optional]
**thirdPartyRecipientLastName** | **string** |  | [optional]
**thirdPartyRecipientAddress** | [**\Tripartie\SafeCheckout\Model\QuoteAddressRead**](QuoteAddressRead.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional]
**expireAt** | **\DateTime** |  | [optional]
**iri** | **string** |  | [optional] [readonly]
**unitPrice** | **float** |  | [optional] [readonly]
**price** | **float** |  | [optional] [readonly]
**buyerTotal** | **float** | The buyer pays for:  - A) item  - B) shipping (optional)  - C) fees     (optional) This method sum them automatically. | [optional] [readonly]
**sellerTotal** | **float** | Represent what amount is to be expected released to the seller. | [optional] [readonly]
**exchangeRate** | **float** | Exchange rate, if applicable. Between the offer currency and actual charged currency. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
