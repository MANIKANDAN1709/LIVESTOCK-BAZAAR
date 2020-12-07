<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="card">
        <div class="card-body my-auto mx-auto">
            <form autocomplete="off" method="POST" action="cattleform.php">
                <div class="row">
                    <div class="col">
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
                                <option value="<?php echo($row["category_id"])?>"><?php echo($row["category"])?>
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
                    <div class="col">
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
                                <option value="<?php echo($row["breed_id"])?>"><?php echo($row["breed"])?>
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
</div>
                <div class="row">
                    <div class="col">

                        <div class="form-group">
                            <label for="gender">GENDER</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="m">
                                <label class="form-check-label" for="inlineRadio1">male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="f">
                                <label class="form-check-label" for="inlineRadio2">female</label>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="age">AGE</label>
                            <input type="number" class="form-control" id="age" placeholder="age" name="age">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="price">PRICE</label>
                            <input type="number" class="form-control" id="price" placeholder="price" name="price">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="praganecy">PRAGANECY STATUS</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="praganecy" id="inlineRadio1"
                                    value="option1">
                                <label class="form-check-label" for="inlineRadio1">yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="praganecy" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">no</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="city">city</label>
                                <input type="text" class="form-control" id="city" placeholder="price" name="city">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="state">state</label>
                                <input type="text" class="form-control" id="state" placeholder="state" name="state">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="zipcode">zip code</label>
                                <input type="text" class="form-control" id="zipcode" placeholder="zip code"
                                    name="zipcode">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cub">cub</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cub" value="option1" id="chkYes"
                                    onclick="EnableDisableTextBox()">
                                <label class="form-check-label" for="chkYes">yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cub" value="option2" id="chkNo"
                                    onclick="EnableDisableTextBox()">
                                <label class="form-check-label" for="chkNo">no</label>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                function EnableDisableTextBox() {
                    var chkYes = document.getElementById("chkYes");
                    var chk = chkYes.checked ? true : false;
                    if (chk == false) {
                        document.getElementById("cubgender").disabled = true;
                        document.getElementById("cubgender2").disabled = true;
                        document.getElementById("cubage").disabled = true;
                    }
                    if (chk == true) {
                        document.getElementById("cubgender").disabled = false;
                        document.getElementById("cubgender2").disabled = false;
                        document.getElementById("cubage").disabled = false;
                    }
                }
                </script>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="cubgender">cub gender</label>
                            <!-- <input type="text" class="form-control" id="cubgender" placeholder="cub gender"
                                name="cubgender" class="cubdetail">-->
                            <div class="form-group">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cubgender" id="cubgender"
                                        value="m">
                                    <label class="form-check-label" for="cubgender">male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="cubgender" id="cubgender2"
                                        value="f">
                                    <label class="form-check-label" for="cubgender2">female</label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="cubage">cub age</label>
                            <input type="number" class="form-control" id="cubage" placeholder="cub age" name="cubage"
                                class="cubdetail">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="csubmit">Submit</button>
            </form>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>