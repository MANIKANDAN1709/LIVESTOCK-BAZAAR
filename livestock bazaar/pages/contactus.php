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
                <a class="nav-link" href="../index.php"><i class="fa fa-house-user mr-2" aria-hidden="true"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="explore.php"> <i class="fas fa-search mr-2" aria-hidden="true"></i>explore</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="aboutus.php"><i class="fas fa-address-card mr-2" aria-hidden="true"></i>About
                    us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="contactus.php"> <i class="fas fa-id-card-alt  mr-2"
                        aria-hidden="true"></i>contact us</a>
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
<div class="container contact-form">
    <div class="contact-image">
        <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact" />
    </div>
    <form method="post">
        <h3>Drop Us a Message</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *"
                        value="" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="txtMsg" class="form-control" placeholder="Your Message *"
                        style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="mx-auto" style="width: 200px;">
                    <div class="form-group">
                        <button type="submit" name="btnSubmit" value="Send Message"
                            class=" btn btn-primary btn-lg">submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Content Row -->
<div class="row my-4">
    <!-- Map Column -->
    <div class="col-lg-8 mb-4">
        <!-- Embedded Google Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15667.177018007924!2d77.14318866653835!3d10.978896790017007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85481c9b5868f%3A0xc88a1284bd19a495!2sAppanaickenpatti%2C%20Tamil%20Nadu%20641402!5e0!3m2!1sen!2sin!4v1607317657024!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Contact Details Column -->
    <div class="col-lg-4 mb-4">
        <h3>Contact Details</h3>
        <p>
            2/227,East street,<br>
            Appanaickenpatti,<br>
            sulur(tk),<br>
            coimbatore-641402,<br>
        </p>
        <p>
            <abbr title="Phone">P</abbr>:+91 9659041815
        <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">name@example.com
            </a>
        </p>
        <p>
            <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
        </p>
    </div>
</div>
<!-- /.row -->
</div>

<?php include('../includes/footer.php')?>