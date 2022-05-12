# MvApi\InvitationApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getForPollInvitationCollection()**](InvitationApi.md#getForPollInvitationCollection) | **GET** /polls/{id}/invitations | Retrieves the collection of Invitation resources.
[**getInvitationCollection()**](InvitationApi.md#getInvitationCollection) | **GET** /invitations | Retrieves the collection of Invitation resources.
[**getInvitationItem()**](InvitationApi.md#getInvitationItem) | **GET** /invitations/{id} | Retrieves a Invitation resource.


## `getForPollInvitationCollection()`

```php
getForPollInvitationCollection($id, $page): \MvApi\Model\InvitationRead[]
```

Retrieves the collection of Invitation resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\InvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getForPollInvitationCollection($id, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationApi->getForPollInvitationCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\MvApi\Model\InvitationRead[]**](../Model/InvitationRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvitationCollection()`

```php
getInvitationCollection($page): \MvApi\Model\InvitationRead[]
```

Retrieves the collection of Invitation resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\InvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getInvitationCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationApi->getInvitationCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\MvApi\Model\InvitationRead[]**](../Model/InvitationRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvitationItem()`

```php
getInvitationItem($id): \MvApi\Model\InvitationRead
```

Retrieves a Invitation resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\InvitationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = d434a72c-20cb-480f-9955-1fa2ce2e91b1; // string | Universally Unique IDentifier (UUID)

try {
    $result = $apiInstance->getInvitationItem($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvitationApi->getInvitationItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Universally Unique IDentifier (UUID) |

### Return type

[**\MvApi\Model\InvitationRead**](../Model/InvitationRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
