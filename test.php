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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
  <?php
  ///session start
  
 session_start();
 $datb="quiz";
    $mysql_username="root";
$mysql_pswssword="";
$server_name="localhost";
$conn = mysqli_connect($server_name,$mysql_username,$mysql_pswssword,$datb);
 $user="";
 if (empty($_SESSION['Phone']))
  {
    echo "<script>alert('session has been expired') ; window.location='exame2.php';</script>";
  }
$user=$_SESSION['Phone'];
?>
<div class="container p-2 my-0 bg-secondary ">
<div class="row">
<div class="col-sm-10">
<a class="text-white text-decoration-none fa fa-home" href="#">Home</a>&nbsp;&nbsp;&nbsp;
<a class="text-white text-decoration-none fa fa-book" href="exame2.php"> <?php echo 'ID '.$user; ?> </i></a>
</div>
</div>
</div><br><br>
<div class="container">
  <div class="col-lg-8 m-auto d-block">
<div class="card">
  <h3 class="text-center card-header"> you have to select only one out of 4. Best of luck:</h3>
</div></div>
<br>
<br>
<form action="check.php" method="get">
<?php
for($i=1; $i < 6; $i++){
$q ="select * from question where qid=$i";
$query= mysqli_query($conn, $q);
while($rows = mysqli_fetch_array($query)){
  ?>
  <div class="container">
  <div class="col-lg-8 m-auto d-block">
  <div class="card">
    <h6 class="card-header"><?php echo $rows['question'] ?></h6>

    <?php
    $q1 ="select * from answer where ans_id =$i";
    $query1= mysqli_query($conn, $q1);
    while($rows1 = mysqli_fetch_array($query1)){
    ?>
<div class="card-body">
  <input type="radio" name="quizcheck[<?php echo $rows1['ans_id'];?>]" value="<?php echo $rows1['aid']; ?>">
  <?php echo $rows1['answer']; ?>
</div>

<?php }
}
?>
  </div>
  </div>
   </div>
  <?php }

?>
<br><br>
<input type="submit"  name="submit" value="submit" class="btn btn-success m-auto d-block" >
</div>
</div>
</body>
</html>