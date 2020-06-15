<!DOCTYPE html>
<html>
<head>
    <title>Complaints form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="icon" href="logo.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="IIITDMMessComplaint, MesscomplaintIIITDM">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>


<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai+2|Josefin+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet"> 
</head>

<body>

<fieldset>
      <div class="collegelogo" style="text-align: center;">
 <img src="logo3.png" alt="College Logo" height="100px" ></div>
  <div class="topnav" id="myTopnav" align="center">
  <a href="https://hemanthchandragiri.github.io/mainpage/" ><i class="fa fa-home" aria-hidden="true"></i>Home</a>
  <a href="#complaint"><i class="fa fa-fw fa-envelope"></i>Complaints</a>
  <a href="http://www.iiitdm.ac.in" target="_blank"><i class="fa fa-fw fa-building-o"></i>Institute Website</a>
  <a href="https://hemanthchandragiri.github.io/mainpage/aboutpage.html" target="_blank"><i class="fa fa-fw fa-user"></i>Our Web team</a>
  <a href="login.html" target="_blank"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbspAdmin login</a>
<a href="verify.php" target="_blank"><i class="fa fa-registered" aria-hidden="true"></i>&nbspRegister</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
  </div> 
<div class="container">
    <h3 text align="center">Mess complaints </h3><br>
    <form action="data.php" method="POST" enctype="multipart/form-data" >
        <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required placeholder="Registerd Username">
        </div>
        <div class="form-group1">
            <label>RollNo:</label>
            <input type="text" name="rollno" class="form-control" required placeholder="Roll Number(e.g.EDM14I055)">
        </div>
        <div class="form-group2">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" required placeholder="Registered Email(e.g. esd14i055@iiitdm.ac.in)">
        </div>
        <div class ="form-group3">
            <label>Select Time:</label>
            <select name="time" required>
                <option value="Breakfast"style="background:#302b63 ;color: #fff">Breakfast</option>
                <option value="Lunch"style="background:#302b63 ;color: #fff">Lunch</option>
                <option value="Snacks"style="background:#302b63 ; color: #fff">Snacks</option>
                <option value="Dinner"style="background:#302b63 ;color: #fff">Dinner</option>
            </select>
           
        </div>
        <br>
        <div class="form-group4">
            <label>Select Date:</label>
            <input type="date" name="dat" pattern="yyyy-mm-dd" placeholder="yyyy-mm-dd" required>
        </div>
       
 <br>
        <div class="form-group7">
            <label>Select week:</label>&nbsp
            <select name = "week" required>
            <option value ="week1"style="background:#302b63 ;color: #fff">Week1</option>
            <option value="week2"style="background:#302b63 ;color: #fff">Week2</option>
        </select>
                </div>
                
                
                <div class="pk">
                    <label>If you want to see the menu see here:</label>
                    <br>

                    <a href = "week1.pdf">Week1 menu</a>
                    &nbsp
                    <a href = "week2.pdf">Week2 menu</a>
                </div>

    <div>
        <label>If you have any image about Complaint Upload here:</label>&nbsp&nbsp&nbsp&nbsp
        
      <input type="file" name="image" style="color: #fff" >
    </div>
    

        <div class="form-group8">
            <label>Complaint:</label>
            <textarea class="form-group9" name="complaint" id="complaint" placeholder="Your complaint..."required ></textarea>
        </div>
        <asp:TextBox ID="category" runat="server"></asp:TextBox>
<div class="form-group11">
    <label>Password:</label><br>
    <input type="password" name="password" id="password" required placeholder="password"><br>
    <input type="checkbox" onclick="myFunctionk()" ><label>Show Password</label>
</div>
<br>
    
    <div>
        <div class ="ct-btn">

        <div style="text-align: center;">
        <div class="form-group10">
            
            <button class="btn-success" type="submit">Submit</button>
            <br>
            <br>
        </div>

    </div>
</div>
    
            </form>
 
 
</div>
<script type="text/javascript"> 
    //basically it gets all divisions after div with "my topnav "id by clicking at the icon...
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
function myFunctionk() {
  var x = document.getElementById("password");//
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
</fieldset>




</body>
</div>
</html>