<?php 
include('.\aincludes\aheader.php');
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
$id=$_POST['edit_adminid'];
$sql="SELECT *FROM admin where admin_id='$id'";
$result=$conn->query($sql);
foreach($result as $row){
?>
<div>
    <h5 class="display-2">edit admin</h5>
</div>
<form action="scripts\sindex.php" method="POST">
    <input type="hidden" value="<?php echo($row['admin_id']);?>" name="edit_admin_id"></input>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="edit_admin_name" value="<?php echo($row['username']);?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="edit_admin_pass"
            value="<?php echo($row['password']);?>">
    </div>
    <button type="submit" class="btn btn-primary" name="edit_adminbtn" value="submit">Submit changes</button>
</form>
<?php
} 
include('.\aincludes\afooter.php')
?>