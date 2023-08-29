<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Services\CreateUserService;

class UserController extends Controller {
  public function create(CreateUserRequest $request) {
    // return User:: create($request->all());
    $createUserService = new CreateUserService();

    // $request->all() é o $data
    return $createUserService->execute($request->all());
  }
}