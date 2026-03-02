BE:Laravel Version
![image](https://github.com/people0507/Animal-Discovery/assets/99165150/e749f76c-6689-4f63-b3a4-97dba8bd4353)
Document Relating : https://lucid.app/lucidchart/c13a6304-abcf-452e-98dc-4d6b997941eb/edit?viewport_loc=-4679%2C-1274%2C8966%2C4068%2C0_0&invitationId=inv_c0a27443-5f6d-4dd3-96e7-b41fedcd0a62


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
