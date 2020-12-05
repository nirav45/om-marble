# om-marble

# initialise project in new machine 
composer install
php artisan storage:link
create file .env in root directory and copy .env.example in it
php artisan key:generate

# run server
php artisan serve