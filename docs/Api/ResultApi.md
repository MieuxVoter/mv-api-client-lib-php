# MvApi\ResultApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getForPollResultItem()**](ResultApi.md#getForPollResultItem) | **GET** /polls/{id}/result | Gets the result of a poll


## `getForPollResultItem()`

```php
getForPollResultItem($id): \MvApi\Model\ResultRead
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


$apiInstance = new MvApi\Api\ResultApi(
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
    echo 'Exception when calling ResultApi->getForPollResultItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |

### Return type

[**\MvApi\Model\ResultRead**](../Model/ResultRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
