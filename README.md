# Ced-mirakl

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Ced-mirakl/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer (JWT) authorization: Bearer
$config = Ced\MiraklApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ced\MiraklApi\Api\CatalogApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upsert_products_request = new \Ced\MiraklApi\Model\UpsertProductsRequest(); // \Ced\MiraklApi\Model\UpsertProductsRequest

try {
    $apiInstance->upsertProducts($upsert_products_request);
} catch (Exception $e) {
    echo 'Exception when calling CatalogApi->upsertProducts: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://miraklconnect.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CatalogApi* | [**upsertProducts**](docs/Api/CatalogApi.md#upsertproducts) | **POST** /products | Create or update products in bulk in your Mirakl Connect catalog.
*OrdersApi* | [**acceptOrderLines**](docs/Api/OrdersApi.md#acceptorderlines) | **PUT** /orders/{order_id}/accept | Accept or refuse order lines
*OrdersApi* | [**listOrders**](docs/Api/OrdersApi.md#listorders) | **GET** /orders | List Mirakl Connect orders
*ShipmentsApi* | [**createShipment**](docs/Api/ShipmentsApi.md#createshipment) | **POST** /orders/{order_id}/shipments | Ship items of a Connect order

## Models

- [AcceptOrderLine](docs/Model/AcceptOrderLine.md)
- [AcceptOrderLinesRequest](docs/Model/AcceptOrderLinesRequest.md)
- [Address](docs/Model/Address.md)
- [BillingInfo](docs/Model/BillingInfo.md)
- [CreateShipmentItemRequest](docs/Model/CreateShipmentItemRequest.md)
- [CreateShipmentRequest](docs/Model/CreateShipmentRequest.md)
- [DiscountPrice](docs/Model/DiscountPrice.md)
- [Error](docs/Model/Error.md)
- [ErrorItem](docs/Model/ErrorItem.md)
- [Fulfillment](docs/Model/Fulfillment.md)
- [Gtin](docs/Model/Gtin.md)
- [Image](docs/Model/Image.md)
- [Money](docs/Model/Money.md)
- [OrderLineResponse](docs/Model/OrderLineResponse.md)
- [OrderProduct](docs/Model/OrderProduct.md)
- [OrderResponse](docs/Model/OrderResponse.md)
- [OrdersPageResponse](docs/Model/OrdersPageResponse.md)
- [OrdersPageResponseAllOf](docs/Model/OrdersPageResponseAllOf.md)
- [Origin](docs/Model/Origin.md)
- [Product](docs/Model/Product.md)
- [Quantity](docs/Model/Quantity.md)
- [ResourcesPage](docs/Model/ResourcesPage.md)
- [ShipmentItemResponse](docs/Model/ShipmentItemResponse.md)
- [ShipmentResponse](docs/Model/ShipmentResponse.md)
- [ShippingInfo](docs/Model/ShippingInfo.md)
- [StandardPrice](docs/Model/StandardPrice.md)
- [Tax](docs/Model/Tax.md)
- [Title](docs/Model/Title.md)
- [UpsertProductsRequest](docs/Model/UpsertProductsRequest.md)

## Authorization

### Bearer

- **Type**: Bearer authentication (JWT)

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `afcae4e6-28a6-4477-a8ed-d78442ed50d5`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`