<!-- footer -->
<footer>
  <div class="footer-container">
    <?php foreach ($footer_info as $footer_div => $footer_data) { ?>
      <div class="footer-section">
        <ul class="footer-grid-container">
          <?php foreach ($footer_data as $first_info => $second_info) { ?>
            <li><?php echo $first_info ?></li>
            <li><?php echo $second_info ?></li>
          <?php } ?>
        </ul>
      </div>
    <?php } ?>

  </div>
  <p>
    <i class="fas fa-paint-roller"></i> by &lt;/<a href="https://github.com/vladimirmaksimovic" target="_blank">lion_tamer</a>&gt;
  </p>
</footer>
<!-- /footer -->

<!-- js -->
<script src="./../../assets/js/main.js"></script>

</body>

</html>