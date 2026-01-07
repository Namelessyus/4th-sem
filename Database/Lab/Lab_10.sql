Que
student(SID,Name,Gender,Age,Address,S_phone)
Department(Did,Sid,D_name,D_phone,D_address)
Result(Rid,Sid,Marks,Grade)
 
Que
1.display name and gender who belongs to comp department.
2.Display name ,gender,age of student who score 90 and grade A.
3.Display all the information of result of male student who belongs to ktm.
4.Display department info in which male with grade A student is studied.
5.Find sname with their address who score grade A and belong to IT department
6.Find the name of student who belongs to same address as their department address.
7. Find the name of student who has same phone no as their department.
8.Do left and right outer join between student and department ,Student and result.
9.What is the student name and gender whose department info is not provided.
10.What is the student name and gender whose result info is not provided.
11.What is the department and d_address in which no student are enrolled.
12.What is the marks and grade in which no students are there.
13.What is the highest marks in computer department.
14.What is the name of student who score lowest marks.
15.What is the sum of marks in all department.
16.What is the highest marks among female
17.What is the lowest and highest marks genderwise.
18.WHat is the sum of marks department wise.
19.How many student are there who score A.
20.How many male student are their who score >20.
21.How many female are their in computer department who score >20.
22.What is the highest marks s_address wise.
23.How many students are there who score greater than their avg marks.
24.WHat is the name of student and d_name that score A with marks 90.
25.update the marks of suman by 10%(+).
26.update the address of aman to nepaljung who belongs to comp department
27.How many A grade are there in each department.
28.How many male are there in computer department.
29.How many depertment are there which has atleast 2 male student
30.How many male and female student are their who belong to IT department.
 

Table 
create database lab10;
create table student 
(
SId int primary key,
Name varchar(20),
Gender varchar(20),
Age int,
Address varchar(20),
s_phone bigint
);
create table Department
(
Did int primary key,
Sid int,
D_name varchar(20),
D_phone bigint,
D_Address varchar(20)
);
 
 
 
 
 
INSERT INTO Student VALUES
(1, 'Suman', 'Male', 20, 'Kathmandu', '9801111111'),
(2, 'Anita', 'Female', 21, 'Pokhara', '9802222222'),
(3, 'Ramesh', 'Male', 22, 'Kathmandu', '9803333333'),
(4, 'Pooja', 'Female', 19, 'Lalitpur', '9804444444'),
(5, 'Bikash', 'Male', 23, 'Bhaktapur', '9805555555'),
(6, 'Nisha', 'Female', 20, 'Butwal', '9806666666'),
(7, 'Santosh', 'Male', 21, 'Butwal', '9807777777'),
(8, 'Kiran', 'Male', 22, 'Hetauda', '9808888888'),
(9, 'Sabina', 'Female', 20, 'Kathmandu', '9809999999'),
(10, 'Prakash', 'Male', 24, 'Pokhara', '9810000000');
 
 
INSERT INTO Department VALUES
(101, 1, 'Computer Science', '9801111111', 'Kathmandu'),
(102, 2, 'Management', '014222222', 'Pokhara'),
(103, 3, 'Engineering', '014333333', 'Chitwan'),
(104, 4, 'Computer Science', '014444444', 'Lalitpur'),
(105, 5, 'Management', '014555555', 'Bhaktapur'),
(106, 6, 'Engineering', '014666666', 'Lalitpur'),
(107, 12, 'Computer Science', '014777777', 'Dharan'),
(108, 18, 'Management', '014888888', 'Dang'),
(109, 19, 'Engineering', '014999999', 'Kathmandu'),
(110, 17, 'Computer Science', '014000000', 'Butwal');
 
INSERT INTO Result VALUES
(201, 1, 88, 'A'),
(202, 2, 75, 'B'),
(203, 3, 82, 'A'),
(204, 4, 90, 'A+'),
(205, 5, 68, 'C'),
(206, 6, 85, 'A'),
(207, 7, 72, 'B'),
(208, 18, 80, 'A'),
(209, 19, 95, 'A+'),
(210, 20, 60, 'C');
 

 

 

Ans
1.
select name,gender from
student join department 
on student.sid=department.sid;

2.
select name,gender,age from student join result on
student.sid=result.sid where marks =90 and grade='A+';

3.
select Rid,result.Sid,Marks ,grade from result join student on
student.sid=result.sid where gender='Male' and 
address='Kathmandu';

4.
select Did,department.Sid,
D_name,D_phone,D_address 
from department join student 
on department.sid=student.sid 
join result on result.sid=student.sid
where gender='Male' and Grade='A';

5.
select name,address from student join result 
on student.sid=result.sid join department on 
student.sid=department.sid where grade='A' and 
d_name='Engineering';

6.
select name from student join department 
on student.sid=department.sid where 
student.address=department.d_address;
 
7.
select name from student join department 
on student.sid=department.sid where 
student.s_phone=department.d_phone;

8.
select * from student left join result on
student.sid=result.sid;
select * from student right join result on
student.sid=result.sid;
select * from student left join department on
student.sid=department.sid;
select * from student right join department on
student.sid=department.sid; 

9.
select name,gender from student left join department
on  student.sid=department.sid
where d_name is null;
 
10.
select name,gender from student left join result
on  student.sid=result.sid
where marks is null;

11.
select d_name,d_address from department left  join student
on  student.sid=department.sid
where name is null;

12.
select Marks,Grade from student right join result
on  student.sid=result.sid
where name is null;

13.
select max(marks) as highest_marks
from result natural join student
natural join department where d_name='Computer Science';
 
14
select name from student natural join result
order by marks asc limit 1;
 
select name from student natural join result 
where marks 
in(select min(marks) from result natural join student);

15.
select sum(marks) from result natural join  
student natural join department ;

16
select max(marks) from result  natural join student
where gender='Female' ;
bonus que
select name,marks from result  natural join student
where gender='Female' order by marks desc limit 1;

17.
select gender,min(marks),max(marks) from result natural join student
group by gender;

18. 
select d_name,sum(marks) from result natural join  
student natural join department  group by d_name;

19. 
select count(Grade) from result natural join student 
where grade ='A';

20. 
select count(Gender) from result natural join student 
where mark=>20 and gender='Male'; 

