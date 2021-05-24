<?php

require_once '../../model/DAO.php';

$dao = new DAO();

$company_info = $dao->selectCompanyInfo();
$img_docs = $dao->selectImgDocs();
$company_suppliers = $dao->selectCompanySuppliers();
$account_plan = $dao->selectAccountPlan();
$employees = $dao->selectEmployees();
$calculations = $dao->selectCalculations();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- css -->
  <link rel="stylesheet" href="./../../assets/css/style.css" />
  <!-- font awesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
    crossorigin="anonymous" />
  <title>ОШ "Светозар Марковић" Краљево</title>
</head>

<body>
  <!-- header -->
  <header>
    <!-- logo -->
    <div class="logo-container">
      <img src="./../../assets/images/sm-logo.svg" id="logoImg" alt="Logo osnovne skole Svetozar Markovic Kraljevo" />
      <div>
        <p>Основна школа</p>
        <p>"Светозар Марковић"</p>
        <p>Краљево</p>
      </div>
    </div>
    <!-- /logo -->

    <!-- horizontal navbar -->
    <nav class="nav-container">
      <ul>
        <li>
          <a href="info.php">Инфо</a>
        </li>
        <!-- <li>
            <a href="delovodnik.php"><i class="fas fa-book"></i> Деловодник</a>
        </li>-->
        <li>
          <a href="requisition.php">Требовања</a>
        </li>
        <li>
          <a href="calculations.php">Обрачуни</a>
        </li>
        <li>
          <a href="address-book.php">Именик</a>
        </li>
        <li>
          <a href="account-plan.php">Контни план</a>
        </li>
        <li>
          <a href="forms.php">Обрасци</a>
        </li>
        <li>
          <a href="travel-warrant.php">Путни налог</a>
        </li>
        <li>
          <a href="employees.php">Запослени</a>
        </li>
        <li>
          <a href="reminders.php">Подсетници</a>
        </li>

        <li class="links">
          <a href="#" class="links-drop">Линкови <i class="fas fa-sort-down"></i></а>
            <div class="links-container">
              <a href="https://crf.trezor.gov.rs/" target="_blank" title="Централни регистар фактура">ЦРФ</a>
              <a href="https://www.croso.gov.rs/cir/index.php" target="_blank"
                title="Централни регистар обавезног социјалног осигурања">ЦРОСО</a>
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
    <!-- /horizontal navbar -->
  </header>
  <!-- /header -->