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

<section class="input-component">

  <form method="POST">

    <div class="mandatory-input-container">
      <h3>Обавезни подаци</h3>
      <div class="mandatory-input">
        <!-- naziv organizacije -->
        <!-- <label for="naziv-organizacije">Izaberi organizaciju</label>
      <select name="organizacija" id="organizacija">
      <option value=""></option>
        <option value="OS Svetozar Markovic Kraljevo">OS Svetozar Markovic Kraljevo</option>
        <option value='OS neko drugi'>OS neko drugi</option>
        <option value='OS ... neko treci'>OS ... neko treci</option>
      </select> -->
        <!-- delovodni broj -->
        <div class="input-container">
          <label for="delovodni-broj">Деловодни број:</label>
          <input type="text" name="delovodni-broj" id="delovodni-broj" maxlength="4" size="4" required />
        </div>
        <!-- delovodni datum -->
        <!-- <input type="date" name="datum-naloga" id="datum-naloga" value="<?php echo date('d-m-Y'); ?>"> -->
        <div class="input-container">
          <label for="delovodni-broj">Датум завођења:</label>
          <input type="date" name="datum-naloga" id="datum-naloga" required />
        </div>
        <!-- izbor radnika/ce -->
        <!-- <label for="radnik">Radnik - ca:</label>
      <input type="text" name="radnik" id="radnik"> -->
        <div class="input-container">
          <label for="zaposleni">Избор запосленог:</label>
          <select name="zaposleni" id="zaposleni">
            <?php foreach ($zaposleni as $radnik => $radno_mesto) { ?>
            <option value="<?php echo $radnik; ?>"><?php echo $radnik . '->' . $radno_mesto ?></option>
            <!-- <option value="OS Svetozar Markovic Kraljevo">OS Svetozar Markovic Kraljevo</option>
          <option value='OS neko drugi'>OS neko drugi</option>
          <option value='OS ... neko treci'>OS ... neko treci</option> -->
            <?php } ?>
          </select>
        </div>
        <!-- RASPOREDJEN NA POSLOVE RADNOG MESTA -->
        <!-- <label for="radno-mesto">Unesite radno mesto:</label>
      <input type="text" name="radno-mesto" id="radno-mesto"> -->
        <!-- datum putovanja -->
        <div class="input-container">
          <label for="datum-putovanja">Датум службеног пута:</label>
          <input type="text" name="datum-putovanja" id="datum-putovanja">
        </div>
        <!-- mesto/relacija puta -->
        <div class="input-container">
          <label for="mesto-putovanja">Место службеног пута:</label>
          <input type="text" name="mesto-putovanja" id="mesto-putovanja">
        </div>
        <!-- zadatak -->
        <div class="input-container">
          <label for="relacija-putovanja">Задатак/л1:</label>
          <input type="text" name="zadatak-l1" id="zadatak-l1">
        </div>
        <div class="input-container">
          <label for="relacija-putovanja">Задтак/л2:</label>
          <input type="text" name="zadatak-l2" id="zadatak-l2">
        </div>
        <div class="input-container">
          <label for="relacija-putovanja">Задатак/л3:</label>
          <input type="text" name="zadatak-l3" id="zadatak-l3">
        </div>
        <div class="input-container">
          <label for="relacija-putovanja">Задатак/л4:</label>
          <input type="text" name="zadatak-l4" id="zadatak-l4">
        </div>
        <!-- NA SLUZBENOM PUTU KORISTI PREVOZNO SREDSTVO -->
        <!-- <label for="prevozno-sredstvo">Prevozno sredstvo:</label>
      <input type="text" name="prevozno-sredstvo" id="prevozno-sredstvo"> -->
        <!-- izbor vrste prevoza -->
        <div class="input-container">
          <label for="prevozno-sredstvo">Превозно средство:</label>
          <select name="prevozno-sredstvo" id="prevozno-sredstvo">
            <option value="организован превоз">организован превоз</option>
            <option value='сопственим аутомобилом'>сопственим аутомобилом</option>
            <option value='аутобусом'>аутобусом</option>
          </select>
        </div>
        <!-- datum povratka -->
        <div class="input-container">
          <label for="datum-povratka">Датум повратка:</label>
          <input type="date" name="datum-povratka" id="datum-povratka">
        </div>
      </div>
    </div>

    <div class="additional-input-container">
      <h3>Додатни подаци</h3>
      <div class="additional-input">
        <div class="input-container">
          <label for="relacija-putovanja">Релација:</label>
          <textarea name="relacija-putovanja" id="relacija-putovanja">
        </textarea>
        </div>
        <!-- vrsta prevoza - duzi unos -->
        <div class="input-container">
          <label for="prevoz-upis">Врста превоза - упис:</label>
          <input type="text" name="prevoz-upis" id="prevoz-upis">
        </div>
        <!-- iznos dnevnice -->
        <div class="input-container">
          <label for="dnevnica-iznosi">Дневница - износ:</label>
          <input type="text" name="dnevnica-iznosi" id="dnevnica-iznosi">
        </div>
        <!-- teret putnih troskova -->
        <div class="input-container">
          <label for="putni-troskovi-l1">Путни трошкови - л1:</label>
          <input type="text" name="putni-troskovi-l1" id="putni-troskovi-l1">
        </div>
        <div class="input-container">
          <label for="putni-troskovi-l2">Путни трошкови - л2:</label>
          <input type="text" name="putni-troskovi-l2" id="putni-troskovi-l2">
        </div>
        <div class="input-container">
          <label for="putni-troskovi-l3">Путни трошкови - л3:</label>
          <input type="text" name="putni-troskovi-l3" id="putni-troskovi-l3">
        </div>
        <div class="input-container">
          <label for="putni-troskovi-l4">Путни трошкови - л4:</label>
          <input type="text" name="putni-troskovi-l4" id="putni-troskovi-l4">
        </div>
        <!-- iznos akontacije -->
        <div class="input-container">
          <label for="akontacija">Аконтација - износ:</label>
          <input type="text" name="akontacija" id="akontacija">
        </div>
      </div>
    </div>

    <div class="input-control">
      <!-- unos podataka-->
      <input type='submit' value='Unesi podatke'>

      <!-- stampa putnog naloga -->
      <button id="travel-warent-print-btn">Штампај</button>
    </div>


  </form>

  <!-- DISPLAY COMPONENT -->
  <?php include_once 'display_component.php'; ?>

</section>