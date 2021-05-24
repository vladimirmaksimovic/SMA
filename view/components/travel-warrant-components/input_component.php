<?php

/**
 * PICK UP AND CHECK VARIABLES
 */

/* $organizacija = isset($_POST['organizacija']) ? $_POST['organizacija'] : ""; */
$delovodni_broj = isset($_POST['delovodni-broj']) ? $_POST['delovodni-broj'] : "";
$datum_naloga = isset($_POST['datum-naloga']) ? $_POST['datum-naloga'] : "";
$radnik = isset($_POST['radnik']) ? $_POST['radnik'] : "";
$radno_mesto = isset($_POST['radno-mesto']) ? $_POST['radno-mesto'] : "";
$datum_putovanja = isset($_POST['datum-putovanja']) ? $_POST['datum-putovanja'] : "";
$mesto_putovanja = isset($_POST['mesto-putovanja']) ? $_POST['mesto-putovanja'] : "";
$relacija_putovanja = isset($_POST['relacija-putovanja']) ? $_POST['relacija-putovanja'] : "";
$zadatak_l1 = isset($_POST['zadatak-l1']) ? $_POST['zadatak-l1'] : "";
$zadatak_l2 = isset($_POST['zadatak-l2']) ? $_POST['zadatak-l2'] : "";
$zadatak_l3 = isset($_POST['zadatak-l3']) ? $_POST['zadatak-l3'] : "";
$zadatak_l4 = isset($_POST['zadatak-l4']) ? $_POST['zadatak-l4'] : "";
$prevozno_sredstvo = isset($_POST['prevozno-sredstvo']) ? $_POST['prevozno-sredstvo'] : "";
$prevoz_upis = isset($_POST['prevoz-upis']) ? $_POST['prevoz-upis'] : "";
$dnevnica_iznosi = isset($_POST['dnevnica-iznosi']) ? $_POST['dnevnica-iznosi'] : "";
$datum_povratka = isset($_POST['datum-povratka']) ? $_POST['datum-povratka'] : "";
/* $putni_troskovi = isset($_POST['teret-putnih-troskova']) ? $_POST['teret-putnih-troskova'] : ""; */
$putni_troskovi_l1 = isset($_POST['putni-troskovi-l1']) ? $_POST['putni-troskovi-l1'] : "";
$putni_troskovi_l2 = isset($_POST['putni-troskovi-l2']) ? $_POST['putni-troskovi-l2'] : "";
$putni_troskovi_l3 = isset($_POST['putni-troskovi-l3']) ? $_POST['putni-troskovi-l3'] : "";
$putni_troskovi_l4 = isset($_POST['putni-troskovi-l4']) ? $_POST['putni-troskovi-l4'] : "";
$akontacija = isset($_POST['akontacija']) ? $_POST['akontacija'] : "";
$zaposleni = isset($_POST['zaposleni']) ? $_POST['zaposleni'] : "";

$zaposleni = [
  "" => "",
  "Љиљана Орловић" => "психолог",
  "Олга Дробњак" => "педагог",
  "Невена Мартић" => "библиотекар",
];

?>

<!-- NAVBAR COMPONENT -->
<!-- <?php include_once '../travel-warrant-components/navbar.php'; ?> -->
<!-- /NAVBAR COMPONENT -->

