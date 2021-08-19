<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$analytic_accounts = isset($GLOBALS["analytic_accounts"]) ? $GLOBALS["analytic_accounts"] : "";
$subanalytic_accounts = isset($GLOBALS["subanalytic_accounts"]) ? $GLOBALS["subanalytic_accounts"] : "";

?>

<?php include_once "../components/aside_nav.php"; ?>

<main id="account-plan">


  <!-- content -->
  <section class="content">

    <?php include_once "../components/top_page_btn.php"; ?>

    <!-- account plan -->
    <article class="account-plan-container">
      <?php include_once '../components/accounts.php'; ?>
    </article>

  </section>

</main>

<?php include_once './../components/footer.php'; ?>