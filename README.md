<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Laravel With MongoDB

### Requirement:
PHP: 7.4.9
Larvel: 8.X
mongoDB: 5.0.11
PECL
	1. https://www.php.net/manual/en/set.mongodb.php
	2. https://www.php.net/manual/en/mongodb.installation.php
	3. https://www.php.net/manual/en/mongodb.installation.windows.php
	4. https://pecl.php.net/package/mongodb
		mongodb-1.12.1.tgz (1361.3kB)  DLL
		NOTe: Click "DLL" icon 
	5. https://pecl.php.net/package/mongodb/1.12.1/windows
		7.4 Thread Safe (TS) x64 
		NOTE: Check your "G:\wamp_server_64\bin\php\php7.4.9\php7ts.dll" (TS- Thread Safe)
	6. "php_mongodb.dll" File paste inside "G:\wamp_server_64\bin\php\php7.4.9\ext" Folder.
	7. Add Extension "extension=mongodb" inside php.ini file "\bin\php\php7.4.9\php.ini"
		extension=mongodb
		or
		extension="mongodb.so"
		or
		extension=php_mongodb.dll
### Install MangoDB Package:
-- URL: https://github.com/jenssegers/laravel-mongodb
-- composer require jenssegers/mongodb 3.8 OR composer require jenssegers/mongodb
### Config Database Docs:
-- URL: https://github.com/jenssegers/laravel-mongodb
### config/app.php
-- Jenssegers\Mongodb\MongodbServiceProvider::class, // NO NEEDED Latest version larave project.
### config/database.php
'mongodb' => [
	'driver' => 'mongodb',
	'host' => env('DB_HOST', '127.0.0.1'),
	'port' => env('DB_PORT', 27017),
	'database' => env('DB_DATABASE', 'homestead'),
	'username' => env('DB_USERNAME', 'homestead'),
	'password' => env('DB_PASSWORD', 'secret'),
	'options' => [
		// here you can pass more settings to the Mongo Driver Manager
		// see https://www.php.net/manual/en/mongodb-driver-manager.construct.php under "Uri Options" for a list of complete parameters that you can use
		'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'), // required with Mongo 3+
	],
],
## .env
#DB_CONNECTION=mysql
DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
#DB_PORT=3306
DB_PORT=27017
DB_DATABASE=ec_mi_db
DB_USERNAME=
DB_PASSWORD=

## CREATE VIRTUAL HOST:
http://laravel-with-mongodb.local.com


## Resouce:
-- https://www.youtube.com/watch?v=XGV1FstO6B0&ab_channel=Kritika%26Pranav%7CProgrammerCouple
-- https://www.mongodb.com/developer/products/mongodb/mongodb-schema-design-best-practices/
-- http://mongodb.github.io/node-mongodb-native/schema/chapter10/

## MongoDB EC Schema
-- https://www.infoq.com/articles/data-model-mongodb/
-- https://fabric.inc/blog/mongodb-ecommerce/#:~:text=MongoDB%20is%20a%20NoSQL%20database,data%20models%20and%20dynamic%20queries.
-- **** https://hackernoon.com/building-a-mongodb-nosql-e-commerce-data-model-fn8135bc
-- https://ali-atwa.medium.com/mongodb-and-e-commerce-ce7a6ca79bcb



## MongoDB EC Schema Design
	products:
	{
		"name": "Harry Potter",
		"author": "J.K. Rolling",
		"skus": [
			{
				"sku": "HPH",
				"price": 29.99,
				"quantity": 100,
				"feature": "hard cover"

			},
			{
				"sku": "HPH",
				"price": 19.99,
				"quantity": 200,
				"feature": "paperback"

			}
		]
	}

	users:
	{
		_id: customer@gmail.com,
		first_name: Ram
		last_name: Pukar
		hashed_password: "212345tyh"
		address: {
			country: Canada,
			street1: Test Application
			street2: Test Application
			city: Montreat,
			province: Quebec
			zip: 52222
		}

	}




