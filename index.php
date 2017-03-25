<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.1.1.js"></script>
        <title> Login </title>
        <style>
            #d1{
                margin-left: auto;
                margin-right:auto;
                margin-top : 150px;
                width:550px;
                padding: 20px;
                border: 2px solid lightseagreen;
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <div id="d1">
            <div>
                <form class="form-horizontal" method="post" action="<?php echo "_SERVER[PHP_SELF]"?>">
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
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input name = "rememberme" type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10" >
                            <button type="submit" class="btn btn-primary btn-lg" style="margin-left: auto; margin-right: auto;">Sign in</button>
                            <a href='registration.php' class="btn" style="float: right;">Not a member yet? Sign up</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <?php
            
        ?>
        
        
    </body>
</html>