# Projeto Transactions PHP/Laravel

## Descrição do Projeto

O projeto Transactions é uma aplicação desenvolvida em PHP/Laravel que permite a criação de contas de usuário, login e a realização de transações financeiras entre usuários, exibindo o saldo atual. O objetivo principal deste projeto é fornecer uma oportunidade de prática no desenvolvimento com PHP e Laravel.

## Pré-requisitos

Para executar o sistema, você precisará ter as seguintes ferramentas e versões instaladas em seu ambiente de desenvolvimento:

- Node.js 18.17.0
- PHP 8.1

## Configuração do Ambiente

Certifique-se de que o Docker esteja instalado e em execução em seu sistema. Para rodar o sistema, siga os passos abaixo:

1. Abra um terminal na raiz do projeto.

2. Execute o seguinte comando para iniciar o Docker e preparar o ambiente:

   ```bash
   ./vendor/bin/sail up
3. Para acessar o contêiner do Laravel, use o seguinte comando:

   ```bash
   docker exec -it project-php-laravel-laravel.test-1 /bin/sh
   
## Uso
O projeto Transactions oferece as seguintes funcionalidades:

- Criação de contas de usuário.
- Login de usuários.
- Realização de transações financeiras entre usuários.
- Exibição do saldo atual das contas.

## Estrutura do Projeto
O projeto está organizado com as seguintes estruturas principais:

- app: Contém os arquivos principais da aplicação Laravel.
- controllers: Contém os controladores da aplicação.
- service: Contém serviços auxiliares.
- request: Contém classes de requisição para validação.
- route: Define as rotas da aplicação.
- model: Contém os modelos de dados.
  
## Contribuição

Este projeto está aberto para contribuições. Se desejar contribuir, siga estas etapas:

- Faça um fork do repositório.
- Crie uma branch para sua contribuição (git checkout -b feature/sua-contribuicao).
- Faça as alterações necessárias e commit.
- Envie um pull request com uma descrição detalhada das alterações.

## Contato
Para entrar em contato com os desenvolvedores ou relatar problemas, entre em contato com:

- [Bruna Varela](brunavarela1@hotmail.com)

## Créditos
Este projeto foi desenvolvido como parte do programa de treinamento da Kenzie Academy Brasil, sob a orientação do professor Gabriel Tsunode.
