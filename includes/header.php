<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" type="image/png" href="/resources/images/icons/favicon.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:700|Merriweather' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/resources/styles/myStyles.css">
</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Mirza Sulman Baig</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if($section == "home"){echo "active";} else {echo "";} ?>"><a href="/">Home</a></li>
<!--                <li class="--><?php //if($section == "blog"){echo "active";} else {echo "";} ?><!--"><a href="/blog">My Blog</a></li>-->
                <li class="<?php if($section == "myCv"){echo "active";} else {echo "";} ?>"><a href="/myCv/">My CV</a></li>
<!--                <li class="--><?php //if($section == "testPages"){echo "active";} else {echo "";} ?><!--"><a href="/oxwall">Test Pages</a></li>-->
<!--                <li class="--><?php //if($section == "contactMe"){echo "active";} else {echo "";} ?><!--"><a href="/contact.php">Contact Me</a></li>-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>