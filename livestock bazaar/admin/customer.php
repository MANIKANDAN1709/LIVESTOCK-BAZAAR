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
            add customers
        </button>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New user</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="scripts\sindex.php" method="POST">
                <div class="form-group">
                    <label for="name1" class="font-weight-bold">Name</label>
                    <input type="text" class="form-control" id="name1" placeholder="user name" name="user_name">
                </div>
                <div class="form-group">
                    <label for="phone1" class="font-weight-bold">phone number</label>
                    <input type="tel" class="form-control" id="phone1" placeholder="phone number"size=10 name="user_phone">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1" class="font-weight-bold">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="user_email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1" class="font-weight-bold">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="user_pass">
                </div> 
                    <button type="submit" class="btn btn-primary" name="createtuserbtn" value="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<?php
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
$sql="SELECT * FROM signup";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
?>
<div class="table-responsive">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Username </th>
                <th scope="col">Phonenumber</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
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
                    <?php echo($row["username"])?>
                </th>
                <td>
                    <?php echo($row["phno"])?>
                </td>
                <td>
                    <?php echo($row["emailad"])?>
                </td>
                <td>
                    <?php echo($row["pass"])?>
                </td>
                <td>
                    <form action="scripts\sindex.php" method="post">
                        <input type="hidden" value=<?php echo($row["regnum"]);?> name="del_userid"></input>
                        <button class="btn btn-danger" name="del_user_btn" value="delete">delete</button>
                    </form>

                </td>
                <td>
                    <form action=".\customeredit.php" method="post">
                        <input type="hidden" value=<?php echo($row["regnum"]);?> name="edit_userid"></input>
                        <button class="btn btn-secondary" name="edit_user_btn" value="edit">edit</button>
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