<section class="input-component">

  <form method="POST">

    <!-- NAZIV ORGANIZACIJE -->

    <!-- <label for="naziv-organizacije">Izaberi organizaciju</label>
    <select name="organizacija" id="organizacija">
    <option value=""></option>
      <option value="OS Svetozar Markovic Kraljevo">OS Svetozar Markovic Kraljevo</option>
      <option value='OS neko drugi'>OS neko drugi</option>
      <option value='OS ... neko treci'>OS ... neko treci</option>
    </select> -->

    <!-- /NAZIV ORGANIZACIJE -->

    <!-- DELOVODNI BROJ -->
    <label for="delovodni-broj">Delovodni broj:</label>
    <input type="text" name="delovodni-broj" id="delovodni-broj" maxlength="4" size="4" required>
    <!-- /DELOVODNI BROJ -->

    <br>

    <!-- DATUM ZAVODJENJA -->
    <!-- <input type="date" name="datum-naloga" id="datum-naloga" value="<?php echo date('d-m-Y'); ?>"> -->
    <label for="delovodni-broj">Datum zavodjenja:</label>
    <input type="date" name="datum-naloga" id="datum-naloga" required>
    <!-- /DATUM ZAVODJENJA -->

    <br>

    <!-- RADNIK - CA -->
    <!-- <label for="radnik">Radnik - ca:</label>
    <input type="text" name="radnik" id="radnik"> -->

    <label for="zaposleni">Izaberite zaposlenog:</label>
    <select name="zaposleni" id="zaposleni">
      <?php foreach ($zaposleni as $radnik => $radno_mesto) { ?>
      <option value="<?php echo $radnik; ?>"><?php echo $radnik . '->' . $radno_mesto ?></option>
      <!-- <option value="OS Svetozar Markovic Kraljevo">OS Svetozar Markovic Kraljevo</option>
      <option value='OS neko drugi'>OS neko drugi</option>
      <option value='OS ... neko treci'>OS ... neko treci</option> -->
      <?php } ?>
    </select>
    <!-- /RADNIK - CA -->

    <!-- <br> -->

    <!-- RASPOREDJEN NA POSLOVE RADNOG MESTA -->
    <!-- <label for="radno-mesto">Unesite radno mesto:</label>
    <input type="text" name="radno-mesto" id="radno-mesto"> -->
    <!-- /RASPOREDJEN NA POSLOVE RADNOG MESTA -->

    <br>

    <!-- UPUCUJE SE NA SLUZBENI PUT DANA -->
    <label for="datum-putovanja">Datum sluzbenog puta:</label>
    <input type="text" name="datum-putovanja" id="datum-putovanja">
    <!-- /UPUCUJE SE NA SLUZBENI PUT DANA -->

    <br>

    <!-- MESTO ILI RELACIJA -->
    <label for="mesto-putovanja">Mesto sluzbenog puta:</label>
    <input type="text" name="mesto-putovanja" id="mesto-putovanja">
    <br>
    ili
    <br>
    <label for="relacija-putovanja">Mesto / Relacija:</label>
    <textarea name="relacija-putovanja" id="relacija-putovanja" rows="5">
    </textarea>
    <!-- /MESTO ILI RELACIJA -->

    <br>

    <!-- SA ZADATAKOM -->
    <label for="relacija-putovanja">Zadatak - prva linija:</label>
    <input type="text" name="zadatak-l1" id="zadatak-l1">
    <br>
    <label for="relacija-putovanja">Zadatak - prva linija:</label>
    <input type="text" name="zadatak-l2" id="zadatak-l2">
    <br>
    <label for="relacija-putovanja">Zadatak - prva linija:</label>
    <input type="text" name="zadatak-l3" id="zadatak-l3">
    <br>
    <label for="relacija-putovanja">Zadatak - prva linija:</label>
    <input type="text" name="zadatak-l4" id="zadatak-l4">
    <!-- /SA ZADATAKOM -->

    <br>

    <!-- NA SLUZBENOM PUTU KORISTI PREVOZNO SREDSTVO -->
    <!-- <label for="prevozno-sredstvo">Prevozno sredstvo:</label>
    <input type="text" name="prevozno-sredstvo" id="prevozno-sredstvo"> -->

    <label for="prevozno-sredstvo">Prevozno sredstvo:</label>
    <select name="prevozno-sredstvo" id="prevozno-sredstvo">
      <option value="организован превоз">организован превоз</option>
      <option value='сопственим аутомобилом'>сопственим аутомобилом</option>
      <option value='аутобусом'>аутобусом</option>
    </select>
    <br>
    <label for="prevoz-upis">Vrsta prevoza - upis:</label>
    <input type="text" name="prevoz-upis" id="prevoz-upis">
    <!-- /NA SLUZBENOM PUTU KORISTI PREVOZNO SREDSTVO -->

    <br>

    <!-- DNEVNICA PRIPADA U IZNOSU OD -->
    <label for="dnevnica-iznosi">Dnevnica iznosi:</label>
    <input type="number" name="dnevnica-iznosi" id="dnevnica-iznosi">
    <!-- /DNEVNICA PRIPADA U IZNOSU OD -->

    <br>

    <!-- NA SLUZBENOM PUTU CE SE ZADRAZATI NAJDALJE DO -->
    <label for="datum-povratka">Datum povratka:</label>
    <input type="text" name="datum-povratka" id="datum-povratka">
    <!-- /NA SLUZBENOM PUTU CE SE ZADRAZATI NAJDALJE DO -->

    <br>

    <!-- PUTNI TROSKOVI PADAJU NA TERET -->
    <label for="putni-troskovi-l1">Putni troskovi - l1:</label>
    <input type="text" name="putni-troskovi-l1" id="putni-troskovi-l1">
    <br>
    <label for="putni-troskovi-l2">Putni troskovi - l2:</label>
    <input type="text" name="putni-troskovi-l2" id="putni-troskovi-l2">
    <br>
    <label for="putni-troskovi-l3">Putni troskovi - l3:</label>
    <input type="text" name="putni-troskovi-l3" id="putni-troskovi-l3">
    <br>
    <label for="putni-troskovi-l4">Putni troskovi - l4:</label>
    <input type="text" name="putni-troskovi-l4" id="putni-troskovi-l4">
    <!-- /PUTNI TROSKOVI PADAJU NA TERET -->

    <br>

    <!-- ODOBRAVAM ISPLATU AKONRACIJE U IZNOSU OD DINARA -->
    <label for="akontacija">Odobrava se akontacija u iznosu od:</label>
    <input type="number" name="akontacija" id="akontacija">
    <!-- /ODOBRAVAM ISPLATU AKONRACIJE U IZNOSU OD DINARA -->

    <br>

    <!-- UNOS PODATAKA U NALOG -->
    <input type='submit' value='Unesi podatke'>
    <!-- /UNOS PODATAKA U NALOG -->

  </form>

  <!-- DISPLaY COMPONENT -->
  <?php include_once 'display_component.php'; ?>
  <!-- /DISPLaY COMPONENT -->

</section>