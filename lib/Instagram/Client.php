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
       * Api
       * @param string $name
       * @return api type
       * @throws \InvalidArgumentException
       */
    public function api( $name ) 
    {
        $name = strtolower( $name );
        
        if( !isset( $this->apis[ $name ] ) ) 
        {
            switch( $name ) 
            {
                case 'users':
                    $api = new Api\Users( $this );
                    break;
                case 'relationships':
                    $api = new Api\Relationships( $this );
                    break;
                case 'media':
                    $api = new Api\Media( $this );
                    break;
                case 'comments':
                    $api = new Api\Comments( $this );
                    break;
                case 'likes':
                    $api = new Api\Likes( $this );
                    break;
                case 'tags':
                    $api = new Api\Tags( $this );
                    break;
                case 'locations':
                    $api = new Api\Locations( $this );
                    break;
                case 'geographies':
                    $api = new Api\Geographies( $this );
                    break;
                default:
                    throw new \InvalidArgumentException();
                    break;;
          }
          $this->apis[ $name ] = $api;
        }
        
        return $this->apis[ $name ];
      }
      
      public function setClientId( $client )
      {
          $this->client_id = $client;
          
          return $this;
      }
      
      public function getClientId()
      {
          return $this->client_id;
      }
      
      public function setClientSecret( $secret )
      {
          $this->client_secret = $secret;
          
          return $this;
      }
      
      public function getClientSecret()
      {
          return $this->client_secret;
      }
      
      public function setUserId( $user )
      {
          $this->user_id = $user;
          
          return $this;
      }
      
      public function getUserId()
      {
          return $this->user_id;
      }
  }
