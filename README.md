# To Run The App

## for first time running
- **1. [cp .env.tempate .env]**
- **2. [cp backend/.env.example backend/.env]**
- **3. [docker-compose up --build -d]**
- **4. [winpty docker-compose exec app composer install]**
- **5. [winpty docker-compose exec app php artisan key:generate]**
- **6. [winpty docker-compose exec app php config:cache]**
- **7. [winpty docker-compose exec app chown www-data storage/ -R]**
- **8. [winpty docker-compose exec app php artisan migrate]**

# for running the Nth time
- **[docker-compose up -d]**

# for stopping
- **[docker-compose down / docker-compose stop]**

# PS
## if the migrations has a correspoding seeder
- **[winpty docker-compose exec app php artisan db:seed]**

## for db error when running under linux / mac environment
*change infra/mysql/Docker*
- **[FROM mysql:8.0] -> [FROM --platform=linux/x86_64 mysql:8.0]**