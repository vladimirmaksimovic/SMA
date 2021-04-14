<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$requisition_docs = isset($GLOBALS["requisition_docs"]) ? $GLOBALS["requisition_docs"] : "";
$subanalytic_accounts = isset($GLOBALS["subanalytic_accounts"]) ? $GLOBALS["subanalytic_accounts"] : "";

?>

<main>
  <!-- aside -->
  <aside>
    <nav class="aside-container">
      <ul>
        <li><a href="#requisition-heading">Шема за требовање</a></li>
        <li><a href="#requisition-docs-heading">Документација за требовање</a></li>
        <li><a href="#account-plan-heading">Контни план</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside>
  <!-- /aside -->

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
          <tr>
            <td>Cevol</td>
            <td>Sundjer</td>
            <td>Ubrusi</td>
            <td>Alkohol</td>
          </tr>
          <tr>
            <td>Sprej za staklo</td>
            <td>Truleks krpa</td>
            <td>Toalet papir</td>
            <td>Ostalo</td>
          </tr>
          <tr>
            <td>Bref</td>
            <td>WC cetka</td>
            <td>Tecni sapun</td>
          </tr>
          <tr>
            <td>Tecni deterdzent</td>
            <td>Dzoger</td>
          </tr>
          <tr>
            <td>Axsel</td>
            <td>Metla sa drskom</td>
          </tr>
          <tr>
            <td>Sprej za staklo</td>
            <td>Ulozak dzogera</td>
          </tr>
          <tr>
            <td>Saniper</td>
            <td>Djubrovnik</td>
          </tr>
          <tr>
            <td>Ajax</td>
            <td>Kese za smece</td>
          </tr>
          <tr>
            <td>Bref kuglice</td>
            <td>Zica za sudove</td>
          </tr>
          <tr>
            <td>Tecni vim</td>
            <td>Korpa za papir</td>
          </tr>
          <tr>
            <td>Prasak za pranje</td>
            <td>Osvezivac prostorija</td>
          </tr>
          <tr>
            <td>Domestos</td>
          </tr>
          <tr>
            <td>Tim sudomil</td>
          </tr>
          <tr>
            <td>Tecnost za sudove</td>
          </tr>
          <tr>
            <td>Mer sanit</td>
          </tr>
        </tbody>
      </table>
    </article>
    <!-- /requisition info -->

    <!-- requisition documentation -->
    <article>
      <h2 id="requisition-docs-heading">Документација за требовање у поступку јавних набавки</h2>
      <ol>
        <?php foreach ($requisition_docs as $requisition_doc) { ?>
        <li><?php echo $requisition_doc; ?></li>
        <?php } ?>
      </ol>
    </article>
    <!-- /requisition documentation -->

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