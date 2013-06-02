<?php
namespace Instagram\Api;

class Like extends Media
{
    /**
     * Get a list of users who have liked this media.
     * @param  integer $id          media id
     * @param  array  $requestOpts [description]
     * @return [type]              [description]
     */
    public function getLikes($id, $requestOpts = array())
    {
        return parent::get($id . '/likes', array(), $requestOpts);
    }
    
    /**
     * Set a like on this media by the currently authenticated user.
     * @param  integer $id          media id
     * @param  array  $requestOpts request options
     * 
     * @todo add post like functionality
     */
    public function like($id, $requestOpts = array())
    {

    }

    /**
     * Remove a like on this media by the currently authenticated user.
     * @param  integer $id          media id
     * @param  array $requestOpts request options
     * 
     * @todo add like removal functionality
     */
    public function unlike($id, $requestOpts = array())
    {

    }
}
