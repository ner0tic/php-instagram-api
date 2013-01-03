<?php
namespace Instagram\Api;

class Comments extends InstagramApi
{
    public function get( $tag = 'nofilter', $params = array(), $requestOpts = array() )
    {
        return parent::get( 'tags/' . $tag, $params, $requestOpts );
    }
    
    public function getRecentlyTagged( $tag, $requestOpts )
    {
        return $this->get( $id . '/media/recent', array(), $requestOpts );
    }
    
    public function search ($querystring, $requestOpts = array() )
    {
        return $this->get('search/' . $querystrings, array(), $requestOpts );
    }
}