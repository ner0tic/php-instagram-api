<?php
namespace Instagram\Api;

class Geographies extends InstagramApi
{
    /**
    * Get very recent media from a geography subscription that you created. 
    * Note: you can only access Geographies that were explicitly created by your OAuth client
    * @param  integer $id          geo id
    * @param  array  $params      parameters
    * @param  array  $requestOpts request options
    * @return array  results
    */
    public function get($id, $params = array(), $requestOpts = array())
    {
        $requestOpts = array_merge(
            $requestOpts,
            array(
                'count'     =>  10
            )
        );
        
        return parent::get('geographies/' . $id . '/media/recent', $params, $requestOpts);
    }
}
