console.log("Lab 2 - Array Object & Array Methods");

// defining an array
// method one: defining as data type
const places = ["Dharan", "Hetauda", "Biratnagar", "Pokhara"];
console.log("Places of Nepal: ", places);
console.log(places[0]);
console.log(places[1]);

// method two: defining as an array object
const actors = new Array("Dayahang Rai", "Saugat Malla", "Rajesh Hamal");
console.log("Actors of Nepal: ", actors);
console.log(actors[0]);

// accessing array elements using for loop
for(let i =0; i < 3; i++){
    console.log("Actor: ", actors[i]);
    if(actors[i] == "Rajesh Hamal"){
        console.log("He is the superstar of Nepali Film Industry");
    }
}
// to dynamically access the array elements we can use array.length property
// with for loop
// length is a property of an array that gives the total no of elements in
// the array
console.log("Total places: ", places.length);
console.log("Total actors: ", actors.length);

// accessing array elements using length property
for(let i = 0; i < places.length; i++){
    console.log("Place: ", places[i]);
}
for(let i = 0; i < actors.length; i++){
    console.log("Actor: ", actors[i]);
}

// exercise to implemenent the concept from above snippets
// count the total number of elements in the array
// count total number of 'Anmol' and 'Sabda' in an array
const names = ["Anmol", "Himal", "Sabda", "Anmol", "Aarzan", "Sabda", 
    "Anmol", "Suman", "Prajwal"];
let anmol_count = 0;
let sabda_count = 0;
let total_count = 0;
for(let i = 0; i < names.length; i++){
    if(names[i] == "Anmol"){
        anmol_count++;
    } else if (names[i] == "Sabda"){
        sabda_count++;
    }
    total_count++;
}
console.log("Anmol Count: ", anmol_count);
console.log("Sabda Count: ", sabda_count);
console.log("Total Count: ", total_count);

// foreach loop
const items = ["Books", "Watches", "Mobiles", "Baskets", "Tools"];
let count = 1;
items.forEach(item => {
    console.log("Item No: ", count ,  item);
    count++;
});

// some of the array methods
// 1. push() - adds element in last index of array
const players = ["Messi", "Ronaldo", "Kami", "Neymar"];
console.log("Players before: ", players);
players.push("Ronaldinho"); // will be added after 'Neymar'
players.push("Gopal"); // will be added after 'Ronaldinho'
console.log("Players after: ", players);

// 2. pop() - removes element from last index of array
console.log("Players: ", players);
players.pop(); // will remove 'Gopal' from an array
console.log("Players after removing: ", players);

// 3. shift() - removes element from first index of array
players.shift(); // will remove 'Messi'
console.log("Players: ", players);

// 4. unshift() - adds element in first index of array
players.unshift("Hari");
console.log("Players: ", players);

// 5. map() - creates new array from an elements of the array by mapping
// the condition that is applied
const cities = ["Dharan", "Kathmandu", "Birtamod", "Hetauda", "Lalitpur"];
let i = 0;
const cities_lower = cities.map((city) => {
    city = cities[i].toLowerCase();
    i++;
    return city;
});

console.log("Cities: ", cities);
console.log("Cities LowerCase: ", cities_lower);
// 6. filter() - creates new array by filtering the elements
const cases = ["KATHMANDU", "dharan", "LALITPUR", "BIRTAMOD", "pokhara"];
// const lower_cases = cases.filter((city) => {
//     (city === city.toLowerCase() && isNaN(city));
//     return city;
// });
// console.log("Cities Cases: ", cases);
// console.log("Cities cases with filter: ", lower_cases);

const lower_cases = cases.filter((city) => {
    return city === city.toLowerCase() && isNaN(city);
});

console.log("Cities Cases: ", cases);
console.log("Cities cases with filter: ", lower_cases);