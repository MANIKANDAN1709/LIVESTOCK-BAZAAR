<?php include('../includes/header.php')?>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <span class="navbar-brand mb-0 h1">LIVESTOCK BAZAAR</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php"> <i class="fa fa-house-user mr-2" aria-hidden="true"></i>Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="explore.php"> <i class="fas fa-search mr-2"  aria-hidden="true"></i>explore</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="aboutus.php"><i class="fas fa-address-card mr-2"  aria-hidden="true"></i>About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php"> <i class="fas fa-id-card-alt  mr-2" aria-hidden="true"></i>contact us</a>
            </li>
            <button type="button" class="btn btn-outline-light ml-3">
                post ad
            </button>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-outline-light ml-3" data-toggle="modal"
                data-target="#exampleModalCenter" id="modelbtn" style="display:inline;">
                Login
            </button>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <?php
            if(isset( $_SESSION['name'])){
                $user=$_SESSION['name'];
                echo"$user";
            }
    ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../pages/myprofile.php">View profile </a>
                    <a class="dropdown-item" href="#">post ad</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages\logout.php">logout</a>
                </div>
            </li>
        </ul>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form autocomplete="off" method="POST" action="./login.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password" name="pass">
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-lg" name="submit"
                                value="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p> don't have account <a href="pages\signup.php"><span class="badge badge-secondary">create new
                                account?</span></a></p>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- navbar -->
<?php include('../includes/footer.php')?>
