# AutoTrader\Client\Test\LeadApi

All URIs are relative to *https://services.exdev.autotrader.co.za*

Method | HTTP request | Description
------------- | ------------- | -------------
[**leadSearch**](LeadApi.md#leadSearch) | **GET** /api/listings/v2.0/leads/search | 


# **leadSearch**
> \AutoTrader\Client\Test\Model\LeadResponse leadSearch($from, $to, $dealer_ids)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\LeadApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$dealer_ids = array(56); // int[] | 

try {
    $result = $apiInstance->leadSearch($from, $to, $dealer_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadApi->leadSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**|  |
 **to** | **\DateTime**|  |
 **dealer_ids** | [**int[]**](../Model/int.md)|  | [optional]

### Return type

[**\AutoTrader\Client\Test\Model\LeadResponse**](../Model/LeadResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

