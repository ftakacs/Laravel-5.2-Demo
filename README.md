# Laravel-5.2-Demo
Projeto exemplo utilizando Laravel 5.2 com ACL e área administrativa

Observações:
Foi feita alteração no arquivo index.php da pasta public para que a mesma fique no mesmo diretório da pasta Laravel ao inves de ficar dentro da mesma como acontece na instalação padrão do framwork.

Ao instalar o projeto, configure a variável .env com os dados do banco de dados e do SMTP de envio de email. Configure também o arquivo mail.php da pasta config para incluir seu nome e endereço de email nos campos "from" e "to".

Rode as migrações e faça o seed do banco de dados utilizando o php artisan. Serão criados os usuários Admin e User para testes de ACL (ambos com senha secret)
