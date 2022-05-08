# # PollCreate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**slug** | **string** | A unique, short, human-friendly identifier for the Poll. | [optional]
**scope** | **string** | The scope defines how and by whom the poll is accessible: &#x60;public&#x60;: Everyone may access the poll, and it will be publicly listed ; &#x60;unlisted&#x60;: Everyone may access the poll if they know its URI ; &#x60;private&#x60;: Only invited participants may participate ; The default scope is &#x60;unlisted&#x60;. | [optional]
**subject** | **string** | The subject of the poll. Careful consideration should be taken in the writing of this. |
**proposals** | [**\MvApi\Model\ProposalCreate[]**](ProposalCreate.md) | A list of Proposals to judge, that MUST contain at least two proposals, and can have at most 256 proposals but that upper limit is arbitrary and may wildly vary after benchmark and discussion. | [optional]
**grades** | [**\MvApi\Model\GradeCreate[]**](GradeCreate.md) | A list of Grades that Participants may give to Proposals – That list MUST contain at least two Grades, and at most 16 (another arbitrary limit to discuss). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
