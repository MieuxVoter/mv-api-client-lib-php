# MvApi\LoginApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMyself()**](LoginApi.md#getMyself) | **GET** /me | Gets information about the authenticating user.
[**postCredentialsItem()**](LoginApi.md#postCredentialsItem) | **POST** /_jwt | Returns an authentication Token from login Credentials.


## `getMyself()`

```php
getMyself(): \MvApi\Model\User
```

Gets information about the authenticating user.

This endpoint requires authentication. You can use this right after login to get the user UUID for instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMyself();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->getMyself: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\MvApi\Model\User**](../Model/User.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/ld+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCredentialsItem()`

```php
postCredentialsItem($credentials): \MvApi\Model\Token
```

Returns an authentication Token from login Credentials.

Creating and participating to private polls require authentication.  The Token returned is a [JWT](https://jwt.io/) valid for one hour.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\LoginApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credentials = new \MvApi\Model\Credentials(); // \MvApi\Model\Credentials | User Credentials

try {
    $result = $apiInstance->postCredentialsItem($credentials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LoginApi->postCredentialsItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **credentials** | [**\MvApi\Model\Credentials**](../Model/Credentials.md)| User Credentials | [optional]

### Return type

[**\MvApi\Model\Token**](../Model/Token.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/ld+json`, `application/json`
- **Accept**: `application/ld+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
