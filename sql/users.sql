CREATE TABLE users(
   ID int NOT NULL AUTO_INCREMENT,
   login VARCHAR(255) NOT NULL,
   password VARCHAR (255) NOT NULL,
   name VARCHAR (100) NOT NULL,
   surname VARCHAR (100) NOT NULL,
   gender VARCHAR (10) NOT NULL,
   date_r DATE,
   PRIMARY KEY (ID)
);