# Zend Framework test-assignment
- PHP ^7.4 with pdo_mysql module
- MySQL
- Doctrine
- Vue.js 

### Setup (non-docker)

##### * Install the framework and all the dependencies
composer install

##### * Use your own database credentials
mysql -uadmin -e "CREATE DATABASE test_ek_2021;"

##### * Edit config/autoload/local.php (remove the .dist filename extension if it doesnt exist) 
edit database login credentials in config/autoload/local.php under "connection"

##### * Generate DB schema from entities (annotation metadata)
php vendor/bin/doctrine orm:schema-tool:create

##### * Use php built in web server. This shortcut is defined in composer.json
composer serve

### Bugs & Solutions

1. When a new movie is added to a list only one language is saved
-> In `IndexController` `saveNewMovie` function, syntax for adding language to an array was wrong
   
2. If a movie has multiple languages, only one is shown &  If a movie has multiple genres, only one is shown
-> In `DataHelper` file, `createMovieData` function was returning only one language & genre, I changed it to loop through all languages & genres and return a combined string
-> In `movieSearch` vue component method, it was only returning one element from array, changed it to combine all elements
  
3. Movie table is not filtered when writing a name in search field.
-> In `IndexController`, `getAllSearchHistory` function did not include the query to search by name on movie's name field, added it
   
4. Split movie table into two tables -one that shows only filtered movies, and one that shows all movies
-> On front-end, added a new table to show all movies from backend, other table is for search history
