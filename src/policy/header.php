<?php
/**
 * ProxyAgent
 * NinjaSentry.com
 *
 * Proxy Header Detection Policy
 */
return [

    'headers' => [
        '(?P<forwarding>(.+)?(?:forwarded(.+)?|via|client_ip))'
    ],
];