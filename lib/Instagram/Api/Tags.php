<?php
namespace Instagram\Api;

class Comments extends InstagramApi
{
    /**
     * Return data based on given tag.  Defaults search with 'nofilter' tag
     * @param string|null $tag
     * @param array $requestOpts http query parameters
     * @return array results
     */
    public function get($tag = 'nofilter', $params = array(), $requestOpts = array())
    {
        return parent::get('tags/' . $tag, $params, $requestOpts);
    }
    
    /**
     * Return recent data based on given tag.
     * @param  string|null $tag         tag to delimit results
     * @param  array $requestOpts       request options
     * @return array              results
     */
    public function getRecentlyTagged($tag, $requestOpts)
    {
        return $this->get($id . '/media/recent', array(), $requestOpts);
    }
    
    /**
     * search for tags
     * @param  string $querystring querystring
     * @param  array  $requestOpts request options
     * @return array results
     */
    public function search ($querystring, $requestOpts = array())
    {
        return $this->get('search/' . $querystrings, array(), $requestOpts);
    }
}
