# AutoTrader\Client\Test\ListingApi

All URIs are relative to *https://services.exdev.autotrader.co.za*

Method | HTTP request | Description
------------- | ------------- | -------------
[**listingActivate**](ListingApi.md#listingActivate) | **POST** /api/listings/v2.0/listings/{listingId}/activate | 
[**listingCreate**](ListingApi.md#listingCreate) | **POST** /api/listings/v2.0/listings | 
[**listingFetch**](ListingApi.md#listingFetch) | **GET** /api/listings/v2.0/listings/{listingId} | 
[**listingSearch**](ListingApi.md#listingSearch) | **POST** /api/listings/v2.0/listings/search | 
[**listingSell**](ListingApi.md#listingSell) | **POST** /api/listings/v2.0/listings/{listingId}/sell | 
[**listingUpdate**](ListingApi.md#listingUpdate) | **PUT** /api/listings/v2.0/listings/{listingId} | 
[**listingWithdraw**](ListingApi.md#listingWithdraw) | **POST** /api/listings/v2.0/listings/{listingId}/withdraw | 


# **listingActivate**
> \AutoTrader\Client\Test\Model\ListingActivateResponse listingActivate($listing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | 

try {
    $result = $apiInstance->listingActivate($listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->listingActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**|  |

### Return type

[**\AutoTrader\Client\Test\Model\ListingActivateResponse**](../Model/ListingActivateResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingCreate**
> \AutoTrader\Client\Test\Model\ListingCreateResponse listingCreate($vehicle_specification_id, $listing)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vehicle_specification_id = 56; // int | 
$listing = new \AutoTrader\Client\Test\Model\ListingModel(); // \AutoTrader\Client\Test\Model\ListingModel | 

try {
    $result = $apiInstance->listingCreate($vehicle_specification_id, $listing);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->listingCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vehicle_specification_id** | **int**|  |
 **listing** | [**\AutoTrader\Client\Test\Model\ListingModel**](../Model/ListingModel.md)|  |

### Return type

[**\AutoTrader\Client\Test\Model\ListingCreateResponse**](../Model/ListingCreateResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingFetch**
> \AutoTrader\Client\Test\Model\ListingModelReadOnly listingFetch($listing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | 

try {
    $result = $apiInstance->listingFetch($listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->listingFetch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**|  |

### Return type

[**\AutoTrader\Client\Test\Model\ListingModelReadOnly**](../Model/ListingModelReadOnly.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingSearch**
> \AutoTrader\Client\Test\Model\ListingSearchResponse listingSearch($criteria)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$criteria = new \AutoTrader\Client\Test\Model\ListingSearchCriteria(); // \AutoTrader\Client\Test\Model\ListingSearchCriteria | 

try {
    $result = $apiInstance->listingSearch($criteria);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->listingSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **criteria** | [**\AutoTrader\Client\Test\Model\ListingSearchCriteria**](../Model/ListingSearchCriteria.md)|  |

### Return type

[**\AutoTrader\Client\Test\Model\ListingSearchResponse**](../Model/ListingSearchResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingSell**
> \AutoTrader\Client\Test\Model\ListingSellResponse listingSell($listing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | 

try {
    $result = $apiInstance->listingSell($listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->listingSell: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**|  |

### Return type

[**\AutoTrader\Client\Test\Model\ListingSellResponse**](../Model/ListingSellResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingUpdate**
> int listingUpdate($listing_id, $listing)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | 
$listing = new \AutoTrader\Client\Test\Model\ListingModel(); // \AutoTrader\Client\Test\Model\ListingModel | 

try {
    $result = $apiInstance->listingUpdate($listing_id, $listing);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->listingUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**|  |
 **listing** | [**\AutoTrader\Client\Test\Model\ListingModel**](../Model/ListingModel.md)|  |

### Return type

**int**

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/xml, text/xml, application/x-www-form-urlencoded
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listingWithdraw**
> \AutoTrader\Client\Test\Model\ListingWithdrawResponse listingWithdraw($listing_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basic
$config = AutoTrader\Client\Test\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new AutoTrader\Client\Test\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$listing_id = 56; // int | 

try {
    $result = $apiInstance->listingWithdraw($listing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->listingWithdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **listing_id** | **int**|  |

### Return type

[**\AutoTrader\Client\Test\Model\ListingWithdrawResponse**](../Model/ListingWithdrawResponse.md)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json, application/xml, text/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

