<?php

namespace App\Repositories\Json;

use App\Repositories\Contracts\UserRepositoryInterface;

class JsonUserRepository extends JsonBaseRepositoy implements UserRepositoryInterface
{

    public function create(array $data)
    {
        return file_put_contents('h.json', $data);
    }

    public function update(int $id, array $data)
    {
        // TODO: Implement update() method.
    }

    public function all(array $where)
    {
        // TODO: Implement all() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
    }
}
