<?php


/**
 * Class TokotalkApiConfigBuilder
 * @author Ravi Mukti <ravi@haistar.asia>
 */

namespace Tokotalk\client;


class TokotalkApiConfigBuilder
{
    private $partnerId = "";
    private $partnerPass = "";
    private $vendorId = "";
    private $tokotalkApiKey = "";

    /**
     * @param string $partnerId
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;
        return $this;
    }

    /**
     * @param string $partnerPass
     */
    public function setPartnerPass($partnerPass)
    {
        $this->partnerPass = $partnerPass;
        return $this;
    }

    /**
     * @param string $vendorId
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;
        return $this;
    }

    /**
     * @param string $tokotalkApiKey
     */
    public function setTokotalkApiKey($tokotalkApiKey)
    {
        $this->tokotalkApiKey = $tokotalkApiKey;
        return $this;
    }

    public function build()
    {
        return new TokotalkApiConfig(
            $this->partnerId,
            $this->partnerPass,
            $this->vendorId,
            $this->tokotalkApiKey
        );
    }
}