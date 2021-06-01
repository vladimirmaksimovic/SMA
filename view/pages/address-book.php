<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$alphabet_array = isset($GLOBALS["alphabet_array"]) ? $GLOBALS["alphabet_array"] : "";
$address_book = isset($GLOBALS["address_book"]) ? $GLOBALS["address_book"] : "";

?>

<main>
  <?php include_once "../components/aside-nav.php"; ?>

  <!-- 
  <aside class="aside-address-book">
    <nav class="aside-container">
      <ul class="address-book-container">
        <?php foreach ($alphabet_array as $alphabet_letter) { ?>
          <li>
            <a href="#"><?php echo $alphabet_letter; ?></a>
          </li>
        <?php } ?>
      </ul>
      <a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a>
    </nav>
  </aside> -->

  <!-- content  -->
  <section class="content">
    <article>

      <!-- search -->
      <form action="" class="search-bar" onkeyup="contactSearch();">
        <div class="search-icon"><i class="fas fa-search"></i></div>
        <input type="text" id="search-bar" name="search-bar" size="20" placeholder="Претрага" />
      </form>
      <!-- /search -->

      <!-- address book -->
      <table class="address-book" id="address-book">
        <thead>
          <tr>
            <th>Презиме и име</th>
            <th>Контак телефон</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($address_book as $name => $phone_number) { ?>
          <tr class="data-container">
            <td><?php echo $name; ?></td>
            <td><?php echo $phone_number; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <!-- /address book -->

    </article>
  </section>
  <!-- /content -->
</main>

<?php include_once './../components/footer.php'; ?>