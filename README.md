# package
At config/app.php of the project among the providers  add the line Zineb\Contact\ContactServiceProvider::class, 
and at composer.json of the project in "autoload-dev"  add "Zineb\\Contact\\": "package/contact/src/"
you can run the code using php artisan serve then use http://127.0.0.1:8000/contact
You can config the info of the database used in the project in the file .env and config/databse.php
