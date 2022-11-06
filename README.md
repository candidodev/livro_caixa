# LIVRO CAIXA
Aplicação em PHP, utilizando o framework codeigniter, disponibiliza movimentação de financeira de entradas e saídas. Além das movimentações básicas o sistema disponibiliza um dashboard para apresentar o resumo das movimentações do caixa. Também é possível emitir relatórios a partir dos filtros aplicados as movimentações.
##CodeIgniter

CodeIgniter é um framework web PHP full-stack que é leve, rápido, flexível e seguro.

## Instalação/Atualização

Clonar o repositório com `git clone https://github.com/candidodev/livro_caixa.git`, em seguida atualizar as dependencias do projeto com `composer update`.

Ao atualizar, verifique as notas da versão para ver se há alguma alteração que você precise aplicar
para a pasta do seu aplicativo. Os arquivos afetados podem ser copiados ou mesclados de
`vendor/codeigniter4/framework/app`.

## Setup

Copiar o arquivo `env` para `.env` e adapte para seu aplicativo, especificamente o baseURL
e quaisquer configurações de banco de dados.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)
