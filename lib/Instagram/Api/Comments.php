<?php
namespace Instagram\Api;

class Comments extends Media
{
    /**
     * Get a full list of comments on a media.
     * @param  integer $id          media id
     * @param  array  $requestOpts request options
     * @return array  results
     */
    public function get($id, $params = array(), $requestOpts = array())
    {
        return parent::get($id, $params, $requestOpts);
    }
    
    /**
     * Post Data
     * @param  integer $id          media id
     * @param  array  $params      parameters
     * @param  array  $requestOpts request options
     *
     * @todo  add post functionality
     */
    public function post($id, $params = array(), $requestOpts = array())
    {

    }
    
    /**
     * Create a comment on a media. 
     * Please email apidevelopers[at]instagram.com for access.
     * @param  integer $id          media id
     * @param  array  $params      parameters
     * @param  array  $requestOpts request options
     *
     * @todo add post comment functionality 
     */
    public function comment($id, $params = array(), $requestOpts = array())
    {
        if (! array_key_exists('text', $params)) {
            throw new \Exception('No comment body was given.');
        }
    }

    /**
     * Remove a comment either on the authenticated user's media or authored by the authenticated user.
     * @param  integer $id          media id
     * @param  array  $params      parameters
     * @param  array  $requestOpts request options
     * 
     * @todo add comment removal functionality
     */
    public function uncomment($id, $params = array(), $requestOpts = array())
    {
        if (! array_key_exists('comment-id', $params)) {
            throw new \Exception('No comment text was given.');
        }
    }
}
