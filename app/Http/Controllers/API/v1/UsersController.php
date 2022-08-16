<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Repositories\Json\JsonUserRepository;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private JsonUserRepository $userRepository;

    public function __construct()
    {
    }

    public function Store(Request $request)
    {
        $this->validate($request, [
                'fullname' => 'required|string|min:3|max:256',
                'email' => 'required|email',
                'mobile' => 'required|string',
                'password' => 'required'
            ]
        );
        response()->json([
            'success' => true,
            'message' => 'کاربر با موفقیت ایجاد شد',
            'data' => [
                'fullname' => $request->fullname,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'password' => $request->password
            ]
        ])->setStatusCode(201);
        $data = $request->toArray();
        return $this->userRepository->create($data);
    }
}
