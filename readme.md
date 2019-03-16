## About

Laravel App for Adding Keywords to Projects

Copy the .env.example file and rename it to .env

Create the database and populate the .env file with appropriate database details.

run `composer update`

run `php artisan key:generate`

Import the projectsapp.sql file, located in the _db folder, into your database.

or run `php artisan migrate` and then populate the database manually with dummy projects in the projects table