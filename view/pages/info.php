<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$divisions_test = isset($GLOBALS["divisions_test"]) ? $GLOBALS["divisions_test"] : "";
$school_bell = isset($GLOBALS["school_bell"]) ? $GLOBALS["school_bell"] : "";

?>

<?php include_once "../components/aside_nav.php"; ?>

<main id="info">

  <!-- content -->
  <section class="content">

    <?php include_once "../components/top_page_btn.php"; ?>

    <!-- info -->
    <article class="basic-info">
      <h2 id="basic-info-heading">Основне информације о установи</h2>
      <!-- <table class="basic-info-table">
        <tbody>
          <?php foreach ($company_info as $info) { ?>
            <tr>
              <td><?php echo $info['info_category']; ?></td>
              <td><?php echo $info['info_data']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table> -->

      <!-- info test 01 -->
      <ul class="company-info-list">
        <?php foreach ($company_info as $info) { ?>
          <li>
            <div class="info-list-item">
              <?php echo $info['info_category']; ?>: <strong><?php echo $info['info_data']; ?></strong>
            </div>
          </li>
        <?php } ?>
      </ul>
    </article>

    <!-- calendar -->
    <article class="work-calendar">
      <h2 id="work-calendar-heading">
        Измењени календар за школску 2020/2021 године
      </h2>
      <!-- <pre>
      <?php print_r($img_docs); ?>
      </pre> -->
      <img src="<?php echo $img_docs[0]['src']; ?>" alt="<?php echo $img_docs[0]['alt']; ?>" />
      <p>* напомена: ово је измењени календар.</p>
    </article>

    <!-- class division -->
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

    <!-- school bell -->
    <article class="school-bell">
      <h2 id="school-bell-heading">Распоред звоњења</h2>
      <div class="shift-container">
        <?php foreach ($school_bell as $school_bell_heading => $shifts) { ?>
          <div class="classes-duration">
            <h3><?php echo $school_bell_heading; ?></h2>

              <?php foreach ($shifts as $shift_heading => $shift_data) { ?>
                <table class="shift">
                  <thead>
                    <tr>
                      <th colspan="2"><?php echo $shift_heading; ?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($shift_data as $classes_order => $classes_time) { ?>
                      <tr>
                        <td><?php echo $classes_order; ?></td>
                        <td><?php echo $classes_time; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              <?php } ?>
          </div>
        <?php } ?>
      </div>
    </article>

    <!-- suppliers -->

    <!-- TODO: create CRUD for suppliers -->

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

          <?php foreach ($company_suppliers as $supplier) { ?>
            <tr>
              <td><?php echo $supplier['name']; ?></td>
              <td><?php echo $supplier['phone']; ?></td>
              <td><?php echo $supplier['email']; ?></td>
              <td><?php echo $supplier['person']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </article>

  </section>

</main>

<?php include_once '../components/footer.php'; ?>