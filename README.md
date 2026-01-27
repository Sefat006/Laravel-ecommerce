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

### 6. ### 5. Creating new Controller:
Its work Like a middleman. A **Controller** handles user requests and controls the application logic.```bash --resource``` will automatically create classes for **CRUD** Operation.
```bash
php artisan make:controller CONTROLLER_NAME --resource
```
* Creating Controller with Folder:
```bash
php artisan make:controller FOLDER_NAME/CONTROLLER_NAME --resource
```


📂 View Controller Architecture
```bash
app/
└── Http/
    └── Controllers/
        └── Admin/
        └── Frontend/
                └── WelcomeController.php

```


📂 View Public Architecture
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



📂 View Architecture
The project uses a structured view system to separate the Admin Dashboard from the Frontend Storefront.

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
            │   └── layouts/
            │       └── app.blade.php
            │       └── partials/         # Frontend UI Components
            │           ├── footer.blade.php
            │           ├── header.blade.php
            │           └── sidebar.blade.php
            └──
```