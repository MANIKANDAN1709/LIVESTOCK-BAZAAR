<?php 
include('.\aincludes\aheader.php');
session_start();
if(isset($_SESSION['sucess'])){
  ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>
        <?php
    echo($_SESSION['sucess']);
    unset($_SESSION['sucess']);
    ?>
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}
if(isset($_SESSION['message'])){
  ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>
        <?php
    echo($_SESSION['message']);
    unset($_SESSION['message']);
    ?>
    </strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
}
?>




<!-- Button trigger modal -->
<div class="row">
    <div class="col text-center">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal">
            add category
        </button>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="scripts\sindex.php" method="POST">
                    <div class="form-group">
                        <label for="category">category</label>
                        <input type="text" class="form-control" id="category"
                            placeholder="category" name="addcategory">
                    </div>
                    <button type="submit" class="btn btn-primary" name="submitcategorybtn"
                        value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<?php
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
$sql="SELECT * FROM category";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
?>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">category id</th>
                <th scope="col">category</th>
                <th>delete</th>
                <th>edit</th>
            </tr>
        </thead>
        <?php
    while($row = $result->fetch_assoc()) {
      ?>
        <tbody>
            <tr>
                <th scope="row">
                    <?php echo($row["category_id"])?>
                </th>
                <td>
                    <?php echo($row["category"])?>
                </td>
                <td>
                    <form action="scripts\sindex.php" method="post">
                        <input type="hidden" value=<?php echo($row["category_id"]);?> name="del_categoryid"></input>
                        <button class="btn btn-danger" name="del_category_btn" value="delete">delete</button>
                    </form>

                </td>
                <td>
                    <form action=".\categoryedit.php" method="post">
                        <input type="hidden" value=<?php echo($row["category_id"]);?> name="edit_categoryid"></input>
                        <button class="btn btn-secondary" name="edit_category_btn" value="edit">edit</button>
                    </form>

                </td>
            </tr>
        </tbody>
        <?php
    }
    ?>
    </table>
</div>
<?php
        }
        else{
          echo "no recors found";
        }
           ?>
<?php include('.\aincludes\afooter.php')?>