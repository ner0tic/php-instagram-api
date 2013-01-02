<?php
namespace Instagram\Api;

use \Core\AbstractApi;

class Users extends AbstractApi
{
  /**
   * Return array of either the given user id, the currently logged in user
   * or false
   * @param integer|null $id
   * @param array $requestOpts http query parameters
   * @return type
   */
  public function get($id = null, $requestOpts = array())
  {
    if(null === $id)
    {
      if(null === $this->getAuthClientId())
      {
        return $this->get('users/self', $requestOpts);
      }
      
      return $this->get('users/'.$this->getAuthClientId(), $requestOpts);      
    }
            
    return $this->get('users/'.$id, $requestOpts);
  }
  
  /**
   * Return array of recent media to instagram
   * @param integer|null $id
   * @param array $requestOpts
   * @return type
   */
  public function getRecentMedia( $id = null, $requestOpts = array() )
  {
    $requestOpts = array_merge($requestOpts, array( 'limit' =>  10) );

    if(null === $id)
    {
      if(null === $this->getAuthClientId())
      {
        return $this->get('self/media', $requestOpts);
      }
      
      return $this->get($this->getAuthClientId().'/media/recent', $requestOpts);      
    }
            
    return $this->get($id.'/media/recent', $requestOpts);
  }
  
  /**
   * Return array of liked media to instagram
   * @param integer|null $id
   * @param array $recentOpts
   * @return type
   */
  public function getLikedMedia($id = null, $requestOpts = array())
  {
    $requestOpts = array_merge($requestOpts, array( 'limit' => $limit ) );
    
    if(null === $id)
    {
      if(null === $this->getAuthClientId())
      {
        return $this->get('self/media/liked', $requestOpts);
      }
      
      return $this->get($this->getAuthClientId().'/media/liked', $requestOpts);      
    }
            
    return $this->get($id.'/media/liked', $requestOpts);
  }
  
  public function getFeed( $id = null, $requestOpts = array() )
  {
      if( null === $id )
      {
          if( null === $this->getAuthClient() )
          {
              return $this->get( 'self/feed', $requestOpts );
          }
          
          return $this->get( $this->getAuthClient() .'/feed', $requestOpts );
      }
      
      return $this->get( $id .'/feed', $requestOpts );
  }
  
  public function search( $querystring, $requestOpts = array() )
  {
      $requestOpts = array_merge( $requestOpts, array(
          'count'   =>  10,
          'q'       => $querystring
      ));
      
      return $this->get( '/search', $requestOpts );
  }
}