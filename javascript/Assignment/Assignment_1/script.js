console.log("Javascript Assignment: Grocery Store Billing System");

//1. Display a list of available products (name, price, stock).
console.log("List of Available Products:");
console.log("1. Rice  - Rs.120  Stock: 10");
console.log("2. Sugar - Rs.80   Stock: 15");
console.log("3. Milk  - Rs.50   Stock: 20");
console.log("4. Bread - Rs.40   Stock: 8");
console.log("5. Eggs  - Rs.10   Stock: 30");

//2. Provide menu options:
//- View Products
//- Add to Cart
//- Remove from Cart
//- View Cart
//- Checkout
//- Exit

console.log("Menu");
const Products= ["1. Rice  - Rs.120  Stock: 10",
    "2. Sugar - Rs.80   Stock: 15",
    "3. Milk  - Rs.50   Stock: 20",
    "4. Bread - Rs.40   Stock: 8",
    "5. Eggs  - Rs.10   Stock: 30"];
console.log("View Products", Products);
console.log("Add to Cart");
console.log("Remove from Cart");
console.log("View Cart");
console.log("Checkout");
console.log("Exit");

//3. Allow adding/removing items from the cart with quantity input.
let cart = [];

// Add item to cart
function addToCart(item) {
    cart.push(item);
    console.log(item + " added to cart.");
}

// Remove item from cart
function removeFromCart(item) {
    let index = cart.indexOf(item);
    if (index > -1) {
        cart.splice(index, 1);
        console.log(item + " removed from cart.");
    } else {
        console.log(item + " not found in cart.");
    }
}

// Example
addToCart("Rice");
addToCart("Milk");
removeFromCart("Rice");

console.log("Current Cart:", cart);

