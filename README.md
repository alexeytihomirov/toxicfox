# Toxicfox - PHP/Laravel Dev. Task

Installation
----
1. After cloning repository in your environment please create MySQL database first.
2. Go to project root and create .env config from .env.example
3. Change database connection settings
4. Run migration command also from root of project
```
php artisan migrate
```

Run serve command or setup your local web server
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