# MvApi\GradeApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiPollsGradesGetSubresource()**](GradeApi.md#apiPollsGradesGetSubresource) | **GET** /polls/{id}/grades | Retrieves the collection of Grade resources.
[**getGradeItem()**](GradeApi.md#getGradeItem) | **GET** /grades/{id} | Retrieves a Grade resource.


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


$apiInstance = new MvApi\Api\GradeApi(
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
    echo 'Exception when calling GradeApi->apiPollsGradesGetSubresource: ', $e->getMessage(), PHP_EOL;
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

## `getGradeItem()`

```php
getGradeItem($id): \MvApi\Model\GradeJsonldRead
```

Retrieves a Grade resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\GradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)

try {
    $result = $apiInstance->getGradeItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GradeApi->getGradeItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |

### Return type

[**\MvApi\Model\GradeJsonldRead**](../Model/GradeJsonldRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
