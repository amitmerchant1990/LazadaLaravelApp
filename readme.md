## Lazada Sample Laravel API

This is an app made in Laravel to handle the API calls for the terms Posts(Title, Body,..) and Tags related to the posts. The API basically do all of the CRUD operations for both of the entities(i.e. Posts, Tags)

Eloquent ORM has been used to perform the database operations. 

[Postman](https://www.getpostman.com/) has been used to test the API calls.

## Configure

- Download the lastest source code from master.

- Unzip the same into the directory of your choice.

- Set database connection in `config\database.php` with your username/password and host
```mysql
'mysql' => [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'lazada_app',
        'username'  => 'root',
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
        'strict'    => false,
    ]
````
- Done!

## API Calls

Posts
=====
http://localhost:84/laravel/public/api/v1/posts/store
http://localhost:84/laravel/public/api/v1/posts/index
http://localhost:84/laravel/public/api/v1/posts/show/{id}
http://localhost:84/laravel/public/api/v1/posts/destroy/{id}
http://localhost:84/laravel/public/api/v1/posts/findAllPostByTags/{tags}
http://localhost:84/laravel/public/api/v1/posts/findCountPostByTags/{tags}

Tags
====
http://localhost:84/laravel/public/api/v1/tags/store
http://localhost:84/laravel/public/api/v1/tags/index
http://localhost:84/laravel/public/api/v1/tags/show/{id}
http://localhost:84/laravel/public/api/v1/tags/destroy/{id}

## Why

The application is used to showcase the API handeling in [Laravel](http://laravel.com). 

### License

MIT Licence
