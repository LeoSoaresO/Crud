CREATE DATABASE db_crud;

USE db_crud;
CREATE TABLE users(
    id int primary key AUTO_INCREMENT not null,
    name varchar(50),
    email varchar(100),
    password VARCHAR(100)
);