<?php 
include('.\aincludes\aheader.php');
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
$id=$_POST['edit_userid'];
$sql="SELECT *FROM signup where regnum='$id'";
$result=$conn->query($sql);
foreach($result as $row){
?>
<div>
    <h5 class="display-2">edit customer</h5>
</div>
<form action="scripts\sindex.php" method="POST">
    <input type="hidden" value="<?php echo($row['regnum']);?>" name="edit_userid"></input>
    <div class="form-group">
        <label for="name1" class="font-weight-bold">Name</label>
        <input type="text" class="form-control" id="name1" placeholder="user name" name="edit_user_name"  value="<?php echo($row['username']);?>">
    </div>
    <div class="form-group">
        <label for="phone1" class="font-weight-bold">phone number</label>
        <input type="tel" class="form-control" id="phone1" placeholder="phone number" size=10 name="edit_user_phone" value="<?php echo($row['phno']);?>">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            name="edit_user_email" value="<?php echo($row['emailad']);?>">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="edit_user_pass"
            value="<?php echo($row['pass']);?>">
    </div>
    <button type="submit" class="btn btn-primary" name="edit_cusbtn" value="submit">Submit changes</button>
</form>
<?php
} 
include('.\aincludes\afooter.php')
?>