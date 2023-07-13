<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;
use Error;

class CreateUserService {
  // Estamos criando um caso de uso e não faz sentido ele ter acesso a request, 
  // então estamos criando um array de data
  public function execute(array $data) {
    // Primeira validação de service do readme: verificar se o email existe
    $userFound = User::firstWhere('email', $data['email']);

    // O usuário foi encontrado?
    if(!is_null($userFound)) {
      throw new AppError('Email já cadastrado', 400);
    }

    // Segunda validação de service do readme: verificar se o CPF existe
    $userFound = User::firstWhere('cpf', $data['cpf']);

    if(!is_null($userFound)) {
      throw new AppError('CPF já cadastrado', 400);
    }

    return User:: create($data);
  }
}