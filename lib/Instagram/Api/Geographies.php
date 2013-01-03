<?php
namespace Instagram\Api;

class Geographies extends InstagramApi
{
    public function get( $id, $requestOpts )
    {
        $requestOpts = array_merge( $requestOpts, array(
            'count'     =>  10
        ) );
        
        return parent::get( 'geographies/' . $id . '/media/recent', array(), $requestOpts );
    }
}