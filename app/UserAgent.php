<?php

namespace App;

/**
 * Class UserAgent
 */
class UserAgent
{
    private $ua = '';

    /**
     * @param string $ua
     */
    public function __construct($ua)
    {
        $this->ua = $ua;
    }

    /**
     * @return bool
     */
    public function isSmartPhone()
    {
        $ua = $this->ua;
        if (strpos($this->ua, 'iPhone')) {
            return true;
        }

        if (strpos($this->ua, 'Android') && strpos($this->ua, 'Mobile')) {
            return true;
        }

        return false;
    }

    public function isAndroid()
    {
        if (strpos($this->ua, 'Android')) {
            return true;
        }

        return false;
    }
}
