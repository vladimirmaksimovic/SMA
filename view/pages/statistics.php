<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$divisions_test = isset($GLOBALS["divisions_test"]) ? $GLOBALS["divisions_test"] : "";
$school_bell = isset($GLOBALS["school_bell"]) ? $GLOBALS["school_bell"] : "";

?>

<main>
  <?php include_once "../components/aside-nav.php"; ?>

  <!-- content -->
  <section class="content">

    <?php include_once "../components/topPageBtn.php"; ?>

    <!-- statistics -->
    <article class="statistics">
      <h2 id="statistics-heading">Статистика</h2>
    </article>

  </section>

</main>

<?php include_once '../components/footer.php'; ?>