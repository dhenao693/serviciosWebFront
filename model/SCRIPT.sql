
DROP DATABASE IF EXISTS serviciosweb;

CREATE DATABASE serviciosweb;

USE serviciosweb;


CREATE TABLE users (
    document int NOT NULL PRIMARY KEY,
    user varchar(100) NOT NULL,
    password varchar(100) NOT NULL,
    name varchar(100) NOT NULL,
    lastname varchar(100) NOT NULL
);

INSERT INTO `users`(`document`, `user`, `password`, `name`, `lastname`) 
VALUES (123456,'admin1234','admin1234','admin1234','admin1234');


INSERT INTO `users`(`document`, `user`, `password`, `name`, `lastname`) 
VALUES (2345234,'dhenao693','qwer1234','daniel','henao');