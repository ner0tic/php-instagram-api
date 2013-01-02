<?php
namespace Instagram\Api;

use \Core\AbstractApi;

class Geographies extends AbstractApi
{
    public function get( $id, $requestOpts )
    {
        $requestOpts = array_merge( $requestOpts, array(
            'count'     =>  10
        ));
        
        return $this->get( 'geographies/' . $id .'media/recent', $requestOpts );
    }
}