<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.1.1.js"></script>
        <title> Signup </title>
        <style>
            #d1{
                margin-left: auto;
                margin-right:auto;
                margin-top : 150px;
                width:650px;
                padding: 20px;
                border: 2px solid lightseagreen;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div id="d1">
            <div>
                <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <label for="inputName3" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                            <input name = "fname" type="text" class="form-control" id="inputName3" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputlname3" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                            <input name = "lname" type="text" class="form-control" id="inputlname3" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input name = "email" type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input name = "password" type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword31" class="col-sm-2 control-label">Re-Type Password</label>
                        <div class="col-sm-10">
                            <input name = "repassword" type="password" class="form-control" id="inputPassword31" placeholder="Enter Your Password Again" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress3" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <input name = "address" type="text" class="form-control" id="inputAddress3" placeholder="Your Street Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCity3" class="col-sm-2 control-label">City</label>
                        <div class="col-sm-10">
                            <input name = "city" type="text" class="form-control" id="inputCity3" placeholder="City" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputState3" class="col-sm-2 control-label">State</label>
                        <div class="col-sm-10">
                            <input name = "state" type="text" class="form-control" id="inputState3" placeholder="State" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPin3" class="col-sm-2 control-label">Pin</label>
                        <div class="col-sm-10">
                            <input name = "pin" type="text" class="form-control" id="inputPin3" placeholder="Pin" size="6" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMobile3" class="col-sm-2 control-label">Mobile Number &nbsp;&plus;91</label>
                        <div class="col-sm-10">
                            <input name = "mobile" type="text" class="form-control" id="inputMobile3" placeholder="Mobile Number" size="10" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" >
                            <button type="submit" class="btn btn-primary btn-lg" style="margin-left: auto; margin-right: auto;">Submit</button>
                            <button type="reset" class="btn btn-primary btn-lg" style="margin-left: auto; margin-right: auto;float:right;">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
            $fname = "fname";
            $lname = "lname";
            $address="address";
            $mobile="mobile";
            $password="password";
            $city="city";
            $state="state";
            $pin="pin";
            $email="email";
            
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                
                $uname = "root";
                $pwd = "eismeh.8";
                $addr = "localhost";
                $dbname = "shopping";
                
                assign_input($fname,$fname);assign_input($lname,$lname);assign_input($password,$password);
                assign_input($address,$address);assign_input($city,$city);assign_input($state,$state);
                assign_input($email,$email);assign_input($mobile,$mobile);assign_input($pin,$pin);         
               //echo"$fn ,$lname ,$address ,$mobile ,$password ,$city ,$state ,$pin , $email";

                $link = mysqli_connect($addr, $uname, $pwd, $dbname);
                if (mysqli_connect_error()) {
                    die("Connection to the database failed");
                }
                $query = "INSERT INTO `user`(`fname`, `lname`, `email`, `password`, `address`, `city`, `state`, `pin`, `mobile`) VALUES ('$fname','$lname','$email','$password','$address','$city','$state','$pin','$mobile')";
                if (mysqli_query($link, $query)) {
                    echo "New record created successfully";
                } else {
                    echo "Error ";
                }
        }
                function assign_input(&$x, &$y){
                    $varName = $x;
                    $inputName = $y;
                    $data = $_POST[$inputName];
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    $x = $data;
                }
        ?>
        
        
    </body>
</html>

