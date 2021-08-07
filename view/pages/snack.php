<?php

include_once '../components/header.php';
include_once '../../data/accounting_examples.php';

$accounting_examples = isset($GLOBALS["accounting_examples"]) ? $GLOBALS["accounting_examples"] : "";

?>

<main>
  <?php include_once "../components/aside_nav.php"; ?>

  <!-- content  -->
  <section class="content">

    <?php include_once "../components/top_page_btn.php"; ?>

    <article id="snack-number-heading">
      <h2>Бројно стање</h2>
    </article>

    <article>
      <h2 id="snack-menu-heading">Јеловник</h2>
    </article>

    <article>
      <h2 id="snack-price-heading">Цена ужине</h2>
    </article>

    <article>
      <h2 id="snack-notice-heading">Обавештење</h2>
    </article>

    <article>
      <h2 id="sanck-lists-heading">Спискови за ужину</h2>
    </article>

    <article>
      <h2 id="snack-delivery-notes-heading">Отпремнице</h2>
    </article>

  </section>
</main>

<?php include_once './../components/footer.php'; ?>