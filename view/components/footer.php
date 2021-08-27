<?php

include_once '../../data/data.php';

$footer_info = isset($GLOBALS['footer_info']) ? $GLOBALS['footer_info'] : "";

?>

<footer>
    <div class="footer-container container">
        <?php foreach ($footer_info as $footer_div => $footer_data) { ?>
        <div class="footer-section col-3">
            <ul class="footer-grid-container">
                <?php foreach ($footer_data as $first_info => $second_info) { ?>
                <li><?php echo $first_info; ?></li>
                <li><?php echo $second_info; ?></li>
                <?php } ?>
            </ul>
        </div>
        <?php } ?>
    </div>
    <p>
        <i class="fas fa-paint-roller"></i> by &lt;/<a href="https://github.com/vladimirmaksimovic"
            target="_blank">lion_tamer</a>&gt;
    </p>
</footer>

<!-- main js -->
<script src="../../assets/js/main.js"></script>

<!-- Bootstrap 5 JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
</script>

</body>

</html>