<?php include('.\aincludes\aheader.php')?>
</style>
<div class="card-deck">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" /> -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card-counter bg-primary">
                    <i class="fa fa-users"></i>
                    <span class="count-numbers">
                        <?php
                        $conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
                        $sql="SELECT admin_id FROM admin ORDER BY admin_id";
                        $id = $conn->query($sql);
                        $result=mysqli_num_rows($id);
                        echo($result);
                        ?>
                    </span>
                    <span class="count-name">no of admins</span>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card-counter bg-info">
                    <i class="fa fa-handshake-o" aria-hidden="true"></i>
                    <span class="count-numbers">
                        <?php
                        $conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
                        $sql="SELECT regnum FROM signup ORDER BY regnum";
                        $id = $conn->query($sql);
                        $result=mysqli_num_rows($id);
                        echo($result);
                        ?>
                    </span>
                    <span class="count-name">no of customers</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter bg-danger">
                    <i class="fa fa-ticket"></i>
                    <span class="count-numbers">
                        <?php
                        $conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
                        $sql="SELECT cattleid  FROM cattle ORDER BY cattleid";
                        $id = $conn->query($sql);
                        $result=mysqli_num_rows($id);
                        echo($result);
                        ?>
                    </span>
                    <span class="count-name">no of post</span>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-counter bg-success">
                    <i class="fa fa-database"></i>
                    <span class="count-numbers">
                        <?php
                        $conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
                        $sql="SELECT category_id FROM category ORDER BY category_id";
                        $id = $conn->query($sql);
                        $result=mysqli_num_rows($id);
                        echo($result);
                        ?>
                    </span>
                    <span class="count-name">no of categories of cattle</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="piechart" style="width: 900px; height: 500px;"></div>

<?php include('.\aincludes\afooter.php')?>