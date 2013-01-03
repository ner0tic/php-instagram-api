<?php
namespace Instagram;

use Core\Client as BaseClient;
  
class Client extends BaseClient 
{
    /**
       * Api
       * @param string $name
       * @return api type
       * @throws \InvalidArgumentException
       */
    public function api( $name ) 
    {
        if( !isset( $this->apis[ $name ] ) ) 
        {
            switch( $name ) 
            {
                case 'users':
                    $api = new Api\User( $this );
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
  }
