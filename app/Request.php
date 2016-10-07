<?php

namespace App;

/**
 * Class Request
 */
class Request
{
    /**
     * @return bool
     */
    public function isSmartPhone()
    {
        $ua = $_SERVER['HTTP_USER_AGENT'];
        if (strpos($ua, 'iPhone')) {
            return true;
        }

        if (strpos($ua, 'Android') && strpos($ua, 'Mobile')) {
            return true;
        }

        return false;
    }
}
