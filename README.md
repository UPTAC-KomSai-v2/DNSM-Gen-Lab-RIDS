# DNSM-Gen-Lab-RIDS

To run a Laravel project downloaded from GitHub, follow these steps:

Clone the Repository:

Open your terminal or command prompt.
Navigate to the directory where you want to store the project.
Execute: git clone <repository_url>
Replace <repository_url> with the URL of the GitHub repository.
Navigate to the Project Directory:

Use: cd <project_directory>
Replace <project_directory> with the name of the cloned repository.
Install Composer Dependencies:

Ensure Composer is installed on your system.
Run: composer install
This command installs all necessary PHP dependencies.
Set Up Environment Configuration:

Duplicate the .env.example file and rename it to .env.
Configure the .env file with your environment settings, such as database credentials.
Generate Application Key:

Execute: php artisan key:generate
This command sets the APP_KEY in your .env file, ensuring application security.
Run Database Migrations:

Ensure your database is set up and the credentials in .env are correct.
Execute: php artisan migrate
This command creates the necessary database tables.
Start the Development Server:

Run: php artisan serve
The application will be accessible at http://localhost:8000.
For a visual guide, you can watch the following video:

https://www.youtube.com/watch?v=9qaiY3ycpwY
