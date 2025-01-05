# Laravel seeding example

This is a simple example of adding test data to the database through seeding in Laravel.

The project show a list of students through a web page (http://localhost/overview) or through a RESTful JSON call (http://localhost/students).

There are no students in the database, so the web page and call will be empty, and you'll have to migrate the database with seeding to add 10 students to the database.

## How do I run this project?

You will need to set up your environment first to run this project with Sail. The [HOWTO: Build a Laravel project with Sail](https://github.com/DC-AO-CR/laravel_build_project) instructs you on how to set up your environment with the right tools and to set up a new Laravel project in a Docker container.

You will need to do the following steps to get this project up and running:
* Clone the project to a local directory.

* Use the following command inside the directory to install the dependencies of the project:
```
  docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs
  ```
See [Laravel Sail - Installing Composer dependencies for existing projects](https://laravel.com/docs/11.x/sail#installing-composer-dependencies-for-existing-projects).

* Use the command `./vendor/bin/sail up` in the directory to get the project up and running.
* Use the command `./vendor/bin/sail artisan migrate` in the directory to build the tables of the database.

## Which commands were used to create the files?

### How can we generate a seeder?

We can generate a `seeder` with the Artisan console through the Sail container.

`./vendor/bin/sail artisan make:seeder StudentSeeder`

This created the following file file: [database/seeders/StudentSeeder.php](database/seeders/StudentSeeder.php).

### How can we generate a factory?

We can generate a `factory` with the Artisan console through the Sail container.

`./vendor/bin/sail artisan make:factory StudentFactory`

This created the following file file: [database/factories/StudentFactory.php](database/factories/StudentFactory.php).
