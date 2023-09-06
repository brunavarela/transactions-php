<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\Transaction;
use App\Models\User;

class CreateTransactionService {
  public function execute(array $data) {
    $userPayer = $this->findUser($data['payer']);
    $userPayee = $this->findUser($data['payee']);

    if($userPayer->type === 'Vendedor') {
      throw new AppError('Tipo de usuário inválido', 403);
    };

    if($userPayer->balance < $data['value']) {
      throw new AppError('Saldo insuficiente para a transação', 400);
    };

    $userPayer->balance -= $data['value'];
    $userPayee->balance += $data['value'];

    $userPayer->save();
    $userPayee->save();

    return Transaction::create([
      'payer_id' => $userPayer->id,
      'payee_id' => $userPayee->id,
      'value' => $data['value']
    ]);
  }

  private function findUser(string $id) {
    $user = User::find($id);

    if(is_null($user)) {
      throw new AppError("Usuário {$id} não encontrado", 404);
    };

    return $user;
  }
}