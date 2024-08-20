# To-Do List API

# ⚡ Passos para rodar a aplicação no docker:

## Pré-requisitos: Possuir Docker Desktop e Visual Studio Code instalados.

## 1. Baixar os arquivos ou clonar o repositório do Github e abrir a pasta no Visual Studio Code;
## 2. Pelo terminal, entrar na pasta do projeto, executando o comando "cd to-do-list-api";
## 3. Executar "docker-compose up" no terminal. Ao executar, serão instaladas as dependências do projeto. Aguardar a instalação;
## 4. Ao finalizar, acesse o arquivo "docker-compose.yml" e delete a linha 10: command: sh - c "composer install";
## 5. Interrompa a execução da aplicação no terminal com Ctrl-C, após isso, execute novamente "docker-compose up";
## 6. Com a aplicação rodando, abra uma nova janela do terminal e entre novamente na pasta do projeto "cd to-do-list-api". Dentro do diretório do projeto, execute o comando "docker-compose exec app php artisan migrate";
## 7. Agora, a aplicação está de pé e rodando no Docker.