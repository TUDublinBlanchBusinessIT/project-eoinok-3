
CREATE DATABASE petsit;
USE petsit;


CREATE TABLE pet(
id INT AUTO_INCREMENT,
NAME VARCHAR(30),
age INT,
breed VARCHAR(30),
PRIMARY KEY(id)
);


INSERT INTO pet(NAME, age, breed) VALUES ('fido', 3, 'Labrador');
