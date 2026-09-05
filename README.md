# Laravel Products API & CRUD with Authentication

A Laravel project demonstrating a clean and maintainable approach to building a **Products CRUD API and web-based CRUD views** using the **Repository Pattern**.

The project also includes **authentication using Laravel Sanctum** for API authentication and **Laravel Breeze** for ready-to-use Login and Registration views.

## 🚀 Features

* Products CRUD API
* Products CRUD Web Views
* Create, Read, Update, and Delete Products
* Repository Pattern implementation
* Separation of business logic from controllers
* Laravel Sanctum authentication
* User Registration
* User Login
* User Logout
* Laravel Breeze authentication views
* API authentication using Bearer Tokens
* Validation for product data
* Clean and reusable code structure
* Reduced code repetition using the Repository Pattern

## 🛠️ Technologies Used

* **Laravel**
* **PHP**
* **MySQL**
* **Laravel Sanctum**
* **Laravel Breeze**
* **Blade**
* **RESTful API**
* **Repository Pattern**

## 📁 Project Structure

The project follows a Repository Pattern architecture to keep the code clean, reusable, and maintainable.

> The exact structure may vary depending on the Laravel version and project implementation.

## 🔐 Authentication

Authentication is implemented using **Laravel Sanctum**.

The project provides API authentication functionality for:

* Register
* Login
* Logout

After successful login, Sanctum authentication is used to protect API routes.

Laravel Breeze is also used to provide the web-based authentication views for:

* Login
* Register
* Authentication-related pages

## 📦 Product CRUD

The application provides complete CRUD functionality for Products.

### API Operations

| Method    | Endpoint             | Description          |
| --------- | -------------------- | -------------------- |
| GET       | `/api/products`      | Get all products     |
| GET       | `/api/products/{id}` | Get a single product |
| POST      | `/api/products`      | Create a product     |
| PUT/PATCH | `/api/products/{id}` | Update a product     |
| DELETE    | `/api/products/{id}` | Delete a product     |

> Update the endpoints above if your actual route names are different.

## 🏗️ Repository Pattern

The **Repository Pattern** is used to separate data-access logic from controllers.

Instead of putting database operations directly inside the controller, product-related database operations are handled through the repository.

### Without Repository Pattern

```text
Controller
    ↓
Database
```

### With Repository Pattern

```text
Controller
    ↓
Repository
    ↓
Model
    ↓
Database
```

This approach helps to:

* Reduce code repetition
* Keep controllers clean
* Improve maintainability
* Make code more reusable
* Separate responsibilities
* Make future changes easier

## ⚙️ Installation

Follow these steps to run the project locally.

### 1. Clone the Repository

```bash
git clone https://github.com/muhammadfarhandeveloper/Laravel-CRUD-API-Authentication.git
```

### 2. Navigate to the Project

```bash
cd Laravel-CRUD-API-Authentication
```

### 3. Install PHP Dependencies

```bash
composer install
```

### 4. Install Frontend Dependencies

```bash
npm install
```

### 5. Create Environment File

```bash
cp .env.example .env
```

For Windows, you can manually copy `.env.example` and rename it to `.env`.

### 6. Generate Application Key

```bash
php artisan key:generate
```

### 7. Configure Database

Open the `.env` file and configure your database credentials:

```env
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

### 8. Run Migrations

```bash
php artisan migrate
```

### 9. Install Dependencies

```bash
npm install
```

### 10. Build Frontend Assets

```bash
npm run build
```

For development:

```bash
npm run dev
```

### 10. Start the Laravel Server

```bash
php artisan serve
```

The application will be available at:

```text
http://127.0.0.1:8000
```

## 🔑 API Authentication

For protected API routes, first log in through the authentication endpoint and obtain an authentication token.

Then include the token in the request header:

```http
Authorization: Bearer YOUR_ACCESS_TOKEN
```

Example:

```http
Accept: application/json
Authorization: Bearer YOUR_ACCESS_TOKEN
```

## 🧪 API Testing

You can test the API using tools such as:

* Postman
* Insomnia
* Thunder Client
* Laravel HTTP Client

Example request:

```http
GET /api/products
```

For creating a product:

```http
POST /api/products
Content-Type: application/json
Authorization: Bearer YOUR_ACCESS_TOKEN
```

Example JSON:

```json
{
    "name": "Laptop",
    "description": "A powerful development laptop",
    "price": 1200,
    "stock": 23,
    "status" : true
}
```

## 🎯 Project Purpose

The main purpose of this project is to demonstrate how to build a Laravel application with:

1. RESTful API development
2. Web-based CRUD operations
3. Authentication
4. Laravel Sanctum
5. Laravel Breeze
6. Repository Pattern
7. Clean and reusable code architecture

This project is suitable for learning and demonstrating Laravel backend development practices.

## 📌 Future Improvements

Possible future improvements include:

* Add Product Categories
* Add Product Images
* Add Pagination
* Add Search and Filtering
* Add API Resources
* Add Form Requests for validation
* Add automated tests
* Add role-based authorization
* Add API documentation
* Add Docker support

## 👨‍💻 Author
Muhammad Farhan
Developed as a Laravel project to demonstrate **CRUD operations, API development, authentication, and Repository Pattern architecture**.

## 📄 License

This project is open-source and available under the [MIT License](LICENSE).
