<?php

/**
 * @description Library For Tokotalk API
 * made with PHP
 * @author Ravi Mukti
 * @created 13-01-2021
 */

namespace Tokotalk\api;

use Exception;
use Tokotalk\client\TokotalkApiConfig;

class ApiRequestWithBody
{
    /**
     * @description HTTP Call Without Body
     * @method POST/PUT/PATCH/DELETE
     * @param $httpMethod
     * @param $url
     * @param array $filters
     * @param array $body
     * @param TokotalkApiConfig $apiConfig
     */
    public static function makeMethod($httpMethod, $url, $filters, $body, TokotalkApiConfig $apiConfig)
    {
        // Validate Input
        if ($apiConfig->getPartnerId() == '') throw new Exception("Input of [PartnerId] is empty!");
        if ($apiConfig->getPartnerPass() == '') throw new Exception("Input of [PartnerPass] is empty!");
        if ($apiConfig->getVendorId() == '') throw new Exception("Input of [VendorId] is empty!");
        if ($apiConfig->getTokotalkApiKey() == '') throw new Exception("Input of [TokotalkApikey] is empty!");
        
        // Sign Key
        $utcTimeStamp = gmdate("Y-m-d H:i:s");
        $concatenateString = $utcTimeStamp."".$apiConfig->getVendorId()."".$apiConfig->getPartnerPass()."".$apiConfig->getTokotalkApiKey();
        $signedKey = hash('SHA256', utf8_encode($concatenateString));

        // Set Header
        $header = array(
            "partnerID: ". $apiConfig->getPartnerId(),
            "partnerPASS: ". $apiConfig->getPartnerPass(),
            "signedKey: ". $signedKey,
            "timeStamp: ". $utcTimeStamp,
            "vendorID: ". $apiConfig->getVendorId()
        );

        $url .= "?";

        // Create Url
        if($filters != null)
        {
            foreach ($filters as $key => $value) 
            {
                $url .= "&" . $key . "=" . $value;
            }
        }

        // HTTP Call
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $httpMethod,
            CURLOPT_HTTPHEADER => $header
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        $data = json_decode(utf8_decode($response));

        if ($err) {
            return $err;
        } else {
            return $data;
        }
    }

} // End Of Class