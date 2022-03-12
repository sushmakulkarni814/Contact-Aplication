<!DOCTYPE html>
<html>
<head>
		<title></title>
		<style type="text/css">
			.container{
				width:  500px;
				height: 500PX;
				margin: auto;
				padding:10px 0px 10px 0px;
				text-align: center;
				border-radius:15px 15px 0px 0px;
				background-color: #A9A9A9;
			    align-items: center;
			}
			.form-group{
				width:  500px;
				margin: auto;
				text-align: center;
				background-color: #87CEEB;

			}
			.form-group{
				padding:20px;
			}
			table, th, td{
			border: 1px solid black;
    width: 50px;
    height:50px;
    text-align: center;
    text-align: center;
    table-layout: center;
    padding:15px;
    margin-left:150px; 
    border-color: brown;



		}
		th{
			font-size: 25px;
			color: red;
			text-align: center;
		}
		table{
			 margin-left: auto;
  margin-right: auto;
		}

		</style>

		
		<?php
		  include('link.php');
		?>
</head>
<body>
		<h1 class="text-center">Add Contacts</h1>
		
		<div class="container">
			
  			
 		 <form action="come.php" method="post">
 		 	 <div class="form-group">
    	      <label class="ss" for="Name">Name</label>
    	      <input type="text" class="form-control" placeholder="Enter your Name" name="E_Name" required>
    	     </div>

    	     <div class="form-group">
    	      <label for="Employer phone">Phone Number:</label>
    	      <input type="number" class="form-control" placeholder="Enter phone number" name="E_Phone" required>
    	     </div>

    	     <div class="form-group">
    	      <label for="Daily_wages">Email:</label>
              <input type="Email" class="form-control"  placeholder="Enter email" name="Email" required>
             </div>

              
  			 
    	      
   
    <button type="submit" class="btn btn-primary" onclick="alert('Form submitted')">Submit</button>
  </form>
</div>
<div class="main-div">
			<h2 class="text-danger" style="text-align: center; color: darkgreen;">CONTACT INFO</h2>
			<div class="center-div">
				<div class="table-responsive">
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Phone_Number</th>
								<th>Email</th>
	

							</tr>
						</thead>
						<tbody>
							<?php
session_start();


$username = 'root';
$password = "";
$server = 'localhost';
$database = 'signup';

 $con = mysqli_connect($server, $username);
 mysqli_select_db($con, $database);
 $q = (" SELECT * FROM `info` ");
 $query = mysqli_query($con,$q);
 $nums = mysqli_num_rows($query);
 while($res = mysqli_fetch_array($query)){
 	?>
 	<tr>
 		<td><?php echo $res['Name']; ?></td>
 		<td><?php echo $res['Phone_Number']; ?></td>
 		<td><?php echo $res['Email']; ?></td>
 		
 	</tr>
 	<?php
 }
 ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>


</body>
</html>
