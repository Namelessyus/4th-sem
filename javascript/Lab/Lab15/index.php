<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax PHP Example</title>
</head>
<body>
    <h1>Ajax PHP Example</h1>
    <form action="#" method="POST" id="studentForm">
        <p><input type="text" name="full_name" id="fullName" placeholder="Full Name"></p>
        <p><input type="email" name="email" id="email" placeholder="Email"></p>
        <p><input type="text" name="contact" id="contact" placeholder="Contact"></p>
        <p>
            <select name="gender" id="gender">
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="others">Others</option>
            </select>
        </p>
        <p><input type="submit" value="Add Student" name="addStudent"></p>
    </form>
    <h4 id="response"></h4>
    <script>
        // using XMLHttpRequest -> exam point of view answer for Ajax Request
        document.getElementById("studentForm").addEventListener("submit", function(e){
            e.preventDefault();

            const formData = new FormData(this);
            const xhr = new XMLHttpRequest();

            xhr.open("POST", "post_data.php", true);
            xhr.onload = function(){
                if(xhr.status == 200){
                    document.getElementById("response").innerHTML = xhr.responseText;
                } else {
                    document.getElementById("response").innerHTML = "Error sending data..";
                }
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>