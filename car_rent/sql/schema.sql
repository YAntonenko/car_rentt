CREATE DATABASE IF NOT EXISTS autorent CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE autorent;

CREATE TABLE IF NOT EXISTS cars (
  id INT AUTO_INCREMENT PRIMARY KEY,
  mark VARCHAR(100) NOT NULL,
  model VARCHAR(100) NOT NULL,
  engine VARCHAR(100),
  fuel VARCHAR(100),
  price DECIMAL(10,2) NOT NULL DEFAULT 0,
  image VARCHAR(255),
  year INT DEFAULT 0,
  transmission VARCHAR(100),
  seats INT DEFAULT 0,
  description TEXT,
  status VARCHAR(50) DEFAULT 'vaba'
);

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    car_id INT NOT NULL,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE NOT NULL,
    total_price DECIMAL(10,2) NOT NULL,
    status VARCHAR(50) DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO cars (mark, model, engine, fuel, price, image, year, transmission, seats, description, status) VALUES
