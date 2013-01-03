<?php
namespace Instagram\Api;

use \Core\AbstractApi;

class Media extends InstagramApi
{
    public function get( $id, $params = array(), $requestOpts = array() )
    {
        return parent::get( 'media/' . $id, $params, $requestOpts );
    }
    
    public function search( $params = array(), $requestOpts = array() )
    {
        return $this->get( 'search', $params, $requestOpts );
    }
    
    public function popular( $requestOpts = array() )
    {
        return $this->get( 'popular', array(), $requestOpts );
    }
}