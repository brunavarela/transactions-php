PHP 

sudo apt install php8.1-xml

Criar migration

php artisan make:migration create_flights_table

Regras de negócio ao criar usuário

Verificação a nível de controller
[] Nome foi enviado
[] Email foi enviado
[] Email válido
[] Cpf foi enviado
[] Senha foi enviado
[] Senha minimo 7 caracteres

Verificação a nível de serviço
[X] Verificar se o email existe
[X] Verificar se o cpf existe

PARA RODAR O SISTEMA/docker aberto: project-php-laravel
./vendor/bin/sail up

Acessar container para executar migration

docker exec -it project-php-laravel-laravel.test-1 /bin/sh

PARA REINICIAR A PORTA
sudo lsof -i :80
sudo kill PID