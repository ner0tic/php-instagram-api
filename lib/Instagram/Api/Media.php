<?php
namespace Instagram\Api;

use \Core\AbstractApi;

class Media extends InstagramApi
{
    /**
     * Get information about a media object. 
     * @param  integer|string $id          media id
     * @param  array  $params      parameters
     * @param  array  $requestOpts request options
     * @return array  results
     */
    public function get($id, $params = array(), $requestOpts = array())
    {
        return parent::get('media/' . $id, $params, $requestOpts);
    }
    
    /**
     * Search for media in a given area. 
     * The default time span is set to 5 days. 
     * The time span must not exceed 7 days.
     * @param  array  $params      search parameters
     * @param  array  $requestOpts request options
     * @return array              results
     */
    public function search($params = array(), $requestOpts = array())
    {
        return $this->get('search', $params, $requestOpts);
    }
    
    /**
     * Get a list of what media is most popular at the moment.
     * @param  array  $requestOpts request options
     * @return array              results
     */
    public function popular($requestOpts = array())
    {
        return $this->get('popular', array(), $requestOpts);
    }
}
