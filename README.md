<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## GROUP MEMBERS

- RABINO, JOHN JIMWELL - LEADER
- PACLIBAR, JOHN CARLO 
- RAYMUNDO, JAN CARLO 
- DUMAPIAS, AARON JOHN


## CONTRIBUTIONS

#### RABINO, JOHN JIMWELL
- Routing
- Controllers
- Views (Index.blade.php, News.blade.php, Contact.blade.php, blog.php)
- Model (Post.php)
- Controllers (PostController.php, HomeController.php)
- Log In System
- Views (app.blade.php)

#### DUMAPIAS, AARON JOHN
- Views (About.blade.php)
- Views (news.blade.php)
- Views (index.blade.php)
- Some routing and code in controllers (mycontroller.php, web.php)

#### RAYMUNDO, JAN CARLO
- Views (Gallery.blade.php)
- Views (Team.blade.php)
- Some routing and code in controllers (mycontroller.php, web.php)

#### PACLIBAR, JOHN CARLO
- Views (Team.blade.php)
- Views (blog.blade.php)
- Views (footer.blade.php)
- Views (header.blade.php)
- Some routing and code in controllers (mycontroller.php, web.php)

## HOW TO RUN LARAVEL FROM GITHUB

1. Download the Github Repository 
2. Open CMD and go to root folder of laravel\
Run like this(Example): \
    cd C:\xampp\htdocs\Laravel\LaravelProject
3. After you change the directory, type and enter this: 'composer update'
4. After successful update, type and enter this: 'copy .env.example .env'
5. Open xampp, then start apache/xampp and create a database named "esports"
6. After creating database, go to terminal and enter "php artisan migrate"
7. After that, type and enter this: 'php artisan key:generate'
8. After that key generate, you may now start laravel by entering 'php artisan serve'


## HOW TO DEPLOY IN THE SERVER

This is the most common and straightforward method for free hosting.

1. Upload the contents of your local public folder (not the folder itself) directly into the htdocs folder on InfinityFree. This includes index.php, .htaccess, and your CSS/JS files.

2. Upload all other Laravel project folders (app, bootstrap, config, database, resources, routes, vendor, etc.) to the same directory, at the same level as htdocs on the server. The public folder on your server should not exist, as its contents are now in htdocs.

3. Edit the index.php file now located in htdocs. Change the two paths to point to your new project structure:
require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';

The paths are relative to the location of the index.php file itself.

4. After uploading, you need to ensure your application can connect to the database.
Go to your InfinityFree control panel and find your database credentials (username, password, host, and database name).
Ensure your .env file on the server contains these exact credentials.

/
├── app/
├── bootstrap/
├── config/
├── database/
├── htdocs/  <- your website's root
│   ├── ETC.. PUBLIC FOLDER FILES
│   ├── index.php
│   └── .htaccess
├── public/  <- a mistake, don't upload this
└── vendor/
