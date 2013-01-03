<?php
namespace Instagram\Api;

class Like extends Media
{
    public function getLikes( $id, $requestOpts = array() )
    {
        return parent::get( $id . '/likes', $requestOpts );
    }
    
    /**
     * @todo add post like functionality
     */
    /**
     * @todo add like removal functionality
     */
}