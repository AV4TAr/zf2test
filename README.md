zf2test
=======

Instalar dependencias:

  curl -s https://getcomposer.org/installer | php
  php composer.phar install

Inicializar phinx y hacer la primer migracion:

  php vendor/bin/phinx init .
  vim phinx.yml
  mkdir migrations
  php vendor/bin/phinx migrate -e development
