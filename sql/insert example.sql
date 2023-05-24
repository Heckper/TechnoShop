INSERT INTO users (username, email, password) VALUES ('johnsmith', 'johnsmith@example.com', 'password123');

INSERT INTO categories (category_name) VALUES ('T-Shirts');

INSERT INTO products (category_id, product_name, description, price, stock_quantity) VALUES (1, 'Plain White T-Shirt', 'A comfortable and versatile plain white t-shirt.', 19.99, 100);

INSERT INTO orders (user_id, total_amount) VALUES (1, 59.97);

INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (1, 1, 3, 19.99);
