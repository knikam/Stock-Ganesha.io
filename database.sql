IF NOT EXISTS CREATE DATABASE stockganesha;
USE stockganesha;

CREATE TABLE customers (id varchar(200) primary key not null,first_name varchar(100) not null,last_name varchar(100) not null,email_id varchar(100) not null,password varchar(500) not null,
mobile_number varchar(25) not null, date_of_birth date, phone_number varchar(25),term_and_condition boolean not null,logged_in boolean not null,verify_email boolean not null,create_date varchar(500));

insert into customers values ('abc123','kalpesh','nikam','kalpeshnikam@gmail.com','9049609747','1995-09-18','0224566',false,false,false,'2020-03-10');
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Addresses (id int auto_increment primary key, address1 varchar(400), address2 varchar(400), city varchar(100),state varchar(100), zipcode int, customer_id varchar(200),FOREIGN KEY (customer_id) REFERENCES customers(id));
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE services (id int auto_increment primary key, name varchar(200), sub_name varchar(200), description varchar(1000), price DECIMAL(10,2));

insert into services (name,sub_name,description,price) values ("Long term service","This is long term service for you","Lorem ipsum dolor sit amet consectetur adipisicing elit.",250.00);
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Subscription (id int auto_increment primary key,duration int, purchase_date Date, subscription_expiry_date Date, Status boolean, renewal_notification boolean, customer_id varchar(200),FOREIGN KEY (customer_id) REFERENCES customers(id), service_id int, FOREIGN KEY (service_id) REFERENCES services(id));
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE Transactions (id varchar(1000), Payment_type varchar(300),country varchar(300), amount DECIMAL(10,2), date Date, subscription_id int(200),FOREIGN KEY (subscription_id) REFERENCES Subscription(id));
--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------