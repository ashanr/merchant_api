# Forum API

Following is the instructions on setting up the "Forum" project backend locally.

## Prerequisites

```
PHP >= v 8.1
Laravel >= v 8.x
MySQL
```

## Installation Steps

1. Import the database from  /app/database folder
```
merchant_db.sql
```

### Copy the example env file and make the required configuration changes in the .env file


```
cp .env.example .env
```

### Install all the dependencies using composer

```
composer install
```

### MYSQL DB Setup

```
* Create an empty schema called 'forum'
```

### Run the database migrations

```
php artisan migrate
```

### Run the database seeder

```
php artisan migrate:fresh --seed --seeder=DatabaseSeeder
```

### After Migrations Install Passport

```
php artisan passport:install
```

### Generate new app key

```
php artisan key:generate
```

## Run tests

Compiles and hot-reloads for development

```
php artisan serve
```

## Built With

* Laravel  - Framework | Backend Development 
* MySQL - DBs
* Vue.js - Frontend Development