<?php
namespace App\Mobile\V1\User;

use Rest\ApiException;
use Rest\Resource;

/**
 * Example entity
 *
 * Class UserResource
 * @package App\Mobile\V1\User
 */
class UserResource extends Resource
{
    protected $user;

    /**
     * UserResource constructor.
     * @param $user
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    public function fetch($id, $params = array())
    {
        if (isset($this->user[$id - 1])) {
            return $this->user[$id - 1];
        } else {
            throw new ApiException(404, 'User not found');
        }
    }

    public function fetchAll($params = array())
    {
        return $this->user;
    }

}