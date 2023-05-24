Sure! Here's an example of how you can create MySQL tables for an online clothes store:

```sql
CREATE TABLE users (
  user_id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
  category_id INT AUTO_INCREMENT PRIMARY KEY,
  category_name VARCHAR(50) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
  product_id INT AUTO_INCREMENT PRIMARY KEY,
  category_id INT,
  product_name VARCHAR(100) NOT NULL,
  description TEXT,
  price DECIMAL(10, 2) NOT NULL,
  stock_quantity INT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (category_id) REFERENCES categories(category_id)
);

CREATE TABLE orders (
  order_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  total_amount DECIMAL(10, 2) NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE order_items (
  order_item_id INT AUTO_INCREMENT PRIMARY KEY,
  order_id INT,
  product_id INT,
  quantity INT NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  FOREIGN KEY (order_id) REFERENCES orders(order_id),
  FOREIGN KEY (product_id) REFERENCES products(product_id)
);
```

In this example, we have created five tables:

1. `users` table: Stores user information such as user_id, username, email, password, and created_at timestamp.

2. `categories` table: Contains information about different categories of clothing. It includes category_id, category_name, and created_at timestamp.

3. `products` table: Stores product details such as product_id, category_id (a foreign key referencing the categories table), product_name, description, price, stock_quantity, and created_at timestamp.

4. `orders` table: Keeps track of orders made by users. It includes order_id, user_id (a foreign key referencing the users table), order_date, and total_amount.

5. `order_items` table: Represents the items included in each order. It includes order_item_id, order_id (a foreign key referencing the orders table), product_id (a foreign key referencing the products table), quantity, and price.

Note that these tables are a simplified example and may not include all the necessary columns for a real-world application. You may need to modify or expand them based on your specific requirements.