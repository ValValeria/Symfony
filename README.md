# OxDictionary
 Free online dictionary for learners of British and American English with definitions, pictures, example sentences

## Rest Api
 * GET / - home page
 > ![alt text](https://github.com/alexanderzenchenko/odclient/blob/master/screen.PNG)

## Requirements
* PHP 7.2.5 or higher
* Composer

## How to install
* Clone to your local repository
* `cd` into cloned repository folder
* Execute in terminal `composer install`
* Into .env file add/fill parameters API_ID, API_KEY and DATABASE_URL
* Execute in terminal `php bin/console doctrine:database:create`
* Execute in terminal `php bin/console doctrine:migrations:migrate`
* If you use symfony cli execute `symfony server:start` or `php -S localhost:8000 -t public/` 


## Installing fixtures
* Execute in terminal `php bin/console doctrine:fixtures:load`
