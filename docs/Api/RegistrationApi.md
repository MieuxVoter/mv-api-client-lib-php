# MvApi\RegistrationApi

All URIs are relative to https://oas.mieuxvoter.fr.

Method | HTTP request | Description
------------- | ------------- | -------------
[**postUserCollection()**](RegistrationApi.md#postUserCollection) | **POST** /users | Registers a new User.


## `postUserCollection()`

```php
postUserCollection($user_create): \MvApi\Model\UserRead
```

Registers a new User.

Registers a new User in the database.  The email is optional and will help you reset a forgotten password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = MvApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MvApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new MvApi\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_create = new \MvApi\Model\UserCreate(); // \MvApi\Model\UserCreate | The new User resource

try {
    $result = $apiInstance->postUserCollection($user_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->postUserCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_create** | [**\MvApi\Model\UserCreate**](../Model/UserCreate.md)| The new User resource | [optional]

### Return type

[**\MvApi\Model\UserRead**](../Model/UserRead.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json`, `application/ld+json`
- **Accept**: `application/json`, `application/ld+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
