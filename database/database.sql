CREATE TABLE `Roles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `role` varchar(20)
);

CREATE TABLE `Users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(50),
  `password` varchar(255),
  `status` int,
  `name` varchar(50),
  `age` int,
  `phone` varchar(20),
  `address` varchar(255),
  `email` varchar(150),
  `id_role` int,
  `deleted` int
);

CREATE TABLE `Course` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `lession_number` int,
  `description` longtext,
  `deleted` int,
  `avatar` varchar(500)
);

CREATE TABLE `Lesson` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(350),
  `content` longtext,
  `file` varchar(500),
  `id_course` int,
  `deleted` int
);



ALTER TABLE `Users` ADD FOREIGN KEY (`id_role`) REFERENCES `Roles` (`id`);

ALTER TABLE `Lesson` ADD FOREIGN KEY (`id_course`) REFERENCES `Course` (`id`);
