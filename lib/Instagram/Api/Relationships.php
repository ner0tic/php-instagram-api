<?php
namespace Instagram\Api;

class Relationships extends Users
{
    /**
     * Get the list of users this user follows.
     * @param  interger|null $id          user id
     * @param  array         $params      delimiting parameters
     * @param  array         $requestOpts request options
     * @return array         results
     */
    public function getFollows($id = null, $params = array(), $requestOpts = array())
    {
        if (null === $id) {
            if (null === $this->getAuthClientId()) {
                return parent::get('self/follows', $params, $requestOpts);
            }

            return parent::get($this->getAuthClientId() . '/follows', $params, $requestOpts);
        }

        return parent::get($id.'/follows', $params, $requestOpts);
    }

    /**
     * Get the list of users this user is followed by.
     * @param  integer|null $id          user id
     * @param  array        $requestOpts request options
     * @return array        results
     */
    public function getFollowedBy($id = null, $requestOpts = array())
    {
        if (null === $id) {
            if (null === $this->getAuthClientId()) {
                return $this->get('self/followed-by', array(), $requestOpts);
            }

            return $this->get($this->getAuthClientId() . '/followed-by', array(), $requestOpts);
        }

        return $this->get($id . '/follow-by', array(), $requestOpts);
    }

    /**
     * List the users who have requested this user's permission to follow.
     * @param  integer|null $id          user id
     * @param  array        $requestOpts request options
     * @return array        results
     */
    public function getRequestedBy($id = null, $requestOpts = array())
    {
        if (null === $id) {
            if (null === $this->getAuthClientId()) {
                return $this->get('self/requested-by', array(), $requestOpts);
            }

            return $this->get($this->getAuthClientId() . '/requested-by', array(), $requestOpts);
        }

        return $this->get($id . '/requested-by', array(), $requestOpts);
    }

    /**
     * Get information about a relationship to another user.
     * @param  integer|null $id          user id
     * @param  array        $requestOpts request options
     * @return array        results
     */
    public function getRelationship($id, $requestOpts = array())
    {
        return $this->get($id . '/follows', array(), $requestOpts);
    }

    /** @todo post method */
    public function post()
    {

    }

    /** @todo follow method */
    public function follow()
    {

    }

    /** @todo unfollow method */
    public function unfollow()
    {

    }

    /** @todo block method */
    public function block()
    {

    }

    /** @todo unblock method */
    public function unblock()
    {

    }

    /** @todo approve method */
    public function approve()
    {

    }

    /** @todo deny method */
    public function deny()
    {

    }
}
