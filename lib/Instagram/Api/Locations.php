<?php
namespace Instagram\Api;

use \Core\AbstractApi;

class Comments extends AbstractApi
{
    public function get( $id, $requestOpts )
    {
        return parent::get('locations/' . $id, $requestOpts );
    }
    
    public function getRecentMedia( $id, $reqestOpts = array() )
    {
        return $this->get( $id .'/media/recent', $reqestOpts );
    }
    
    public function search( $parameters = array(), $requestOpts = array() )
    {
        $requestOpts = array_merge( $parameters, $requestOpts );
        
        return $this->get( 'search', $requestOpts );
    }
}