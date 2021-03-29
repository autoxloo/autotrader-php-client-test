# AutoTrader\Client\Test\DealerApi

All URIs are relative to *https://services.exdev.autotrader.co.za*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dealerFetch**](DealerApi.md#dealerFetch) | **GET** /api/listings/v2.0/dealers/{dealerId} | 
[**dealerSearch**](DealerApi.md#dealerSearch) | **POST** /api/listings/v2.0/dealers/search | 


# **dealerFetch**
> \AutoTrader\Client\Test\Model\DealerSummary dealerFetch($dealer_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\DealerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dealer_id = 56; // int | 

try {
    $result = $apiInstance->dealerFetch($dealer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealerApi->dealerFetch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dealer_id** | **int**|  |

### Return type

[**\AutoTrader\Client\Test\Model\DealerSummary**](../Model/DealerSummary.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dealerSearch**
> \AutoTrader\Client\Test\Model\DealerSearchResponse dealerSearch($criteria)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\DealerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$criteria = new \AutoTrader\Client\Test\Model\DealerSearchCriteria(); // \AutoTrader\Client\Test\Model\DealerSearchCriteria | 

try {
    $result = $apiInstance->dealerSearch($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DealerApi->dealerSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteria** | [**\AutoTrader\Client\Test\Model\DealerSearchCriteria**](../Model/DealerSearchCriteria.md)|  |

### Return type

[**\AutoTrader\Client\Test\Model\DealerSearchResponse**](../Model/DealerSearchResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

