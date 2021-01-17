# om-marble

# initialise project in new machine 
composer install
php artisan storage:link
create file .env in root directory and copy .env.example in it
php artisan key:generate

# run server
php artisan migrate
php artisan db:seed --class=UserSeeder
php artisan db:seed --class=ContactSeeder
php artisan db:seed --class=CategorySeeder
php artisan serve