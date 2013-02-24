zf2test
=======

1. Instalar composer:

    ```    
    curl -s https://getcomposer.org/installer | php
    ```

2. Instalar dependencias

    ```
    php composer.phar install
    ```

3. Inicializar phinx y hacer la primer migracion:
    ```
    php vendor/bin/phinx init .
    vim phinx.yml
    php vendor/bin/phinx migrate -e development
    ```
