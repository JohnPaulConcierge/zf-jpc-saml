<?php

$realConfig = include 'config/autoload/environment.global.php';

$config = $realConfig['saml']['metadata'];

foreach($config as $url => $data) {
    $metadata[$url] = $data;
}