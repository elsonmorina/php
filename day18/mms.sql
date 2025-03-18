CREATE TABLE `movies`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `movie_name` varchar(255) NOT NULL,
    `movie_desc` varchar(255) NOT NULL,
    `movie_quality` varchar(255) NOT NULL,
    `movie_rating` int(255) NOT NULL,
    `movie_image` varchar(255) NOT NULL
);

CREATE TABLE `users`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255) NOT NULL,
    `username` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `confirm_password` varchar(255) NOT NULL,
    `is_admin` varchar(255) NOT NULL
);

CREATE TABLE `bookings`(
	`id` int(12) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `user_id` int(12) NOT NULL,
    `movie_id` int(12) NOT NULL,
    `nr_ticket` int(255) NOT NULL,
    `date` varchar(255) NOT NULL,
    `time` varchar(255) NOT NULL
);

INSERT INTO movies(`movie_name`,`movie_desc`,`movie_quality`,`movie_rating`,`movie_image`) VALUES
('Zgjoi','Hive (Albanian: Zgjoi) is a 2021 drama film written and directed by Blerta Basholli in her directorial debut. The film stars Yllka Gashi, Çun Lajçi and Aurita Agushi.','3D',10,'zgjoi.jpg'),
('Fast and furious','Fast & Furious, also known as The Fast and the Furious, is an American action media franchise centered on a series of films revolving around street racing, heists, and spies. ','3D',10,'venom.jpg');

INSERT INTO `users`(`name`,`username`,`email`,`password`,`confirm_password`,`is_admin`) VALUES
('Elson','elsonm','elsonmorina@gmail.com','123456','123456','true'),
('Melika','melikaa','melikalaiu@gmail.com','123456','123456','false');

INSERT INTO bookings(`user_id`,`movie_id`,`nr_ticket`,`date`,`time`) VALUES 
(1,2,10,'2025,03,20','12:00'),
(2,1,15,'2025,03,20','12:00');