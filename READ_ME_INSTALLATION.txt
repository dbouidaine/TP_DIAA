1-Clone from gitHub in your desktop in C:\xampp\htdocs\ 

2-Execute: npm install

3-Execute: npm install mdbvue

4-Execute: composer update

5-Execute: php artisan key:generate

6-Change name of Data Base in ".env" to "mysql" (instead of laravel)

7-Execute: php artisan migrate

8-Execute: php artisan dusk:install

Nota bene:
-Test Selenium : php artisan dusk
-Test unitaire : php vendor\phpunit\phpunit\phpunit
