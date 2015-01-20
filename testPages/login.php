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

        if (!isset($error_message) && $username == "admin" && $password == "admin"){
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
        <form method="post" class="form-inline" action="/login/">
            <div class="row">
                <div class="col-md-12">
                    <label for="username" class="input-group" id="labelUser">User Name: </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="username" class="input-group" id="username" value="<?php if (isset($username)) { echo htmlspecialchars($username); } ?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="password" class="input-group" id="labelPass">Password:  </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="password" name="password" class="input-group" id="password">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label style="display: none" for="address" class="input-group">Address: </label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input style="display: none" type="text" name="address" id="address" class="input-group">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p style="display: none">Humans (and frogs): please leave this field blank.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" value="Log in" class="text-muted" disabled="true" id="submit">
                </div>
            </div>
        </form>
        <br/>
        <p style="color: red"><?php
            if(isset($error_message))
                echo $error_message;?></p>
    </div>
</section>

<?php
include("../includes/footer.php");
?>