<?php include_once './../components/header.php'; ?>

<main>
  <!-- aside -->
  <aside class="aside-account-plan">
    <nav class="aside-container">
      <ul>
        <li><a href="#recalculations">Прерачуни</a></li>
        <li><a href="#reminders-info">Неопорезиви износи у 2021.</a></li>
        <li><a href="#reminders-info">Број радних часова у 2021.</a></li>
        <li><a href="#accounting-examples">Књиговодствени примери</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside>
  <!-- /aside -->

  <!-- content  -->
  <section class="content">

    <h2 id="recalculations">Примери прерачуна и обрачуна</h2>
    <article class="recalculations">
      <!-- <article> -->
      <!-- <h2 id="recalculations">Примери прерачуна и обрачуна</h2> -->
      <?php foreach ($calculations as $calculation) { ?>
      <div class="recalculation">
        <!-- <h3 id="ex-01">Прерачун норме</h3> -->

        <table class="reminder-container">
          <thead>
            <tr>
              <th><?php echo $calculation['title']; ?></th>
              <th>Пример</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <!-- <td><?php echo $calculation['title']; ?></td> -->
              <td><?php echo $calculation['calculation']; ?></td>
              <td><?php echo $calculation['example']; ?></td>
            </tr>
            <!-- <tr>
              <td>Пример</td>
              <td><?php echo $calculation['example']; ?></td>
            </tr> -->
          </tbody>
        </table>

      </div>
      <?php } ?>

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
    </article> -->

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
        <h2 id="accounting-examples">Књиговодствени примери</h2>
        <div class="first-example">
          <table class="bookkeep-reminder">
            <thead>
              <tr>
                <th rowspan="2">РБ</th>
                <th colspan="2">Конто</th>
                <th colspan="2" rowspan="2">Назив конта</th>
                <th rowspan="2">Опис промене</th>
                <th colspan="2">Износ</th>
              </tr>
              <tr>
                <td>Дугује</td>
                <td>Потражује</td>
                <td>Дугује</td>
                <td>Потражује</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>111511</td>
                <td></td>
                <td>Конто 111511</td>
                <td></td>
                <td>Промена ...</td>
                <td>50.000,00</td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>510921</td>
                <td></td>
                <td>Конто 510921</td>
                <td>Промена ...</td>
                <td></td>
                <td>50.000,00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </article>

  </section>
  <!-- /content -->
</main>

<?php include_once './../components/footer.php'; ?>