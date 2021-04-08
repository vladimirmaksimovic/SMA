<?php include_once './../components/header.php'; ?>

<?php

$accounts = [
  "Накнаде у натури" => "413100",
  "Помоћ у медицинском лечењу запосленог или чланова уже породице и друге помоћи запосленом" => "414400",
  "Накнаде трошкова за запослене" => "415100",
  "Награде запосленима и остали посебни расходи" => "416100",
  "Трошкови платног промета и банкарских услуга" => "421100",
  "Енергетске услуге" => "421200",
  "Комуналне услуге" => "421300",
  "Услуге комуникација" => "421400",
  "Трошкови осигурања" => "421500",
  "Трошкови службених путовања у земљи" => "422100",
  "Компјутерске услуге" => "423200",
  "Услуге образовања и усавршавања запослених" => "423300",
  "Услуге информисања" => "423400",
  "Репрезентација" => "423700",
  "Услуге образовања, културе и спорта" => "424200",
  "Медицинске услуге" => "424300",
  "Специјализоване услуге" => "424900",
  "Текуће поправке и одржавање зграда и објеката" => "425100",
  "Текуће поправке и одржавање опреме" => "425200",
  "Административни материјал" => "426100",
  "Материјали за образовање и усавршавање запослених" => "426300",
  "Материјали за образовање, културу и спорт" => "426600",
  "Материјали за одржавање хигијене и угоститељство" => "426800",
  "Материјали за посебне намене" => "426900",
  "Обавезне таксе" => "482200",
  "Пројектно планирање" => "511400",
  "Административна опрема" => "512200",
  "Опрема за заштиту животне средине" => "512400",
  "Опрема за образовање, науку, културу и спорт" => "512600",
  "Опрема за јавну безбедност" => "512800",
  "Трошкови путовања ученика" => "422400",
];

?>

<!-- main -->
<main>
  <!-- aside -->
  <aside class="aside-account-plan">
    <nav class="aside-container">
      <!--
          TODO:
            a) Create dropdown navigation like accordion,
            b) Align text content in <th> and <td> elements.
          -->
      <ul class="account-container">
        <li><a href="#" title="Накнаде у натури">413100</a></li>
        <li><a href="#" title="Помоћ у медицинском лечењу запосленог или чланова уже породице и друге помоћи запосленом">414400</a>
        </li>
        <li><a href="#" title="Накнаде трошкова за запослене">415100</a></li>
        <li><a href="#" title="Награде запосленима и остали посебни расходи">416100</a></li>
        <li><a href="#" title="Трошкови платног промета и банкарских услуга">421100</a></li>
        <li><a href="#" title="Енергетске услуге">421200</a></li>
        <li><a href="#" title="Комуналне услуге">421300</a></li>
        <li><a href="#" title="Услуге комуникација">421400</a></li>
        <li><a href="#" title="Трошкови осигурања">421500</a></li>
        <li><a href="#" title="Трошкови службених путовања у земљи">422100</a></li>
        <li><a href="#" title="Трошкови путовања ученика">422400</a></li>
        <li><a href="#" title="Компјутерске услуге">423200</a></li>
        <li><a href="#" title="Услуге образовања и усавршавања запослених">423300</a></li>
        <li><a href="#" title="Услуге информисања">423400</a></li>
        <li><a href="#" title="Репрезентација">423700</a></li>
        <li><a href="#" title="Услуге образовања, културе и спорта">424200</a></li>
        <li><a href="#" title="Медицинске услуге">424300</a></li>
        <li><a href="#" title="Специјализоване услуге">424900</a></li>
        <li><a href="#" title="Текуће поправке и одржавање зграда и објеката">425100</a></li>
        <li><a href="#" title="Текуће поправке и одржавање опреме">425200</a></li>
        <li><a href="#" title="Административни материјал">426100</a></li>
        <li><a href="#" title="Материјали за образовање и усавршавање запослених">426300</a></li>
        <li><a href="#" title="Материјали за образовање, културу и спорт">426600</a></li>
        <li><a href="#" title="Материјали за одржавање хигијене и угоститељство">426800</a></li>
        <li><a href="#" title="Материјали за посебне намене">426900</a></li>
        <li><a href="#" title="Обавезне таксе">482200</a></li>
        <li><a href="#" title="Пројектно планирање">511400</a></li>
        <li><a href="#" title="Административна опрема">512200</a></li>
        <li><a href="#" title="Опрема за заштиту животне средине">512400</a></li>
        <li><a href="#" title="Опрема за образовање, науку, културу и спорт">512600</a></li>
        <li><a href="#" title="Опрема за јавну безбедност">512800</a></li>
      </ul>
      <a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a>
      <ul class="account-container">
        <?php foreach ($accounts as $title => $account) { ?>
          <li><a href="#" title="<?php $title ?>"><?php $account ?></a></li>
          <li><a href="#" title="Помоћ у медицинском лечењу запосленог или чланова уже породице и друге помоћи запосленом">414400</a>
          </li>
          <li><a href="#" title="Накнаде трошкова за запослене">415100</a></li>
          <li><a href="#" title="Награде запосленима и остали посебни расходи">416100</a></li>
          <li><a href="#" title="Трошкови платног промета и банкарских услуга">421100</a></li>
          <li><a href="#" title="Енергетске услуге">421200</a></li>
          <li><a href="#" title="Комуналне услуге">421300</a></li>
          <li><a href="#" title="Услуге комуникација">421400</a></li>
          <li><a href="#" title="Трошкови осигурања">421500</a></li>
          <li><a href="#" title="Трошкови службених путовања у земљи">422100</a></li>
          <li><a href="#" title="Трошкови путовања ученика">422400</a></li>
          <li><a href="#" title="Компјутерске услуге">423200</a></li>
          <li><a href="#" title="Услуге образовања и усавршавања запослених">423300</a></li>
          <li><a href="#" title="Услуге информисања">423400</a></li>
          <li><a href="#" title="Репрезентација">423700</a></li>
          <li><a href="#" title="Услуге образовања, културе и спорта">424200</a></li>
          <li><a href="#" title="Медицинске услуге">424300</a></li>
          <li><a href="#" title="Специјализоване услуге">424900</a></li>
          <li><a href="#" title="Текуће поправке и одржавање зграда и објеката">425100</a></li>
          <li><a href="#" title="Текуће поправке и одржавање опреме">425200</a></li>
          <li><a href="#" title="Административни материјал">426100</a></li>
          <li><a href="#" title="Материјали за образовање и усавршавање запослених">426300</a></li>
          <li><a href="#" title="Материјали за образовање, културу и спорт">426600</a></li>
          <li><a href="#" title="Материјали за одржавање хигијене и угоститељство">426800</a></li>
          <li><a href="#" title="Материјали за посебне намене">426900</a></li>
          <li><a href="#" title="Обавезне таксе">482200</a></li>
          <li><a href="#" title="Пројектно планирање">511400</a></li>
          <li><a href="#" title="Административна опрема">512200</a></li>
          <li><a href="#" title="Опрема за заштиту животне средине">512400</a></li>
          <li><a href="#" title="Опрема за образовање, науку, културу и спорт">512600</a></li>
          <li><a href="#" title="Опрема за јавну безбедност">512800</a></li>
        <?php } ?>
      </ul>
    </nav>
  </aside>
  <!-- /aside -->

  <!-- content -->
  <section class="content">
    <article>
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