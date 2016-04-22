# laravel_lang_ptbr
Tradução das validações para laravel 5


## Instalção

```bash
composer require fs-ap/laravel_lang_ptbr dev-master
```

* Add o provevor de serviço no config/app.php

  ```php
    
    'providers' => [
              LaravelLang\LaravelLangPtBrServiceProvider::class,
    ]
  ```

* Public os arquivos 

  ```bash
    php artisan vendor:publish 
  ```
  
* Mude linguagem da sua aplicação no arquivi config/app.php
```php
    'locale' => 'pt-BR',

```
