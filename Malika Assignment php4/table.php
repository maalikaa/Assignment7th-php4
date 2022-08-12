<?php
  include 'connection.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="bootstrap_4\css\bootstrap.min.css" />
        <style>
            #top{
                padding-top: 30px;
                padding-left: 60px;
                border-bottom: 2px solid gray;
            }
            #name{
                font-family: copper;
                font-size: 28px;
                padding-bottom: 20px;
            }
            #content{
                min-height:400px;
            }
        </style>
	</head>
	<body>
		<div class="container-fluid">
            <div class="row" id="top"> 
                 <div class="col-md-3"> 
                    <a href="index.php">back to form</a>
                </div>
                <div class="col-md-5"> 
                    
                </div>
                <div class="col-md-4"> 
                    <h2 id="name" >Sultan Razia high school</h2>
                </div>
            </div>
            <br>
            <div class="row"> 
                <div class="col-md-3" id="#menu"> 
                </div>
                <div class="col-md-6" id="s"> 
                    <form action="" class="form-inline" action="" method="post">
                        <div class="form-group"> 
                             <select name="search" id="opt">
                                <option value="department">Department</option>
                                 <option value="first_name">Name</option>
                                 <option value="email">email</option>
                             </select>
                        </div>
                        <div class="form-group">
                             <input type="text" class="form-control" name="sinput" placeholder="Search here...">
                             <button type="submit" name="submit" value="Search" class="btn btn-success">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="row" id="content"> 
                <div class="col-md-12"> 
                    <table class="table table-striped">
                        <thead>
                            <tr class="info" style="background-color:lightblue;">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Department</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php 
                                if(isset($_POST['submit'])){
                                    if(empty($_POST['search'])){
                                        $search=null;
                                    }else{
                                        $search=$_POST['search'];
                                    }
                                    if(empty($_POST['sinput'])){
                                        $sinput=null;
                                    }else{
                                        $sinput=$_POST['sinput'];
                                    }
                                    $sql = "SELECT `id`, `first_name`, `last_name`, `email`, `department` FROM `teacher` WHERE $search  like '%$sinput%'";
                                    $result = mysqli_query($connect,$sql);
                                    if(mysqli_num_rows($result)>0){
                                         while($row=mysqli_fetch_row($result)){
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                    echo "</tr>";
                                        }
                                    }
                                }
                                    else{
                                        $sql = "SELECT `id`, `first_name`, `last_name`, `email`, `department` FROM `teacher`";
                                        $result = mysqli_query($connect,$sql);
                                        if(mysqli_num_rows($result)>0){
                                            while($row=mysqli_fetch_row($result)){
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                        echo "</tr>"; 
                                    }
                                    }
                                }  
                           ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>    
    </body>
</html>