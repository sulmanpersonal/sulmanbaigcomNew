<?php
$pageTitle = "Sulman | WEBBIN";
$section = "htmlcssbin";
include("../includes/header.php");
?>

<section>
    <div class="container">
        <div class="row">
            <div class="binCodeContainer col-md-12" id="binHTMLContainer">
                <textarea id="binHtmlCode">HTML</textarea>
            </div>
            <div class="binCodeContainer" id="binCSSContainer">
                <textarea id="binCssCode">CSS</textarea>
            </div>
            <div class="binCodeContainer" id="binResultContainer">
                <iframe id="binResultFrame"></iframe>
            </div>
        </div>
        <div class="row">
            <nav class="navbar navbar-inverse navbar-fixed-bottom binMenuBar">
                <div class="col-md-4 text-center" id="binName">
                    CODE-BIN
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <ul class="nav nav-pills" id="binToggles">
                        <li role="presentation" class="active binToggle text-center"><a href="#">HTML</a></li>
                        <li role="presentation" class="binToggle text-center"><a href="#">CSS</a></li>
                        <li role="presentation" class="binToggle text-center"><a href="#">Result</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center" id="binButton">
                    <button id="binRunButton">Run</button>
                </div>
            </nav>
        </div>
    </div>
</section>

<script src="../resources/js/htmlcssbinScript.js"></script>

</body>
</html>