<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Apply job</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>

    <style>
    * {
        margin: 0;
        padding: 0
    }

    html {
        height: 100%
    }

    p {
        color: black;
    }

    #heading {
        text-transform: uppercase;
        color: #673AB7;
        font-weight: normal
    }

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
        padding: 5px 30px;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        position: relative
    }

    .form-card {
        text-align: left
    }

    #msform fieldset:not(:first-of-type) {
        display: none
    }

    #msform input,
    #msform textarea {
        padding: 8px 15px 8px 15px;
        border: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        font-family: montserrat;
        /* color: #2C3E50;
        background-color: #ECEFF1; */
        font-size: 16px;
        letter-spacing: 1px
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #673AB7;
        outline-width: 0
    }

    #msform .action-button {
        width: 100px;
        background: #673AB7;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 0px 10px 5px;
        float: right
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        background-color: #311B92
    }

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px 10px 0px;
        float: right
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        background-color: #000000
    }

    .card {
        z-index: 0;
        border: none;
        position: relative;
        left: -30%;
        width: 600px;
    }

    .fs-title {
        font-size: 25px;
        color: #673AB7;
        margin-bottom: 15px;
        font-weight: normal;
        text-align: left
    }

    .purple-text {
        color: #673AB7;
        font-weight: normal
    }

    .steps {
        font-size: 25px;
        color: gray;
        margin-bottom: 10px;
        font-weight: normal;
        text-align: right
    }

    .fieldlabels {
        color: gray;
        text-align: left
    }

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
        color: #673AB7
    }

    #progressbar li {
        list-style-type: none;
        font-size: 15px;
        width: 25%;
        float: left;
        position: relative;
        font-weight: 400;
    }

    #progressbar #personal:before {
        font-family: FontAwesome;
        content: "\f007"
    }

    #progressbar #experience:before {
        font-family: FontAwesome;
        content: "\f073";
    }

    #progressbar #location:before {
        font-family: FontAwesome;
        content: "\f041"
    }

    #progressbar #payment:before {
        font-family: FontAwesome;
        content: "\f15c"
    }

    #progressbar #confirm:before {
        font-family: FontAwesome;
        content: "\f00c"
    }

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px
    }

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1
    }

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: #673AB7
    }

    .progress {
        height: 20px
    }

    .progress-bar {
        background-color: #673AB7
    }

    .fit-image {
        width: 100%;
        object-fit: cover
    }

    .row a {
        text-decoration: none;
        font-size: 20px;
        line-height: 15px;
        color: Red;
    }

    .row a:hover {
        cursor: pointer;
        color: green;
    }

    .container-fluid {
        background: url(wave1.png);
    }

    .img {
        display: flex;
        justify-content: flex-start;
    }

    .img img {
        width: 400px;
        height: 800px;
    }
    </style>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
    <script type='text/javascript'>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function() {
            return false;
        })

    });
    </script>
</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container-fluid">
        <div class="img">
            <img src="C:\Users\elcot\Downloads\undraw_package_arrived_63rf.svg" alt="background image">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-9 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">post ad</h2>
                        <p>Fill all form field to go to next step</p>
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="personal"><strong>Personal</strong></li>
                                <li id="experience"><strong>cattle</strong></li>
                                <li id="location"><strong>cub</strong></li>
                                <li id="payment"><strong>Location</strong></li>
                                <li id="confirm"><strong>Finish</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Personal Information:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 1 - 5</h2>
                                        </div>
                                    </div> <label class="fieldlabels">First Name: *</label> <input type="text"
                                        name="fname" placeholder="First Name" autocomplete="off" required="" />
                                    <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname"
                                        placeholder="Last Name" autocomplete="off" required="" />
                                    <label class="fieldlabels">Official Email: *</label> <input type="email"
                                        name="email" placeholder="Email Id" autocomplete="off" required="" />
                                    <label class="fieldlabels">Contact No.: *</label> <input type="number" name="phno"
                                        placeholder="Contact No." autocomplete="off" required="" />
                                    <label class="fieldlabels">Age: *</label> <input type="number" name="age"
                                        placeholder="Enter Age" minlength="18" maxlength="50" autocomplete="off"
                                        required="" />
                                    <div><label class="fieldlabels">Gender: *</label><br>
                                        <!-- Default inline 1-->
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="defaultInline1"
                                                name="inlineDefaultRadiosExample">
                                            <label class="custom-control-label" for="defaultInline1">Male</label>
                                        </div>

                                        <!-- Default inline 2-->
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="defaultInline2"
                                                name="inlineDefaultRadiosExample">
                                            <label class="custom-control-label" for="defaultInline2">Female</label>
                                        </div>

                                        <!-- Default inline 3-->
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" class="custom-control-input" id="defaultInline3"
                                                name="inlineDefaultRadiosExample">
                                            <label class="custom-control-label" for="defaultInline3">Transcender</label>
                                        </div>
                                    </div>
                                </div> <input type="submit" name="submit" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">cattle:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 2 - 5</h2>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="catagory">CATAGORY</label>
                                        <!--<input type="text" class="form-control" id="catagory" aria-describedby="Catagory"
                                            placeholder="Catagory" name="catagory"-->
                                        <?php
            $conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
            $sql="SELECT * FROM category";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            ?>
                                        <select class="custom-select">
                                            <?php
                                                 while($row = $result->fetch_assoc()) {
                                               ?>
                                            <option value="<?php echo($row["category_id"])?>">
                                                <?php echo($row["category"])?>
                                            </option>
                                            <?php
                                                }
                                                ?>
                                        </select>
                                        <?php
            }
            else{
              echo "no recors found";
            }
                                            ?>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="breed">breed</label>
                                            <!--<input type="text" class="form-control" id="catagory" aria-describedby="Catagory"
                                placeholder="Catagory" name="catagory"-->
                                            <?php
