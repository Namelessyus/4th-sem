// Key Collections in JavaScript
// 1. Map
const sayings = new Map();
// to add key-value in map
// set() takes two parameter: 1st param as key and 2nd param as value
sayings.set("dog", "woof");
sayings.set("cat", "meow");
sayings.set("elephant", "toot");

console.log(sayings);
// to access data from Map object 
// get() takes single parameter which is key
console.log(sayings.get("dog"));

const customer = new Map();
customer.set("id", 12);
customer.set("name", "Mohan Lal");
customer.set("email", "mohan@gmail.com");
customer.set("contact", 9874512);
console.log("Customer ID: ", customer.get("id"));
console.log("Customer Name: ", customer.get("name"));
console.log("Customer Email: ", customer.get("email"));
console.log("Customer Contact: ", customer.get("contact"));

// to check if the key is available in the map
// has() method is used
console.log(customer.has("gender"));
console.log(customer.has("email"));

const user = new Map();
user.set("username", "mohan");
user.set("password", "1234");
user.set("usertype", "customer");

if(user.has("usertype")){
    if(user.get("usertype") === "admin"){
        console.log("Welcome to admin dashboard");
    } else if (user.get("usertype") === "customer"){
        console.log("Welcome to customer dashboard");
    }
} else {
    console.log("You're logged in as guest user");
}