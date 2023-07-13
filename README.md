PHP 

sudo apt install php8.1-xml

Criar migration

php artisan make:migration create_flights_table

Acessar container para executar migration

docker exec -it <ID_ou_Nome_do_Contêiner> bash
