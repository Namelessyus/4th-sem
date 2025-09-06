lab 3
create table student
(
    Id int PRIMARY key,
    Name varchar(20),
    Address varchar(20) not null,
    Phone bigint UNIQUE,
    Age int CHECK(Age>18),
    Gender varchar(20) check(Gender='Male' or Gender='Female')
    );

Insert into student
VALUES(1,'Ram','Delhi',2345678903,20,'Male');

--violations in sql--
--Insert age less than 18--
INSERT INTO student VALUES (2, 'Sita', 'Mumbai', 9876543210, 16, 'Female');

--Insert any other gender than Male of Female
INSERT INTO student VALUES (2, 'Sita', 'Mumbai', 9876543210, 16, 'Other');

--Insert duplicate phone number:
INSERT INTO student VALUES (3, 'Shyam', 'Pune', 2345678903, 22, 'Male');
-- Error: Duplicate entry for UNIQUE 'Phone'

--Insert NULL for Address (NOT NULL violation):
INSERT INTO student VALUES (4, 'Geeta', NULL, 9988776655, 25, 'Female');
-- Error: Address cannot be NULL

--Primary key violation
INSERT INTO student VALUES (1, 'Ravi', 'Chennai', 1234567890, 21, 'Male');

--Example of Data Type Mismatch:
INSERT INTO student VALUES (4, 'Amit', 'Kolkata', 9988776655, 'twenty', 'Male');  


--adding more values
INSERT INTO student (Id, Name, Address, Phone, Age, Gender) 
VALUES (2, 'Sita', 'Mumbai', 9876543210, 22, 'Female');

INSERT INTO student (Id, Name, Address, Phone, Age, Gender) 
VALUES (3, 'Amit', 'Kolkata', 9988776655, 25, 'Male');

INSERT INTO student (Id, Name, Address, Phone, Age, Gender) 
VALUES (4, 'Geeta', 'Bangalore', 9123456789, 23, 'Female');

INSERT INTO student (Id, Name, Address, Phone, Age, Gender) 
VALUES (5, 'Rohan', 'Chennai', 9234567890, 28, 'Male');

--Foreign key
create table marks
(
    Mid int Primary key,
    Dbms int,
    NM int,
    Project int,
    SE int,
    Sid int,
    FOREIGN KEY(sid) REFERENCES student(Id)
);

--Questions 
--1.
create database school;

--1
CREATE TABLE student
(
    Id INT PRIMARY KEY,
    Name VARCHAR(20),
    Age INT NOT NULL CHECK (Age < 20),
    Mobile BIGINT UNIQUE NOT NULL,
    Address VARCHAR(50) DEFAULT 'ktm'
);

--2
CREATE TABLE stud (
    sid INT PRIMARY KEY,
    id INT,
    fee_pay double,
    fee_due double,
    FOREIGN KEY (id) REFERENCES student(Id)
);

--3
ALTER TABLE student 
ADD COLUMN gender VARCHAR(20) NOT NULL DEFAULT 'male';

--4
INSERT INTO student (Id, Name, Age, Mobile, Gender)
VALUES 
(6, 'Arman', 18, 9991110001, 'male'),
(7, 'Riya', 17, 9991110002, 'female'),
(8, 'Kiran', 16, 9991110003, 'female'),
(9, 'Rohit', 19, 9991110004, 'male'),
(10, 'Anu', 18, 9991110005, 'female');


    