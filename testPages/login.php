<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $address = trim($_POST["address"]);
        if($username == "" || $password == "") {
            $error_message = "Username or Password empty. Please Fill!";
        }

        // this code checks for malicious code attempting
        // to inject values into the email header
        if (!isset($error_message)) {
            foreach( $_POST as $value ){
                if( stripos($value,'Content-Type:') !== FALSE ){
                    $error_message = "There was a problem with the information you entered.";
                }
            }
        }

        // the field named address is used as a spam honeypot
        // it is hidden from users, and it must be left blank
        if (!isset($error_message) && $_POST["address"] != "") {
            $error_message = "Your form submission has an error.";
        }

        if (!isset($error_message) && $username == "sulman" && $password == "Android89"){
            header("Location: " . "/");
            exit;
        }else if(!isset($error_message)){
            $error_message = "Username or Password is incorrect!";
        }
    }
?>

<?php
$pageTitle = "Sulman Baig | Log In";
$section = "logIn";
include("../includes/header.php");
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 center-block">
                <form method="post" class="form-inline" action="/login/">
                    <label for="username" class="input-group">User Name: </label>
                    <input type="text" name="username" class="input-group" value="<?php if (isset($username)) { echo htmlspecialchars($username); } ?>">
                    <label for="password" class="input-group">Password:  </label>
                    <input type="password" name="password" class="input-group" value="<?php if (isset($password)) { echo htmlspecialchars($password); } ?>">
                    <label style="display: none" for="address" class="input-group">Address: </label>
                    <input style="display: none" type="text" name="address" id="address" class="input-group">
                    <p style="display: none">Humans (and frogs): please leave this field blank.</p>
                    <input type="submit" value="Log in" class=" input-group btn-default">
                </form><br/>
                <p style="color: red"><?php
                    if(isset($error_message))
                        echo $error_message;?></p>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>

<?php
include("../includes/footer.php");
?>