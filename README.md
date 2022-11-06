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

Copiar o arquivo `env` para `.env` e adapte para seu ambiente, especificamente o baseURL
e quaisquer configurações de banco de dados.


## Requisitos do servidor

O PHP versão 7.4 ou superior é necessário, com as seguintes extensões instaladas:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) 

Além disso, certifique-se de que as seguintes extensões estejam habilitadas em seu PHP:

- json (Ativado por padrão. Não desativar.)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (Ativado por padrão. Não desativar)
