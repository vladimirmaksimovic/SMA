<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$requisition_info = isset($GLOBALS["requisition_info"]) ? $GLOBALS["requisition_info"] : "";
$requisition_docs = isset($GLOBALS["requisition_docs"]) ? $GLOBALS["requisition_docs"] : "";
$subanalytic_accounts = isset($GLOBALS["subanalytic_accounts"]) ? $GLOBALS["subanalytic_accounts"] : "";

?>

<main>
  <?php include_once "../components/aside-nav.php"; ?>
  <!-- <aside>
    <nav class="aside-container">
      <ul>
        <li><a href="#requisition-heading">Шема за требовање</a></li>
        <li><a href="#procurement-docs-heading">Документација за требовање</a></li>
        <li><a href="#account-plan-heading">Контни план</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside> -->

  <!-- content  -->
  <section class="content">

    <!-- requisition info -->
    <article class="requisition-info">
      <h2 id="requisition-heading">
        Шема за требовање материјала за одржавање хигијене
      </h2>
      <table class="requisition-table">
        <thead>
          <tr>
            <th>Хемијска средства за чишћење</th>
            <th>Инвентар за одржавање хигијене</th>
            <th>Остали материјали за одржавање хигијене</th>
            <th>Остали материјали за посебне намене</th>
          </tr>
          <tr>
            <th>426811</th>
            <th>426812</th>
            <th>426819</th>
            <th>426919</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($requisition_info as $requisition_data) { ?>
          <tr>
            <?php foreach ($requisition_data as $info) { ?>
            <td><?php echo $info; ?></td>
            <?php } ?>
          </tr>
          <?php } ?>

        </tbody>
      </table>
    </article>
    <!-- /requisition info -->

    <!-- procurement documentation list -->
    <article>
      <h2 id="procurement-docs-heading">Документација за требовање у поступку јавних набавки</h2>
      <ol>
        <li>Одлука о покретању поступка набавке и налог за спровођење поступка набавке,</li>
        <li>Записник - извештај о истраживању тржишта,</li>
        <li>Позив за подношење понуда потенцијалним понуђачима (са образцом понуде и спецификацијом опреме и радова),
        </li>
        <li>Понуде (минимум 3 пристигле, исправне понуде),</li>
        <li>Извештај са отварања понуда и стручна оцена понуда,</li>
        <li>Одлука о додели уговора,</li>
        <li>Уговор о набавци и уградњи опреме,</li>
        <li>Фактура/рачун (исправна и пријављена у ЦРФ-у).</li>
      </ol>
    </article>
    <!-- /procurement documentation list -->

    <!-- account plan -->
    <article>
      <h2 id="account-plan-heading">Контни план</h2>
      <?php include_once '../components/accounts.php'; ?>
    </article>
    <!-- /account plan -->

  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>