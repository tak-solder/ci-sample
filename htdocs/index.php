<?php

require_once __DIR__ . '/../vendor/autoload.php';

$ua = new \App\UserAgent($_SERVER['HTTP_USER_AGENT']);

if ($ua->isSmartPhone()) {
    echo 'スマホです';
} else {
    echo 'スマホではありません';
}
