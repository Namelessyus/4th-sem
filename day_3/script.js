//te operator
let isMember = true;

console.log(isMember ? '$2.00' : '$10.00' );

let isActive = false;
title = document.getElementById('title');

isActive ? title.innerHTMl = 'I am active' : title.innerHTMl = 'I am inactive';

demo = document.getElementById('demo');

//conditional statement
if(isActive){
    demo.innerHTMl = "I am today's demo";
}else{
    demo.innerHTMl = "I am not showing today..."
}

//if else if statement
let daytime = "Wednesday";
day = document.getElementById('day');

let dayCount = 4;

if(dayName === "Wednesday" && dayCount == 4){
    day.innerHTMl = dayName;
}else if (dayName === "Sunday"){
    day.innerHTMl === "Sunday";
}else {
    day.innerHTMl = "No day found";
}