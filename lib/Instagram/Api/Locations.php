<?php
namespace Instagram\Api;

class Comments extends InstagramApi
{
    public function get( $id, $requestOpts )
    {
        return parent::get( 'locations/' . $id, $requestOpts );
    }
    
    public function getRecentMedia( $id, $reqestOpts = array() )
    {
        return $this->get( $id . '/media/recent', array(), $reqestOpts );
    }
    
    public function search( $parameters = array(), $requestOpts = array() )
    {
        $requestOpts = array_merge( $parameters, $requestOpts );
        
        return $this->get( 'search', $requestOpts );
    }
}