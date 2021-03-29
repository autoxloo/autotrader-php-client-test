# AutoTrader\Client\Test\SpecificationApi

All URIs are relative to *https://services.exdev.autotrader.co.za*

Method | HTTP request | Description
------------- | ------------- | -------------
[**specificationFetchBySpecificationId**](SpecificationApi.md#specificationFetchBySpecificationId) | **GET** /api/listings/v2.0/specifications/{specificationId} | 
[**specificationSearch**](SpecificationApi.md#specificationSearch) | **POST** /api/listings/v2.0/specifications/search | 
[**specificationSearchByTummCodeOrDuoportaId**](SpecificationApi.md#specificationSearchByTummCodeOrDuoportaId) | **GET** /api/listings/v2.0/specifications/search | 
[**specificationSearchMakes**](SpecificationApi.md#specificationSearchMakes) | **GET** /api/listings/v2.0/specifications/makes/search | 
[**specificationSearchModels**](SpecificationApi.md#specificationSearchModels) | **GET** /api/listings/v2.0/specifications/models/search | 
[**specificationSubmitForClarification**](SpecificationApi.md#specificationSubmitForClarification) | **POST** /api/listings/v2.0/specifications | 


# **specificationFetchBySpecificationId**
> \AutoTrader\Client\Test\Model\Specification specificationFetchBySpecificationId($specification_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\SpecificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$specification_id = 56; // int | 

try {
    $result = $apiInstance->specificationFetchBySpecificationId($specification_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecificationApi->specificationFetchBySpecificationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **specification_id** | **int**|  |

### Return type

[**\AutoTrader\Client\Test\Model\Specification**](../Model/Specification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **specificationSearch**
> \AutoTrader\Client\Test\Model\Specification[] specificationSearch($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\SpecificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \AutoTrader\Client\Test\Model\MakeModelRequest(); // \AutoTrader\Client\Test\Model\MakeModelRequest | 

try {
    $result = $apiInstance->specificationSearch($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecificationApi->specificationSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\AutoTrader\Client\Test\Model\MakeModelRequest**](../Model/MakeModelRequest.md)|  |

### Return type

[**\AutoTrader\Client\Test\Model\Specification[]**](../Model/Specification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **specificationSearchByTummCodeOrDuoportaId**
> \AutoTrader\Client\Test\Model\Specification[] specificationSearchByTummCodeOrDuoportaId($tumm_code, $duoporta_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\SpecificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tumm_code = 56; // int | 
$duoporta_id = "duoporta_id_example"; // string | 

try {
    $result = $apiInstance->specificationSearchByTummCodeOrDuoportaId($tumm_code, $duoporta_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecificationApi->specificationSearchByTummCodeOrDuoportaId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tumm_code** | **int**|  | [optional]
 **duoporta_id** | **string**|  | [optional]

### Return type

[**\AutoTrader\Client\Test\Model\Specification[]**](../Model/Specification.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **specificationSearchMakes**
> string[] specificationSearchMakes($category)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\SpecificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | 

try {
    $result = $apiInstance->specificationSearchMakes($category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecificationApi->specificationSearchMakes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  |

### Return type

**string[]**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **specificationSearchModels**
> string[] specificationSearchModels($category, $make)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\SpecificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = "category_example"; // string | 
$make = "make_example"; // string | 

try {
    $result = $apiInstance->specificationSearchModels($category, $make);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecificationApi->specificationSearchModels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  |
 **make** | **string**|  |

### Return type

**string[]**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **specificationSubmitForClarification**
> \AutoTrader\Client\Test\Model\SpecificationResponse specificationSubmitForClarification($request)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\SpecificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = new \AutoTrader\Client\Test\Model\SubmitRequestModel(); // \AutoTrader\Client\Test\Model\SubmitRequestModel | 

try {
    $result = $apiInstance->specificationSubmitForClarification($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpecificationApi->specificationSubmitForClarification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**\AutoTrader\Client\Test\Model\SubmitRequestModel**](../Model/SubmitRequestModel.md)|  |

### Return type

[**\AutoTrader\Client\Test\Model\SpecificationResponse**](../Model/SpecificationResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

