# First Responder

## Local Environment Setup

```sh
cp .env.example .env

composer install

npm install

php artisan key:generate

php artisan migrate:fresh --seed

composer dev
```

Now you can see the error page at http://127.0.0.1:8000/users/1?key=value
