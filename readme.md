<p align="center"><a href="https://www.erloom.id"><img src="https://www.erloom.id/img/erloom.png"></a></p>

## Tech Stack

<p align="center"><a href="https://laravel.com/"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Test

Tes ini bertujuan untuk memasukkan data user beserta bilangan fibonacci.

## Requirement

- [SQLite](https://www.sqlite.org/index.html)
- [npm](https://www.npmjs.com/get-npm)
- **[Composer](https://getcomposer.org/)**
- **[PHP 7.2](https://www.php.net/downloads.php)**

## Setup Application

- Jalankan `composer install` pada aplikasi untuk menginstall dependency dari composer.
- Jalankan `npm install` lalu `npm run watch` untuk meng-compile css dan js default. ***(Optional)***
- Jalankan `php artisan migrate` pada aplikasi untuk menambah table pada Database. ***(Optional)***
- `php artisan serve` untuk memulai local enviroment aplikasi ini. ***(Optional)***

## Structure

Tes ini menggunakan aplikasi Laravel dengan struktur :

- View: *views/index.blade*
- Database: *database/database.sqlite*

## Goals

Aplikasi diharapkan dapat :

- Input **nama** kedalam database.
- Setiap **nama** terasosiasi dengan hasil Fibonacci ke-n. **Contoh**: jika input user adalah Fibonacci(n) ke ***4***, maka hasil Fibonacci(Result) adalah ***3***.
- View dapat memunculkan seluruh **nama** yang di-input.

## Problem

- Buatlah logic pada controller untuk hasil input.
- Buatlah logic pada view *index.blade* agar dapat menampilkan hasil yang sesuai.

## Expected Result

| ID | Nama | Fibonacci (n) | Fibonacci (Result) |
| ------ | ------ | ------ | ------ |
| 0 | Susan | 4 | 3 |
| 1 | Murray | 6 | 8 |
| 2 | Debra | 8 | 21 |
| 3 | Karen | 3 | 2 |
| 4 | Pamela | 0 | 0 |
| .... | .... | .... | .... |

**Notes**: Nama tidak harus sesuai contoh diatas, nama merupakan string yang bebas di-input.