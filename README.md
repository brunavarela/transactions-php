PHP 

sudo apt install php8.1-xml

Criar migration

php artisan make:migration create_flights_table

Acessar container para executar migration

docker exec -it <ID_ou_Nome_do_Contêiner> bash

Regras de negócio ao criar usuário

Verificação a nível de controller
[] Nome foi enviado
[] Email foi enviado
[] Email válido
[] Cpf foi enviado
[] Senha foi enviado
[] Senha minimo 7 caracteres

Verificação a nível de serviço
[] Verificar se o email existe
[] Verificar se o cpf existe
