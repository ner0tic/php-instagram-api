<?php
namespace Instagram\Api;

use Instagram\Media;

class Comments extends Media
{
    public function get( $id, $requestOpts = array() )
    {
        return $parent::get( $id, $requestOpts );
    }
    
    /**
     * @todo add post comment functionality
     */
    /**
     * @todo add comment removal functionality
     */
}