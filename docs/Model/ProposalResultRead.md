# # ProposalResultRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**proposal** | [**\MvApi\Model\ProposalRead**](ProposalRead.md) |  | [optional]
**rank** | **int** | The computed rank of the Proposal in the Poll — Rank starts at 1 and goes upwards, and two proposals may have the same rank. | [optional]
**median_grade** | [**\MvApi\Model\GradeRead**](GradeRead.md) |  | [optional]
**tally** | **int** | Total Amount of Ballots emitted for the Proposal this Result is about. | [optional]
**grades_results** | [**\MvApi\Model\ProposalGradeResultRead[]**](ProposalGradeResultRead.md) | Results for each Grade, on this Proposal — This is the merit profile of the Proposal. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
