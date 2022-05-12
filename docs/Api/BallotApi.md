# MvApi\BallotApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiPollsProposalsBallotsGetSubresource()**](BallotApi.md#apiPollsProposalsBallotsGetSubresource) | **GET** /polls/{pollId}/proposals/{proposalId}/ballots | Retrieves the collection of Ballot resources.
[**apiProposalsBallotsGetSubresource()**](BallotApi.md#apiProposalsBallotsGetSubresource) | **GET** /proposals/{id}/ballots | Retrieves the collection of Ballot resources.
[**deleteBallotItem()**](BallotApi.md#deleteBallotItem) | **DELETE** /ballots/{id} | Removes the Ballot resource.
[**getBallotItem()**](BallotApi.md#getBallotItem) | **GET** /ballots/{id} | Retrieves a Ballot resource.
[**postBallotCollection()**](BallotApi.md#postBallotCollection) | **POST** /polls/{pollId}/proposals/{proposalId}/ballots | Creates a Ballot resource.


## `apiPollsProposalsBallotsGetSubresource()`

```php
apiPollsProposalsBallotsGetSubresource($poll_id, $proposal_id, $page): \MvApi\Model\Ballot[]
```

Retrieves the collection of Ballot resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\BallotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poll_id = 6c1c8973-2df3-4b5a-a17d-a3a921dba448; // string | Universally Unique IDentifier of the poll.
$proposal_id = ebf2fda8-5f45-4a33-9758-40d7f5a74998; // string | Universally Unique IDentifier of the proposal.
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiPollsProposalsBallotsGetSubresource($poll_id, $proposal_id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BallotApi->apiPollsProposalsBallotsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poll_id** | **string**| Universally Unique IDentifier of the poll. |
 **proposal_id** | **string**| Universally Unique IDentifier of the proposal. |
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\MvApi\Model\Ballot[]**](../Model/Ballot.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProposalsBallotsGetSubresource()`

```php
apiProposalsBallotsGetSubresource($id, $page): \MvApi\Model\Ballot[]
```

Retrieves the collection of Ballot resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\BallotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiProposalsBallotsGetSubresource($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BallotApi->apiProposalsBallotsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\MvApi\Model\Ballot[]**](../Model/Ballot.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBallotItem()`

```php
deleteBallotItem($id)
```

Removes the Ballot resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\BallotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)

try {
    $apiInstance->deleteBallotItem($id);
} catch (Exception $e) {
    echo 'Exception when calling BallotApi->deleteBallotItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |

### Return type

void (empty response body)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBallotItem()`

```php
getBallotItem($id): \MvApi\Model\BallotRead
```

Retrieves a Ballot resource.

Inspect a previously submitted Ballot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\BallotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)

try {
    $result = $apiInstance->getBallotItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BallotApi->getBallotItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |

### Return type

[**\MvApi\Model\BallotRead**](../Model/BallotRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBallotCollection()`

```php
postBallotCollection($poll_id, $proposal_id, $ballot_create): \MvApi\Model\BallotCreated
```

Creates a Ballot resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\BallotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poll_id = ed8c2754-4220-4f54-94e9-5e86982e85ac; // string | Universally Unique IDentifier of the poll whose proposal we are judging.
$proposal_id = 368bd23a-6f19-4d8a-bb21-ff168ae2efc6; // string | Universally Unique IDentifier of the proposal we are judging.
$ballot_create = new \MvApi\Model\BallotCreate(); // \MvApi\Model\BallotCreate | The new Ballot resource

try {
    $result = $apiInstance->postBallotCollection($poll_id, $proposal_id, $ballot_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BallotApi->postBallotCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poll_id** | **string**| Universally Unique IDentifier of the poll whose proposal we are judging. |
 **proposal_id** | **string**| Universally Unique IDentifier of the proposal we are judging. |
 **ballot_create** | [**\MvApi\Model\BallotCreate**](../Model/BallotCreate.md)| The new Ballot resource | [optional]

### Return type

[**\MvApi\Model\BallotCreated**](../Model/BallotCreated.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
