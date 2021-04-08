<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$analytic_accounts = isset($GLOBALS["analytic_accounts"]) ? $GLOBALS["analytic_accounts"] : "";
$subanalytic_accounts = isset($GLOBALS["subanalytic_accounts"]) ? $GLOBALS["subanalytic_accounts"] : "";

?>

<!-- main -->
<main>
  <!-- aside -->
  <aside class="aside-account-plan">
    <nav class="aside-container">
      <!--
          TODO:
            a) Create dropdown navigation like accordion,
            b) Align text content in <th> and <td> elements.
          -->
      <ul class="account-container">
        <?php foreach ($analytic_accounts as $title => $account) { ?>
        <li>
          <a href="#" title="<?php echo $title; ?>"><?php echo $account; ?></a>
        </li>
        <?php } ?>
      </ul>
      <a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a>
    </nav>
  </aside>
  <!-- /aside -->

  <!-- content -->
  <section class="content">
    <article>
      <table class="account-plan" id="account-plan">
        <thead>
          <tr>
            <!-- search -->
            <th>
              <form action="" class="search-bar" onkeyup="accountNumberSearch();">
                <div class="search-icon"><i class="fas fa-search"></i></div>
                <input type="text" id="search-bar-number" name="search-bar" size="6" placeholder="Конто" />
              </form>
            </th>
            <th>
              <form action="" class="search-bar" onkeyup="accountNameSearch();">
                <div class="search-icon"><i class="fas fa-search"></i></div>
                <input type="text" id="search-bar-name" name="search-bar" size="20" placeholder="Опис" />
              </form>
            </th>
            <!-- /search -->
          </tr>
        </thead>
        <tbody>
          <?php foreach ($subanalytic_accounts as $title => $account) { ?>
          <tr class="data-container">
            <td><?php echo $account; ?></td>
            <td><?php echo $title; ?></td>
          </tr>
          <?php } ?>
          <!-- /content -->
        </tbody>
      </table>

    </article>
  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>