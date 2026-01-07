const buttonOne = document.getElementById("buttonOne");
const buttonTwo = document.getElementById("buttonTwo");
const buttonThree = document.getElementById("buttonThree");

const myform = document.getElementById("myform");

//mouse events: 1 click  
buttonOne.addEventListener("click", function(){
    console.log("You clicked the button");
    alert("You clicked the button");
});

//mouse event: 2 mouseover i.e hover over element
buttonTwo.addEventListener("mouseover", function(){
    buttonTwo.innerHTML ="i am hovered";
});

//mouse event: 3 mouseout i.e hover out of element
buttonTwo.addEventListener("mouseout", function(){
    buttonTwo.innerHTML ="Hover over me";
}); 

//mouse event: 4 double click
buttonThree.addEventListener('dblclick',function(){
    alert("try to click once an twice to see the difference");
});

//keyevent i.e keyboard event
// 1.keyup
fullName.addEventListener('keyup', function(){
const msgFullName = document.getElementById("msgFullName");
msgFullName.innerHTML ="";
});
ElementInternals.addEventListener('keyup', function(){
    const msgEmail = document.getElementById("msgEmail");
    msgEmail.innerHTML ="";
    });

//2.Keydown
fullName.addEventListener("keydown", function(){
    const msgFullName = document.getElementById("msgFullName");
    msgFullName.innerHTML ="typing...";
});

email.addEventListener("keydown", function(){
    const msgEmail = document.getElementById("msgEmail");
    msgEmail.innerHTML ="typing...";
});

//form event
myForm.addEventListener('submit', function(e) {
    e.preventDefault();
    const data = new FormData(myForm);
    alert(
        `----------- Form Submitted Successfully ------------\n
        Full Name: ${data.get('full_name')}\n
        Email: ${data.get('email')}`
    );
    console.log(
        `Full Name: ${data.get('full_name')}\n
        Email: ${data.get('email')}`
    );
    myForm.reset();
});

