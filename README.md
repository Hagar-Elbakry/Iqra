# Iqra 

Iqra is a web-based library management system built with Laravel, designed to facilitate book borrowing and management for students and administrators.

## Authors

- Hagar Abdelsattar Elbakry
- Menna Baligh Hamdy

## Features

### For Admins

- **Authentication:** Register at `/admin/register` and login at `/admin/login`.
- **Authorization:** Only authenticated admins can access and perform admin tasks.
- **Dashboard:** View statistics for students, books, and borrowed books.
- **Books Management:** Full CRUD (Create, Read, Update, Delete) operations for books.
- **Student Management:** Search students by ID, view student details, and see all borrowed books.
- **Profile Management:** Update own profile and change password.
- **Access Control:** All admin tasks are accessible only through `/admin/*` routes.

### For Students (Users)

- **Authentication:** Register and login via `/register` and `/login`.
- **Browse Books:** View all books and detailed information.
- **Borrow & Return:** Borrow available books and return them.
- **Dashboard:** See all borrowed books with details (borrow date, return date, status).
- **Profile Management:** Update own profile and change password.


## Getting Started

1. **Clone the repository**
2. **Install dependencies**
   ```sh
   composer install
   npm install
   ```
3. **Configure environment**
   - Copy `.env.example` to `.env` and set up your database credentials.
   - Run the application key generate command:
    ```bash
    php artisan key:generate

4. **Run migrations**
   ```sh
   php artisan migrate
   ```
5. **Build assets**
   ```sh
   npm run build
   npm run dev
   ```
6. **Start the server**
   ```sh
   php artisan serve
   ```

## Usage

- **Admin Panel:** Access `/admin/dashboard` for admin dashboard and management.
- **User Panel:** Access `/dashboard`  for student features.
