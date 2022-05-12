# MvApi\ProposalApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiPollsProposalsBallotsGetSubresource()**](ProposalApi.md#apiPollsProposalsBallotsGetSubresource) | **GET** /polls/{pollId}/proposals/{proposalId}/ballots | Retrieves the collection of Ballot resources.
[**apiPollsProposalsGetSubresource()**](ProposalApi.md#apiPollsProposalsGetSubresource) | **GET** /polls/{id}/proposals | Retrieves the collection of Proposal resources.
[**apiProposalsBallotsGetSubresource()**](ProposalApi.md#apiProposalsBallotsGetSubresource) | **GET** /proposals/{id}/ballots | Retrieves the collection of Ballot resources.
[**getProposalItem()**](ProposalApi.md#getProposalItem) | **GET** /proposals/{id} | Retrieves a Proposal resource.
[**postProposalCollection()**](ProposalApi.md#postProposalCollection) | **POST** /polls/{id}/proposals | Creates a Proposal resource.


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


$apiInstance = new MvApi\Api\ProposalApi(
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
    echo 'Exception when calling ProposalApi->apiPollsProposalsBallotsGetSubresource: ', $e->getMessage(), PHP_EOL;
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

## `apiPollsProposalsGetSubresource()`

```php
apiPollsProposalsGetSubresource($id, $page): \MvApi\Model\ProposalRead[]
```

Retrieves the collection of Proposal resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\ProposalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiPollsProposalsGetSubresource($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProposalApi->apiPollsProposalsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\MvApi\Model\ProposalRead[]**](../Model/ProposalRead.md)

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


$apiInstance = new MvApi\Api\ProposalApi(
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
    echo 'Exception when calling ProposalApi->apiProposalsBallotsGetSubresource: ', $e->getMessage(), PHP_EOL;
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

## `getProposalItem()`

```php
getProposalItem($id): \MvApi\Model\ProposalRead
```

Retrieves a Proposal resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\ProposalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)

try {
    $result = $apiInstance->getProposalItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProposalApi->getProposalItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |

### Return type

[**\MvApi\Model\ProposalRead**](../Model/ProposalRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProposalCollection()`

```php
postProposalCollection($id, $proposal_create): \MvApi\Model\ProposalRead
```

Creates a Proposal resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\ProposalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)
$proposal_create = new \MvApi\Model\ProposalCreate(); // \MvApi\Model\ProposalCreate | The new Proposal resource

try {
    $result = $apiInstance->postProposalCollection($id, $proposal_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProposalApi->postProposalCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |
 **proposal_create** | [**\MvApi\Model\ProposalCreate**](../Model/ProposalCreate.md)| The new Proposal resource | [optional]

### Return type

[**\MvApi\Model\ProposalRead**](../Model/ProposalRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
