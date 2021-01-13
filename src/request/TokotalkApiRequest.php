<?php

/**
 * @description Library For Tokotalk API
 * made with PHP
 * @author Ravi Mukti
 * @created 13-01-2021
 */

namespace Tokotalk\request;

use Tokotalk\api\ApiRequestWithBody;
use Tokotalk\api\ApiRequestWithoutBody;
use Tokotalk\client\TokotalkApiConfig;

class TokotalkApiRequest
{
    // GET Request
    public function httpCallGet($url, $filters, TokotalkApiConfig $apiConfig)
    {
        $httpMethod = "GET";
        return ApiRequestWithoutBody::makeGetMethod($httpMethod, $url, $filters, $apiConfig);
    }

    // POST Request
    public function httpCallPost($url, $filters, $body, TokotalkApiConfig $apiConfig)
    {
        $httpMethod = "POST";
        return ApiRequestWithBody::makeMethod($httpMethod, $url, $filters, $body, $apiConfig);
    }

    // PUT Request
    public function httpCallPut($url, $filters, $body, TokotalkApiConfig $apiConfig)
    {
        $httpMethod = "PUT";
        return ApiRequestWithBody::makeMethod($httpMethod, $url, $filters, $body, $apiConfig);
    }


    // PATCH Request
    public function httpCallPatch($url, $filters, $body, TokotalkApiConfig $apiConfig)
    {
        $httpMethod = "PATCH";
        return ApiRequestWithBody::makeMethod($httpMethod, $url, $filters, $body, $apiConfig);
    }


    // DELETE Request
    public function httpCallDelete($url, $filters, $body, TokotalkApiConfig $apiConfig)
    {
        $httpMethod = "DELETE";
        return ApiRequestWithBody::makeMethod($httpMethod, $url, $filters, $body, $apiConfig);
    }

} // End Of Class