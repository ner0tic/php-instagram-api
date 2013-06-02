<?php
namespace Instagram;

use Core\Client as BaseClient;

class Client extends BaseClient
{
    /**
     *
     * @var string $client_id
     */
    protected $client_id;

    /**
     *
     * @var string $client_secret
     */
    protected $client_secret;

    /**
     *
     * @var string $user_id
     */
    protected $user_id;

    /**
       * Generates and returns a new instance of the matching endpoint.
       * @param string $name
       * @return Instagram\Api\InstagramApi InstgramApi instance
       * @throws \InvalidArgumentException
       */

    public function api($name)
    {
        $name = strtolower($name);

        if (!isset($this->apis[ $name ])) {
            switch ($name) {
                case 'users':
                    $api = new Api\Users($this);
                    break;
                case 'relationships':
                    $api = new Api\Relationships($this);
                    break;
                case 'media':
                    $api = new Api\Media($this);
                    break;
                case 'comments':
                    $api = new Api\Comments($this);
                    break;
                case 'likes':
                    $api = new Api\Likes($this);
                    break;
                case 'tags':
                    $api = new Api\Tags($this);
                    break;
                case 'locations':
                    $api = new Api\Locations($this);
                    break;
                case 'geographies':
                    $api = new Api\Geographies($this);
                    break;
                default:
                    throw new \InvalidArgumentException();
                    break;
            }
            $this->apis[ $name ] = $api;
        }

        return $this->apis[ $name ];
    }

    /**
     * Sets the OAuth id
     * @param string $client OAuth id
     * @return  Instagram\Client Client instance
     */
    public function setClientId($client)
    {
        $this->client_id = $client;

        return $this;
    }

    /**
     * Retreive the OAuth id
     * @return string OAuth id
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Sets the OAuth secret
     * @param string $secret OAuth secret
     * @return  Instagram\Client Client instance
     */
    public function setClientSecret($secret)
    {
        $this->client_secret = $secret;

        return $this;
    }

    /**
     * Retreive OAuth secret
     * @return  string OAuth secret
     */
    public function getClientSecret()
    {
        return $this->client_secret;
    }

    /**
     * Sets the Instagram user id
     * @param string $user user id
     * @return  Instagram\Client Client instance
     */
    public function setUserId($user)
    {
        $this->user_id = $user;

        return $this;
    }

    /**
     * Retreive the Instagram user id
     * @return integer user id
     */
    public function getUserId()
    {
        return $this->user_id;
    }
}
