<?php
/**
 * ProxyAgent v0.0.1
 * ----------------------------
 * NinjaSentry.com 2016
 *
 * Proxy Header Detection Policy
 */
return [

    'headers' => [
        '(?P<forwarding>(.+)?(?:forwarded(.+)?|via|client_ip))'
    ],
];