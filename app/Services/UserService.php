<?php
/**
 * Created by PhpStorm.
 * User: georg
 * Date: 21/04/2021
 * Time: 22:12
 */

namespace App\Services;


use App\Repositories\UserRepository;

class UserService extends BaseService implements UserServiceInterface
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }

}