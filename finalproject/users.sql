CREATE TABLE `users1`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` varchar(255) NOT NULL,
    `name` varchar(255) NOT NULL,
    `surname` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL
    
);
CREATE TABLE `products1`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `weight` int(255) NOT NULL,
    `price` varchar(255) NOT NULL,
    `desc` varchar(255) NOT NULL  
);
CREATE TABLE `shopping1`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(12) NOT NULL,
    `products_id` int(12) NOT NULL,
    `final_price` int(255) NOT NULL
      
);