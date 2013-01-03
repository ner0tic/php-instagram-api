<?php
namespace Instagram\Api;

class Users extends InstagramApi
{
    /**
   * Return array of either the given user id, the currently logged in user
   * or false
   * @param integer|null $id
   * @param array $requestOpts http query parameters
   * @return type
   */
    public function get( $id = null, $params = array(), $requestOpts = array() )
    {
        if( null === $id )
        {
            if( null === parent::getAuthClientId() )
            {
                return parent::get( 'users/self', $params, $requestOpts );
            }
      
            return parent::get( 'users/' . parent::getAuthClientId(), $params, $requestOpts );      
        }
            
        return parent::get( 'users/' . $id, $params,  $requestOpts );
    }
  
    /**
     * Return array of recent media to instagram
     * @param integer|null $id
     * @param array $requestOpts
     * @return type
     */
    public function getRecentMedia( $id = null, $requestOpts = array() )
    {
        $requestOpts = array_merge( $requestOpts, array( 
            'limit' =>  10
        ) );

        if( null === $id )
        {
            if( null === parent::getAuthClientId() )
            {
                return $this->get( 'self/media', array(), $requestOpts );
            }

            return $this->get( parent::getAuthClientId() . '/media/recent', array(), $requestOpts );      
        }

        return $this->get( $id . '/media/recent', array(), requestOpts );
    }
  
    /**
     * Return array of liked media to instagram
     * @param integer|null $id
     * @param array $recentOpts
     * @return type
     */
    public function getLikedMedia( $id = null, $requestOpts = array() )
    {
        $requestOpts = array_merge($requestOpts, array( 
            'limit' =>  $limit
        ) );

        if( null === $id )
        {
            if( null === parent::getAuthClientId() )
            {
                return $this->get( 'self/media/liked', array(), $requestOpts );
            }

            return $this->get( parent::getAuthClientId() . '/media/liked', array(), $requestOpts );      
        }

        return $this->get( $id . '/media/liked', array(), $requestOpts );
    }
  
    public function getFeed( $id = null, $requestOpts = array() )
    {
        if( null === $id )
        {
            if( null === $this->getAuthClient() )
            {
                return $this->get( 'self/feed', array(), $requestOpts );
            }

            return $this->get( $this->getAuthClient() .'/feed', array(), $requestOpts );
        }

        return $this->get( $id . '/feed', array(), $requestOpts );
    }

    public function search( $querystring, $requestOpts = array() )
    {
        $requestOpts = array_merge( $requestOpts, array(
            'count'   =>  10
        ) );
        $params = array(
            'q'       =>  $querystring
        );

        return $this->get( '/search', $params, $requestOpts );
    }
}