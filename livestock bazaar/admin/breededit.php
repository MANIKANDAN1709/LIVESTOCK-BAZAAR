<?php 
include('.\aincludes\aheader.php');
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
$id=$_POST['edit_breedid'];
$sql="SELECT *FROM breed where breed_id='$id'";
$result=$conn->query($sql);
foreach($result as $row){
?>
<div>
    <h5 class="display-2">edit breed</h5>
</div>
<form action="scripts\sindex.php" method="POST">
    <input type="hidden" value="<?php echo($row['breed_id']);?>" name="edit_breedid"></input>
    <div class="form-group">
        <label for="name1" class="font-weight-bold">breed</label>
        <input type="text" class="form-control" id="name1" placeholder="breed name" name="edit_breed_name"  value="<?php echo($row['breed']);?>">
    </div>
    <button type="submit" class="btn btn-primary" name="edit_breed_btn" value="submit">Submit changes</button>
</form>
<?php
} 
include('.\aincludes\afooter.php')
?>