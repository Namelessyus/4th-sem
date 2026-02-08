<?php
include "db_connect.php";
$result = mysqli_query($conn, "SELECT * FROM participants");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Participants List</title>
</head>
<body>

<h2>Registered Participants</h2>

<table border="1" cellpadding="5">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>College</th>
    <th>Roll</th>
    <th>Position</th>
    <th>Experience</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['full_name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td><?= $row['phone'] ?></td>
    <td><?= $row['college'] ?></td>
    <td><?= $row['roll_number'] ?></td>
    <td><?= $row['position'] ?></td>
    <td><?= $row['experience'] ?></td>
</tr>
<?php } ?>

</table>

</body>
</html>
