<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Exam</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </head>
<body>
    <?php
$datb="quiz";
    $mysql_username="root";
$mysql_pswssword="";
$server_name="localhost";
$con = mysqli_connect($server_name,$mysql_username,$mysql_pswssword,$datb);
if (isset ($_POST['save'])){
   $quet =$optn1 =$optn2 =$optn3 =$optn4 ="";
   $quet =$_POST['que'];
    $optn1 =$_POST['opt1'];
    $optn2 =$_POST['opt2'];
    $optn3 =$_POST['opt3'];
    $optn4 =$_POST['opt4'];
    
   

    $mysql_qry="insert into detail(Quiz_Title,Total_Question,Right_Answer,N_Marks,Time_Limit) values ('$que','$optn1','$optn2','$optn3','$optn4')";
    if($con->query($mysql_qry) === TRUE)
    {
       // echo"insert";
         
              echo "<script>alert('Registard succes');</script>";
    }
    else
              {
                echo"error;" .$mysql_qry."<br>".$con->error;
        
        }
}

?>
<div class="container mt-2">
<div class="col-lg-8 m-auto d-block">
<div class="card mt-4"> 
  <h3 class="text-center card-header">Enter Quiz Details</h3>
</div><br>
    
    <form method="POST" action="">
    <textarea class="form-control" rows="1" id="comment" placeholder="Enter Quiz title" required name="que"></textarea><br>
    <input type="number" placeholder="Enter total number of questions" required class="form-control" name="opt1" autocomplete="off"><br>
    <input type="number" placeholder="Enter marks on right answer" required class="form-control" name="opt2"autocomplete="off"><br>
    <input type="number" placeholder="Enter minus marks on worng answer without sign" required class="form-control" name="opt3" autocomplete="off"><br>
    <input type="number" placeholder="Enter time limit for test in minute" required class="form-control" name="opt4" autocomplete="off"><br> 
     <center><input type="submit" value="save" name="save"></center>
</form>
</div>
    </div>



</body>
</html>