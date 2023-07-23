# E-commerce Project using Laravel and Laravel UI

## Project Overview

This is an E-commerce web application built using the Laravel framework and Laravel UI package. The project aims to provide a fully functional online shopping experience, including product browsing, cart management, checkout, and order processing. It also incorporates user authentication and administrative capabilities for managing products and orders.

## Features

- User Registration and Authentication: Users can sign up, log in, and manage their profiles.
- Product Browsing: Users can browse products by categories, search for specific items, and view product details.
- Shopping Cart: Users can add products to the cart, update quantities, and remove items.
- Checkout Process: Users can proceed to checkout, input shipping details, and place orders.
- Order Management: Admins can view and manage orders, change order status, and update order details.
- Product Management: Admins can add, edit, and delete products from the inventory.

## Installation

1. Clone the repository:

```
git clone https://github.com/islam-abdelkader/Ecommerce.git
cd Ecommerce
```

2. Install dependencies:
```
composer install
npm install
```

3. Set up the environment file:
```
cp .env.example .env
```

4. Generate an application key:
```
php artisan key:generate
```

5. Create a database and update the .env file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=your_database_host
DB_PORT=your_database_port
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

6. Run migrations and seed the database:
```
php artisan migrate --seed
```

7. Build the frontend assets:
```
npm run dev
```

8. Start the development server:
```
php artisan serve
```

### Visit http://localhost:8000 in your web browser to access the application.

## Usage
- To access the admin panel, visit /admin and log in with your admin credentials.
- As an admin, you can manage products and view and process orders.
- Regular users can browse products, add items to the cart, and complete orders.

## Contributing
Contributions are welcome! If you find any issues or have ideas to enhance the project, feel free to open a pull request.

## License
[MIT](https://choosealicense.com/licenses/mit/)

## Acknowledgments
Thank you to the Laravel and Laravel UI communities for their excellent packages and documentation, which helped in building this project.
