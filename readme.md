# Turing Laravel Back End Challenge
To complete this challenge, you need to ensure all route returns a similar response object as described in our API guide.
To achieve this goal
- You will have to fix the existing bugs
- Implement the incomplete functions,
- Add test cases for the main functions of the system.
- Add Dockerfile to the root of the project to run the app in docker environment


## Getting started

### Prerequisites

In order to install and run this project locally, tou need to install all necessary for running Laravel framework software.
See [server requirements](https://laravel.com/docs/5.8/installation#server-requirements). Also, you need to install Mysql Server.



### Installation

* Clone this repository

* Follow Laravel installation [guide](https://laravel.com/docs/5.8/installation#installing-laravel)

* Restore mysql dump 
```sh
mysql -u <dbuser> -D <databasename> -p < ./database/database.sql
```

* Run `php artisan serve` to start the app in development

## Request and Response Object API guide for all Endpoints

Check [here](https://docs.google.com/document/d/1J12z1vPo8S5VEmcHGNejjJBOcqmPrr6RSQNdL58qJyE/edit?usp=sharing)