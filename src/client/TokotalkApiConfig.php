<?php

/**
 * @description Library For Tokotalk API
 * made with PHP
 * @author Ravi Mukti
 * @created 13-01-2021
 */

namespace Tokotalk\client;

class TokotalkApiConfig
{
    private $partnerId;
    private $partnerPass;
    private $vendorId;
    private $tokotalkApiKey;

    public function __construct($partnerId = "", $partnerPass = "", $vendorId = "", $tokotalkApiKey = "")
    {
        $this->partnerId = $partnerId;
        $this->partnerPass = $partnerPass;
        $this->vendorId = $vendorId;
        $this->tokotalkApiKey = $tokotalkApiKey;
    }

    /**
     * Get the value of partnerId
     */ 
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Set the value of partnerId
     *
     * @return  self
     */ 
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    /**
     * Get the value of partnerPass
     */ 
    public function getPartnerPass()
    {
        return $this->partnerPass;
    }

    /**
     * Set the value of partnerPass
     *
     * @return  self
     */ 
    public function setPartnerPass($partnerPass)
    {
        $this->partnerPass = $partnerPass;

        return $this;
    }

    /**
     * Get the value of vendorId
     */ 
    public function getVendorId()
    {
        return $this->vendorId;
    }

    /**
     * Set the value of vendorId
     *
     * @return  self
     */ 
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    /**
     * Get the value of tokotalkApiKey
     */ 
    public function getTokotalkApiKey()
    {
        return $this->tokotalkApiKey;
    }

    /**
     * Set the value of tokotalkApiKey
     *
     * @return  self
     */ 
    public function setTokotalkApiKey($tokotalkApiKey)
    {
        $this->tokotalkApiKey = $tokotalkApiKey;

        return $this;
    }
}

?>