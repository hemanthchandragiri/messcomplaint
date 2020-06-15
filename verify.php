
<!DOCTYPE html>

<html lang="en">

	<head>
	     <link rel="icon" href="logo.png" type="image/x-icon">
<style>
body{
    background:#0c9463;
}
    .container-fluid{
    text-align: center;
  margin:auto;
	width:350px;
	height:375px;
  background: #0c151b;  
  border-radius: 10px;
  box-shadow: 0px 10px 36px 12px rgba(0,0,0,1);
    }
    	input[type=text],input[type=email]
	{
	width: 80%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
	}
	h3{
	    color: #fff; 
		text-shadow: 0 0 10px rgba(0,0,0,0.3); 
		letter-spacing:1px;
		 text-align:center;
		 font-style: italic;
	}
	  ::placeholder
  {
    color: #d9d9d9;
  }
  input[type=submit]
  {
        display: inline-block;
  padding: 5px 15px;
  
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-image: linear-gradient(to right,#00b4db,#0083b0)	;
 
  border: none;
  border-radius: 10px;
  box-shadow: 0 7px #999;
  }
  p{
      color:white;
  }
  a{
      
      color:red;
  }
</style>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<meta charset="utf-8">

		<title>Email Verificaton</title>

		<meta name="generator" content="Bootply" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!--[if lt IE 9]>

			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>

		<![endif]-->

		<link href="css/styles.css" rel="stylesheet">

	</head>

	<body>
	          <div class="collegelogo" style="text-align: center;">
 <img src="logo3.png" alt="College Logo" height="100px" ></div>
<div class="container-fluid">
<br>
 <div class="col-sm-6">

    <div class="row">

      <div class="col-xs-12">

        <h3>Verification of Email for Complaint Submission</h3>

		<hr >

		<form name="insert" action="post.php" method="post">

     <table width="100%"  border="0">

    <tr>



    <td width="71%"><input type="text" name="name" id="name" value=""  class="form-control" required placeholder="Username" /></td>

  </tr>  

  <tr>

 

    <td width="71%"><input type="email" name="email" id="email" value=""  class="form-control" required placeholder="Email" /></td>

  </tr>



 <tr>

  

    <td width="71%"><input type="submit" name="submit" value="Submit" class="btn-group-sm" /> </td>

  </tr>
  

</table>

 </form>


      </div>

    </div>

  </div><!--/center-->
<p>Already Registered ?
  <a href="index.html">submit your complaint here</a></p>
    <p><a href="mailto:chandragirihemanth2001@gmail.com">Forgot Password? Mail us Here!</a></p>

</div><!--/container-fluid-->

	<!-- script references -->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

		<script src="js/bootstrap.min.js"></script>

	</body>

</html>