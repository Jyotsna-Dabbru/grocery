CREATE DATABASE grocery;
use grocery;

CREATE TABLE admin(
adminname VARCHAR(30) PRIMARY KEY,
password VARCHAR(10));

CREATE TABLE product(
id INT(5) PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(30),
image LONGTEXT,
category VARCHAR(30),
price VARCHAR(10),
description VARCHAR(200));