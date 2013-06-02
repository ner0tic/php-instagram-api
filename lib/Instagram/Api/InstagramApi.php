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
     * @param Instagram\Client $client 
     */
    public function __construct(Client $client = null)
    {
        $this->client = $client instanceof Client ? $client : new Client();

        $this->client->setUrl('https://api.instagram.com/v1/:path');
    }

    /**
     * Return the current auth client id
     * @return string  auth client id
     */
    public function getAuthClientId()
    {
        return $this->client->getAuthClientId();
    }
    
    /**
     * Set the current auth client id
     * @param string $id auth client id
     */
    public function setAuthClientId($id = null)
    {
        $this->client->setAuthClientId($id);
    }

    /**
     * Get an instance of the Client
     * @return Instagram\Client Client instance
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set the API URL
     * @param string $url api url
     * @return  Instagram\Client Client instance
     */
    public function setUrl($url)
    {
        return $this->client->setUrl($url);
    }
    
    /**
     * Set a Client option
     * @param string $name option name
     * @param string|integer|boolean $value option value
     * @return  Instagram\Client Client instance
     */
    public function setOption($name, $value)
    {
        return $this->client->setOption($name, $value);
    }

    /**
     * Execute API call
     * @param  string $path        API URL path
     * @param  array  $parameters  parameters
     * @param  array  $requestOpts request options
     * @return  Instagram\Client Client instance
     */
    public function get($path, $parameters = array(), $requestOpts = array())
    {
        return $this->client->get($path, $parameters, $requestOpts);
    }

    /**
     * Selects a specific API endpoint
     * @param  string $api endpoint name
     * @return  Core\Api\AbstractApi API instance
     */
    public function api($api)
    {
        return $this->client->api($api);
    }
}
