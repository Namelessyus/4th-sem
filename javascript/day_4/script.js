// Switch Case Statement
let code = 402;
status_msg = document.getElementById('status');

switch(code){
    case 400:
        console.log("Bad Request");
        status_msg.innerHTML = "Bad Request";
        break;
    case 401:
        console.log("Unauthorized Access");
        status_msg.innerHTML = "Unauthorized Access";
        break;
    case 402:
        console.log("Payment Required");
        status_msg.innerHTML = "Payment Required";
        break;
    case 403:
        console.log("Access Forbidden");
        status_msg.innerHTML = "Access Forbidden";
        break;
    case 404:
        console.log("Not Found");
        status_msg.innerHTML = "Not Found";
        break;
    default:
        console.log("Something went wrong");
        status_msg.innerHTML = "Something went wrong";
}

// for loop example
team = document.getElementById('team');

for(let count=0; count < 10; count++){
    const span = document.createElement("span");
    span.innerHTML = "Team <strong>" + count + "</strong><br>";
    document.body.appendChild(span); 
}