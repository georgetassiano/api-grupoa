<?php
/**
 * Created by PhpStorm.
 * User: georg
 * Date: 21/04/2021
 * Time: 22:03
 */

namespace App\Services;


interface BaseServiceInterface
{
    public function repository();

    public function create($data);

    public function update($data, $id);

    public function delete($id);

    public function find($id);

    public function paginate($limit = null);

    public static function return_limit_for_pagination($limit): int;


}