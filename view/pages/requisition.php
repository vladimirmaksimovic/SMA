<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$subanalytic_accounts = isset($GLOBALS["subanalytic_accounts"]) ? $GLOBALS["subanalytic_accounts"] : "";

?>

<!-- main -->
<main>
  <!-- aside -->
  <aside>
    <nav class="aside-container">
      <ul>
        <li><a href="#requisition-heading">Шема за требовање</a></li>
        <li><a href="#account-plan-heading">Контни план</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside>
  <!-- /aside -->

  <!-- content  -->
  <section class="content">

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
            <th>Остали маетријали за посебне намене</th>
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
    <article>
      <h2 id="account-plan-heading">Контни план</h2>
      <table class="account-plan" id="account-plan">
        <thead>
          <tr>
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
          </tr>
        </thead>
        <tbody>
          <?php foreach ($subanalytic_accounts as $title => $account) { ?>
          <tr class="data-container">
            <td><?php echo $account; ?></td>
            <td><?php echo $title; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>

    </article>
  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>