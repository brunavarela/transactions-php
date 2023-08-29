<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class LoginService {
  public function execute(array $data) {
    Log::debug('Service Login');
  }
}