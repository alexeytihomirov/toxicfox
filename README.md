# Toxicfox - PHP/Laravel Dev. Task

Installation
----
* After cloning repository in your environment please create MySQL database first.
* Go to project root and create .env config from .env.example
* Change database connection settings

* Run composer install
```
composer install 
```

* Don't forget to generate application key
```
php artisan key:generate 
```

* Run migration command also from root of project
```
php artisan migrate
```

* Run serve command or setup your local web server
```
php artisan serve
```

Notes
---
I have created simple form to post test data to /text/post url using /text/test url.

WARNING. Word parsing is not supporting UTF-8.
I prefer to use php function for demo if there are no requirements to support other locales

I'm using 1 model and 1 controller. I didn't created unit tests for that because it need to be covered by functional tests.
Sure i can move parsing to separate service and make unit tests for it but first i need more specific requirements. 