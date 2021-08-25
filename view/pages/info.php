<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$divisions_test = isset($GLOBALS["divisions_test"]) ? $GLOBALS["divisions_test"] : "";
$school_bell = isset($GLOBALS["school_bell"]) ? $GLOBALS["school_bell"] : "";

?>



<main id="info">

  <?php include "../components/aside_nav.php"; ?>

  <!-- content -->
  <section class="content col-8">

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

  <!-- info side nav -->

  <aside class="info-side-nav col-2">

    <nav class="nav flex-column">
      <a class="nav-link active" aria-current="page" href="info.php"><i class="bi bi-info-square-fill"></i>Инфо</a>
      <a class="nav-link" href="record_book.php"><i class="bi bi-card-checklist"></i>Деловодник</a>
      <a class="nav-link" href="calculations.php">
        <i class="bi bi-file-spreadsheet-fill"></i>Обрачуни</a>
      <a class="nav-link" href="address_book.php">
        <i class="bi bi-person-square"></i>Именик</a>
      <a class="nav-link" href="account_plan.php">
        <i class="bi bi-search"></i>Контни план</a>
      <a class="nav-link" href="forms.php">
        <i class="bi bi-ui-checks"></i>Обрасци</a>
      <a class="nav-link" href="travel_warrant.php">
        <i class="bi bi-bicycle"></i>Путни налог</a>
      <a class="nav-link" href="students.php">
        <i class="bi bi-person-badge-fill"></i>Ученици</a>
      <a class="nav-link" href="records.php">
        <i class="bi bi-list-check"></i>Евиденције</a>
      <a class="nav-link" href="snack.php">
        <i class="bi bi-egg-fried"></i>Ужина</a>
      <a class="nav-link" href="statistics.php">
        <i class="bi bi-bar-chart-steps"></i>Статистика</a>
      <a class="nav-link" href="reminders.php">
        <i class="bi bi-question-square-fill"></i>Подсетници</a>
    </nav>


    <!-- accordion nav -->
    <nav class="accordion text-dark" id="accordionExample">

      <!-- info -->
      <!-- <div class="accordion-item">
      <div class="d-flex align-items-center">
        <a class="accordion-header w-100 ps-3 nav-link" id="heading-01" href="info.php">
          <i class="bi bi-info-square-fill"></i>Инфо
        </a>
        <button class="accordion-button w-auto" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-01" aria-expanded="true" aria-controls="collapse-01">
        </button>
      </div>

      <div id="collapse-01" class="accordion-collapse collapse" aria-labelledby="heading-01" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <ul>
            <li><a href="#basic-info-heading" class="nav-link">Основне информације</a></li>
            <li><a href="#work-calendar-heading" class="nav-link">Календар рада</a></li>
            <li><a href="#division-heading" class="nav-link">Одељењске старешине</a></li>
            <li><a href="#school-bell-heading" class="nav-link">Распоред звоњења</a></li>
            <li><a href="#suppliers-heading" class="nav-link">Добављачи</a></li>
          </ul>
        </div>
      </div>
    </div> -->


    </nav>

  </aside>

  <!-- <?php include "../components/aside_nav.php"; ?> -->

</main>

<?php include_once '../components/footer.php'; ?>