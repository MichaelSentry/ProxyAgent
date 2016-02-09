<?php
namespace NinjaSentry;

/**
 * ProxyAgent v0.0.1
 * ----------------------------
 * NinjaSentry.com 2016
 *
 */

/**
 * Class ProxyAgent
 * @package NinjaSentry
 */
class ProxyAgent
{
    /**
     * Client object
     * @var array
     */
    private $client;

    /**
     * Configuration Policy
     * @var array
     */
    private $config;

    /**
     * Proxy Detection Types
     */
    const AGENT_IP           = 'IP_PROXY';
    const AGENT_WEB          = 'WEB_PROXY';
    const AGENT_TOR          = 'TOR_PROXY';
    const AGENT_VPN          = 'VPN_PROXY';
    const AGENT_ANON         = 'ANON_PROXY';
    const AGENT_FORWARDING   = 'FORWARDING_PROXY';
    const AGENT_TRANSPARENT  = 'TRANSPARENT_PROXY';

    /**
     * @param array $client
     * @param array $config
     */
    public function __construct( $client = [], $config = [] ){
        $this->client = $client;
        $this->config = $config;
    }

    /***
     * @throws \Exception
     */
    public function inspect()
    {
        if( empty( $this->config ) )
        {
            throw new \Exception(
                'ProxyAgent Error :: Expected configuration settings not found'
            );
        }

        if( isset( $this->config['headers'] ) )
        {
            $this->matchHeader();
        }

        if( isset( $this->config['ranges'] ) )
        {
            $this->matchRange();
        }

        if( isset( $this->config['hosts'] ) )
        {
            $this->matchHost();
        }
    }

    private function matchHeader()
    {

    }

    private function matchRange()
    {

    }

    private function matchHost()
    {

    }
}
