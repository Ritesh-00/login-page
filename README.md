# Laravel Login Page

A simple and secure login and registration system built using the Laravel PHP framework.

---

## 🚀 Features

- User registration with strong password validation
- Login authentication using Laravel's built-in features
- Password hashing using `Hash::make()`
- Error handling and validation messages
- Clean UI built with HTML & CSS
- Protected routes after login
- Uses MySQL database

---

## 📷 Screenshots

![Signup Page](screenshots/signup.png)
![Login Page](screenshots/login.png)

> *(Optional — Add images in a `/screenshots` folder and link them above)*

---

## 🔧 Tech Stack

- **Framework:** Laravel 10
- **Language:** PHP, Blade Templates
- **Database:** MySQL
- **Styling:** HTML, CSS
- **Server:** XAMPP / Apache

---

## 🛠️ Setup Instructions

Clone the repository and set up the project:

```bash
git clone https://github.com/Ritesh-00/login-page.git
cd login-page

# Install dependencies
composer install

# Copy .env and set your DB credentials
cp .env.example .env

# Generate app key
php artisan key:generate

# Create the database in MySQL (e.g., `login_db`)
# Then run:
php artisan migrate

# Start the development server
php artisan serve

So if you are a complete bigineer and you want to clone this project
You need to install the XAMPP first from the chrome browser,
then go to cd:C/XAMPP/htdocs
create a projects folder here and copy this whole setup there in the TO-DO-LIST folder (you need to create this manually)
then open the folder in the vscode 
Set up your .env file
and in the terminal type:
php artisan migrate
php artisan serve
Now you project setup is complete and you see it on the localhost;

