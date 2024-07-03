necessairo habilitar extensoes de sqlite no php que esta usando

https://stackoverflow.com/questions/64381185/laravel-and-phpunit-could-not-find-driver-sql-pragma-foreign-keys-on



# Confugrar sqlite par ao laravel by chatgpt

Para configurar um projeto Laravel para usar SQLite, siga estes passos:

1. **Crie o arquivo do banco de dados SQLite**:
   No diretório raiz do seu projeto Laravel, crie um arquivo para o banco de dados SQLite. Por exemplo, você pode criar um arquivo chamado `database.sqlite` dentro do diretório `database`.

   ```sh
   touch database/database.sqlite
   ```

2. **Configure o arquivo `.env`**:
   Abra o arquivo `.env` localizado na raiz do seu projeto Laravel e configure as seguintes variáveis para usar SQLite:

   ```env
   DB_CONNECTION=sqlite
   DB_DATABASE=/absolute/path/to/database/database.sqlite
   ```

   Certifique-se de substituir `/absolute/path/to/database/database.sqlite` pelo caminho absoluto para o arquivo `database.sqlite` que você criou.

   Se você estiver usando um caminho relativo, você pode usar o seguinte:

   ```env
   DB_CONNECTION=sqlite
   DB_DATABASE=/path/to/your/project/database/database.sqlite
   ```

3. **Configure o arquivo de configuração do banco de dados**:
   No arquivo `config/database.php`, você verá uma seção para a configuração do SQLite. Certifique-se de que ela está configurada corretamente. Normalmente, ela já está configurada corretamente por padrão, mas é bom verificar:

   ```php
   'sqlite' => [
       'driver' => 'sqlite',
       'url' => env('DATABASE_URL'),
       'database' => env('DB_DATABASE', database_path('database.sqlite')),
       'prefix' => '',
       'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
   ],
   ```

4. **Migre o banco de dados**:
   Execute as migrações do banco de dados para criar as tabelas necessárias:

   ```sh
   php artisan migrate
   ```

Isso deve configurar seu projeto Laravel para usar o SQLite como banco de dados.

============

No caso foi somente no env

DATABASE_URL=\database\database.sqlite
DB_CONNECTION=sqlite
==============