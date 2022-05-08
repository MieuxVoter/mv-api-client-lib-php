# # ResultJsonldRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**poll** | [**\MvApi\Model\PollJsonldRead**](PollJsonldRead.md) |  | [optional]
**algorithm** | **string** | The name of the algorithm used to derive this Result. | [optional]
**leaderboard** | [**\MvApi\Model\ProposalResultRead[]**](ProposalResultRead.md) | In order, each Proposals&#39; Result.  In extreme, low-participation polls, some Proposals may have the same rank ; in that case, their order should be the order they were added to the poll. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
