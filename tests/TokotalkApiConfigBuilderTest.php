<?php


use PHPUnit\Framework\TestCase;
use Tokotalk\client\TokotalkApiConfig;
use Tokotalk\client\TokotalkApiConfigBuilder;

class TokotalkApiConfigBuilderTest extends TestCase
{
    public function testCreateBuilderShouldReturnTokotalkApiConfigInstance()
    {
        $tokotalkApiConfig = (new TokotalkApiConfigBuilder())
                                ->setPartnerId("1")
                                ->setPartnerPass("001")
                                ->setVendorId("001")
                                ->setTokotalkApiKey("X001")
                                ->build();

        self::assertEquals("1", $tokotalkApiConfig->getPartnerId());
        self::assertInstanceOf(TokotalkApiConfig::class, $tokotalkApiConfig);
        self::assertStringContainsString("X001", $tokotalkApiConfig->getTokotalkApiKey());
    }
}
