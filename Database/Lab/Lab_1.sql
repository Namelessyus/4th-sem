--Lab 1--
--Basics of SQL in XAMPP

create database database_name;
create table TABLE_NAME
(
col1 datatype CONSTRAINT,
col2 datatype CONSTRAINT,
    
coln datatype CONSTRAINT
    )
    insert into table_name (col1,col2,col3,col4...)
    VALUES(val1,val2,val3...)
    
    select * from table_name;
    select col1,col2,col3 from TABLE_NAME
    select * from TABLE_NAME where CONDITION

create database database_name;
CREATE TABLE employee
(
    id int,
    Name varchar(20),
    Age int,
    Date date,
    marks float,
    gender varchar(6)
    );

INSERT into employee VALUES
(1,'Ram',20,'2005-10-10',60,'Male'),
(2,'Shyam',21,'2004-1-11',18,'Male'),
(3,'Rama',19,'2006-4-9',79,'Female'),
(4,'Sita',18,'2007-16-5',53,'Female'),
(5,'Hari',20,'2005-20-2',86,'Male');

SELECT * FROM `employee` WHERE gender = 'female'

DELETE FROM table_name;

create database Anushma;
CREATE TABLE shakya
(
    Id int,
    Name varchar(20),
    Gender varchar(20),
    Address varchar(255),
    dob date,
    phone varchar(20),
    qualification varchar(20),
    relation varchar(20),
    age int,
    vote char
    );
    
    insert into shakya values
(1,'Ajay Shakya','Male','Kupondol','1996-2-1','9012345678','bachlores','father',47,'Y'),
(2,'Manisha Bajracharya','Female','Kupondol','1997-2-15','90125445568','masters','mother',46,'Y'),
(3,'Agrim Shakya','Male','Kathmandu','2015-7-8','901659375','class 5','brother',10,'N'),
(4,'Arhant Bajracharya','Male','Kumaripati','2007-7-9','9036592874','10','cousin',16,'N'),
(5,'Anushma Shakya','Male','Patha','2005-2-1','9847894367','+2','me',19,'N');

select * from shakya where vote = 'Y';
select * from shakya where age > 52;
select * from shakya where gender = 'male';
select * from shakya where address = 'kathmandu' and gender = 'male';
select * from shakya where age < 70;
select * from shakya where qualification = 'masters' and age between 40 and 50;
select * from shakya where relation !='mother' and relation !='father';
