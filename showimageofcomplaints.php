<?php
session_start();
$servername = "localhost";
$username = "id13517175_hemanth";
$password = "p<Fl~>^#%zW^60bT";                 // server connection
$dbname = "id13517175_testproject";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true) {

    echo "Welcome to admin's area, !";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    echo " <p> <font color =white>connected to database</font></p>" ;

$sql = "SELECT id,rollno,date,image,status FROM complaint ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th>id</th><th>Rollno</th><th>Uploaded Date<th>Uploaded Image</th><th>status</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr><td>".$row["id"]."</td>
        <td>". $row["rollno"]. "</td>
        <td>".$row["date"]."</td>
        <td>"."<img src='images/".$row['image']."'height='150' width='250'/ >"."</td>
        <td>".$row["status"]."</td></tr>";//fetches images from the images folder 

    }
    echo "</table>";
} else {
    echo "0 results";// if the database table is empty
}

$conn->close();}
else{
    echo "<h1>Please login to see the this page<br> <a href ='login.html'>login</a></h1>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" href="logo.png" type="image/x-icon">
<style>
    
table, th, td {
    border: 1px solid white;
    color: aliceblue;
    font-size: 20px;
   
}
    th
    {
        width:5%;

    }
    h1
    {
        color :red;
        text-align:center;
    }
    button{
        margin:auto;
        text-align:center;
    }
    body
    {
         background-image: linear-gradient(to right ,#0f0c29,#302b63,#24243e);
    }
    echo
    {
        color: aliceblue;
    }
    
</style>
</head>

<body>


</body>
</html>