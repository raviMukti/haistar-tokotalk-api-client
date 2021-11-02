### Tokotalk API Client For PHP

Unofficial Tokotalk API Client for PHP
Feel Free To Contribute

**Install**

`composer require haistar/tokotalk-api-client`

**Usage**

```
$tokotalkApiConfig = (new TokotalkApiConfigBuilder())
                              ->setPartnerId("001")
                              ->setPartnerPass("PASS")
                              ->setVendorId("1")
                              ->setTokotalkApiKey("X001")
                              ->build();

$tokotalkRequest = new TokotalkApiRequest();

$urlTotalProducts = "https://partner-api.tokotalk.com/v1/productsCount";

// Create Filter Count
$filtersCountProducts = array(
    'updatedAt_min' => gmdate("Y-m-d H:i:s"),
    'updatedAt_max' => gmdate("Y-m-d H:i:s", strtotime("-1 Day"))
);

$totalProducts = $tokotalkRequest->httpCallGet($urlTotalProducts, $filtersCountProducts, $tokotalkApiConfig);

var_dump($totalProducts);

```
