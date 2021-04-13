<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$divisions_test = isset($GLOBALS["divisions_test"]) ? $GLOBALS["divisions_test"] : "";
$suppliers = isset($GLOBALS["suppliers"]) ? $GLOBALS["suppliers"] : "";
$school_bell = isset($GLOBALS["school_bell"]) ? $GLOBALS["school_bell"] : "";

?>


<main>
  <aside>
    <nav class="aside-container">
      <ul>
        <li><a href="#basic-info-heading">Основне информације</a></li>
        <li><a href="#work-calendar-heading">Календар рада</a></li>
        <li><a href="#division-heading">Одељењске старешине</a></li>
        <li><a href="#school-bell-heading">Распоред звоњења</a></li>
        <li><a href="#suppliers-heading">Добављачи</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside>

  <!-- content -->
  <section class="content">
    <!-- info -->
    <article class="basic-info">
      <h2 id="basic-info-heading">Основне информације о установи</h2>
      <table class="basic-info-table">
        <tbody>
          <tr>
            <td>Назив установе</td>
            <td class="data-container">ОШ "Светозар Марковић"</td>
          </tr>
          <tr>
            <td>Адреса установе</td>
            <td class="data-container">
              Цара Душана број 2, 36000 Краљево
            </td>
          </tr>
          <tr>
            <td title="Порески индетификациони број">ПИБ</td>
            <td class="data-container">100264288</td>
          </tr>
          <tr>
            <td title="Матични број">МБР</td>
            <td class="data-container">07100973</td>
          </tr>
          <tr>
            <td title="Регистарски број">РЕГ</td>
            <td class="data-container">6143002632</td>
          </tr>
          <tr>
            <td>Делатност</td>
            <td class="data-container">8520 - основно образовање</td>
          </tr>
          <tr>
            <td>Датум оснивања</td>
            <td class="data-container">28.11.1958. године</td>
          </tr>
          <tr>
            <td title="Јединствени број корисника јавних средстава">
              ЈБКЈС
            </td>
            <td class="data-container">00652</td>
          </tr>
          <tr>
            <td rowspan="2">E-mail</td>
            <td class="data-container">
              &#115;&#118;&#101;&#116;&#109;&#097;&#114;&#107;&#046;&#107;&#118;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;
            </td>
          </tr>
          <tr>
            <td class="data-container">
              &#115;&#118;&#101;&#116;&#109;&#097;&#114;&#046;&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;
            </td>
          </tr>
          <tr>
            <td rowspan="3">Телефони</td>
            <td class="data-container">036 314 302 - директор</td>
          </tr>
          <tr>
            <td class="data-container">036 314 296 - секретар</td>
          </tr>
          <tr>
            <td class="data-container">036 331 060 - шеф рачуноводства</td>
          </tr>
          <tr>
            <td>Website</td>
            <td class="data-container">
              <a href="https://ossvetozarmarkovic.wordpress.com/"
                target="_blank">https://ossvetozarmarkovic.wordpress.com/</a>
            </td>
          </tr>
          <tr>
            <td rowspan="4">Текући рачуни</td>
            <td class="data-container" title="буџетски">840-103660-33</td>
          </tr>
          <tr>
            <td class="data-container" title="ученички">840-1512760-90</td>
          </tr>
          <tr>
            <td class="data-container" title="зараде">840-103860-15</td>
          </tr>
          <tr>
            <td class="data-container" title="донацијски">
              840-4747760-37
            </td>
          </tr>
        </tbody>
      </table>
    </article>
    <!-- /info -->

    <!-- calendar -->
    <article class="work-calendar">
      <h2 id="work-calendar-heading">
        Измењени календар за школску 2020/2021 године
      </h2>
      <img src="./../../assets/images/kalendar2021.png" alt="Skolski kalendar za 2020/2021 godinu" />
      <p>* напомена: ово је измењени календар.</p>
    </article>
    <!-- /calendar -->

    <!-- division -->
    <article class="divisions">
      <h2 id="division-heading">Одељењске старешине</h2>
      <div class="division-container">
        <?php foreach ($divisions_test as $division_title => $divisions) { ?>
        <div class="division first-div">
          <h3><?php echo $division_title; ?></h3>
          <ul>
            <?php foreach ($divisions as $division_name => $division_teacher) { ?>
            <li>
              <strong><?php echo $division_name; ?></strong> <?php echo $division_teacher; ?>
            </li>
            <?php } ?>
          </ul>
        </div>
        <?php } ?>
      </div>
    </article>
    <!-- /class division -->

    <!-- school bell -->
    <article class="school-bell">

      <?php foreach ($school_bell as $school_bell_heading => $shifts) { ?>
      <h2 id="school-bell-heading"><?php $school_bell_heading; ?></h2>
      <div class="shift-container">
        <?php foreach ($shifts as $shift_heading => $shift_data) { ?>
        <table class="shift">
          <thead>
            <tr>
              <th colspan="2"><?php echo $shift_heading; ?></th>
            </tr>
          </thead>
          <?php foreach ($shift_data as $classes_order => $classes_time) { ?>
          <tbody>

            <tr>
              <td><?php echo $classes_order; ?></td>
              <td><?php echo $classes_time; ?></td>
            </tr>

          </tbody>
          <?php } ?>
        </table>
        <?php } ?>
      </div>
      <?php } ?>

      <pre><?php print_r($school_bell) ?></pre>

    </article>
    <!-- /school bell -->

    <!-- suppliers -->
    <article class="suppliers">
      <h2 id="suppliers-heading">Добављачи</h2>
      <table class="suppliers-info">
        <thead>
          <tr>
            <th>Назив добављача</th>
            <th>Контак телефон</th>
            <th>Контакт мејл</th>
            <th>Особа за контакт</th>
          </tr>
        </thead>
        <tbody>

          <?php foreach ($suppliers as list($supplier_name, $supplier_phone, $supplier_email, $supplier_contact)) { ?>
          <tr>
            <td><?php echo $supplier_name; ?></td>
            <td><?php echo $supplier_phone; ?></td>
            <td><?php echo $supplier_email; ?></td>
            <td><?php echo $supplier_contact; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </article>
    <!-- /suppliers -->

  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>