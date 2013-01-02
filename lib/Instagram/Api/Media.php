<?php
namespace Instagram\Api;

use \Core\AbstractApi;

class Media extends AbstractApi
{
    public function get( $id, $requestOpts = array() )
    {
        return $this->get('media/' . $id, $requestOpts );
    }
    
    public function search( $parameters = array(), $requestOpts = array() )
    {
        $requestOpts = array_merge( $requestOpts, $parameters );
        
        return $this->get( 'search', $requestOpts );
    }
    
    public function popular( $requestOpts = array() )
    {
        return $this->get( 'popular'. $requestOpts );
    }
}