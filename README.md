<p align="center"><a href="https://andersenlab.com" target="_blank">project of Andersen PHP TECHNICAL TASK</a></p>



# About Project
## The following general technical requirements for the system are fulfilled:
- PHP - v8.1.1.
- Laravel - v8.83.18.
- DBMS-MySQL;
- Using Docker

## Description of general functionality

**Created page where will be form with inputs:**
- name
- email
- message
  and submit button.

**After click on submit button data should be sent and stored in database.**
**At the bottom of the page implemented place where you can see info about all sent messages:**
- name, email, message, create date

**Added validation in laravel application for input values:**
- name (required, min, max)
- email (required, email, unique)
- message(required, min, max)

**Implemented CRUD features of posts**
- deleting posts
- updating posts

## Minimum requirements for project installation

- [Ubuntu 20.04](https://releases.ubuntu.com/20.04/)
- [Docker version  20.10.16](https://docs.docker.com/desktop/linux/install/)
- [Composer version 2.1.14](https://getcomposer.org/download/)
- [NodeJs version 2.1.14](https://nodejs.org/uk/download/)
- [npm version 8.13.2](https://docs.npmjs.com/cli/v8/commands/npm-install)


## Quick start

1. Clone project from [repository](https://github.com/igotiss/andersen_php_technical_task.git).
2. Run `composer install` in terminal
3. Rename `.env.example` to `.env` and updated it with your database credentials
4. Run the command `./vendor/bin/sail up` in the terminal
5. Run `./vendor/bin/sail artisan key:generate`
6. Run `./vendor/bin/sail artisan migrate --seed`
7. Run `npm install`
8. Run `npm run dev` and enjoy!

## ********
Developed by [Igor Tyshchenko](mailto:igotiss@gmail.com)

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
