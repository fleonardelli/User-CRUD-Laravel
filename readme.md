## Basic users CRUD in Laravel

Front-end Bootstrap + JQuery.

Create user view only, Read, Update and Delete should make from Postman or another Tool. 

API:

GET localhost/api/users get all users

GET localhost/api/users/1 get user id 1

POST localhost/api/users create user

DELETE localhost/api/users/1 soft delete user 1



## Starting the project

1- Clone the repo

2- Run: service mysql stop AND service apache2 stop

3- Enter to the project folder

4- Run: composer install AND npm install

5- Run:  cp .env.example .env

6- Run: docker-compose up -d

7- Run: php artisan key:generate

8- The project should start in http://localhost

8.1- If you have permissions problems run: sudo chown www-data:www-data storage/ -R

9- Enter to the webserver container: docker-composer exec webserver bash

10- Run: php artisan migrate AND php artisan db:seed
