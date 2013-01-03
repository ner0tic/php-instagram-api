<?php
namespace Instagram\Api;

class Comments extends InstagramApi
{
    public function get( $tag = 'nofilter', $requestOpts = array() )
    {
        return parent::get( 'tags/' . $tag, $requestOpts );
    }
    
    public function getRecentlyTagged( $tag, $requestOpts )
    {
        return $this->get( $id . '/media/recent', $requestOpts );
    }
    
    public function search ($querystring, $requestOpts = array() )
    {
        return $this->get('search/' . $querystrings, $requestOpts );
    }
}