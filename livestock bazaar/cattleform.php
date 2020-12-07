<?php
session_start();
if(isset($_POST['csubmit']))
{
$catagory=$_POST['catagory'];
$gender=$_POST['gender'];
$breed=$_POST['breed'];
$age=$_POST['age'];
$price=$_POST['price'];
$praganecy=$_POST['praganecy'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$cub=$_POST['cub'];
if($cub == "option1")
{
$cubgender=$_POST['cubgender'];
$cubagecubage=$_POST['cubage'];
}
$conn =mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql= "INSERT INTO cattle(category,breed,gender,price,age,Pregnancy_Status,cgender,cage)VALUES ('$catagory','$breed','$gender' , '$price' ,'$age', '$praganecy','$cubgender','$cubagecubage')";
$sql2="INSERT INTO location (city,state,zip_code)  VALUES ('$city','$state','$zipcode')";
// if($cub == "option1")
// {
// $sql3="INSERT INTO cub (gender,age)  VALUES ('$cubgender','$cubagecubage')";
}
mysqli_query($conn, $sql2);
// mysqli_query($conn, $sql3);
if(mysqli_query($conn, $sql)) {
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
// if ($tr=== TRUE) {
//   $_SESSION['msg']="data successfully you can login now !!!"; 
//   header("Location: index.php");
//   } else {
//     echo "Error: " . $sql . "<br>" . $con->error;
//   }
//}
?>