<?php
session_start();
// var_dump($_POST);
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
if(isset($_POST["submitadminbtn"])){
    $user=$_POST["ausername"];
    $pass=$_POST["apassword"];
    $sql="INSERT INTO admin (username, password) VALUES('$user','$pass')";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="account created sucesfully";
        header('location:\.\livestock bazaar\admin\admin.php');
    }
    else{
        $_SESSION['message']="account not created ";
        header('location:\.\livestock bazaar\admin\admin.php');
    }
}
if(isset($_POST["del_btn"])){
    $id=$_POST["del_adminid"];
    $sql="DELETE FROM admin WHERE admin_id='$id'";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="account deleted sucesfully";
        header('location:\.\livestock bazaar\admin\admin.php');
    }
    else{
        $_SESSION['message']="account not deleted ";
        header('location:\.\livestock bazaar\admin\admin.php');
    }
}
if(isset($_POST["edit_adminbtn"])){
    $id=$_POST['edit_admin_id'];
    $name=$_POST["edit_admin_name"];
    $pass=$_POST["edit_admin_pass"];
    $sql="UPDATE admin SET username='$name',password='$pass' WHERE admin_id='$id'";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="account updated sucesfully";
        header('location:\.\livestock bazaar\admin\admin.php');
    }
    else{
        $_SESSION['message']="account not updated ";
        header('location:\.\livestock bazaar\admin\admin.php');
    }
}
if(isset($_POST["createtuserbtn"])){
    $name=$_POST["user_name"];
    $pass=$_POST["user_pass"];
    $phone=$_POST["user_phone"];
    $email=$_POST["user_email"];
    $sql="INSERT INTO signup (username,phno,emailad,pass) VALUES('$name','$pass','$phone','$email')";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="account created sucesfully";
        header('location:\.\livestock bazaar\admin\customer.php');
    }
    else{
        $_SESSION['message']="account not created ";
        header('location:\.\livestock bazaar\admin\customer.php');
    }
}
if(isset($_POST["del_user_btn"])){
    $id=$_POST["del_userid"];
    $sql="DELETE FROM signup WHERE regnum='$id'";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="account deleted sucesfully";
        header('location:\.\livestock bazaar\admin\customer.php');
    }
    else{
        $_SESSION['message']="account not deleted ";
        header('location:\.\livestock bazaar\admin\customer.php');
    }
}
if(isset($_POST["edit_cusbtn"])){
    $id=$_POST['edit_userid'];
    $name=$_POST["edit_user_name"];
    $pass=$_POST["edit_user_pass"];
    $email=$_POST["edit_user_email"];
    $phone=$_POST["edit_user_phone"];
    $sql="UPDATE signup SET username='$name',pass='$pass',phno='$phone',emailad='$email' WHERE regnum='$id'";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="account updated sucesfully";
        header('location:\.\livestock bazaar\admin\customer.php');
    }
    else{
        $_SESSION['message']="account not updated ";
        header('location:\.\livestock bazaar\admin\customer.php');
    }
}
if(isset($_POST["del_category_btn"])){
    $id=$_POST["del_categoryid"];
    $sql="DELETE FROM category WHERE category_id='$id'";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="catgeory deleted sucesfully";
        header('location:\.\livestock bazaar\admin\category.php');
    }
    else{
        $_SESSION['message']="category not deleted ";
        header('location:\.\livestock bazaar\admin\category.php');
    }
}
if(isset($_POST["submitcategorybtn"])){
    $cat=$_POST["addcategory"];
    $sql="INSERT INTO category (category) VALUES('$cat')";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="category created sucesfully";
        header('location:\.\livestock bazaar\admin\category.php');
    }
    else{
        $_SESSION['message']="category not created ";
        header('location:\.\livestock bazaar\admin\category.php');
    }
}
if(isset($_POST["edit_catbtn"])){
    $id=$_POST['edit_catid'];
    $cat=$_POST['edit_category_name'];
    $sql="UPDATE category SET category='$cat' WHERE category_id='$id'";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="category updated sucesfully";
        header('location:\.\livestock bazaar\admin\category.php');
    }
    else{
        $_SESSION['message']="category not updated ";
        header('location:\.\livestock bazaar\admin\category.php');
    }
}
if(isset($_POST["submitbreedbtn"])){
    $breed=$_POST["addbreed"];
    $cat=$_POST["breedcategory"];
    $sql="INSERT INTO breed (breed,category_id) VALUES('$breed','$cat')";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="breed created sucesfully";
        header('location:\.\livestock bazaar\admin\breed.php');
    }
    else{
        $_SESSION['message']="breed not created ";
        header('location:\.\livestock bazaar\admin\breed.php');
    }
}
if(isset($_POST["del_breed_btn"])){
    $id=$_POST["del_breed_id"];
    $sql="DELETE FROM breed WHERE breed_id='$id'";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="breed deleted sucesfully";
        header('location:\.\livestock bazaar\admin\breed.php');
    }
    else{
        $_SESSION['message']="breed not deleted ";
        header('location:\.\livestock bazaar\admin\breed.php');
    }
}
if(isset($_POST["edit_breed_btn"])){
    $id=$_POST['edit_breedid'];
    $breed=$_POST['edit_breed_name'];
    $sql="UPDATE breed SET breed='$breed' WHERE breed_id='$id'";
    $result = $conn->query($sql);
    if( $result===true){
        $_SESSION['sucess']="category updated sucesfully";
        header('location:\.\livestock bazaar\admin\breed.php');
    }
    else{
        $_SESSION['message']="category not updated ";
        header('location:\.\livestock bazaar\admin\breed.php');
    }
}
?>