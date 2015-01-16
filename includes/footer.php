<?php
if ($section=="home") {
//    include("viewWebsiteCounter.php");
}
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="text-muted text-left">
                    <?php
                    if ($section=="home") {
//                        echo "Hit Counts: " . $count;
                    }
                    ?>
                </p>
            </div>
            <div class="col-md-6">
                <p class="text-muted text-right">
                    &copy;<?php echo date('Y'); ?> Sulman Baig
                </p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>