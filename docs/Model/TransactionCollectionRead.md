# # TransactionCollectionRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **string** |  |
**offer** | [**\Tripartie\SafeCheckout\Model\TransactionOfferCollectionRead**](TransactionOfferCollectionRead.md) |  |
**quote** | [**\Tripartie\SafeCheckout\Model\TransactionQuoteCollectionRead**](TransactionQuoteCollectionRead.md) |  |
**buyer** | [**\Tripartie\SafeCheckout\Model\TransactionPersonaCollectionRead**](TransactionPersonaCollectionRead.md) |  |
**status** | **string** |  | [optional]
**fees** | **float** |  | [optional]
**supplementalFees** | **float** |  | [optional]
**total** | **float** |  | [optional] [readonly]
**totalCharged** | **float** |  | [optional] [readonly]
**totalFees** | **float** |  | [optional] [readonly]
**awaitedParty** | **string** | Determine who is awaited (actor) for the next transition | [optional] [readonly]
**statusExpiration** | **\DateTime** | Yield if eligible the date-time at which the transaction state expire. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
