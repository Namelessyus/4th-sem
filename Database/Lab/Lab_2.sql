alter table dav
add column marks int;

alter table dav
add column religion varchar(20) after age;

create table dav1 as select * from dav;
(for table and records)

create table dav2 as select * from dav where 1=2;
(for only table title without records)

alter table dav
rename to davcollege;
(to rename table)

alter table davcollege
change address ghar varchar(20);
(to rename column)

alter table davcollege
change country desh varchar(20);

alter table davcollege
MODIFY gender varchar(20);
(to change the datatype of column)

insert into davcollege 
values 
(2,"sita","Kathmandu",30,'Female',40,'sits@gmail.com','Japan'),
(3,"rita","Kathmandu",30,'Female',40,'sits@gmail.com','Korea'),
(5,"gita","Kathmandu",30,'Female',40,'sits@gmail.com','America')

for deleting
drop table dav2;
drop - database and table

trunket - all value inside table

delete from davcollege where name='ram';
delete - specific delete

-------------------------------------
--1
create database lab2; 

--2
create table shop(
    Id int primary key AUTO_INCREMENT,
    address varchar(50),
    sales int,
    product int,
    Day varchar(50)
    );

--3
insert into shop VALUES
(1,"Ktm",1000,6,"Sun"),
(2,"Ktm",2000,5,"Mon"),
(3,"Ktm",2500,10,"Tue"),
(4,"Pkr",2000,12,"Wed"),
(5,"Cht",3000,13,"Thu"),
(6,"Bkt",1500,4,"Fri"),
(7,"Patan",5000,9,"Sat"),
(8,"Jhapa",6000,12,"sun");

--4 
alter table shop 
add column profit int; 
alter table shop 
drop column profit; 

--5 
alter table shop 
MODIFY day char; 

--6
alter table shop 
rename to pasal; 

--7 
alter table pasal 
change ID shop_id int; 
 
--8 
alter table pasal 
add column country varchar(50) default 'Nepal'; 
 
--9 
create table shoppy as select * from pasal where 1=2; 

--10 
create table shop as select * from pasal; 

--11 
TRUNCATE table shop; 
 
--12 
drop table shop 

--13 
drop DATABASE lab2 

-----------------------------------
-- Question 2 
create table student( 
    Id int primary key AUTO_INCREMENT,  
name varchar(50),  
    address varchar(50),  
gender varchar(50)  

    ); 
 
--3 
alter table student 
add column phn_no int, 
add column marks int; 

--4 
alter table student 
add column country varchar(50) default 'Nepal'; 

 