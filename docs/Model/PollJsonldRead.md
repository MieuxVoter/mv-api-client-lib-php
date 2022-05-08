# # PollJsonldRead

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**context** | **string** |  | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**uuid** | **string** | A Universally Unique IDentifier (version 4) like b7e7d328-c1fb-4af7-b258-23d08f6ed2d4 and you may use the short prefix to fetch a poll as well, like b7e7d328 or even b7e-7d-328 to make it more human-legible. | [optional]
**slug** | **string** | A unique, short, human-friendly identifier for the Poll. | [optional]
**scope** | **string** | The scope defines how and by whom the poll is accessible: &#x60;public&#x60;: Everyone may access the poll, and it will be publicly listed ; &#x60;unlisted&#x60;: Everyone may access the poll if they know its URI ; &#x60;private&#x60;: Only invited participants may participate ; The default scope is &#x60;unlisted&#x60;. | [optional]
**subject** | **string** | The subject of the poll. Careful consideration should be taken in the writing of this. |
**proposals** | [**\MvApi\Model\ProposalJsonldRead[]**](ProposalJsonldRead.md) | A list of Proposals to judge, that MUST contain at least two proposals, and can have at most 256 proposals but that upper limit is arbitrary and may wildly vary after benchmark and discussion. | [optional]
**grades** | [**\MvApi\Model\GradeJsonldRead[]**](GradeJsonldRead.md) | A list of Grades that Participants may give to Proposals – That list MUST contain at least two Grades, and at most 16 (another arbitrary limit to discuss). | [optional]
**can_generate_invitations** | **bool** | Can the current user generate invitations for this poll or not? Helps clients show the relevant links and forms. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
