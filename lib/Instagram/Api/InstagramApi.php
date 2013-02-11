<?php
namespace Instagram\Api;

use Core\Api\AbstractApi;
use Instagram\Client;

class InstagramApi extends AbstractApi
{
    protected $client = null;
    
    public function __construct( Client $client = null ) 
    {
        $this->client = $client instanceof Client ? $client : new Client();

        $this->client->getHttpClient()->setOption( 'url', 'https://api.instagram.com/v1/:path' );
        $this->client->getHttpClient()->setOption( 'certificate', false ); // 'Resources/config/certificate.pem' );
        var_dump($this->client->getHttpClient());
        die('..');
    }

    public function getAuthClientId() {
        return $this->client->getAuthClientId();
    }
    
    public function setAuthClientId( $id = null )
    {
        $this->client->setAuthClientId( $id );
    }
    
    public function api( $api )
    {
        return $this->client->api( $api );
    }
}