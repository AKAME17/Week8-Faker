CREATE DATABASE demo_database;
USE demo_database;

CREATE TABLE employee (
    id INT PRIMARY KEY AUTO_INCREMENT,
    lastname VARCHAR(50) NOT NULL,
    firstname VARCHAR(50) NOT NULL,
    office_id INT,
    address TEXT
);

CREATE TABLE office (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    contactnum VARCHAR(20),
    email VARCHAR(100) UNIQUE,
    address TEXT,
    city VARCHAR(50),
    country VARCHAR(50),
    postal VARCHAR(20)
);

CREATE TABLE transaction (
    id INT PRIMARY KEY AUTO_INCREMENT,
    employee_id INT,
    office_id INT,
    datelog DATETIME DEFAULT CURRENT_TIMESTAMP,
    action VARCHAR(100) NOT NULL,
    remarks TEXT,
    documentcode VARCHAR(50)
);
