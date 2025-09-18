// objects in javascript
function Person(name, age, address, gender){
    this.name = name;
    this.age = age;
    this.address = address;
    this.gender = gender;
}

const p1 = new Person("Himal", 25, "Lalitpur", "Male");
const p2 = new Person("Mira", 22, "Biratnagare", "Female");

console.log(p1);
console.log(p2);

function Car(model, brand, engine, color){
    this.model = model;
    this.brand = brand;
    this.engine = engine;
    this.color = color;
}

const tesla = new Car("model25", "Tesla", {type: "FI", size: "4"}, "Red");
console.log(tesla);
console.log(tesla.engine.size);
console.log(tesla.engine.type);
console.log(tesla.model);

const Animal = {
    type: "Invertebrates", // property
    displayType() { // function
        console.log(this.type);
    }
}

console.log(Animal.type); // calling property
console.log(Animal.displayType()); // calling function

// we can also create instance of object using create() function
const dog = Object.create(Animal);
dog.type = "Vertebrates";
dog.displayType();