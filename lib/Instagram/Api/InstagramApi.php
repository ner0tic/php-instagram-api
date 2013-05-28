<?php
namespace Instagram\Api;

use Core\Api\AbstractApi;
use Instagram\Client;

class InstagramApi extends AbstractApi
{
    /**
     * 
     * @var Instagram\Client $client
     */
    protected $client = null;
    
    /**
     * 
     * @param Instagram\Client $client 
     */
    public function __construct( Client $client = null ) 
    {
        $this->client = $client instanceof Client ? $client : new Client();

        $this->client->setUrl( 'https://api.instagram.com/v1/:path' );               
    }

    public function getAuthClientId() {
        return $this->client->getAuthClientId();
    }
    
    public function setAuthClientId( $id = null )
    {
        $this->client->setAuthClientId( $id );
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setUrl( $url )
    {
        return $this->client->setUrl( $url );
    }
    
    public function setOption( $k, $v )
    {
        return $this->client->setOption( $k, $v );
    }

    public function get( $path, $parameters = array(), $requestOpts = array() )
    {
        return $this->client->get( $path, $parameters, $requestOpts );
    }

    public function api( $api )
    {
        return $this->client->api( $api );
    }
}
