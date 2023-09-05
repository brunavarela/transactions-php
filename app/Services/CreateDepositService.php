<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;

class CreateDepositService {
    public function execute(string $userId, float $value) {
        $userFound = User::find($userId);

        if(is_null($userFound)) {
            throw new AppError('Usuário não encontrado', 404);
        }

        $userFound->balance += $value;
        $userFound->save();

        return $userFound;
    }
}