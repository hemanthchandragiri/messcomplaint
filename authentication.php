<?php      
    include('connection.php');  
    $username = $_POST['user'];  //gets username from login
    $password = $_POST['password'];  //gets password here i didn't used get because it's not prefered when we use passwords
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  //removes backslashes
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username); //escapes special charaacters 
        
      
        $sql = "SELECT *from login where username = '$username' and password = '$password'"; //gets username and password from table and checks with input 
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  //fetches result as an array
        $count = mysqli_num_rows($result);//returns no.of rows   
          
        if($count == 1){  
            header('Location:afterlogin.html');//after succesfull login location
             session_start();
             $_SESSION['loggedin'] = true;
               $_SESSION['user'] = $username;
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<img src ='https://hemanthchandragiri.github.io/mainpage/logo3.png'> ";
            echo "<br><h1><i class='fa fa-exclamation-triangle' aria-hidden='true'></i><br> Either password or username not valid!<br> please check once again and contact admin<br><br><br><a href='login.html'> Go Back to Login</a></h1>";

        }     
?> 
<div class="man"> 
    <h2>
</h2>
</div>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style type="text/css">
    body
    {
        background-image: linear-gradient( to right ,#0f0c29,#302b63,#24243e);
    }
    h1
    {
    text-align: center;
    font-size: 20px;
    color: red;

  margin:auto;
    width:300px;
    height:300px;
  background: #0c151b;
  border-radius: 10px;
  box-shadow: 0px 10px 36px 12px rgba(0,0,0,1);
    }
    h2
    {
    text-align: center;
    
    color: red;
    margin-top: 5%;   
    font-size: 20px;
    }
    img
    {  
     margin-left: auto;
     margin-right: auto;
     display: block;
     height: 100px;
  
    }
    button
    {
        border-radius: 5px;
        
    }
</style></head>


     


</html>