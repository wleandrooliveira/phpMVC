# Modelo MVC em php
## Sistema generico para desenvolver aplicações em php.
### Segue abaixo a estrutura do projeto.
```

|-- phpmvc
    |-- README.md
    |-- composer.json
    |-- composer.lock
    |-- composer.phar
    |-- App
    |   |-- Conn.php
    |   |-- Route.php
    |   |-- Controllers
    |   |   |-- IndexController.php
    |   |-- Models
    |   |   |-- Client.php
    |   |-- Views
    |       |-- layout.phtml
    |       |-- index
    |           |-- contact.phtml
    |           |-- index.phtml
    |-- public
    |   |-- .htaccess
    |   |-- index.php
    |-- vendor
        |-- autoload.php
        |-- SON
        |   |-- Controller
        |   |   |-- Action.php
        |   |-- DI
        |   |   |-- Container.php
        |   |-- Init
        |   |   |-- Bootstrap.php
        |   |-- Model
        |       |-- Table.php
        |-- composer
            |-- ClassLoader.php
            |-- LICENSE
            |-- autoload_classmap.php
            |-- autoload_namespaces.php
            |-- autoload_psr4.php
            |-- autoload_real.php
            |-- autoload_static.php
            |-- installed.json
```
