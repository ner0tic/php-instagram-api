<?php
namespace Instagram\Api;

class Comments extends InstagramApi
{
    /**
     * {@inheritdoc}
     */
    public function get($id, $params = array(), $requestOpts = array())
    {
        return parent::get('locations/' . $id, $params, $requestOpts);
    }
    
    /**
     * Get a list of recent media objects from a given location.
     * @param  integer $id         location id
     * @param  array  $reqestOpts request options
     * @return array  resutls
     */
    public function getRecentMedia($id, $reqestOpts = array())
    {
        return $this->get($id . '/media/recent', array(), $reqestOpts);
    }
    
    /**
     * Search for a location by geographic coordinate.
     * @param  array  $params      search parameters
     * @param  array  $requestOpts request options
     * @return array results
     * @throws  Exception 
     */
    public function search($params = array(), $requestOpts = array())
    {
        if ((array_key_exists('lat', $params) && array_key_exists('lng', $params)) || (array_key_exists('foursquare_id', $params) || array_key_exists('foursquare_v2_id', $params))) {
            return $this->get('search', $params, $requestOpts);
        } else {
            throw new \Exception('A latitude (lat) AND longitude (lng) OR a foursquare id must be provided.');
        }
    }
}
