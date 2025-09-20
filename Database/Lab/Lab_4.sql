--Lab 4
--Familiarization  with DML commands(Insert,Update,Delete)

--Question One
--1. Create a employee table with attributes id,name,gender,salary(>20000),address,mbl
create table employee( 
	id int primary key, 
    name varchar(20), 
    gender varchar(6), 
    salary double check(salary>20000), 
    address varchar(50), 
    mbl long unique 
); 

alter table employee 
modify mbl bigint; 

--2 Use insert command to insert 10 new records
INSERT INTO employee (id, name, gender, salary, address, mbl) VALUES 
(1, 'Ram', 'Male', 45000.00, 'Kathmandu', 9800000001), 
(2, 'Sita', 'Female', 50000.00, 'Lalitpur', 9800000002), 
(3, 'Gita', 'Female', 47000.00, 'Pokhara', 9800000003), 
(4, 'Bikash', 'Male', 52000.00, 'Biratnagar', 9800000004), 
(5, 'Nabin', 'Male', 48000.00, 'Butwal', 9800000005), 
(6, 'Sabina', 'Female', 46000.00, 'Dharan', 9800000006), 
(7, 'Kamal', 'Male', 53000.00, 'Bhaktapur', 9800000007), 
(8, 'Rita', 'Female', 49000.00, 'Hetauda', 9800000008), 
(9, 'Manoj', 'Male', 55000.00, 'Chitwan', 9800000009), 
(10, 'Anita', 'Female', 47000.00, 'Nepalgunj', 9800000010); 

--3 Update the salary of employee by 10% whose name is Ram. 
update employee 
set salary=salary*1.1 where name like '%Ram%'; 

--4 Update the address of the employee who are from ktm or pkr to bkt
Update the address of employee who are from ktm or pkr to bkt 
UPDATE employee 
SET address = 'BKT' 
WHERE address IN ('ktm', 'pkr'); 

--5 Update the gender of employee whose name is kamal to m 
UPDATE employee 
SET gender = 'Male' 
WHERE name = 'Kamal'; 

--6 
update employee 
set address="BKT" where address = "Kathmandu" or address = "Pokhara"; 

--7. Increase the salary of every employee by 10% 
UPDATE employee
SET salary = salary * 1.1;

--8. 
update employee 
set name = "Radha", salary = 28000, gender='Male' where address = 'Chitwan'; 

--9 
delete from employee 
where salary < 25000; 

--10. 
delete from employee 
where name LIKE 's%'; 

--11. 
delete from employee 
where mbl = 111; 



--Question Two

--1
CREATE TABLE Student (
  id INT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  gender VARCHAR(10) NOT NULL,
  marks INT NOT NULL CHECK (marks BETWEEN 0 AND 100),
  address VARCHAR(100),
  phone VARCHAR(20) UNIQUE
);

--2
INSERT INTO Student (id, name, gender, marks, address, phone) VALUES
(1, 'Ram',   'Male',   99, 'Pokhara',  '9811223344'),
(2, 'Sujan', 'Female', 89, 'Kathmandu','9822334455'),
(3, 'Ram',   'Male',   60, 'Kathmandu','9833445566'),
(4, 'Sita',  'Female', 88, 'Chitwan',  '9844556677'),
(5, 'Sita',  'Female', 48, 'Chitwan',  '9855667788'),
(6, 'Sujan', 'Male',   90, 'Pokhara',  '9866778899'),
(7, 'Shiva', 'Male',   60, 'Baglung',  '9877889900');

--3
UPDATE Student
SET marks = marks * 1.05
WHERE marks = 89;

--4
UPDATE Student
SET marks = marks * 0.95
WHERE address = 'Kathmandu';

--5
UPDATE Student
SET address = 'Janakpur'
WHERE name IN ('Ram','Sita');

--6
UPDATE Student
SET marks = 68
WHERE name LIKE '%m';

--7
UPDATE Student
SET name = 'simanta',
    gender = 'Male',
    marks = 99,
    address = '55'
WHERE id = 7;

--8
UPDATE Student
SET address = 'Biratnagar',
    name = 'simanta'
WHERE marks = 99;

--9
UPDATE Student
SET name = 'Shyam',
    marks = 85
WHERE address = 'Chitwan';

--10
DELETE FROM Student
WHERE address = 'Pokhara'
  AND marks = 90;

--11
DELETE FROM Student
WHERE phone = '9822334455'
   OR marks = 48;

--12
DELETE FROM Student
WHERE name LIKE 'R%';

--13
DELETE FROM Student
WHERE address <> 'Kathmandu';
