
//=== DOC cool starter https://habr.com/ru/articles/329408/ 

http://localhost:8000/graphql
php -S localhost:8000 graphql.php

from 0
DEL ./vendor
composer init
composer require webonyx/graphql-php
composer update

composer clearcache
composer update

composer install

composer require react/http:*

composer require laminas/laminas-diactoros

==============

git init

git remote add origin https://github.com/fotomain/graphql-php-products.git
git add .
git commit -m "first commit"
git branch -M main

git push -u origin main

