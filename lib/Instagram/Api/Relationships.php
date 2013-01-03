<?php
namespace Instagram\Api;

class Relationships extends Users
{
    public function getFollows( $id = null, $params = array(), $requestOpts = array() )
    {
        if( null === $id )
        {
            if( null === $this->getAuthClientId() )
            {
                return parent::get( 'self/follows', $params, $requestOpts );
            }
      
            return parent::get( $this->getAuthClientId() . '/follows', $params, $requestOpts );
        }
            
        return parent::get( $id.'/follows', $params, $requestOpts );
    }
    
    public function getFollowedBy( $id = null, $requestOpts = array() )
    {
        if( null === $id )
        {
            if( null === $this->getAuthClientId() )
            {
                return $this->get( 'self/followed-by', array(), $requestOpts );
            }
      
            return $this->get( $this->getAuthClientId() . '/followed-by', array(), $requestOpts );      
        }
            
        return $this->get( $id . '/follow-by', array(), $requestOpts );
    }
    
    public function getRequestedBy( $id = null, $requestOpts = array() )
    {
        if( null === $id )
        {
            if( null === $this->getAuthClientId() )
            {
                return $this->get( 'self/requested-by', array(), $requestOpts );
            }
      
            return $this->get( $this->getAuthClientId() . '/requested-by', array(), $requestOpts );
        }
            
        return $this->get( $id . '/requested-by', array(), $requestOpts );
    }
    
    public function getRelationship( $id, $requestOpts = array() )
    {
        return $this->get( $id . '/follows', array(), $requestOpts );
    }
    
    /**
     * @todo add post action to modifying relationships
     */
}