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
            add cattle
        </button>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New cattle</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="scripts\sindex.php" method="POST">
                  
                    <button type="submit" class="btn btn-primary" name="submitcattlebtn" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<?php
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
$sql="SELECT * FROM cattle";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
?>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">cattle id</th>
                <th scope="col">username</th>
                <th scope="col">password</th>
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
                    <?php echo($row["cattle_id"])?>
                </th>
                <td>
                    <?php echo($row["username"])?>
                </td>
                <td>
                    <?php echo($row["password"])?>
                </td>
                <td>
                    <form action="scripts\sindex.php" method="post">
                        <input type="hidden" value=<?php echo($row["cattle_id"]);?> name="del_cattleid"></input>
                        <button class="btn btn-danger" name="del_btn" value="delete">delete</button>
                    </form>

                </td>
                <td>
                    <form action=".\cattle_edit.php" method="post">
                        <input type="hidden" value=<?php echo($row["cattle_id"]);?> name="edit_cattleid"></input>
                        <button class="btn btn-secondary" name="edit_btn" value="edit">edit</button>
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