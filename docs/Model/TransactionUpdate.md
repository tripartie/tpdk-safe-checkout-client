# # TransactionUpdate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** |  | [optional]
**supplementalFees** | **float** | usually set if the weight was underestimated and shipping carrier billed us an extra. | [optional]
**balanceToRefund** | **float** |  | [optional]
**feesToRefund** | **float** |  | [optional]
**forceRefundShipping** | **bool** | Shipping is never refunded on purpose. Once deposited (parcel), we are billed for it. | [optional]
**buyerReview** | **string** |  | [optional]
**buyerRating** | **int** |  | [optional]
**sellerReview** | **string** |  | [optional]
**sellerRating** | **int** |  | [optional]
**handOverCodeConfirmation** | **string** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]
**review** | **string** |  | [optional] [readonly]
**rating** | **int** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
