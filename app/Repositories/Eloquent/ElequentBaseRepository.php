<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\RepositoryInterface;

class ElequentBaseRepository implements RepositoryInterface
{
    protected $model;

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->model::where('id', $id)->update($data);
    }

    public function all(array $where)
    {
        $query = $this->model::query();
        foreach ($query as $key => $value) {
            $query->where($key, $value);
        }
        return $query->get();
    }

    public function delete(int $id)
    {
        $query = $this->model::query();
        foreach ($query as $key => $value) {
            $query->where($key, $value);
        }
        return $query->delete();
    }

    public function find(int $id)
    {
        return $this->model::find($id);
    }
}
