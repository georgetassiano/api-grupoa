<?php
/**
 * Created by PhpStorm.
 * User: georg
 * Date: 21/04/2021
 * Time: 22:03
 */

namespace App\Services;


use Prettus\Repository\Contracts\RepositoryInterface;

class BaseService implements BaseServiceInterface
{
    private $repository;
    const DEFAULT_LIMIT = 10; // default limit of pages for paginate results

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * return repository instance
     *
     * @return RepositoryInterface
     */
    public function repository()
    {
        return $this->repository;
    }


    /**
     * create new data in database and return the data created
     * @param $data
     * @return mixed
     */
    public function create($data)
    {
        return $this->repository->create($data);
    }


    /**
     * update data in database by id with new values and return the data updated
     * @param $data
     * @param $id
     * @return mixed
     */
    public function update($data, $id)
    {
        return $this->repository->update($data, $id);
    }


    /**
     * delete data in database by id and return the data deleted
     * @param $id
     * @return int
     */
    public function delete($id)
    {
        return $this->repository->delete($id);
    }


    /**
     * find the data in database by id and return the data if exist
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->repository->find($id);
    }


    /**
     * return all data in database with paginate using limit of data for page
     * @param null $limit
     * @return mixed
     */
    public function paginate($limit = null)
    {
        $limit_paginate = self::return_limit_for_pagination($limit);
        return $this->repository->paginate($limit_paginate);
    }


    /**
     * checks if the default is null and then returns the default value or else returns the informed value
     * @param $limit
     * @return int
     */
    public static function return_limit_for_pagination($limit): int
    {
        return $limit ?? self::DEFAULT_LIMIT;
    }


}