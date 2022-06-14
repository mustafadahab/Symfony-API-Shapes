# Symfony-API-Shapes
This is  a basic API application using [Symfony](https://symfony.com/) PHP framework with [Swagger](https://swagger.io/).

## Symfony 5 Requirements

-  Install PHP 7.2.5 or higher and these PHP extensions (which are installed and enabled by default in most PHP 7 [installations](https://www.apachefriends.org/download.html)).
-  Web Server solution stack (preferred to be) [XAMPP](https://www.apachefriends.org/download.html) 
-   [Ctype](https://www.php.net/book.ctype), [iconv](https://www.php.net/book.iconv), [JSON](https://www.php.net/book.json), [PCRE](https://www.php.net/book.pcre), [Session](https://www.php.net/book.session), [SimpleXML](https://www.php.net/book.simplexml), and [Tokenizer](https://www.php.net/book.tokenizer).
-   Install [Composer 2](https://getcomposer.org/download/).
   
## Install API documentation UI (Swagger) for interactive experince
    
```sh
composer require nelmio/api-doc-bundle
```

### To make the API interface works install
```sh
composer require nelmio/api-doc-bundle
```
```sh
composer require symfony/twig-bundle
```
```sh
composer require symfony/asset
```

## To run the code locally 

* Example: Port (8080)
```sh
php -S localhost:8080 -t public
```

## To see the swagger implementation, and start the live testing

```sh
http://localhost:8080/api/doc
```
