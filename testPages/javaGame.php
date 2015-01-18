<?php
$pageTitle = "Sulman Baig | Java Game";
$section = "javaGame";
include("../includes/header.php");
?>

<section>
    <h1>Test your reactions!</h1>
    <p>Click on the boxes and circles as quickly as you can</p>
    <p class="bold">Your Time: <span id="time">0</span> s</p>
    <div id="box"></div>
    <script type="text/javascript">
        function getRandomColor(){
            var letters = '0123456789ABCDEF'.split('');
            var color = '#';
            for (var i=0; i<6; i++) {
                color += letters[Math.round(Math.random()*15)];
            }
            return color;
        }

        var clickedTime; var createdTime; var reactionTime;

        function makeBox() {
            var time = Math.random();
            time = time * 5000;
            setTimeout(function () {
                if(Math.random()>0.5) {
                    document.getElementById("box").style.borderRadius = "100px";
                } else {
                    document.getElementById("box").style.borderRadius = "0";
                }
                var top = Math.random();
                top *=300;
                var left = Math.random();
                left *=500;
                document.getElementById("box").style.top = top+"px";
                document.getElementById("box").style.left = left+"px";
                document.getElementById("box").style.borderRadius = "100px";
                document.getElementById("box").style.backgroundColor = getRandomColor();
                document.getElementById("box").style.display = "block";
                createdTime = Date.now();
            }, time);
        }
        document.getElementById("box").onclick=function(){
            clickedTime = Date.now();
            reactionTime = (clickedTime - createdTime)/1000;
            this.style.display="none";
            document.getElementById("time").innerHTML = reactionTime;
            makeBox();
        };
        makeBox();
    </script>
</section>
