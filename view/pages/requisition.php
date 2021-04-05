<?php include_once './../components/header.php'; ?>

<!-- main -->
<main>
  <!-- aside -->
  <aside>
    <nav class="aside-container">
      <ul>
        <li><a href="#requisition-heading">Шема за требовање</a></li>
        <li><a href="#account-plan-heading">Контни план</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside>
  <!-- /aside -->

  <!-- content  -->
  <section class="content">

    <article class="requisition-info">
      <h2 id="requisition-heading">
        Шема за требовање материјала за одржавање хигијене
      </h2>
      <table class="requisition-table">
        <thead>
          <tr>
            <th>Хемијска средства за чишћење</th>
            <th>Инвентар за одржавање хигијене</th>
            <th>Остали материјали за одржавање хигијене</th>
            <th>Остали маетријали за посебне намене</th>
          </tr>
          <tr>
            <th>426811</th>
            <th>426812</th>
            <th>426819</th>
            <th>426919</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Cevol</td>
            <td>Sundjer</td>
            <td>Ubrusi</td>
            <td>Alkohol</td>
          </tr>
          <tr>
            <td>Sprej za staklo</td>
            <td>Truleks krpa</td>
            <td>Toalet papir</td>
            <td>Ostalo</td>
          </tr>
          <tr>
            <td>Bref</td>
            <td>WC cetka</td>
            <td>Tecni sapun</td>
          </tr>
          <tr>
            <td>Tecni deterdzent</td>
            <td>Dzoger</td>
          </tr>
          <tr>
            <td>Axsel</td>
            <td>Metla sa drskom</td>
          </tr>
          <tr>
            <td>Sprej za staklo</td>
            <td>Ulozak dzogera</td>
          </tr>
          <tr>
            <td>Saniper</td>
            <td>Djubrovnik</td>
          </tr>
          <tr>
            <td>Ajax</td>
            <td>Kese za smece</td>
          </tr>
          <tr>
            <td>Bref kuglice</td>
            <td>Zica za sudove</td>
          </tr>
          <tr>
            <td>Tecni vim</td>
            <td>Korpa za papir</td>
          </tr>
          <tr>
            <td>Prasak za pranje</td>
            <td>Osvezivac prostorija</td>
          </tr>
          <tr>
            <td>Domestos</td>
          </tr>
          <tr>
            <td>Tim sudomil</td>
          </tr>
          <tr>
            <td>Tecnost za sudove</td>
          </tr>
          <tr>
            <td>Mer sanit</td>
          </tr>
        </tbody>
      </table>
    </article>
    <article>
      <h2 id="account-plan-heading">Контни план</h2>
      <table class="account-plan" id="account-plan">
        <thead>
          <tr>
            <th>
              <form action="" class="search-bar" onkeyup="accountNumberSearch();">
                <div class="search-icon"><i class="fas fa-search"></i></div>
                <input type="text" id="search-bar-number" name="search-bar" size="6" placeholder="Конто" />
              </form>
            </th>
            <th>
              <form action="" class="search-bar" onkeyup="accountNameSearch();">
                <div class="search-icon"><i class="fas fa-search"></i></div>
                <input type="text" id="search-bar-name" name="search-bar" size="20" placeholder="Опис" />
              </form>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="data-container">
            <td>413151</td>
            <td>Превоз на посао и са посла (маркица)</td>
          </tr>
          <tr class="data-container">
            <td>414411</td>
            <td>Помоћ у медицинском лечењу запосленог или члана уже породице</td>
          </tr>
          <tr class="data-container">
            <td>415112</td>
            <td>Накнаде трошкова за превоз на посао и са посла</td>
          </tr>
          <tr class="data-container">
            <td>416111</td>
            <td>Јубиларне награде</td>
          </tr>
          <tr class="data-container">
            <td>421111</td>
            <td>Трошкови платног промета</td>
          </tr>
          <tr class="data-container">
            <td>421211</td>
            <td>Услуге за електричну енергију</td>
          </tr>
          <tr class="data-container">
            <td>421225</td>
            <td>Централно грејање</td>
          </tr>
          <tr class="data-container">
            <td>421311</td>
            <td>Услуге водовода и канализације</td>
          </tr>
          <tr class="data-container">
            <td>421321</td>
            <td>Дератизација</td>
          </tr>
          <tr class="data-container">
            <td>421324</td>
            <td>Одвоз отпада</td>
          </tr>
          <tr class="data-container">
            <td>421411</td>
            <td>Телефон, телекс и телефакс</td>
          </tr>
          <tr class="data-container">
            <td>421412</td>
            <td>Интернет и слично</td>
          </tr>
          <tr class="data-container">
            <td>421421</td>
            <td>Пошта</td>
          </tr>
          <tr class="data-container">
            <td>421511</td>
            <td>Осигурање зграда</td>
          </tr>
          <tr class="data-container">
            <td>422111</td>
            <td>Трошкови дневница (исхране) на службеном путу</td>
          </tr>
          <tr class="data-container">
            <td>422121</td>
            <td>Трошкови превоза на службеном путу у земљи (авион, аутобус, воз, и сл.)</td>
          </tr>
          <tr class="data-container">
            <td>422411</td>
            <td>Превоз ученика</td>
          </tr>
          <tr class="data-container">
            <td>422412</td>
            <td>Трошкови путовања ученика који учествују на републичким и међународним такмичењима</td>
          </tr>
          <tr class="data-container">
            <td>423291</td>
            <td>Остале компјутерске услуге</td>
          </tr>
          <tr class="data-container">
            <td>423311</td>
            <td>Услуге образовања и усавршавања запослених</td>
          </tr>
          <tr class="data-container">
            <td>423321</td>
            <td>Котизација за семинаре</td>
          </tr>
          <tr class="data-container">
            <td>423399</td>
            <td>Остали издаци за стручно образовање</td>
          </tr>
          <tr class="data-container">
            <td>423419</td>
            <td>Остале услуге штампања</td>
          </tr>
          <tr class="data-container">
            <td>423711</td>
            <td>Репрезентација</td>
          </tr>
          <tr class="data-container">
            <td>423712</td>
            <td>Поклони</td>
          </tr>
          <tr class="data-container">
            <td>424211</td>
            <td>Услуге образовања</td>
          </tr>
          <tr class="data-container">
            <td>424311</td>
            <td>Здравствена заштита по уговору</td>
          </tr>
          <tr class="data-container">
            <td>424911</td>
            <td>Остале специјализоване услуге</td>
          </tr>
          <tr class="data-container">
            <td>425111</td>
            <td>Зидарски радови</td>
          </tr>
          <tr class="data-container">
            <td>425112</td>
            <td>Столарски радови</td>
          </tr>
          <tr class="data-container">
            <td>425113</td>
            <td>Молерски радови</td>
          </tr>
          <tr class="data-container">
            <td>425114</td>
            <td>Радови на крову</td>
          </tr>
          <tr class="data-container">
            <td>425115</td>
            <td>Радови на водоводу и канализацији</td>
          </tr>
          <tr class="data-container">
            <td>425116</td>
            <td>Централно грејање</td>
          </tr>
          <tr class="data-container">
            <td>425117</td>
            <td>Електричне инсталације</td>
          </tr>
          <tr class="data-container">
            <td>425119</td>
            <td>Остале услуге и материјали за текуће поправке и одржавање зграда</td>
          </tr>
          <tr class="data-container">
            <td>425222</td>
            <td>Рачунарска опрема</td>
          </tr>
          <tr class="data-container">
            <td>425261</td>
            <td>Текуће поправке и одржавање опреме за образовање</td>
          </tr>
          <tr class="data-container">
            <td>425281</td>
            <td>Текуће поправке и одржавање опреме за јавну безбедност</td>
          </tr>
          <tr class="data-container">
            <td>426111</td>
            <td>Канцеларијски материјал</td>
          </tr>
          <tr class="data-container">
            <td>426122</td>
            <td>Службена одећа</td>
          </tr>
          <tr class="data-container">
            <td>426311</td>
            <td>Стручна литература за редовне потребе запослених</td>
          </tr>
          <tr class="data-container">
            <td>426611</td>
            <td>Материјали за образовање</td>
          </tr>
          <tr class="data-container">
            <td>426811</td>
            <td>Хемијска средства за чишћење</td>
          </tr>
          <tr class="data-container">
            <td>426812</td>
            <td>Инвентар за одржавање хигијене</td>
          </tr>
          <tr class="data-container">
            <td>426819</td>
            <td>Остали материјал за одржавање хигијене</td>
          </tr>
          <tr class="data-container">
            <td>426911</td>
            <td>Потрошни материјал</td>
          </tr>
          <tr class="data-container">
            <td>426913</td>
            <td>Алат и инвентар</td>
          </tr>
          <tr class="data-container">
            <td>426919</td>
            <td>Остали материјали за посебне намене</td>
          </tr>
          <tr class="data-container">
            <td>472719</td>
            <td>Остале накнаде за образовање</td>
          </tr>
          <tr class="data-container">
            <td>482211</td>
            <td>Републичке таксе</td>
          </tr>
          <tr class="data-container">
            <td>482231</td>
            <td>Градске таксе</td>
          </tr>
          <tr class="data-container">
            <td>512241</td>
            <td>Електронска опрема</td>
          </tr>
          <tr class="data-container">
            <td>511451</td>
            <td>Пројектна документација</td>
          </tr>
          <tr class="data-container">
            <td>512411</td>
            <td>Опрема за заштиту животне средине</td>
          </tr>
          <tr class="data-container">
            <td>512611</td>
            <td>Опрема за образовање</td>
          </tr>
          <tr class="data-container">
            <td>512811</td>
            <td>Опрема за јавну безбедност</td>
          </tr>
        </tbody>
      </table>

    </article>
  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>