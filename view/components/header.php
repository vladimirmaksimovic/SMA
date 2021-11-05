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
    <!-- JS scripts -->
    <script src="../../assets/js/main.js" defer></script>
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"
        defer>
    </script>
    <!-- Bootstrap 5 CDN -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
        crossorigin="anonymous" />
    <!-- Font Awesome 5 link -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <!-- CSS link -->
    <link rel="stylesheet" href="./../../assets/css/style.css" />
    <title>ОШ "Светозар Марковић" Краљево</title>
</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="logo-container">
                    <img src="../../assets/img/sm-logo.svg" alt="Company logo" class="logo-img px-2 py-0" />
                </div>
                <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                <ul class="list-group text-light px-3 py-0 border-0">
                    <li class="user-org list-group-item p-0 border-0 bg-dark text-light">Корисник:</li>
                    <!-- <p class="user-org list-group-item">Основна школа</p> -->
                    <li class="list-group-item p-0 border-0 bg-dark text-light">ОШ "Светозар Марковић"</li>
                    <li class="list-group-item p-0 border-0 bg-dark text-light">Краљево</li>
                </ul>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item px-2">
                            <a class="nav-link" aria-current="page" href="../pages/pause.php">Пауза</a>
                        </li>
                        <!--
                        <li class="nav-item">
                            <a class="nav-link" href="#">Архива</a>
                        </li>
                        -->
                        <li class="nav-item dropdown px-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Линкови
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="https://crf.trezor.gov.rs/" target="_blank"
                                        title="Централни регистар фактура">ЦРФ</a></li>
                                <li><a class="dropdown-item" href="https://www.croso.gov.rs/cir/index.php"
                                        target="_blank"
                                        title="Централни регистар обавезног социјалног осигурања">ЦРОСО</a></li>
                                <li><a class="dropdown-item" href="https://www.trezor.gov.rs/src/"
                                        target="_blank">Управа за трезор</a></li>
                                <li><a class="dropdown-item" href="https://www.purs.gov.rs/" target="_blank">Пореска
                                        управа</a></li>
                                <li><a class="dropdown-item" href="https://euprava.gov.rs/" target="_blank">Е Управа</a>
                                </li>
                                <li><a class="dropdown-item" href="https://www.kraljevo.rs/" target="_blank">Град
                                        Краљево</a></li>
                                <li><a class="dropdown-item" href="https://nbs.rs/sr_RS/indeks/" target="_blank"
                                        title="Народна банка Србије">НБС</a></li>
                                <li><a class="dropdown-item" href="https://vmcommerce.rs/" target="_blank">VM
                                        COMMERCE</a></li>
                                <li><a class="dropdown-item" href="https://maxpro.rs/" target="_blank">Maxpro</a></li>
                                <li><a class="dropdown-item" href=" https://ossvetozarmarkovic.wordpress.com/"
                                        target="_blank">ОШ &quot;Светозар Марковић&quot;</a></li>
                                <!-- <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                            </ul>
                        </li>
                        <li class="nav-item px-2">
                            <a href="../../index.php" id="sign-out" class="btn btn-primary">
                                Одјава
                                <i class="fas fa-sign-out-alt" id="signOutIcon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>