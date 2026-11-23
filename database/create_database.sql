CREATE DATABASE CarRent;

USE CarRent;

CREATE TABLE users(
    id int PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name varchar(40) UNIQUE NOT NULL,
    email varchar(255) UNIQUE,
    admin tinyint NOT NULL,
    password varchar(255) NOT NULL
);

CREATE TABLE cars(
    id int PRIMARY KEY  AUTO_INCREMENT NOT NULL,
    name varchar(255) NOT NULL,
    description text,
    image blob
);
