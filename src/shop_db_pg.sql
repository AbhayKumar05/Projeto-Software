-- Create the database
CREATE DATABASE shop_db;

-- Table structure for table `cart`

CREATE TABLE cart (
  id SERIAL PRIMARY KEY,
  user_id int NOT NULL,
  name varchar(100) NOT NULL,
  price int NOT NULL,
  quantity int NOT NULL,
  image varchar(100) NOT NULL
);

-- Table structure for table `message`

CREATE TABLE message (
  id SERIAL PRIMARY KEY,
  user_id int NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  number varchar(12) NOT NULL,
  message varchar(500) NOT NULL
);

-- Table structure for table `orders`

CREATE TABLE orders (
  id SERIAL PRIMARY KEY,
  user_id int NOT NULL,
  name varchar(100) NOT NULL,
  number varchar(12) NOT NULL,
  email varchar(100) NOT NULL,
  method varchar(50) NOT NULL,
  address varchar(500) NOT NULL,
  total_products varchar(1000) NOT NULL,
  total_price int NOT NULL,
  placed_on varchar(50) NOT NULL,
  payment_status varchar(20) NOT NULL DEFAULT 'pending'
);

-- Table structure for table `products`

CREATE TABLE products (
  id SERIAL PRIMARY KEY,
  name varchar(100) NOT NULL,
  price int NOT NULL,
  image varchar(100) NOT NULL
);

-- Table structure for table `users`

CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL,
  user_type varchar(20) NOT NULL DEFAULT 'user'
);

-- No need for altering primary keys or auto-increment in PostgreSQL, as SERIAL handles that automatically.