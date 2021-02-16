# Odeo Takehome Project

## Quick Start

### Step 1 - Repository
* Clone or download this repository

### Step 2 - Source / Composer Setup
* Go inside of derectory, `src`
* Run this command `composer update`
* Then run this command to optimize autoload files `composer dump-autoload -o`

### Step 3 - Docker Setup
* Go inside of directory,  `mydocker`
* Run this command `docker-compose up -d`

## Project Requirements:
* docker >= 19.03.8+
* docker-compose

## Project Stack:
This Project contains the following stack

Stack | Version | Docker Image
----- | ------- | ------------
Nginx | >= 1.19.6+ | `nginx:alpine`
PHP-FPM | 7.2 | `php:7.2-fpm`
RabbitMQ | >= 3.8.11+ | `rabbitmq:3-management`
Postgres | >= 13.1-1.pgdg100+1 | `postgres:alpine`
PgAdmin4 | >= 4.29 | `dpage/pgadmin4:latest`

## Stack Information
> for more detail, see README in the `mydocker` directory

### Nginx
    Web server that also functions as a mail proxy, reverse proxy, and load balancer.
    
    Nginx accelerates content and application delivery, improves security, facilitates availability and scalability for the busiest web sites on the Internet.

### PHP-FPM
    FPM (FastCGI Process Manager) is an alternative PHP FastCGI implementation with some additional features (mostly) useful for heavy-loaded sites.

### RabbitMQ
    RabbitMQ is lightweight and easy to deploy on premises and in the cloud. It supports multiple messaging protocols. RabbitMQ can be deployed in distributed and federated configurations to meet high-scale, high-availability requirements.

### PostgreSQL
    It was originally named Postgres, PostgreSQL is object-relational database system with over 30 years of active development that has earned it a strong reputation for reliability, feature robustness, and performance.

### PgAdmin
    pgAdmin is a management tool for PostgreSQL and derivative relational databases such as EnterpriseDB's EDB Advanced Server.

## API Documentation
> for more detail, see README in the `src` directory

---

## Project Task & Requirements:
- [x] Create a REST API to send an email
- [x] Doesn't use PHP framework
- [x] Authenticated or Authorized to use the API
- [x] Using worker or queue or message distribution
- [x] Store all sent message/email into postgres DB
- [x] Good documentation to run the API