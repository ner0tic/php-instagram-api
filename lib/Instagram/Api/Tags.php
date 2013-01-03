<?php
namespace Instagram\Api;

use \Core\AbstractApi;

class Comments extends AbstractApi
{
    public function get( $tag = 'nofilter', $requestOpts = array() )
    {
        return parent::get( 'tags/' . $tag, $requestOpts );
    }
    
    public function getRecentlyTagged( $tag, $requestOpts )
    {
        return $this->get( $id . '/media/recent', $requestOpts );
    }
    
    public function search ($queryterm, $requestOpts = array() )
    {
        return $this->get('search/' . $queryterm, $requestOpts );
    }
}