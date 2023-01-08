### Projeto de sistema administrativo da plataforma E-Diaristas

Desenvolvido no curso multi-stack da treinaweb

### Instalando o Projeto

#### Clonar o projeto

git clone git@github.com:yamatopotter/ediaristas-admin.git

### Instalando as dependências em ambiente de produção

composer install

### Instalando as dependências em ambiente de desenvolvimento

composer update

## Criar arquivo de configuração do ambiente

Copiar o arquivo de exemplo `.env.example` para `.env` na raiz do projeto e configurar os detalhes da aplicação (conexão de banco de dados e etc)

## Criar as tabelas do banco de dados

php artisan migrate

## Iniciar o servidor de desenvolvimento

php artisan serve