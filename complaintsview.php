<?php

include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM complaint");

	$i=0;
	session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome admin's area, " ;
    echo "<table>
	<tr>
	<td>id</td>
	<td>Username</td>
	<td>rollno</td>
	<td>time</td>
	<td>email</td>
	<td>complaint</td>
	<td>date</td>
	<td>complaintdate</td>
	<td>week</td>
	<td>image</td>
	<td>status</td>
	<td>Change status</td>

	</tr>";
	while($row = mysqli_fetch_array($result)) {
	?>

	<tr>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["username"]; ?></td>
	<td><?php echo $row["rollno"]; ?></td>
	<td><?php echo $row["time"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["complaint"]; ?></td>
	<td><?php echo $row["date"]; ?></td>
	<td><?php echo $row["complaintdate"]; ?></td>
	<td><?php echo $row["week"]; ?></td>
	<td><?php echo $row["image"]; ?></td>
	<td><?php echo $row["status"];;?></td>
	<td><a href="update.php?id=<?php echo $row["id"]; ?>">Resolve Now</a></td>
        	
	</tr>
	<?php
	$i++;
	}
}
	else
{
	echo "<h1>Please login to see the this page<br> <a href ='login.html'>login</a></h1>";
}
	?>

</table>
<!DOCTYPE html>
<html>
<head>
     <link rel="icon" href="logo.png" type="image/x-icon">
	<style type="text/css">
		table, tr, td {
    border: 1px solid aliceblue;
    color: aliceblue;
   
}
td a{
	color: white;
}
    td
    {
        width:10%;
    }
    body
    {
         background-image: linear-gradient(to right ,#0f0c29,#302b63,#24243e);
    }
    h1
    {
        color:red;
        text-align:center;
    }
	</style>

</head>
<body>
</body>
</html>