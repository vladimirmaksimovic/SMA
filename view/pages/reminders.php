<?php

include_once '../components/header.php';
include_once '../../data/accounting_examples.php';

$accounting_examples = isset($GLOBALS["accounting_examples"]) ? $GLOBALS["accounting_examples"] : "";

?>

<main>
  <?php include_once "../components/aside-nav.php"; ?>

  <!-- <aside class="aside-account-plan">
    <nav class="aside-container">
      <ul>
        <li><a href="#recalculations">Прерачуни</a></li>
        <li><a href="#reminders-info">Неопорезиви износи у 2021.</a></li>
        <li><a href="#reminders-info">Број радних часова у 2021.</a></li>
        <li><a href="#accounting-examples">Књиговодствени примери</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside> -->

  <!-- content  -->
  <section class="content">

    <?php include_once "../components/topPageBtn.php"; ?>

    <h2 id="recalculations">Примери прерачуна и обрачуна</h2>
    <article class="recalculations">
      <!-- <article> -->
      <!-- <h2 id="recalculations">Примери прерачуна и обрачуна</h2> -->
      <?php foreach ($calculations as $calculation) { ?>
      <div class="recalculation">
        <!-- <h3 id="ex-01">Прерачун норме</h3> -->
        <h4><?php echo $calculation['title']; ?></h4>
        <ul>
          <li><?php echo $calculation['calculation']; ?></li>
          <li><?php echo $calculation['example']; ?></li>
        </ul>
        <!-- 
        <table class="reminder-container">
          <thead>
            <tr>
              <th><?php echo $calculation['title']; ?></th>
              <th>Пример</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $calculation['title']; ?></td>
              <td><?php echo $calculation['calculation']; ?></td>
              <td><?php echo $calculation['example']; ?></td>
            </tr>
            <tr>
              <td>Пример</td>
              <td><?php echo $calculation['example']; ?></td>
            </tr> 
          </tbody>
        </table>
        -->
      </div>
      <?php } ?>


      <div class="recalculation">
        <!-- <h3 id="ex-01">Прерачун норме</h3> -->
        <h4>Обрачун превоза</h4>
        <?php foreach ($calculation_transportation_costs as $calculation) { ?>
        <ul>
          <li><?php echo $calculation['calculation']; ?></li>
          <li><?php echo $calculation['example']; ?></li>
        </ul>
        <?php } ?>
      </div>


      <!-- <div class="recalculation">
        <h3 id="ex-02">Додатак на старешинство</h3>
        <p>Додатак на старешинство = Основни коефицијент * 4%</p>
        <p><em>* Пример за 7. ССС</em>: 17,32 * 0,04 = 0,6928 => 0,69</p>
        <p><em>* Пример за 6. ССС</em>: 14,88 * 0,04 = 0,5952 => 0,60</p>
      </div>

      <div class="recalculation">
        <h3 id="ex-03">Прерачун старешинства</h3>
        <table class="reminder-container">
          <tbody>
            <tr>
              <td>Додатак на старешинство</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>
                <hr>
              </td>
              <td>х</td>
              <td>Број дана рада</td>
            </tr>
            <tr>
              <td>Број радних дана у месецу</td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
        <br>
        <p><em>* Пример прерачуна старешинства за 4 радна дана:</em></p>
        <table class="reminder-container">
          <tbody>
            <tr>
              <td>0,69</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>
                <hr>
              </td>
              <td>х</td>
              <td>4</td>
              <td>=</td>
              <td>0,125 => 0,13</td>
            </tr>
            <tr>
              <td>22</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="recalculation">
        <h3 id="ex-03">Обрачун превоза</h3>
        <p>Накнада трошкова за превоз = Број дана рада х Цена карте по дану</p>
        <table class="reminder-container">
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td>Неопорезив износ</td>
            </tr>
            <tr>
              <td>
                Неопорезив износ по дану
              </td>
              <td>=</td>
              <td>
                <hr>
              </td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td>Број радних дана у месецу</td>
            </tr>
          </tbody>
        </table>
        <br>
        <p>Неопорезиво = Неопорезив износ по дану х Број дана рада</p>
        <p>Опорезиво = Накнада трошкова за превоз - Неопорезиво</p>
        <p>Бруто износ = Опорезиво х 1,111111</p>
        <p>Порез = Бруто износ х 10%</p>
        <p>Укупна накнада за превоз = Накнада трошкова за превоз + Порез</p>
      </div>
      -->
    </article>

    <article>
      <h2 id="reminders-info">Неопорезиви износи и број радних часова у 2021. години</h2>
      <div class="reminder-info-container">
        <div class="reminder-info">
          <h3 id="non-taxable-amounts">Неопорезиви износи у 2021. години</h3>
          <img src="<?php echo $img_docs[1]['src']; ?>" alt="<?php echo $img_docs[1]['alt']; ?>" />
        </div>
        <div class="reminder-info">
          <h3 id="working-days">Број радних часова у 2021. години и износи минималне зараде</h3>
          <img src="<?php echo $img_docs[2]['src']; ?>" alt="<?php echo $img_docs[2]['alt']; ?>" />
        </div>
      </div>
    </article>


    <article>
      <h2 id="accounting-examples-heading">Књиговодствени примери</h2>
      <div class="accounting-examples-container">
        <?php foreach ($accounting_examples as $example_key => $example) { ?>
        <div class="accounting-example">
          <h3><?php echo $example_key; ?></h3>
          <table class="bookkeep-reminder">
            <thead>
              <tr>
                <!-- <th>РБ</th> -->
                <th>Конто</th>
                <th>Опис промене</th>
                <th>Дугује</th>
                <th>Потражује</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($example as $example_row) { ?>
              <tr>
                <!-- <td><?php echo $example_row["id"]; ?></td> -->
                <td title="<?php echo $example_row['title']; ?>"><?php echo $example_row["account"]; ?></td>
                <td><?php echo $example_row["description"]; ?></td>
                <td class="amounts"><?php echo $example_row["debit"] === "0,00" ? "" : $example_row["debit"]; ?></td>
                <td class="amounts"><?php echo $example_row["credit"] === "0,00" ? "" : $example_row["credit"]; ?></td>
              </tr>
              <?php } ?>
              <tr>
            </tbody>
          </table>
        </div>
        <?php } ?>
      </div>

    </article>

  </section>
  <!-- /content -->
</main>

<?php include_once './../components/footer.php'; ?>