<?php include('includes\header.php')?>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <span class="navbar-brand mb-0 h1">LIVESTOCK BAZAAR</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php"> <i class="fa fa-house-user mr-2" aria-hidden="true"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./pages/explore.php"> <i class="fas fa-search mr-2"  aria-hidden="true"></i>explore</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./pages/aboutus.php"> <i class="fas fa-address-card mr-2"  aria-hidden="true"></i>About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./pages/contactus.php">  <i class="fas fa-id-card-alt  mr-2" aria-hidden="true"></i>contact us</a>
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
                    <form autocomplete="off" method="POST" action="login.php">
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
                            <button type="submit" class="btn btn-primary btn-lg" name="logsubmit"
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

<!-- starting of jubutroton text -->
<div class="jumbotron">
    <h1 class="display-4">Hello !!!
        <?php
            if(isset( $_SESSION['name'])){
                $user=$_SESSION['name'];
                echo"$user";
            }
    ?>
    </h1>
    <p class="lead">you can trade the cattles easly !!!</p>
    <hr class="my-4">
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>
<!-- end of jubutroton text -->
<hr class="w-50 bg-danger my-5">
<!-- catagories -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h3 class="mb-3">Carousel cards title </h3>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="card-deck">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1524024973431-2ad916746881?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                                            <div class="card-body">
                                                <h4 class="display-5">GOATS</h4>
                                                <p class="card-text">Goats are the cable talk show panelists of the
                                                    animal
                                                    world, ready at a moment's notice to interject, interrupt, and
                                                    opine.
                                                </p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1552739789-8b7c5b670ed7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                                            <div class="card-body">
                                                <h4 class="display-5">COW</h4>
                                                <p class="card-text">A cow out on grass is just an incredible thing to
                                                    behold... Cows and other ruminants can do things we just can't do.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3 ">
                                        <div class="card">
                                            <img class="img-fluid" alt="100%x280"
                                                src="https://images.unsplash.com/photo-1553284965-fa61e9ad4795?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                                            <div class="card-body">
                                                <h4 class="display-5">HORSE</h4>
                                                <p class="card-text">A pony is a childhood dream. A horse is an adult
                                                    treasure</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3 ">
                                    <div class="card  h-200">
                                        <img class="img-fluid" alt="100%x280"
                                            src="https://images.unsplash.com/photo-1580682777666-24a7b3024e24?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                                        <div class="card-body">
                                            <h4 class="display-5">PIG</h4>
                                            <p class="card-text">If you pull one pig by the tail all the rest will
                                                squeal.</p>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 ">
                                    <div class="card h-200">
                                        <img class="img-fluid" alt="100%x280"
                                            src="https://images.unsplash.com/photo-1555881444-dbd1b18db13a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                                        <div class="card-body">
                                            <h4 class="display-5">RABBIT</h4>
                                            <p class="text-lead">Ideas are like rabbits. You get a couple and learn how
                                                to handle them, and pretty soon you have a dozen.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3 ">
                                    <div class="card  h-200">
                                        <img class="img-fluid w-5" alt="100%x280"
                                            src="https://images.unsplash.com/photo-1572038346327-bb0a11d100c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
                                        <div class="card-body">
                                            <h4 class="display-5">BUFFALO</h4>
                                            <p class="card-text">Historically the buffalo had more influence on man than
                                                all other Plains animals combined.</p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="w-50 bg-danger my-5">
<!-- end of catagories -->

<!-- starting of carosual image -->
<div class="container d-flex justify-content-center">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.unsplash.com/photo-1580570598977-4b2412d01bbc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="d-block w-100  img-fluid mx-5" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1585579376276-0177c4073995?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="d-block w-100   img-fluid mx-5 " alt="...">
                <div class="carousel-caption  d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1539035260392-187113dc96ca?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60"
                    class="d-block w-100   img-fluid mx-5" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<hr class="w-50 bg-danger my-5">
<!-- end of the carosual -->
<!-- stating of counter card -->
<div class="container">
    <div class="row">
        <br />
        <div class="col text-center">
            <h2>Bootstrap 4 counter</h2>
            <p>counter to count up to a target number</p>
        </div>



    </div>
    <div class="row text-center">
        <div class="col">
            <div class="counter">
                <i class="fa fa-code fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="500" data-speed="1500"></h2>
                <p class="count-text ">Our Customer</p>
            </div>
        </div>
        <div class="col">
            <div class="counter">
                <i class="fa fa-coffee fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="150" data-speed="1500"></h2>
                <p class="count-text ">Happy Clients</p>
            </div>
        </div>
        <div class="col">
            <div class="counter">
                <i class="fa fa-lightbulb-o fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="560" data-speed="1500"></h2>
                <p class="count-text ">Project Complete</p>
            </div>
        </div>
        <div class="col">
            <div class="counter">
                <i class="fa fa-bug fa-2x"></i>
                <h2 class="timer count-title count-number" data-to="508" data-speed="1500"></h2>
                <p class="count-text ">Coffee With Clients</p>
            </div>
        </div>
    </div>
</div>
<hr class="w-50 bg-danger my-5">
<!-- end of counter card -->
<!-- how it works -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">How It Works?</h3>
            </div>
        </div>
        <div class="row-lg-1 row-xs-6">
            <div class="d-flex justify-content-around">

                <div class="col-lg-3 col-md-3 col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="far fa-user"></i>
                        </div>
                        <p>Create an Account</p>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-xs-12 mr-5">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3  col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="far fa-bookmark"></i>
                        </div>
                        <p>Post Free Ad</p>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1  col-xs-12 mr-5">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="fas fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3  col-xs-12">
                    <div class="works-item">
                        <div class="icon-box">
                            <i class="far fa-thumbs-up"></i>
                        </div>
                        <p>Deal Done</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>
<hr class="w-50 bg-danger my-5">
<!-- how it works -->
<?php include('includes\footer.php')?>