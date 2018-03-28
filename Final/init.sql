CREATE DATABASE `login_system`;
USE `login_system`;

CREATE TABLE `login_info` (
  `username` varchar(30),
  `name` varchar(40),
  `email` varchar(89),
  `hashed_password` varchar(60),
  `last_visit` datetime,
  `times_visited` smallint(6),
  `security_question` enum('What is your Grandfather''s name?','What is the name of the high school you attended?','What state were you born in?'),
  `security_answer` varchar(110)
);
