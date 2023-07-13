<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\CreateUserService;
use Illuminate\Http\Request;

class UserController extends Controller {
  public function create(Request $request) {
    // return User:: create($request->all());
    $createUserService = new CreateUserService();

    // $request->all() é o $data
    return $createUserService->execute($request->all());
  }
}