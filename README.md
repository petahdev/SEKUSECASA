
CREATE DATABASE IF NOT EXISTS secasa;


USE secasa;
create table one by one here

CREATE TABLE IF NOT EXISTS stpauls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    second_name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(15) NOT NULL,
    course_done VARCHAR(100) NOT NULL,
    year_of_study VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image LONGTEXT DEFAULT NULL,
    last_email_sent DATETIME DEFAULT NULL,
    admin BOOLEAN DEFAULT FALSE,
    all_admin BOOLEAN DEFAULT FALSE
);


CREATE TABLE IF NOT EXISTS standrew (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    second_name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(15) NOT NULL,
    course_done VARCHAR(100) NOT NULL,
    year_of_study VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image LONGTEXT DEFAULT NULL,
    last_email_sent DATETIME DEFAULT NULL,
    admin BOOLEAN DEFAULT FALSE,
    all_admin BOOLEAN DEFAULT FALSE
);


CREATE TABLE IF NOT EXISTS staugustine (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    second_name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(15) NOT NULL,
    course_done VARCHAR(100) NOT NULL,
    year_of_study VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image LONGTEXT DEFAULT NULL,
    last_email_sent DATETIME DEFAULT NULL,
    admin BOOLEAN DEFAULT FALSE,
    all_admin BOOLEAN DEFAULT FALSE
);



CREATE TABLE IF NOT EXISTS stmonica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    second_name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(15) NOT NULL,
    course_done VARCHAR(100) NOT NULL,
    year_of_study VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image LONGTEXT DEFAULT NULL,
    last_email_sent DATETIME DEFAULT NULL,
    admin BOOLEAN DEFAULT FALSE,
    all_admin BOOLEAN DEFAULT FALSE
);


CREATE TABLE IF NOT EXISTS choir (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    second_name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(15) NOT NULL,
    course_done VARCHAR(100) NOT NULL,
    year_of_study VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image LONGTEXT DEFAULT NULL,
    last_email_sent DATETIME DEFAULT NULL,
    admin BOOLEAN DEFAULT FALSE,
    all_admin BOOLEAN DEFAULT FALSE
);


CREATE TABLE IF NOT EXISTS pioneer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    second_name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(15) NOT NULL,
    course_done VARCHAR(100) NOT NULL,
    year_of_study VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image LONGTEXT DEFAULT NULL,
    last_email_sent DATETIME DEFAULT NULL,
    admin BOOLEAN DEFAULT FALSE,
    all_admin BOOLEAN DEFAULT FALSE
);


CREATE TABLE IF NOT EXISTS stfrancis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    second_name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(15) NOT NULL,
    course_done VARCHAR(100) NOT NULL,
    year_of_study VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image LONGTEXT DEFAULT NULL,
    last_email_sent DATETIME DEFAULT NULL,
    admin BOOLEAN DEFAULT FALSE,
    all_admin BOOLEAN DEFAULT FALSE
);


CREATE TABLE IF NOT EXISTS cma (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    second_name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(15) NOT NULL,
    course_done VARCHAR(100) NOT NULL,
    year_of_study VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image LONGTEXT DEFAULT NULL,
    last_email_sent DATETIME DEFAULT NULL,
    admin BOOLEAN DEFAULT FALSE,
    all_admin BOOLEAN DEFAULT FALSE
);


CREATE TABLE IF NOT EXISTS cla (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    second_name VARCHAR(100) NOT NULL,
    surname VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_number VARCHAR(15) NOT NULL,
    course_done VARCHAR(100) NOT NULL,
    year_of_study VARCHAR(10) NOT NULL,
    password VARCHAR(255) NOT NULL,
    image LONGTEXT DEFAULT NULL,
    last_email_sent DATETIME DEFAULT NULL,
    admin BOOLEAN DEFAULT FALSE,
    all_admin BOOLEAN DEFAULT FALSE
);

use it only when necessary...removes email as unique identifier in the table you run the sql.
ALTER TABLE choir MODIFY email VARCHAR(255);

made with ❤ by Peter
