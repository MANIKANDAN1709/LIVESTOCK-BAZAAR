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
                <a class="nav-link" href="../index.php"> <i class="fa fa-house-user mr-2"
                        aria-hidden="true"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="explore.php"> <i class="fas fa-search mr-2" aria-hidden="true"></i>explore</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="aboutus.php"> <i class="fas fa-address-card mr-2" aria-hidden="true"></i>About
                    us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php"><i class="fas fa-id-card-alt  mr-2" aria-hidden="true"></i>
                    contact us</a>
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
<div class="container">
    <!-- Page Content -->
    <div class="container">

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
            </div>
            <div class="col-lg-6">
                <h2>About Modern Business</h2>
                <p>
                    LIVESTOCK BAZZAR is a platform where we could connect you to our stakeholders and help you to find
                    the
                    best
                    cattle
                    breeds at affordable cost. In LIVESTOCK BAZZAR , we help you to get to know the cattle and its
                    important
                    values
                    and to gain
                    benefit by purchasing our products from our stakeholders. Cattle have contributed to the survival of
                    humans
                    for
                    many thousands of years,
                    initially as animals our hunter-gatherer ancestots pursued for food, tools, and leather, and which
                    farmers
                    raised for the
                    past 10,000 years or so as livestock for meat, milk and as draft animals. Cattle also have become an
                    indicator
                    of economic status. The
                    main aim of LIVESTOCK BAZZAR connect the buyers with our stakeholders and to remain as a bridge
                    between
                    them
                    in
                    a
                    progressive manner.
                </p>
            </div>
        </div>
        <!-- /.row -->
        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="http://placehold.it/750x450" alt="">
            </div>
            <div class="col-lg-6">
                <h2>About Modern Business</h2>
                <p>
                    Due to the rising cost of agriculture and decreasing income in India, the farmers started quitting
                    agriculture, and Indian agriculture became a gamble. Due to this, the farmers started looking for
                    other
                    sources of income and the farmers adopted the path of animal husbandry, but the farmers also faced
                    many
                    problems in the animal husbandry sector. To buy and sell because this area was unorganized and the
                    trade
                    of
                    animals was also weak and neither there was a good facility to buy and sell animals, hence the
                    Pashulok
                    website and application were created for the benefit of farmers and livestock. It has been aimed at
                    the
                    farmers, livestock, and cattle traders of the country to buy and sell animals. It is to provide an
                    organized
                    online platform which is an organized online animal market or organized online cattle market to
                    increase
                    the
                    income of cattle and farmers and remove the main obstacles in buying and selling of animals coming
                    to
                    the
                    region
                </p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <h2>Our Team</h2>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut
                            mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">name@example.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut
                            mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">name@example.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Team Member</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut
                            mollitia eum ipsum fugiat odio officiis odit.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">name@example.com</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <h2>Our Customers</h2>
        <div class="row">
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
            <div class="col-lg-2 col-sm-4 mb-4">
                <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </div>
        </div>
        <!-- /.row -->

    </div>

    <div class="container">
        <p class="h5 mx-5 my-5">why we start this?</p>
        <div id="accordion mx-3 my-3">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        Farmers and ranchers have a lot of trouble in buying animals, many times there are animals of
                        advanced
                        breeds even in the near future, but due to lack of information they are not aware and they
                        cannot
                        find
                        advanced animals and they are away to buy animals. Far away, villages and cities keep wandering
                        or
                        waiting for cattle fairs or have to go to cattle fences where the cost is also high and the cost
                        of
                        buying animals increases and there is a lot of disparity in prices.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        Similarly, there are many problems for selling animals either because the cattle traders do not
                        come
                        in
                        the villages or if they come, then the local or local animal traders come, so that the animals
                        do
                        not
                        get the right price for their animals and in compulsion, Animals have to be sold for a small
                        price
                        or
                        the animals are not able to sell at any time, then the cattlemen take those animals to cattle
                        marshes or
                        cattle fences wherever the price is not available or many times the animals are not sold there
                        and
                        from
                        above To bring the animal, wages and other expenses have to be incurred.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        Similarly, animal traders also have many difficulties to buy and sell animals because they do
                        not
                        have
                        enough information and information about the animals to sell and buy them, so they sell and buy
                        animals.
                        The people are not able to know about them, due to which they are not able to contact those
                        animals.
                        Keeping all these problems in mind, one day the idea of ​​solving this problem came in the mind
                        of a
                        farmer son, who was working for the development of the farmers selflessly, in the past, so that
                        he
                        used
                        the livestock ba website and application Constructed so that the farmers and farmers can be
                        helped
                        and
                        their exploitation can be tied up and their income can be assured. In this way
                        Pashulok was created in which the complete information of animals and farmers and livestock can
                        enter
                        their information so that any person, businessman, farmer, cattle owner can buy or sell animals
                        at a
                        reasonable price, that too at no cost or cost, yes absolutely free I get all this facility. So
                        take
                        advantage of this facility today and make more and more farmers and livestock aware of it. Buy
                        and
                        sell
                        animals without any expense. No cost, no problem. Farmer interest, farmer prosperity.

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <ul class="list-group list-group-flush mx-5 my-5">
            <li class="list-group-item">We adopt technologically revolutionized measures to give a new dimension to your
                business. We incorporate the latest updates in this field to make the business of the clients renowned
                worldwide.
            </li>
            <li class="list-group-item">A huge databank comprising of both buyers and sellers from across the globe.
            </li>
            <li class="list-group-item">The user-friendliness of the portal has been one of the remarkable features
                attracting
                numerous buyers.
            </li>
            <li class="list-group-item">No matter whatever is the requirement of the buyer, they can find the respective
                company
                dealing with that product. This is possible because of the appropriate categorization of the portal into
                products.
            </li>
            <li class="list-group-item">Continuous updating of all the business-related information makes it reliable.
            </li>
            <li class="list-group-item">Free registration to the companies.
            </li>
            <li class="list-group-item">Complete E-commerce solutions in the most cost-effective manner.
            </li>
            <li class="list-group-item">Updated information about the trade shows-both past and upcoming.

            </li>
        </ul>
    </div>


    <?php include('../includes/footer.php')?>