<?php
namespace Instagram\Api;

class Comments extends InstagramApi
{
    public function get( $id, $params = array(), $requestOpts )
    {
        return parent::get( 'locations/' . $id, $params, $requestOpts );
    }
    
    public function getRecentMedia( $id, $reqestOpts = array() )
    {
        return $this->get( $id . '/media/recent', array(), $reqestOpts );
    }
    
    public function search( $params = array(), $requestOpts = array() )
    {
        return $this->get( 'search', $params, $requestOpts );
    }
}