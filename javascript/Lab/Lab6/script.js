const buttonOne = document.getElementById('buttonOne');
const buttonTwo = document.getElementById('buttonTwo');
const buttonThree = document.getElementById('buttonThree');

const myForm = document.getElementById('myForm');
const fullName = document.getElementById('full_name');
const email = document.getElementById('email');

// mouse event: 1. click event on element
buttonOne.addEventListener('click', function(){
    console.log("I am clicked");
    alert('I am clicked');
});
// mouse event: 2. mouseover i.e hover over element
buttonTwo.addEventListener('mouseover', function(){
    buttonTwo.innerHTML = "I am hovered";
});

// mouse event: 3. mouseout i.e hover out from element
buttonTwo.addEventListener('mouseout', function(){
    buttonTwo.innerHTML = "Hover Me";
});

// mouse event: 4. double click
buttonThree.addEventListener('dblclick', function(){
    alert('Try to click once and twice to see the difference.');
});

// keyevent i.e keyboard event
// 1. keyup
fullName.addEventListener('keyup', function(){
    const msgFullName = document.getElementById('msg_full_name');
    msgFullName.innerHTML = "";
});
email.addEventListener('keyup', function(){
    const msgEmail = document.getElementById('msg_email');
    msgEmail.innerHTML = "";
});
// 2. keydown
fullName.addEventListener('keydown', function(){
    const msgFullName = document.getElementById('msg_full_name');
    msgFullName.innerHTML = "typing..";
});
email.addEventListener('keydown', function(){
    const msgEmail = document.getElementById('msg_email');
    msgEmail.innerHTML = "typing..";
});

// form event
myForm.addEventListener('submit', (e) => {
    e.preventDefault(); // prevent the default action of form submission
    const data = new FormData(myForm); // creating the form data object
    // validating the form fields
    let isValid = true;
    if(data.get("full_name").trim() === ""){
        const msgFullName = document.getElementById('msg_full_name');
        msgFullName.innerHTML = "Full Name is required";
        isValid = false;
    } else if(data.get("email").trim() === ""){
        const msgEmail = document.getElementById('msg_email');
        msgEmail.innerHTML = "Email is required";
        isValid = false;
    } else {
        // here you can send the data to server using fetch or XMLHttpRequest
        // in this case i have just printed the data using alert
        alert(`----- Form Submitted Successfully ------
            Full Name: ${data.get("full_name")}
            Email: ${data.get("email")}`);
        // to make form empty after submission
        myForm.reset(); // it will reset all the form fields
        // to make form focus on first field after submission
        fullName.focus();
    }
});

// window event
window.addEventListener('load', function(){
    console.log("Page is loaded");
    alert("Page is loaded");
});

window.addEventListener('resize', function(){
    console.log("Window is resized");
    alert("Window is resized");
});

window.addEventListener('scroll', function(){
    console.log("Window is scrolled");
    alert("Window is scrolled");
});