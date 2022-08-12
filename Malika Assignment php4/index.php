<?php 
	include 'connection.php';
	//data
	$first="";
	$last="";
	$email="";
	$department="";
	if(isset($_POST['save'])){
		if(!empty($_POST['first'])){
			$first=$_POST['first'];
		}
		if(!empty($_POST['last'])){
			$last=$_POST['last'];
		}
		if(!empty($_POST['email'])){
			$email=$_POST['email'];
		}
		if(!empty($_POST['department'])){
			$department=$_POST['department'];
		}
			$sql="INSERT INTO teacher VALUE(NULL,'$first','$last','$email', '$department')";
			if(mysqli_query($connect,$sql)){
				echo "data send successfully";
			}else{
				echo "You already sent";
			}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="css/indexs.css" />
		<link rel="stylesheet" href="bootstrap_4\css\bootstrap.min.css" />
		<style>
			h3{
				text-align:center;
			}
			a{
				text-decoration:none;
				color:black;
			}
			a:hover{
				text-decoration:none;
				color:black;
			}
			*{
				margin:0;
				padding:0;
			}
			body{
				
				font-family: Arial, Helvetica, sans-serif;
			}
			header{
				padding: 20px;
				font-family: Arial, Helvetica, sans-serif;
			}
			
			label{
				
				font-size: 1.2em;
				padding: 5px 0;
			}
			 
			select{
				width: 100.5%;
			}
			 input[type="submit"]{
				
				width:100%;
				top: 20px;
				background-color:#2c2c2c;
				color: white;
				border: none;
				padding:10px;
			}
			input[type="submit"]:hover{
				background-color: gray;
				color:black;
			}
		</style>
	</head>
	<body>
	
		<header class="head" style='color:#2c2c2c; font-family:arial; background-color:lightblue; border-bottom: 3px solid gray;'>
            <h3 style='font-family:cooper;' class="title">Fill The Form</h3>
           <a href="table.php">Go to admin page</a>
		</header>
		
		<div class="container" style="margin-top:40px; ">
		<class class="row">
			<div class="col-md-6">
				<form action="" role="form" method="post" class="needs-validation" >
					<div class="col-md-12">
						<div class="form-group">
							<label for="first">First Name <span style="color: red;">*</span></label>
							<input style=' border-radius:3px;' type="text" class="form-control" id="first" name="first" placeholder="First Name" pattern="^[A-Za-z ]+$" minlength = "3" maxlength = "10" required />
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="last">Last Name</label>
							<input style=' border-radius:3px;' type="text" class="form-control" id="last" name="last" placeholder="Last Name" pattern="^[A-Za-z ]+$" minlength = "3" maxlength = "10"  />
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="email">Email <span style="color: red;">*</span></label> 
							<input style=' border-radius:3px;' type="email" class="form-control" id="email" name="email" placeholder="email@example.com" pattern="^[a-z 0-9@.]+$" minlength = "12" required />
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
								<label for="" name="department">Select Department</label>
								<select name="department" id="department" class="form-control">
									<option disabled="disabled">Select field</option>
                                        <option value="Computer Science" selected="selected">Computer Science</option>
                                        <option value="Economy">Economy</option>
                                        <option value="Midicine">Midicine</option>
                                        <option value="Journalism">Journalism</option>
                                        <option value="Engineering">Engineering</option>               
                               </select>
						</div>
					</div>
						<div class="col-md-12">
						<input type="submit"  style=' border-radius:7px;' name="save" value="Submit"  />
					</div>
				</form>
			</div>
		</div>
	</body>
	<script>
		 // Disable form submissions if there are invalid fields
		(function() {
        'use strict';
        window.addEventListener('load', function() {
          // Get the forms we want to add validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
	</script>
</html>
