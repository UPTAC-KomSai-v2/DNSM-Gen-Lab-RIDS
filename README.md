# DNSM-Gen-Lab-RIDS

This README provides instructions on how to set up and run the GEN-Lab-RIDS Laravel project.

---

## Prerequisites

- Ensure that [Composer](https://getcomposer.org/Composer-Setup.exe) is installed on your system.
- Install XAMPP (apache, mysql) for easier setup of database. 

---

## Installation Steps

### Step 1: Clone the Repository

1. Open your terminal or command prompt.
2. Navigate to the directory where you want to store the project.
3. Clone the repository using the following command:

    ```` ```bash ````
    git clone <repository_url>
    ```` ``` ````

### Step 2: Navigate to the Project Directory

Move into the project directory by running:

```` ```bash ````
cd <project_directory>
```` ``` ````

### Step 3: Install Composer Dependencies

Run the following command to install the necessary PHP dependencies:
```` ```bash````
composer install
```` ``` ````

## Additional Setup 

1. Install and build frontend assets with npm. 
```` ```bash````
npm install
```` ``` ````
2. Install `Laravel Breeze` for Laravel authentication starter kit.
```` ```bash````
php artisan breeze:install
```` ``` ````
3. Select the following options for installing `Laravel Breeze`: blade, dark mode, PHPUnit.
4. Command for frontend development: compiles and bundles the frontend assets for development. 
```` ```bash````
npm run dev
```` ``` ````

### Step 4: Set Up Environment Configuration

1. Duplicate the `.env.example` file by running
    ```` ```bash````
    cp .env.example .env
    ```` ``` ````
2. Open the `.env` file and update it with your environment settings, such as database credentials.
    ```.env
    DB_DATABASE=rids
    DB_USERNAME=root
    DB_PASSWORD=
    ```
3. Create a new database following named `rids` using [PHPmyadmin](http://localhost/phpmyadmin/)

### Step 5: Generate Application Key

Generate the application key for security by running:
```` ```bash````
php artisan key:generate
```` ``` ````

### Step 6: Run Database Migrations

1. Ensure that your database is set up and that the credentials in the .env file are correct.
2. Run the migrations to create the necessary database tables:
    ```` ```bash````
    php artisan migrate
    ```` ``` ````
3. Run the following command to link the public folder with the storage folder:
    ```` ```bash````
    php artisan storage:link
    ```` ``` ````
4. If the migrations weren't properly executed run the following command to rerun migrations:
    ```` ```bash````
    php artisan migrate:fresh --seed
    ```` ``` ````

### Step 7: Start the Development Server
Start the application server by running: 
```` ```bash````
php artisan serve
```` ``` ````
