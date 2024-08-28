# # TransactionRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ulid** | **string** |  |
**offer** | [**\Tripartie\SafeCheckout\Model\TransactionOfferRead**](TransactionOfferRead.md) |  |
**quote** | [**\Tripartie\SafeCheckout\Model\TransactionQuoteRead**](TransactionQuoteRead.md) |  |
**buyer** | [**\Tripartie\SafeCheckout\Model\TransactionPersonaRead**](TransactionPersonaRead.md) |  |
**status** | **string** |  | [optional]
**fees** | **float** |  | [optional]
**supplementalFees** | **float** |  | [optional]
**card** | [**\Tripartie\SafeCheckout\Model\TransactionCardRead**](TransactionCardRead.md) |  | [optional]
**escrow** | [**\Tripartie\SafeCheckout\Model\TransactionWalletRead**](TransactionWalletRead.md) |  | [optional]
**remotePreAuthorizationId** | **string** |  | [optional]
**remotePayInId** | **string** |  | [optional]
**balanceToRefund** | **float** |  | [optional]
**feesToRefund** | **float** |  | [optional]
**forceRefundShipping** | **bool** | Shipping is never refunded on purpose. Once deposited (parcel), we are billed for it. | [optional]
**review** | **string** |  | [optional]
**rating** | **int** |  | [optional]
**handOverCode** | **string** |  | [optional]
**parcels** | [**\Tripartie\SafeCheckout\Model\TransactionParcelRead[]**](TransactionParcelRead.md) |  | [optional]
**createdAt** | **\DateTime** |  |
**updatedAt** | **\DateTime** |  | [optional]
**providerName** | **string** |  | [optional]
**providerCreatedAt** | **\DateTime** |  | [optional] [readonly]
**providerUpdatedAt** | **\DateTime** |  | [optional] [readonly]
**total** | **float** |  | [optional] [readonly]
**totalCharged** | **float** |  | [optional] [readonly]
**totalFees** | **float** |  | [optional] [readonly]
**awaitedParty** | **string** | Determine who is awaited (actor) for the next transition | [optional] [readonly]
**statusExpiration** | **\DateTime** | Yield if eligible the date-time at which the transaction state expire. | [optional] [readonly]
**processorStatus** | **string** | Automagically infer on what state the entity is at the Payment Processor. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)