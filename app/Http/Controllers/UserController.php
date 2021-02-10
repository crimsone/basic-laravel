<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
 
    public function index()
    {
        return response()->json([
            'users' => $this->userRepository->all(),
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return response()->json([
            'users' => $this->userRepository->store($request),
        ]);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Request $id)
    {
        return response()->json([
            'users' => $this->userRepository->destroy($id),
        ]);
    }
}
