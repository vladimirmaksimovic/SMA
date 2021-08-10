<?php

require_once '../../model/DAO.php';

$dao = new DAO();

$company_info = $dao->selectCompanyInfo();
$img_docs = $dao->selectImgDocs();
$company_suppliers = $dao->selectCompanySuppliers();
$account_plan = $dao->selectAccountPlan();
$employees = $dao->selectEmployees();
$calculations = $dao->selectCalculations();
$calculation_transportation_costs = $dao->selectCalculationTransportationCosts();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- css -->
  <link rel="stylesheet" href="./../../assets/css/style.css" />
  <!-- font awesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <title>ОШ "Светозар Марковић" Краљево</title>
</head>

<body>

  <header>

    <!-- horizontal navbar -->
    <nav class="main-nav-container">

      <!-- logo -->
      <ul class="logo-user">
        <li>
          <img src="../../assets//img/sm-logo.svg" id="logoImg" alt="Logo osnovne skole Svetozar Markovic Kraljevo" />
        </li>
        <!-- TODO: create users in db and pass user info dynamically -->
        <li>
          <p class="user-org">Корисник:</p>
          <!-- <p>Основна школа</p> -->
          <p>ОШ "Светозар Марковић"</p>
          <p>Краљево</p>
        </li>
      </ul>

      <ul class="sign-out">
        <li><a href="../pages/pause.php">Пауза</a></li>
        <li class="links">
          <a href="#" class="links-drop">Линкови <i class="fas fa-sort-down"></i></а>
            <div class="links-container">
              <a href="https://crf.trezor.gov.rs/" target="_blank" title="Централни регистар фактура">ЦРФ</a>
              <a href="https://www.croso.gov.rs/cir/index.php" target="_blank" title="Централни регистар обавезног социјалног осигурања">ЦРОСО</a>
              <a href="https://www.trezor.gov.rs/src/" target="_blank">Управа за трезор</a>
              <a href="https://www.purs.gov.rs/" target="_blank">Пореска управа</a>
              <a href="https://euprava.gov.rs/" target="_blank">Е Управа</a>
              <a href="https://www.kraljevo.rs/" target="_blank">Град Краљево</a>
              <a href="https://nbs.rs/sr_RS/indeks/" target="_blank" title="Народна банка Србије">НБС</a>
              <a href="https://vmcommerce.rs/" target="_blank">VM COMMERCE</a>
              <a href="https://maxpro.rs/" target="_blank">Maxpro</a>
              <a href=" https://ossvetozarmarkovic.wordpress.com/" target="_blank">ОШ &quot;Светозар Марковић&quot;</a>
            </div>
        </li>
        <li>
          <a href="../../index.php" id="sign-out">
            Одјава <i class="fas fa-sign-out-alt" id="signOutIcon"></i>
          </a>
        </li>
      </ul>
    </nav>
  </header>