<?php

use PHPUnit\Framework\TestCase;
use App\UserAgent;

/**
 * Class UserAgentTest
 */
class UserAgentTest extends TestCase
{

    /**
     * iPhoneのUA
     */
    public function testIPhone()
    {
        $ua = new UserAgent('Mozilla/5.0 (iPhone; CPU iPhone OS 9_1 like Mac OS X) AppleWebKit/601.1.46 (KHTML, like Gecko) Version/9.0 Mobile/13B143 Safari/601.1');

        $this->assertTrue($ua->isSmartPhone());
    }
}
