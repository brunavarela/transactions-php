PHP 

sudo apt install php8.1-xml

Criar migration

php artisan make:migration create_flights_table

Regras de negócio ao criar usuário

Verificação a nível de controller
[X] Nome foi enviado
[X] Email foi enviado
[X] Email válido
[X] Cpf foi enviado
[X] Senha foi enviado
[X] Senha minimo 7 caracteres

Verificação a nível de serviço
[X] Verificar se o email existe
[X] Verificar se o cpf existe

Transaction
[X] Payer existe
[X] Payee existe
[X] Usuario não pode ser vendedor
[X] Balance precisa ser maior ou igual ao valor da transação
[X] Subtrair o valor do payer
[X] Somar o valor no payee
[X] Salvar a transação

PARA RODAR O SISTEMA/docker aberto: project-php-laravel
./vendor/bin/sail up

Acessar container para executar migration

docker exec -it project-php-laravel-laravel.test-1 /bin/sh

PARA REINICIAR A PORTA
sudo lsof -i :80
sudo kill PID

Resumo (criando tabela e model):

1 - cria a tabela com migration : php artisan make:migration create_transactions_table;
2 - roda o docker no terminal : docker exec -it project-php-laravel-laravel.test-1 /bin/sh;
3 - inicia a(s) migration : # php artisan migrate;
4 - cria a model : php artisan make:model Transaction;

Resumo (codando):

1 - migrations : coloca(cria) as informações da tabela na migration;
2 - model : colocar o uuid, colocar a tabela a qual ela faz referencia 'transactions' e quais são os campos;
3 - service : botar algum retorno (return 2) pra testar a rota após o passo 5;
4 - controller : criar controller;
5 - route : criar a rota e passar a controller, testar a rota;
6 - request : criar request e depois fazer o teste novamente;
7 - service : voltar a service e colocar os casos de uso;
8 - service : retornar a model;