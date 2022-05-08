# # BallotJsonld

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [readonly]
**uuid** | **string** | Universally Unique IDentifier of the Ballot. | [optional]
**id** | **int** | Internal, incrementing numerical id, unused by ApiPlatform but used in tallying to ignore old|stale|overriden ballots by fetching the highest id, since ballots are immutable and new submissions after opinion changes create new ballots. | [optional] [readonly]
**proposal** | **string** | The Majority Judgment Poll Proposal the author is giving a grade to. | [optional]
**grade** | **string** | The Grade attributed by the Judge to the Proposal. | [optional]
**participant** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
