# MvApi\ToolsApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getJsonResultFromTally()**](ToolsApi.md#getJsonResultFromTally) | **GET** /{tally}.json | Resolves the provided tally.
[**getSvgMeritProfileFromTally()**](ToolsApi.md#getSvgMeritProfileFromTally) | **GET** /render/merit-profile.svg | Generates a merit profile as SVG of the provided tally.


## `getJsonResultFromTally()`

```php
getJsonResultFromTally()
```

Resolves the provided tally.

This endpoint requires no authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getJsonResultFromTally();
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->getJsonResultFromTally: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getSvgMeritProfileFromTally()`

```php
getSvgMeritProfileFromTally()
```

Generates a merit profile as SVG of the provided tally.

The resulting merit profile is not ranked, proposals are shown in the order they were submitted. This endpoint requires no authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\ToolsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getSvgMeritProfileFromTally();
} catch (Exception $e) {
    echo 'Exception when calling ToolsApi->getSvgMeritProfileFromTally: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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
