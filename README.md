# links
combine and aggregate data from different management systems for easier and maybe better data analysis - focused on servers management

IDE:
JetBrains PhpStorm2016.2 via Student license (https://www.jetbrains.com/phpstorm/)

Sources:
DB Library - mongo-php-library (https://github.com/mongodb/mongo-php-library) 
DB Driver - Mongo-php-driver (https://github.com/mongodb/mongo-php-driver)
Model + Controller - SlimFramework 3 (http://www.slimframework.com)
Skeleton for SlimFramework (https://github.com/slimphp/Slim-Skeleton)
Logging - Monolog (https://github.com/Seldaek/monolog)
DIC - Pimple (https://github.com/silexphp/Pimple)

Bibliography:
Mongo-PHP-Library API:
http://mongodb.github.io/mongo-php-library/
Angular2:
https://www.udemy.com/angular-2-tutorial-for-beginners
PHP (version 7):
http://php.net/
http://www.phptherightway.com/
SlimFramework:
http://www.slimframework.com/docs/tutorial/first-app.html
PSR-7: (SlimFramework follow it)
http://www.php-fig.org/psr/psr-7/
PSR-2: (also good also to read)
http://www.php-fig.org/psr/psr-2/
The Israeli Guide for the PHP program language (hebrew):
http://www.phpbook.co.il/wordpress/


# Slim Framework 3 Skeleton Application

Use this skeleton application to quickly setup and start working on a new Slim Framework 3 application. This application uses the latest Slim 3 with the PHP-View template renderer. It also uses the Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the Application

Run this command from the directory in which you want to install your new Slim Framework application.

    php composer.phar create-project slim/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name for your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

That's it! Now go build something cool.
