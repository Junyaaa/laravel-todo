# To Run The App

## for first time running [WINDOWS]
- **1. [cp .env.tempate .env]**
- **2. [cp backend/.env.example backend/.env]**
- **3. [docker-compose up --build -d]**
- **4. [winpty docker-compose exec app composer install]**
- **5. [winpty docker-compose exec app php artisan key:generate]**
- **6. [winpty docker-compose exec app php config:cache]**
- **7. [winpty docker-compose exec app chown www-data storage/ -R]**
- **8. [winpty docker-compose exec app php artisan migrate]**

## for first time running [LINUX/MAC]
- **make init**

## for running the Nth time [WINDOWS]
- **docker-compose up -d**

## for running the Nth time [LINUX/MAC]
- **make up**

## for stopping [WINDOWS]
- **docker-compose down / docker-compose stop**

## for stopping [LINUX/MAC]
- **make down / make stop**

# PS
## if the migrations has a correspoding seeder
- **winpty docker-compose exec app php artisan db:seed**

## for db error when running under linux / mac environment
*change infra/mysql/Dockerfile*
- **FROM mysql:8.0] -> [FROM --platform=linux/x86_64 mysql:8.0**