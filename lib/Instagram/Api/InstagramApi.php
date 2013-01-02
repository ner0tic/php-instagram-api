<?php
namespace Instagram\Api;

use Core\Api\AbstractApi;
use Instagram\Client;

class InstagramApi extends AbstractApi
{
  public function __construct(Client $client = null) {
    $this->client = $client instanceof Client ? $client : new Client();
    
    $this->client->setOption('url', 'https://api.instagram.com/v1/:path');
    $this->client->setOption('certificate', false); // 'Resources/config/certificate.pem');
  }
}