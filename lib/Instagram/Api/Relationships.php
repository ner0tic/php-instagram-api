<?php
namespace Instagram\Api;

use Instagram\Users;

class Relationships extends Users
{
    public function getFollows( $id = null, $requestOpts = array() )
    {
        if(null === $id)
        {
            if(null === $this->getAuthClientId())
            {
                return $this->get('self/follows', $requestOpts);
            }
      
            return $this->get($this->getAuthClientId().'/follows', $requestOpts);      
        }
            
        return $this->get($id.'/follows', $requestOpts);
    }
    
    public function getFollowedBy( $id = null, $requestOpts = array() )
    {
        if(null === $id)
        {
            if(null === $this->getAuthClientId())
            {
                return $this->get('self/followed-by', $requestOpts);
            }
      
            return $this->get($this->getAuthClientId().'/followed-by', $requestOpts);      
        }
            
        return $this->get($id.'/follow-by', $requestOpts);
    }
    
    public function getRequestedBy( $id = null, $requestOpts = array() )
    {
        if(null === $id)
        {
            if(null === $this->getAuthClientId())
            {
                return $this->get('self/requested-by', $requestOpts);
            }
      
            return $this->get($this->getAuthClientId().'/requested-by', $requestOpts);      
        }
            
        return $this->get($id.'/requested-by', $requestOpts);
    }
    
    public function getRelationship( $id, $requestOpts = array() )
    {
        return $this->get($id.'/follows', $requestOpts);
    }
    
    /**
     * @todo add post action to modifying relationships
     */
}