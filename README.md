# Basic CRUD Laravel 8 Gerard Reyes
A Laravel 8 application that has the basic CRUD functions with UI.

## Specs
* Laravel Framework 8.83.23
* PHP 7.3 or above
* Laravel UI v3.4 (https://github.com/laravel/ui)

### Application Setup
``` bash
# Clone repository from https://github.com/gerardreyes/basic_crud_laravel_8_gerard_reyes
HTTPS: https://github.com/gerardreyes/basic_crud_laravel_8_gerard_reyes.git
SSH: git@github.com:gerardreyes/basic_crud_laravel_8_gerard_reyes.git

# Go inside the folder.
cd basic_crud_laravel_8_gerard_reyes

# Create your own .env file. Set your DB_DATABASE, DB_USERNAME, DB_PASSWORD.
cp .env.example .env

# Run Composer Install.
composer install

# Serve the project.
php artisan serve

# If you are using Laravel Valet, park the directory.
valet park

# If you would like to serve a site over encrypted TLS using HTTP/2, run secure.
valet secure basic_crud_laravel_8_gerard_reyes

# To compile your fresh scaffolding.
npm install && npm run dev
```

### Database Setup
``` bash
# Run migration to create the inventories table.
php artisan migrate

# Run seeder to populate the inventories table.
php artisan db:seed --class=GameTableSeeder
```

### Application Run
Open your browser and go to: 
```
https://basic_crud_laravel_8_gerard_reyes.test/
```

## Code Overview
* https://basic_crud_laravel_8_gerard_reyes.test/games/ - Home Page
![alt text](https://github.com/gerardreyes/basic_crud_laravel_8_gerard_reyes/blob/main/storage/images/home_page.png?raw=true)
* https://basic_crud_laravel_8_gerard_reyes.test/games/create - Create Page
![alt text](https://github.com/gerardreyes/basic_crud_laravel_8_gerard_reyes/blob/main/storage/images/create_page.png?raw=true)

### Important Files
* database/migrations/2022_08_04_011435_create_games_table.php - Migration file to create table.
* database/seeders/GameSeeder.php - Seeder file to populate table.
* database/factories/GameFacotry.php - Factory file to create dummy data.
* app/Models/Game.php - Model file.
* app/Http/controllers/GameController - Controller file.
* tests/Feature/GameTest.php - Unit Test.
* resource/views/index.blade.php - Main view file.
* routes/web.php - Route file for web.
* Laravel UI v3.4 (https://github.com/laravel/ui)

## Testing
Run command below to execute tests:
```
php artisan test

or

./vendor/bin/phpunit --testdox
```
![alt text](https://github.com/gerardreyes/basic_crud_laravel_8_gerard_reyes/blob/main/storage/images/unit_test.png?raw=true)

## Project Details
Feel free to email `gerardreyes112@gmail.com` for any inquiries regarding this project.

## References:
* https://appdividend.com/2022/01/26/laravel-8-crud/
* https://dev.to/shanisingh03/generate-dummy-laravel-data-with-model-factories-seeder-gg4

## License
* GNU General Public License v3.0
* https://github.com/gerardreyes
