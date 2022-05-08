# MvApi\AdministrationApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserCollection()**](AdministrationApi.md#getUserCollection) | **GET** /users | Retrieves the collection of Users.


## `getUserCollection()`

```php
getUserCollection($page): \MvApi\Model\InlineResponse2005
```

Retrieves the collection of Users.

Only administrators are allowed to access this.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\AdministrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | The collection page number

try {
    $result = $apiInstance->getUserCollection($page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdministrationApi->getUserCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The collection page number | [optional] [default to 1]

### Return type

[**\MvApi\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
