<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    public function create(array $data);

    public function update(int $id, array $data);

    public function all(array $where);

    public function delete(int $id);

    public function find(int $id);
}
