CREATE database practical;
USE practical;

CREATE TABLE Salesman (
    Sid INT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    Scity VARCHAR(30) NOT NULL,
    commission DECIMAL(10,2) CHECK (commission >= 0),
    Gender CHAR(1) CHECK (Gender IN ('M','F'))
);

CREATE TABLE Customer (
    Cid INT PRIMARY KEY,
    Name VARCHAR(50) NOT NULL,
    CCity VARCHAR(30) NOT NULL,
    Grade CHAR(1) CHECK (Grade IN ('A','B','C','D','E')),
    Gender CHAR(1) CHECK (Gender IN ('M','F'))
);

CREATE TABLE Orders (
    Ono INT PRIMARY KEY,
    Purchase_amount DECIMAL(10,2) CHECK (Purchase_amount > 0),
    Order_date DATE NOT NULL,
    Cid INT,
    Sid INT,
    FOREIGN KEY (Cid) REFERENCES Customer(Cid),
    FOREIGN KEY (Sid) REFERENCES Salesman(Sid)
);

INSERT INTO Salesman VALUES
(1,'Sam','Kathmandu',15000,'M'),
(2,'Sanam','Chitwan',22000,'F'),
(3,'Samir','Kathmandu',18000,'M'),
(4,'Ramesh','Pokhara',9000,'M'),
(5,'Sagar','Chitwan',25000,'M');

INSERT INTO Customer VALUES
(101,'Ram','Kathmandu','A','M'),
(102,'Sita','Kathmandu','B','F'),
(103,'Rita','Chitwan','A','F'),
(104,'Hari','Pokhara','C','M'),
(105,'Anita','Kathmandu','A','F');

INSERT INTO Orders VALUES
(1001,5000,'2023-07-22',101,1),
(1002,8000,'2026-07-22',102,2),
(1003,12000,'2026-07-22',105,3),
(1004,9000,'2026-07-21',103,4),
(1005,7000,'2026-07-22',101,5);

SELECT * FROM Salesman;
SELECT * FROM Customer;
SELECT * FROM Orders;

-- 2 --
SELECT * FROM Salesman WHERE Name LIKE 'S__A%';

-- 3 --
SELECT Sid, MAX(Purchase_amount) AS Highest_Purchase FROM Orders WHERE Order_date = '2023-07-22' 
GROUP BY Sid;

-- 4 --
SELECT COUNT(*) AS Total_Customers FROM Customer WHERE Grade >
(
    SELECT AVG(CASE Grade WHEN 'A' THEN 5 WHEN 'B' THEN 4 WHEN 'C' THEN 3 WHEN 'D' THEN 2
        WHEN 'E' THEN 1 END) FROM Customer WHERE CCity = 'Kathmandu'
);

-- 5 --
SELECT * FROM Salesman WHERE Scity='Chitwan' AND commission = (SELECT MAX(commission) FROM Salesman WHERE Scity='Chitwan');

-- 6 --
SELECT MAX(Purchase_amount) AS Second_Highest FROM Orders WHERE Purchase_amount < (SELECT MAX(Purchase_amount) FROM Orders);

-- 7 --
SELECT * FROM Salesman ORDER BY Commission DESC LIMIT 3;

-- 8 --
SELECT * FROM Salesman ORDER BY commission;

-- 9 --
SELECT DISTINCT s.Name, s.commission FROM Salesman s JOIN Customer c ON s.Scity = c.CCity;

-- 10 --
SELECT Order_date, COUNT(*) AS Total_Orders FROM Orders GROUP BY Order_date;

-- 11 --
SELECT AVG(Purchase_amount) AS Avg_Purchase FROM Orders;

-- 12 --
SELECT DISTINCT c.* FROM Customer c JOIN Orders o ON c.Cid = o.Cid WHERE c.Gender='F'
AND c.CCity='Kathmandu' AND o.Purchase_amount > (SELECT AVG(Purchase_amount) FROM Orders);

-- 13 --
SELECT DISTINCT s.Name FROM Salesman s JOIN Orders o ON s.Sid = o.Sid
JOIN Customer c ON o.Cid = c.Cid WHERE s.Gender = c.Gender;

-- 14 --
SELECT MAX(commission) AS Highest_Male_commission FROM Salesman WHERE Gender='M';

-- 15 --
SELECT Name FROM Customer WHERE Grade='A';

-- 16 --
SELECT SUM(commission) AS Total_commission FROM Salesman WHERE Name LIKE 'P%';

-- 17 --
UPDATE Orders SET Order_date = '2024-02-02' WHERE Cid = (SELECT Cid FROM Customer WHERE Name='Ram');
UPDATE Salesman SET commission = commission * 1.20;

-- 18 --
UPDATE Salesman SET Name='Chitra', Gender='M' WHERE commission > 20000
AND Sid IN ( SELECT o.Sid FROM Orders o JOIN Customer c ON o.Cid = c.Cid WHERE c.Name='Ram' 
AND c.Grade='A'
);

-- 19 --
DELETE FROM Customer WHERE Name='Ram' AND CCity='Kathmandu'
AND Cid IN ( SELECT o.Cid FROM Orders o JOIN Salesman s ON o.Sid = s.Sid WHERE s.Gender='F' 
AND s.Name='Sita'
);

-- 20 --
DELETE FROM Salesman WHERE Sid IN ( SELECT o.Sid FROM Orders o JOIN Customer c ON o.Cid = c.Cid 
WHERE c.Gender='F' AND c.Grade='A' AND c.Name='Rita'
);

