create database weblab;
use weblab;

CREATE TABLE users (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(30) NOT NULL,
  password VARCHAR(255) NOT NULL
);

insert into users(username,password) values ('ziya','ziyapass'),('admin','admin');

select * from users;