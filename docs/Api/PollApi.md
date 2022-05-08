# MvApi\PollApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiPollsGradesGetSubresource()**](PollApi.md#apiPollsGradesGetSubresource) | **GET** /polls/{id}/grades | Retrieves the collection of Grade resources.
[**apiPollsProposalsGetSubresource()**](PollApi.md#apiPollsProposalsGetSubresource) | **GET** /polls/{id}/proposals | Retrieves the collection of Proposal resources.
[**deletePollItem()**](PollApi.md#deletePollItem) | **DELETE** /polls/{id} | Removes the Poll resource.
[**getForPollResultItem()**](PollApi.md#getForPollResultItem) | **GET** /polls/{id}/result | Gets the result of a poll
[**getPollCollection()**](PollApi.md#getPollCollection) | **GET** /polls | Retrieves the collection of Poll resources.
[**getPollItem()**](PollApi.md#getPollItem) | **GET** /polls/{id} | Retrieves a Poll resource.
[**postPollCollection()**](PollApi.md#postPollCollection) | **POST** /polls | Creates a Poll resource.


## `apiPollsGradesGetSubresource()`

```php
apiPollsGradesGetSubresource($id, $page): \MvApi\Model\InlineResponse2002
```

Retrieves the collection of Grade resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\PollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->apiPollsGradesGetSubresource($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PollApi->apiPollsGradesGetSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\MvApi\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPollsProposalsGetSubresource()`

```php
apiPollsProposalsGetSubresource($id, $page): \MvApi\Model\InlineResponse2003
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


$apiInstance = new MvApi\Api\PollApi(
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
    echo 'Exception when calling PollApi->apiPollsProposalsGetSubresource: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\MvApi\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deletePollItem()`

```php
deletePollItem($id)
```

Removes the Poll resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\PollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)

try {
    $apiInstance->deletePollItem($id);
} catch (Exception $e) {
    echo 'Exception when calling PollApi->deletePollItem: ', $e->getMessage(), PHP_EOL;
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

## `getForPollResultItem()`

```php
getForPollResultItem($id): \MvApi\Model\ResultJsonldRead
```

Gets the result of a poll

This endpoint computes a fresh result from the ballots currently received. For now, you may read a poll's result _at any time_.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\PollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)

try {
    $result = $apiInstance->getForPollResultItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PollApi->getForPollResultItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |

### Return type

[**\MvApi\Model\ResultJsonldRead**](../Model/ResultJsonldRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPollCollection()`

```php
getPollCollection($page): \MvApi\Model\InlineResponse2001
```

Retrieves the collection of Poll resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\PollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getPollCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PollApi->getPollCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\MvApi\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPollItem()`

```php
getPollItem($id): \MvApi\Model\PollJsonldRead
```

Retrieves a Poll resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\PollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)

try {
    $result = $apiInstance->getPollItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PollApi->getPollItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |

### Return type

[**\MvApi\Model\PollJsonldRead**](../Model/PollJsonldRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPollCollection()`

```php
postPollCollection($poll_jsonld_create): \MvApi\Model\PollJsonldRead
```

Creates a Poll resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\PollApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$poll_jsonld_create = new \MvApi\Model\PollJsonldCreate(); // \MvApi\Model\PollJsonldCreate | The new Poll resource

try {
    $result = $apiInstance->postPollCollection($poll_jsonld_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PollApi->postPollCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **poll_jsonld_create** | [**\MvApi\Model\PollJsonldCreate**](../Model/PollJsonldCreate.md)| The new Poll resource | [optional]

### Return type

[**\MvApi\Model\PollJsonldRead**](../Model/PollJsonldRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`, `text/html`
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
