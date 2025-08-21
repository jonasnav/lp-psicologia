    <footer>
       
    </footer>

    <!-- <div class="whats">
        <a target="_blank" href="<?php echo HTTP;?>/whatsapp">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
        </a>
    </div> -->


    <?php if (!isset($_COOKIE['express_pixel'])) {  ?>

        <?php include 'includes/cookie.php' ?>

        <script>
            window.onload = function() {
                $('.cookie').slideToggle();
            };
        </script>

    <?php } ?>