IF NOT EXISTS CREATE DATABASE stockganesha;
USE stockganesha;

IF NOT EXISTS CREATE TABLE customers (id varchar(200) primary key not null,first_name varchar(100) not null,last_name varchar(100) not null,email_id varchar(100) not null,
mobile_number varchar(25) not null, date_of_birth date, phone_number varchar(25),term_and_condition boolean not null,logged_in boolean not null,verify_email boolean not null,create_date date);

