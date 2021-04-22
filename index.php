<!DOCTYPE html>
<html lang="em">
    <head>
    <title>Online exam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
       body {background-color: blue;}
        body {
  background-image: url("back.gif"), url("paper.gif");
  background-color: #cccccc;
}
h3{
        -webkit-animation: color-change 1s infinite;
    
    }
    @-webkit-keyframes color-change {
        0% { color: red; }
        50% { color: blue; }
        100% { color: red; }
    }
    
    </style>
    </head>
    <body>
        <?php
 session_start();
 $datb="quiz";
 $mysql_username="root";
 $mysql_password="";
$server_name="localhost";
$conn =mysqli_connect($server_name,$mysql_username,$mysql_password,$datb);
if (isset ($_POST['save']))
{
    $name =$father =$gender =$phone =$password ="";
    $name =$_POST['n'];
    $father =$_POST['fa'];
    $gender =$_POST['ge'];
    $phone =$_POST['mo'];
    $password =$_POST['pa'];
    $mysql_qry="insert into regstation(Name,Father,Gender,Phone,Password) value ('$name','$father','$gender','$phone','$password')";
    if($conn->query($mysql_qry) === TRUE)
    {
        // echo"insert";
         
              echo "<script>alert('Registard succes');</script>";
    }
    else
              {
                echo"error;" .$mysql_qry."<br>".$conn->error;
        
        }
}
if (isset($_POST['login']))
{
    $_SESSION['Phone'] =$_POST['mo'];
    $phone =$password =$ph ="";
    $phone =$_POST['mo'];
	$password =$_POST['pa'];
	$result ="SELECT * From regstation where Phone='$phone' AND Password='$password'";
    $res=mysqli_query($conn,$result);
    $mo=$pa="";
    while($row=mysqli_fetch_array($res))
    {

    $mo=$row['Phone'];
		$pa=$row['Password'];
    }
	
	if($phone == $mo && $password == $pa )
	{
		$MSG="WELLCOME".$ph;
		 
echo "<script>alert('$MSG');</script>";
echo"<script> window.location.href='test.php';</script>";

	}
	else
	{
		
		
			echo "<script>alert('invalid user');</script>";
	}
}


        ?>
<div class="container-fluid p-2 bg-dark text-white">
  <div class="row">
    <div class="col-sm-10">
      <h3 class="ml-4">Online Exam</h3></div>
      <div class="col-sm-2">
          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
   Login
  </button>

                <!-- The Modal-->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h1 class="modal-title">Login Form</h1>
                                <button type="button" class="close" data-dismiss="modal">x</button>
                            </div>

                            <!-- Modal body  navevar login-->
                            <form action="" method="post">
                                <div class="modal-body">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>

                                        <input type="text" class="form-control" placeholder="Enter your Mobile No" name="mo">

                                    </div>
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="password" name="pa">
                                    </div>
                                    <div class="form-group">
                                        <center><input type="submit" value="Login" name="login" class="btn btn-success float- login_btn">
                                    </div>
                            </form>
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
</div>
</div>
</div>
      </div>
</div>
</div>
</div>
<div class="container-fluid p-2  ">
<div class="row">
            <div class="col-sm-8">

            </div>
<!--Registation form start-->
            <div class="col-sm-4 mt-5">
                <h2 class="text-center text-white mr-2">Registration Form</h2><br>
                <!--input class="ml-5" type="text" name="n" placeholder="Enter Your Name" size="50"/-->
                <form method="POST" action="">
                    <div class="form-row mr-2">
                        <div class="col">
                            <input type="text" class="form-control" id="email" placeholder="Enter your Name" name="n" size="10" /><br>
                            <input type="text" class="form-control" placeholder="Your Father Name" name="fa" size="10" /><br>

                            <select class="custom-select form-control" name="ge">
    <option select>Gender</option>
    <option value="Male">Male</option>
	<option value="Female">Female</option>
   </select><br><br>
                            <input type="text" class="form-control" placeholder="Enter your Mobile No" name="mo" size="10" /><br>
                            <input type="password" class="form-control" placeholder="Password" name="pa" size="10" /><br>
                            <center><input type="submit" value="save" name="save" class="btn btn-success"></center>

                        </div>
                    </div>
</div>
</div>
</div>
<div class="container-fluid p-5 my- bg-dark text-white ;">
<div class="col-sm-10">
</div>
<div class="col-sm-2">
</div>
</div>


    </body>
</html>