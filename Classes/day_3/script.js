// ternary operator
let isMemeber = true;

console.log(isMemeber ? '$2.00' : '$10.00');

let isActive = false;
title = document.getElementById('title');

isActive ? title.innerHTML = 'I am active' : title.innerHTML = 'I am inactive';

demo = document.getElementById('demo');
// conditional statement
if (isActive){
    demo.innerHTML = "I am today's demo";
} else {
    demo.innerHTML = "I am not showing today..."
}

// if else if statement
let dayName = "Wednesday";
day = document.getElementById('day');

let dayCount = 4;

if (dayName === "Wednesday" && dayCount == 4){
    day.innerHTML = dayName;
} else if (dayName === "Sunday"){
    day.innerHTML === "Sunday";
} else {
    day.innerHTML = "No day found";
}