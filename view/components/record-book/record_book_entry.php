<?php

$zaposleni = [
  "" => "",
  "Љиљана Орловић" => "психолог",
  "Олга Дробњак" => "педагог",
  "Невена Мартић" => "библиотекар",
];

?>

<section class="input-component">

    <!-- input section -->
    <!-- TODO: create input section here ... -->
    <article>
        <!-- <h4>Унос података</h4> -->

        <form method="POST" class="record-book-input-form">

            <div class="mandatory-input-container">
                <!-- <h5>Обавезни подаци</h5> -->

                <div class="mandatory-input">
                    <!-- delovodni broj -->
                    <div class="input-container">
                        <label for="delovodni-broj">Деловодни број:</label>
                        <input type="text" name="delovodni-broj" id="delovodni-broj" maxlength="4" size="4" required />
                    </div>

                    <!-- datum prijema -->
                    <!-- <input type="date" name="datum-naloga" id="datum-naloga" value="<?php echo date('d-m-Y'); ?>"> -->
                    <div class="input-container">
                        <label for="delovodni-broj">Датум пријема:</label>
                        <input type="date" name="datum-naloga" id="datum-naloga" required />
                    </div>

                    <!-- vrstа dokumenta -->
                    <div class="input-container">
                        <label for="prevozno-sredstvo">Врста документа:</label>
                        <select name="prevozno-sredstvo" id="prevozno-sredstvo">
                            <option value="потврда">Потврда</option>
                            <option value='обрачун'>Обрачун</option>
                            <option value='фактура'>Фактура</option>
                        </select>
                    </div>

                    <!-- opis dokumenta -->
                    <div class="input-container">
                        <label for="relacija-putovanja">Опис документа:</label>
                        <input type="text" name="zadatak-l1" id="zadatak-l1" />
                    </div>

                    <!-- lice koje prima dokument -->
                    <div class="input-container">
                        <label for="zaposleni">Документ прима:</label>
                        <select name="zaposleni" id="zaposleni">
                            <?php foreach ($zaposleni as $radnik => $radno_mesto) { ?>
                            <option value="<?php echo $radnik; ?>"><?php echo $radnik . '->' . $radno_mesto ?></option>
                            <!-- <option value="OS Svetozar Markovic Kraljevo">OS Svetozar Markovic Kraljevo</option>
                            <option value='OS neko drugi'>OS neko drugi</option>
                            <option value='OS ... neko treci'>OS ... neko treci</option> -->
                            <?php } ?>
                        </select>
                    </div>

                    <!-- nacin dostave dokumenta -->
                    <div class="input-container col-4">
                        <label for="prevozno-sredstvo">Начин доставе документа:</label>
                        <select name="prevozno-sredstvo" id="prevozno-sredstvo">
                            <option value="потврда">Поштом</option>
                            <option value='обрачун'>На руке</option>
                            <option value='фактура'>Службено</option>
                        </select>
                    </div>

                    <!-- napomena -->
                    <div class="input-container">
                        <label for="relacija-putovanja">Напомена:</label>
                        <input type="text" name="zadatak-l1" id="zadatak-l1" />
                    </div>
                </div>

                <div class="input-control">
                    <!-- unos podataka-->
                    <input type='submit' value='Унос' class="btn btn-outline-primary" />
                </div>
            </div>
        </form>
    </article>

</section>