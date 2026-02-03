# Laravel E-Commerce Project

This is a professional e-commerce application built using the Laravel framework. This documentation serves as a guide for the initial setup and project architecture.

---

## 🛠️ Getting Started

Follow these instructions to get a copy of the project up and running on your local machine.

### 1. Installation
Create the project using the Laravel installer:
```bash
laravel new ecommerce-app
```

### 2. Update Dependencies
Ensure all core packages are up to date:

```bash
composer update
```
### 3. Database Configuration
Create a new database in your database manager (e.g., phpMyAdmin, TablePlus).

Open your .env file and update the following lines with your database name and credentials:
``` bash
Code snippet
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_db
DB_USERNAME=root
DB_PASSWORD=
```
### 4. Run Migrations
Execute the following command to create the necessary tables in your database:
```bash
php artisan migrate
```

### 5. Creating new migration(only migration/table) through command:
Use this command when you only need to create a new database table without an associated model or controller.
```bash
php artisan make:migration create_TABLE_NAME
```

### 6. Creating new Controller:
Its work Like a middleman. A **Controller** handles user requests and controls the application logic.``` --resource``` will automatically create classes for **CRUD** Operation.
```bash
php artisan make:controller CONTROLLER_NAME --resource
```
* Creating Controller with Folder:
```bash
php artisan make:controller FOLDER_NAME/CONTROLLER_NAME --resource
```

### 6. Creating new Modal:
A Model represents your data and the logic related to that data.
Think of it like this (real-life analogy):
* Controller → Manager (decides what to do)
* Model → Data notebook (stores & handles data)
* View → Screen/UI (shows data)
```bash
php artisan make:controller FOLDER_NAME/CONTROLLER_NAME --resource
```

## 🗂️ Creating Migration:

Migration is the Table. create a migration means creating a table
```bash
php artisan make:migration create_TABLE_NAME_table
```
**after that, run on terminal**
```bash
php artisan migrate
```
---

## 🗂️ Using MailChimp and DrewM package for Storing Mail:

```bash
composer require drewm/mailchimp-api

```
**after that, copy and paste it on the .env file(at the end)**
```bash
MAILCHIMP_APIKEY=your-mailchimp-api-key
MAILCHIMP_LIST_ID=your-mailchimp-list-id
```
---


### 📂 View Controller Architecture
```bash
app/
└── Http/
    └── Controllers/
        └── Admin/
        └── Frontend/
                └── WelcomeController.php

```


### 📂 View Public Architecture
```bash
public/                     # The web root; contains all publicly accessible files
├── admin/
│   └── assets/
│       ├── css/
│       ├── fonts/
│       ├── images/
│       ├── js/
│       ├── styles/
│       ├── vendor/
│       └── webfonts/
├── build/                  # Usually contains Vite or Mix compiled assets
└── front/
    └── assets/
        ├── css/
        ├── fonts/
        ├── images/
        ├── js/
        └── scss/           # Note: Source files like SCSS are usually kept in /resources

```



### 📂 View Architecture
The project uses a structured view system to separate the Admin Dashboard from the Frontend Storefront.

**@include**
Use: Include a Blade partial (reusable view) inside another view.

Syntax:
```bash
@include('folder.view_name')
```

Example:
```@include('front.layouts.partials.header')```
→ Inserts the content of header.blade.php here


## Blade Template Structure

* 1. Layout (`app.blade.php`)
- Acts as the main template for pages.
- Common parts like **header** and **footer** are included using:
```bash
@include('front.layouts.partials.header')
    between them will be main content(yield)
@include('front.layouts.partials.footer')
```
Define where page-specific content goes using:
***@yield('content')*** **<------ is used here**------------------------|
                                                                        |
* 2. Page (welcome.blade.php)                                           |
                                                                        |
Extends the main layout:                                                |
                                                                        |
``` @extends('front.layouts.app') ```                                   |
                                                                        |
                                                                        |
Inject page-specific content into layout:                               |
                                                                        |
@section('content') **this content ---->**------------------------------|
    <!-- Content is basically the name of the main part -->
@endsection

Directory Tree:
```bash
resources/views/
            ├── admin/
            │   ├── auth/                 # Admin Login & Authentication
            │   ├── layouts/
            │       └── app.blade.php
            │       └── partials/         # Admin UI Components
            │           ├── footer.blade.php
            │           ├── header.blade.php
            │           └── sidebar.blade.php
            ├── front/
            │   ├── auth/                 # Customer Login & Registration
            │   ├── pages/
            |   |       └──privacy-policy.blade.php
            │   └── layouts/
            │       └── app.blade.php # after welcome page, this will be called. Here is the components are called
            │       └── partials/         # Frontend UI Components
            │           ├── footer.blade.php
            │           ├── header.blade.php
            │           └── sidebar.blade.php
            └── Welcome.blade.php # first, this page will be called (goto this page, then you'll find app.blade.php is called there)
```