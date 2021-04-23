# api-grupoa

## Build Setup

```bash
# init submodule and update
$ git submodule update --init --recursive

# enter in submodule
$ cd laradock

# create .env
$ cp env-example .env

# up all containers
$ docker-composer up -d nginx mysql

# enter in container workspace
$ docker-compose exec workspace bash

# install dependencies
$ composer install

# create .env 
$ cp .env.example .env

# set key application
$ artisan key:generate

# run all migrations and seed database
$ artisan migrate --seed
```

For detailed explanation on how things work, check out [Laravel docs](https://laravel.com).
