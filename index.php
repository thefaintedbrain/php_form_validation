<?php
//Check if form is submitted by POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['submitBtn'])){

        //Getting Values from POST & Sanitizing it

        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        $contact = filter_input(INPUT_POST,'contact',FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

        echo "FORM SUBMITTED"."<br>";
        echo "Name:".$name."<br>";
        echo "Email:".$email."<br>";
        echo "Phone Number:".$contact."<br>";
        echo "Password:".$password."<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP Form Validation</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


<div class="row">
    <br><br>
    <div class="col-md-8 col-xs-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">Bootstrap PHP form Validation</div>
            <div class="panel-body">
                <form role="form" data-toggle="validator" method="post">

                    <div class="form-group has-feedback">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" minlength="8" maxlength="20" required autofocus>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="contact">Phone Number</label>
                        <input type="text" class="form-control" id="contact" name="contact" pattern="[0-9]+"  required>
                        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" minlength="6"  data-error="Minimum of 6 characters" required>
                        <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group has-feedback">
                        <label for="confirm_pwd">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd" minlength="6"  data-error="Passwords do not match" data-match="#pwd" required>
                        <span class="glyphicon glyphicon-asterisk form-control-feedback"></span>
                        <div class="help-block with-errors"></div>
                    </div>

                    <button type="submit" class="btn btn-default" name="submitBtn">Submit</button>

                </form>

            </div>
        </div>

    </div>
</div>






<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!--Bootstrap-->
<script src="js/bootstrap.min.js"></script>
<!--Bootstrap validator from http://1000hz.github.io/-->
<script src="bootstrap-validator/validator.min.js"></script>
</body>
</html>