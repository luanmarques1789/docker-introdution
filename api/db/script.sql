CREATE DATABASE IF NOT EXISTS `api`;

USE `api`;

CREATE TABLE IF NOT EXISTS `products` (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL
);

INSERT INTO `products` VALUES (NULL, 'Generic Gaming Mouse', 14.99), 
  (NULL, 'HP DeskJet 2755e Wireless ', 94.99), 
  (NULL, 'Lenovo Ideapad 3 Laptop', 386.99), 
  (NULL, 'Professional Thin 75Hz 1080p LED Monitor ', 103.66), 
  (NULL, 'Nintendo Switch Pro Controller', 69.95), 
  (NULL, 'Racing Style Gaming Chair', 145.00), 
  (NULL, 'RGB Gaming Keyboard', 48.99);
