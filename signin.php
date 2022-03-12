
<!DOCTYPE html>
<html>
<head>
	<title></title>
       <style type="text/css"> 

       
       .container{
              width: 300px;
              margin: auto;
              padding: 10px 0px 10px 0px;
              text-align: center;
              border-radius: 15px 15px 0px 0px;
              background-color: #A9A9A9;

       }
       .main{
              background-color: #87CEEB;
              width: 500px;
              margin: auto;

       }
       .form-group{
              padding: 10px;
       }
       </style>
       <?php 
      include('link.php');
?>
</head>
<body>
       <div class="container"> <h1 class="text-center" class="text-success">SIGN UP </h1>

              <h4>Already have an account <a href="login.php">Login</a></h4>

       	<form action="reg.php" method="post">
                    
       		<div class="form-group">
       			<label>Email</label>
       			<input type="Email" name="mail" class="form-control">

       		</div>
       		<div class="form-group">
       			<label>Password</label>
       			<input type="password" name="pwd" class="form-control">

       		</div>
       		
       		<button type="submit" name="submit" class="btn btn-dark" class="text-center">Submit</button>
              </div>
              </form>


</body>
</html>


           




































