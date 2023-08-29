<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;


class CreateUserService {
  public function execute(array $data) {
    $this->isEmailDuplicated ($data['email']);
    $this->isCPFDuplicated ($data['cpf']);
    
    return User::create($data);
  }

  private function isEmailDuplicated($email) {
    if(User::where('email', $email) -> exists()) {
      throw new AppError('Email já cadastrado', 400);
    }
  }

  private function isCPFDuplicated($cpf) {
    if(User::where('cpf', $cpf) -> exists()) {
      throw new AppError('CPF já cadastrado', 400);
    }
  }
}