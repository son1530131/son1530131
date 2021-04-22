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
  ///session start
  
 session_start();
 $datb="quiz";
    $mysql_username="root";
$mysql_pswssword="";
$server_name="localhost";
$con = mysqli_connect($server_name,$mysql_username,$mysql_pswssword,$datb);

if (isset ($_GET['submit'])){
    if(!empty($_GET['quizcheck'])){
      
      $count = count($_GET['quizcheck']);
      
        $result =0;
        $i=1;
        $selected = $_GET['quizcheck'];
       // print_r($selected);
        $q ="select * from question";
        $query = mysqli_query($con,$q);

  while ($rows=mysqli_fetch_array($query)){
         //print_r ($rows['ans_id']);
            $qidd=$rows['qid'];
            if (!empty($selected[$i]))
            {
            $checked = $rows['ans_id'] == $selected[$i];
           // print_r($checked.'counttt'.$count);
           // print_r($selected[$i]);
           if($checked){
                $result++;
            }
          }
            $i++;
        }
        
    

        }
        else 
        echo "<script>alert('please select an option') ; window.location='test.php';</script>";

    }

  if (empty($_SESSION['Phone']))
  {
    echo "<script>alert('session has been expired') ; window.location='exame2.php';</script>";
  }
    $user=$_SESSION['Phone'];
$finalresult = "insert into user(username,totalques,answercoract) values('$user','5','$result') ";
$queryresult = mysqli_query($con,$finalresult);
?>
<div class="container">
  <div class="col-lg-8 m-auto d-block">
<div class="card mt-5"> 
  <h3 class="text-center card-header"> Result &nbsp;<?php echo 'ID '.$user; ?> </h3>
</div></div>
<br>

<div class="container">
    <div class="col-lg-8 m-auto d-block">
    <table class="table table-bordered">
    <thead>
      <tr>
    <td><?php echo "out of ".$qidd;?>
        </td>
    <td><?php echo" you have selected " .$count. "options";?></td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo" Your total score" ; ?></td>
        <td><?php echo ''.$result;?></td>
      </tr>
      </tbody>
  </table>
    </div>
   
</div>
</body>
</html>
<?php 
if (!empty($_GET['quizcheck'])){
  session_unset();
  session_destroy();
  
}
?>