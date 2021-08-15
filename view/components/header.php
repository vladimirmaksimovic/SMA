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
  <!-- <link rel="stylesheet" href="./../../assets/css/style.css" /> -->
  <!-- font awesome 5 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <title>ОШ "Светозар Марковић" Краљево</title>
</head>

<body>

  <header>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
      <ul class="list-group text-lightp-0 border-0">
        <li class="user-org list-group-item p-0 border-0 bg-dark text-light">Корисник:</li>
        <!-- <p class="user-org list-group-item">Основна школа</p> -->
        <li class="list-group-item p-0 border-0 bg-dark text-light">ОШ "Светозар Марковић"</li>
        <li class="list-group-item p-0 border-0 bg-dark text-light">Краљево</li>
      </ul>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item px-2">
          <a class="nav-link" aria-current="page" href="../pages/pause.php">Пауза</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Линкови
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://crf.trezor.gov.rs/" target="_blank" title="Централни регистар фактура">ЦРФ</a></li>
            <li><a class="dropdown-item" href="https://www.croso.gov.rs/cir/index.php" target="_blank" title="Централни регистар обавезног социјалног осигурања">ЦРОСО</a></li>
            <li><a class="dropdown-item" href="https://www.trezor.gov.rs/src/" target="_blank">Управа за трезор</a></li>
            <li><a class="dropdown-item" href="https://www.purs.gov.rs/" target="_blank">Пореска управа</a></li>
            <li><a class="dropdown-item" href="https://euprava.gov.rs/" target="_blank">Е Управа</a></li>
            <li><a class="dropdown-item" href="https://www.kraljevo.rs/" target="_blank">Град Краљево</a></li>
            <li><a class="dropdown-item" href="https://nbs.rs/sr_RS/indeks/" target="_blank" title="Народна банка Србије">НБС</a></li>
            <li><a class="dropdown-item" href="https://vmcommerce.rs/" target="_blank">VM COMMERCE</a></li>
            <li><a class="dropdown-item" href="https://maxpro.rs/" target="_blank">Maxpro</a></li>
            <li><a class="dropdown-item" href=" https://ossvetozarmarkovic.wordpress.com/" target="_blank">ОШ &quot;Светозар Марковић&quot;</a></li>
            <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
          </ul>
        </li>
        <li class="nav-item px-2">
        <a href="../../index.php" id="sign-out" class="btn btn-primary">
            Одјава <i class="fas fa-sign-out-alt" id="signOutIcon"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
        <li class="px-2">
          <a href="../pages/pause.php">Пауза</a>
        </li>
        <li class="links px-2">
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
        <li class="px-2">
          <a href="../../index.php" id="sign-out">
            Одјава <i class="fas fa-sign-out-alt" id="signOutIcon"></i>
          </a>
        </li>
      </ul>
    </nav>
  </header>