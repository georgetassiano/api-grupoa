<?php
/**
 * Created by PhpStorm.
 * User: georg
 * Date: 21/04/2021
 * Time: 22:11
 */

namespace App\Services;


use App\Repositories\StudentRepository;

class StudentService extends BaseService implements StudentServiceInterface
{

    public function __construct(StudentRepository $repository)
    {
        parent::__construct($repository);
    }

}