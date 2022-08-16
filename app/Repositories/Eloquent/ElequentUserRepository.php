<?php

namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;

class ElequentUserRepository extends ElequentBaseRepository implements UserRepositoryInterface
{
    protected $model = User::class;

    public function getAllUsersEmail()
    {
        // TODO: Implement getAllUsersEmail() method.
    }
}
