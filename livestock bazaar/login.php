session_start();
<?php
    if(isset($_POST['logsubmit'])){

        $email=$_POST['email'];
        $pass=$_POST['pass'];
        //$pass = hash('sha512', $_POST['pass']);
        //var_dump($_POST);
        $conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
        $sql="SELECT * FROM signup where (emailad='$email')";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            $_SESSION['name']=$row["username"];
            //echo "<br>"."name " . $row["username"]."<br>"."password: " . $row["pass"]."<br>";
           ?>
<script>
document.getElementById("modelbtn").style.display = "none";
</script>
<?php
        }
        header("location:index.php");
    }
    else {
    header("location:pages\signup.php");
    }
}
?>