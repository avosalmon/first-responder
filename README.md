# First Responder

## Local Environment Setup

```sh
cp .env.example .env
```

```sh
composer install
```

```sh
npm install
```

```sh
php artisan migrate:fresh --seed
```

```sh
composer dev
```

Now you can see the error page at http://127.0.0.1:8000/users/1?key=value
