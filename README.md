# User Account Management System

## Project Description
This is a web application built with Laravel that provides user account management features including registration, login, profile editing, password changing, and account deletion.

## Features
- User Registration with validation
- User Login (Email or Username)
- Dashboard with account information
- Edit Profile
- Change Password
- Delete Account
- Session-based authentication

## Database
- SQLite (configured in .env)

## Setup Instructions

1. Clone the repository:
   ```
   git clone <repository-url>
   cd <project-directory>
   ```

2. Install dependencies:
   ```
   composer install
   ```

3. Copy the environment file:
   ```
   cp .env.example .env
   ```

4. Generate application key:
   ```
   php artisan key:generate
   ```

5. Run migrations:
   ```
   php artisan migrate
   ```

6. Start the development server:
   ```
   php artisan serve
   ```

7. Access the application at http://localhost:8000

## Group Members
- Member 1
- Member 2
- etc.

## Technologies Used
- Laravel (PHP Framework)
- Bootstrap (CSS Framework)
- SQLite (Database)