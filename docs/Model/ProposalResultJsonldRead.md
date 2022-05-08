# # ProposalResultJsonldRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**proposal** | [**\MvApi\Model\ProposalJsonldRead**](ProposalJsonldRead.md) |  | [optional]
**rank** | **int** | The computed rank of the Proposal in the Poll — Rank starts at 1 and goes upwards, and two proposals may have the same rank. | [optional]
**median_grade** | [**\MvApi\Model\GradeJsonldRead**](GradeJsonldRead.md) |  | [optional]
**tally** | **int** | Total Amount of Ballots emitted for the Proposal this Result is about. | [optional]
**grades_results** | [**\MvApi\Model\ProposalGradeResultRead[]**](ProposalGradeResultRead.md) | Results for each Grade, on this Proposal — This is the merit profile of the Proposal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
