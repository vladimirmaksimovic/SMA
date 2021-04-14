<?php include_once './../components/header.php'; ?>

<main>
  <!-- aside -->
  <aside class="aside-account-plan">
    <nav class="aside-container">
      <ul>
        <li><a href="#ex-01">Прерачуни</a></li>
        <li><a href="#ex-04">Књижења</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside>
  <!-- /aside -->

  <!-- content  -->
  <section class="content">

    <article class="recalculations">
      <div class="recalculation">
        <h2 id="ex-01">Прерачун норме</h2>
        <table class="example-container">
          <tbody>
            <tr>
              <td>Проценат радне норме</td>
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
        <p><em>* Пример прерачуна норме</em>:</p>
        <table class="example-container">
          <tbody>
            <tr>
              <td>65</td>
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
              <td>12</td>
              <td>=</td>
              <td>37,14</td>
            </tr>
            <tr>
              <td>21</td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="recalculation">
        <h2 id="ex-02">Додатак на старешинство</h2>
        <p>Додатак на старешинство = Основни коефицијент * 4%</p>
        <p><em>* Пример за 7. ССС</em>: 17,32 * 0,04 = 0,6928 => 0,69</p>
        <p><em>* Пример за 6. ССС</em>: 14,88 * 0,04 = 0,5952 => 0,60</p>
      </div>

      <div class="recalculation">
        <h2 id="ex-03">Прерачун старешинства</h2>
        <table class="example-container">
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
        <table class="example-container">
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
        <h2 id="ex-03">Обрачун превоза</h2>
        <p>Накнада трошкова за превоз = Број дана рада х Цена карте по дану</p>
        <table class="example-container">
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
    </article>

    <article>
      <h2 id="ex-04">Књижење</h2>
      <div class="first-example">
        <table class="bookkeep-example">
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