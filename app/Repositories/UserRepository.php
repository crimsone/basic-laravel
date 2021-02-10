<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserRepository implements UserRepositoryInterface
{
  public function all()
  {
    return response()->json([
      'user' => User::all()
    ]);
  }

  public function store($request)
  { 
    $result = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => $request->password
    ]);
  
    return response()->json([
      'result' => $result,
    ]);
  }

  public function destroy($id)
  {
    return response()->json([
      'user' => User::destroy($id->id)
    ]);
  }

}