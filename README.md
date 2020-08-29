# auth-service

The microservice handles authorization

## tech stack

* PHP >= 7.1
* Nginx
* Composer
* Xdebug (dev only)

## local environment setup

1. Add an /etc/hosts entry 
```
127.0.0.1       auth.local
```

2. Clone the [microservices-docker](https://github.com/microservices-docker) repository and run 'product' service.

## swagger api docs

API docs are located at GET /api/documentation

Re-generating API documentation:
```
php artisan l5-swagger:generate
```

## build, run, test

* install Composer dependencies
* run tests and inspections

Running tests, syntax check and inspections:
```
/var/www/html # ./vendor/bin/phing test
```

## configuration

* .env file
* RSA private key (to create JWT token signature)
