<?php 
include('.\aincludes\aheader.php');
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
$id=$_POST['edit_categoryid'];
$sql="SELECT *FROM category where category_id='$id'";
$result=$conn->query($sql);
foreach($result as $row){
?>
<div>
    <h5 class="display-2">edit category</h5>
</div>
<form action="scripts\sindex.php" method="POST">
    <input type="hidden" value="<?php echo($row['category_id']);?>" name="edit_catid"></input>
    <div class="form-group">
        <label for="name1" class="font-weight-bold">category</label>
        <input type="text" class="form-control" id="name1" placeholder="category name" name="edit_category_name"  value="<?php echo($row['category']);?>">
    </div>
    <button type="submit" class="btn btn-primary" name="edit_catbtn" value="submit">Submit changes</button>
</form>
<?php
} 
include('.\aincludes\afooter.php')
?>