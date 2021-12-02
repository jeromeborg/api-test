Simple api (without authentification), to provide fast test from frontend project

Clone repo
Set you .env
composer instal
php artisan migrate:fresh --seed

// DOCUMENTATION SWAGGER 
http://your dns/api/documentation

// regenerate after each modification
php artisan swagger-lume:generate
