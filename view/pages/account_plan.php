<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$analytic_accounts = isset($GLOBALS["analytic_accounts"]) ? $GLOBALS["analytic_accounts"] : "";
$subanalytic_accounts = isset($GLOBALS["subanalytic_accounts"]) ? $GLOBALS["subanalytic_accounts"] : "";

?>

<main>
  <?php include_once "../components/aside_nav.php"; ?>

  <!-- 
  <aside class="aside-account-plan">
    <nav class="aside-container">
    <ul class="account-container">
        <?php foreach ($analytic_accounts as $title => $account) { ?>
        <li>
          <a href="#" title="<?php echo $title; ?>"><?php echo $account; ?></a>
        </li>
        <?php } ?>
      </ul>
      <a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a>
    </nav>
  </aside> -->

  <!-- content -->
  <section class="content">

    <?php include_once "../components/top_page_btn.php"; ?>

    <!-- account plan -->
    <article>
      <?php include_once '../components/accounts.php'; ?>
    </article>
    <!-- /account plan -->

  </section>
  <!-- /content -->

</main>

<?php include_once './../components/footer.php'; ?>