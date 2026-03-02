#### Installation & Setup

##### Step 1: Download project

```sh
git clone https://github.com/people0507/Animal-Discovery.git
```

##### Step 2: Installing Composer

```sh
cd BE-Laravel

```

##### Step 3: Pre Setup

-   `cp env.example .env`

##### Step 4: Run project

-   `docker-composer up` - chạy dự án với docker
-   `docker-composer down` - dừng dự án với docker

##### Step 5: Run composer install

-   `docker exec -it laravel_app composer install`

##### Step 6: Run key:generate

-   `docker exec -it laravel_app php artisan key:generate`

##### Step 7: Run migrate

-   `docker exec -it laravel_app php artisan migrate`

##### Step 8: Run seed

-   `docker exec -it laravel_app php artisan db:seed`
