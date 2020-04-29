<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Installation
1. Clone the project.
>  `git clone https://github.com/faridiqbal/tilawah.git`

2. Get into project path and create environment file.
>  `cd tilawah`<br />`cp .env.example .env`

3. Update .env file using text editor, and configure using your environment settings.
>  `APP_ENV=local`<br />
>  `APP_DEBUG=true`<br />
>  `APP_URL=http://myurl`<br />
>  <br />
>  `DB_CONNECTION=mysql`<br />
>  `DB_HOST=127.0.0.1`<br />
>  `DB_PORT=3306`<br />
>  `DB_DATABASE=tilawah`<br />
>  `DB_USERNAME=root`<br />
>  `DB_PASSWORD=password`<br />

4. Install Composer your system do no have one. ([How to install Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos))

5. Install and configure libraries.
>  `composer install`<br />
>  `php artisan key:generate`<br />
>  `php artisan jwt:secret`<br />

6. Run migration and base data for new/clean installation (optional).
>  **Warning: This will delete all tables and available data. Restore DB manually instead if you already have data.**<br />
>  `composer dump-autoload`<br />
>  `php artisan migrate:fresh --seed`

7. Application can now be run either by using normal webserver (Apache/NGINX) or using php artisan as command below:
>  `php artisan serve`


## Run Unit Test
1. Run this command on project folder.
>  `./vendor/bin/phpunit`


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

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
