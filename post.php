<?php

require('config.php');
extract($_POST);
$host = "localhost";
$user='id13517175_hemanth';
$password='p<Fl~>^#%zW^60bT';
$db_name='id13517175_testproject';
$con =mysqli_connect($host,$user,$password,$db_name);
$name=$_POST['name'];
$email=$_POST['email'];
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $password[] = $alphabet[$n];
    }
    return implode($password); //turn the array into a string
}
$password= randompassword();
$sql="select * from registration where ( email='$email');";
        $res=mysqli_query($con,$sql);
        if (mysqli_num_rows($res) > 0) {
        // output data of each row
        $row = mysqli_fetch_assoc($res);
        }
        if($email==$row['email'])
        {
            echo "Email already exists";
        }
        else{

$sql1="INSERT into registration(name,email,password) VALUES('$name','$email','$password')";

$success = $mysqli->query($sql1);
 if($success)
 {

$to=$email;

$msg= "Thanks for new Registration.";   

$subject="Email verification(mess complaints)";

$headers .= "MIME-Version: 1.0"."\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

$headers .= 'From:mess complaints <hemanthchandragiri2001@gmail.com>'."\r\n";

        

$ms.="<html></body><div><div>Dear $name,</div></br></br>";

$ms.="<div style='padding-top:8px;'>You have registered for mess complaints form here is your password</div>

<div style='padding-top:10px;'>your password is $password</div>

<div style='padding-top:4px;'>don't share it with anyone</div></div>

</body></html>";

mail($to,$subject,$ms,$headers);

echo "<script>alert('Registration successful, please check your password in the registered Email-Id');</script>";

echo "<script>window.location = 'https://messcomplaint.000webhostapp.com/';</script>";

}

else

{

echo "<script>alert('Data not inserted');</script>";

}
}

?>