
## Commission Sales Tracking System

In this project I use the latest version of the Laravel framework, as well as the latest version of vue js. also implementing the new bootstrap 4 framework, using cards, flex, buttons and modal.

![crud.png](https://github.com/usama-akram-gt/sales-commssion-cms/tree/master/resources/assets/images/screenshot1.png)

1.- Install project.

```cmd
	composer update
```

2.- Install vue dependencies.

```cmd
    npm install
```
3.- Copy .env.example to new file .env

```cmd
cp .env.example .env
```
4.- Configure environment file .env
	Modify access to the database.
```php
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=laravel_vue
	DB_USERNAME=*****
	DB_PASSWORD=*****
```

5.- Generating key.

```cmd
php artisan key:generate
```

6.- Execute the following command.

```cmd
php artisan migrate
```

13.- Execute the following command <code>npm run dev</code>