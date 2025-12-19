<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax PHP Example</title>
</head>
<body>
    <h1>Ajax PHP Example</h1>
    <form action="#" method="POST" id="empForm">
        <p><input type="text" name="full_name" id="fullName" placeholder="Full Name"></p>
        <p><input type="email" name="email" id="email" placeholder="Email"></p>
        <p><input type="text" name="contact" id="contact" placeholder="Contact"></p>
        <p>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
            </select>
        </p>
        <p><input type="submit" value="Add Employee" name="addEmp"></p>
    </form>
    <table>
        <thead>
            <tr>
                <td>S.NO</td>
                <td>Name</td>
                <td>Email</td>
                <td>Gender</td>
            </tr>
        </thead>
        <tbody id="response">
            <!-- here the data will be displayed -->
        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
        // using JQuery Ajax -> Project point of view
        $(document).ready(function(){
            $("#empForm").on("submit", function(e){
                e.preventDefault();
                var counter = 1;
                $.ajax({
                    url: "employee_post_ajax.php",
                    type: "POST",
                    dataType: "json",
                    data: $(this).serialize(),
                    success: function(response){
                        $("#response").empty();
                        // 2. Loop through the list of employees
                        $.each(response.data, function(index, employee) {
                            var row = `
                            <tr>
                                <td>${counter}</td>
                                <td>${employee.full_name}</td>
                                <td>${employee.email}</td>
                                <td>${employee.contact}</td>
                                <td>${employee.gender}</td>
                            </tr>`;
                            // 3. Append each row to the table
                            $("#response").append(row);
                            
                            counter++;
                        });
                        $("#empForm")[0].reset();
                    },
                    error: function(){
                        $("#response").html("Error sending data...");
                    }
                });
            });
        });
    </script>
</body>
</html>