$conn = mysqli_connect("localhost","root","","livestock bazaar") or die("Connection failed: " . mysqli_connect_error());
$sql="SELECT * FROM breed";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
?>
                                            <select class="custom-select">
                                                <?php
                                     while($row = $result->fetch_assoc()) {
                                   ?>
                                                <option value="<?php echo($row["breed_id"])?>">
                                                    <?php echo($row["breed"])?>
                                                </option>
                                                <?php
                                    }
                                    ?>
                                            </select>
                                            <?php
}
else{
  echo "no recors found";
}
                                ?>
                                        </div>
                                    </div>

                                    <div>

                                        <div class="form-group">
                                            <label for="gender">GENDER</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="inlineRadio1" value="m">
                                                <label class="form-check-label" for="inlineRadio1">male</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="gender"
                                                    id="inlineRadio2" value="f">
                                                <label class="form-check-label" for="inlineRadio2">female</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="age">AGE</label>
                                            <input type="number" class="form-control" id="age" placeholder="age"
                                                name="age">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="price">PRICE</label>
                                            <input type="number" class="form-control" id="price" placeholder="price"
                                                name="price">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-group">
                                            <label for="praganecy">PRAGANECY STATUS</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="praganecy"
                                                    id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1">yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="praganecy"
                                                    id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2">no</label>
                                            </div>
                                        </div>
                                    </div>

                                </div> <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Location:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 3 - 5</h2>
                                        </div>
                                    </div>
                                    <!-- </div> <label class="fieldlabels">Address*</label> <input type="text" name="fname"
                                        placeholder="Address" /> <label class="fieldlabels">City*</label> <input
                                        type="text" name="lname" placeholder="City" /> <label
                                        class="fieldlabels">District *</label> <input type="text" name="phno"
                                        placeholder="District" /> <label class="fieldlabels">State*</label> <input
                                        type="email" name="email" placeholder="State" /><label
                                        class="fieldlabels">Pincode*</label> <input type="number" name="email"
                                        placeholder="Pincode" />
                                </div>  -->



                                    <div>
                                        <div class="form-group">
                                            <label for="city">city</label>
                                            <input type="text" class="form-control" id="city" placeholder="price"
                                                name="city">
                                        </div>



                                        <div class="form-group">
                                            <label for="state">state</label>
                                            <input type="text" class="form-control" id="state" placeholder="state"
                                                name="state">
                                        </div>



                                        <div class="form-group">
                                            <label for="zipcode">zip code</label>
                                            <input type="text" class="form-control" id="zipcode" placeholder="zip code"
                                                name="zipcode">
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="Next" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">File Upload:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 4 - 5</h2>
                                        </div>
                                    </div> <label class="fieldlabels">Upload Your Photo:</label> <input type="file"
                                        name="pic" accept="image/*"> <label class="fieldlabels">Upload Id Proof:</label>
                                    <input type="file" name="pic" accept="image/*">
                                </div> <input type="button" name="next" class="next action-button" value="Submit" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Finish:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 5 - 5</h2>
                                        </div>
                                    </div> <br><br>
                                    <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                    <div class="row justify-content-center">
                                        <!--div class="col-3"> <img src="https://i.imgur.com/GwStPmg" class="fit-image"> </div-->
                                    </div> <br><br>
                                    <div class="row justify-content-center">
                                        <div class="col-7 text-center">
                                            <!--h5 class="purple-text text-center">You Have Successfully Signed Up</h5-->
                                            <!--button><input type="button" name="next" class="next action-button" value="Home"></button-->
                                            <h4>Go to<a href="index.php"> Home</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>