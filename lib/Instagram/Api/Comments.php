<?php
namespace Instagram\Api;

use Instagram\Media;

class Comments extends Media
{
    public function get( $id, $requestOpts = array() )
    {
        return $this->get( 'media/' . $id, $requestOpts );
    }
    
    /**
     * @todo add post comment functionality
     */
    /**
     * @todo add comment removal functionality
     */
}