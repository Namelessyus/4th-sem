function loop(x) {
    if (x >= 10){
        return;
    }
    console.log(x);
    loop(x + 1);
}

loop(0);

// student object
const student = {
    id: 4,
    is_cr: 'yes'
}

const students = [1, 2, 3, 4, 5];
let count = 0;
function getStudentCR(id){
    if (id == student.id && student.is_cr === 'yes'){
        console.log("Student ID: ", id, " is CR");
        return;
    }
    console.log(count);
    console.log(id);
    count++;
    getStudentCR(students[count]);
}

getStudentCR(students[0]);

// rest parameters
function multiply(multiplier, ...args){
    return args.map((x) => multiplier * x);
}

const arr = multiply(2, 1, 3, 4);
console.log(arr);

// [2, 6, 8]

// arrow function
const msg = () => { console.log("Simple arrow function")};
msg();

const elements = ["Hydrogen", "Helium", "Lithium", "Berrylium"];

const elementLength = elements.map((element) => element.length);
console.log(elementLength);

const len = elements.map(function(element){return element.length});
console.log(len);