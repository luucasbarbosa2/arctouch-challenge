# ArcTouch Challenge


A project to ArcTouch hiring process.


## Architecture
1. I used CakePHP as a base platform, it handle with requests, URLs and other things that I've don't need to worry about.
2. To create and render the views I've used a lib named "Dwoo Template", it is a template engine and are responsible to "merge" fetched data and HTML.
3. As front and platform I used Bootstrap.
4. I used MVC pattern. 

So, first, I've worred about the API connection and the token manegement, after it's done, I've wrote code an archtecture and frontend drafts.


## Third-party Libraries

How it's discribed above, I've used:

1. Framework CakePHP - Base Platform, HTTP Request Handling, URL pretify, Error Handling, and other stuffs (see more in [CakePHP](https://cakephp.org/)).
2. Bootstrap - Grid system and components.
3. Dwoo Template - Template Engine, improve and facilitate how data works with HTML.
4. CurlPHP library - to fetch API data [Curl Class](https://github.com/php-curl-class/php-curl-class).
5. Jquery - Lib for javascript.
6. Flickkity - to create the carousels components.


## How it works
URL: controller/action/id (optional)

When user interact with website the http request handler open the expecified controler in specified action, 
so, the controller get data with they respective model and send 
it to DwooTemplate that returns the HTML, then the controller return to browser render the page.


## Installation

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Clone this project where you prefer.
3. Open project path and run composer update (if composer is locally instaled, use composer.phar update)

Composer will install every modules.

Then you can run ```bash bin/cake server -H 0.0.0.0 -p 8080```

note:
activate mb-string-ext on PHP.ini;

more information about instalation you can find here [CakePHP installation](https://book.cakephp.org/3.0/pt/installation.html)

## Live preview

The project is running on my Amazon server at [challenge.lucasbarbosa.me](challenge.lucasbarbosa.me)



