//Arthematic Operations in JavaScript 

//NumOne = Pascal Case
//numOne = Camel Case 
//num_one = Snake Case 

//this is Snake Case

let num_one = 10;
let num_two = 20;

let result_sum = num_one + num_two; //Addition
let result_sub = num_one - num_two; //Subtraction
let result_mul = num_one * num_two; //Multiplication
let result_div = num_one / num_two; //Division
let result_mod = num_one % num_two; //Modulus
let result_exp = num_one ** num_two; //Exponentiation

console.log("Addition",result_sum);
console.log("Subtraction",result_sub);
console.log("Multiplication",result_mul);
console.log("Division",result_div);
console.log("Modulus",result_mod);
console.log("Exponentiation:", result_exp);

//checking type of operator using typeof operator
console.log(typeof result_div);
console.log(typeof "DAV College");


//Assignment Operators in JavaScript
var a = 10;
var b = 20;
var d = a;
var e = 10;
var c = a + b; 

//Comparison Operators in JavaScript
console.log("a != b: ", a!=b);
console.log("a ==b:", a == b); 
console.log("a > b", a > b);
console.log("a < b", a < b); 
console.log("a >= b", a >= b); 
console.log("a <= b", a <= b); 
console.log("d === a", d === a);
console.log("d === e", d === e);
console.log("d == a", d == a);
console.log("d == e", d == e);

//incase of string for === and ==
let name = 'DAV';
let title = 'college_name';
let college = 'DAV';
console.log("name == title:", 'college_name'  == title);
console.log("college == name:", college == 'college_name');
console.log("college == title:", college == title);
console.log("name === title:", 'college_name' === title);
console.log("college === name:", college === 'college_name');
console.log("college === title:", college === title);
let price = 120;
let total = '120';
console.log("price == total:", price == total); //true
console.log("price === total:", price === total); //true

//Logical Operators in JavaScript
console.log("a != b && a == b:", a != b && a == b); //Logical AND
console.log("a != b && a == d:", a != b && a == d); //Logical AND
console.log("a != b || a == b:", a != b || a == b); //Logical OR
console.log("a != b || a == d:", a != b || a == d); //Logical OR
console.log("a != b || a == b:", !(a != b) || a == b); //Logical NOT


