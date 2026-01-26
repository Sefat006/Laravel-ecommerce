# Laravel E-Commerce Project

This is a professional e-commerce application built using the Laravel framework. This documentation serves as a guide for the initial setup and project architecture.

---

## 🛠️ Getting Started

Follow these instructions to get a copy of the project up and running on your local machine.

### 1. Installation
Create the project using the Laravel installer:
```bash laravel new ecommerce-app ```

### 2. Update Dependencies
Ensure all core packages are up to date:

```bash composer update ```
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
```bash php artisan migrate ```


📂 View Architecture
The project uses a structured view system to separate the Admin Dashboard from the Frontend Storefront.

Directory Tree:
```bash
resources/views/
├── admin/
│   ├── auth/                 # Admin Login & Authentication
│   └── layouts/
│       ├── nothing/          # Fallback or empty layouts
│       └── partials/         # Admin UI Components
│           ├── footer.blade.php
│           ├── header.blade.php
│           └── sidebar.blade.php
├── front/
│   ├── auth/                 # Customer Login & Registration
│   └── layouts/
│       ├── nothing/          # Fallback or empty layouts
│       └── partials/         # Frontend UI Components
│           ├── footer.blade.php
│           ├── header.blade.php
│           └── sidebar.blade.php
└── pages/                    # Static and Generic Pages 
```