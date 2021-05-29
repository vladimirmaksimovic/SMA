<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$divisions_test = isset($GLOBALS["divisions_test"]) ? $GLOBALS["divisions_test"] : "";
$school_bell = isset($GLOBALS["school_bell"]) ? $GLOBALS["school_bell"] : "";

?>

<main>
  <?php include_once "../components/aside-nav.php"; ?>
  <!-- <aside>
    <button id="sliderBtn"><i class="fas fa-arrows-alt-h"></i></button>
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

    test side dropdown nav
    <nav class="aside-nav-container">
    <ul class="dropdown-container">
      <li class="dropdown-link">
        <p>Link 1</p>
        <ul class="dropdown-nav">
          <li><a href="">Sublink 1</a></li>
          <li><a href="">Sublink 2</a></li>
          <li><a href="">Sublink 3</a></li>
          <li><a href="">Sublink 4</a></li>
          <li><a href="">Sublink 5</a></li>
          <li><a href="">Sublink 6</a></li>
          <li><a href="">Sublink 7</a></li>
        </ul>
      </li>
      <li class="dropdown-link">
        <p>Link 2</p>
        <ul class="dropdown-nav">
          <li><a href="">Sublink 1</a></li>
          <li><a href="">Sublink 2</a></li>
          <li><a href="">Sublink 3</a></li>
          <li><a href="">Sublink 4</a></li>
          <li><a href="">Sublink 5</a></li>
          <li><a href="">Sublink 6</a></li>
          <li><a href="">Sublink 7</a></li>
        </ul>
      </li>
      <li class="dropdown-link">
        <p>Link 3</p>
        <ul class="dropdown-nav">
          <li><a href="">Sublink 1</a></li>
          <li><a href="">Sublink 2</a></li>
          <li><a href="">Sublink 3</a></li>
          <li><a href="">Sublink 4</a></li>
          <li><a href="">Sublink 5</a></li>
          <li><a href="">Sublink 6</a></li>
          <li><a href="">Sublink 7</a></li>
        </ul>
      </li>
      <li class="dropdown-link">
        <p>Link 4</p>
        <ul class="dropdown-nav">
          <li><a href="">Sublink 1</a></li>
          <li><a href="">Sublink 2</a></li>
          <li><a href="">Sublink 3</a></li>
          <li><a href="">Sublink 4</a></li>
          <li><a href="">Sublink 5</a></li>
          <li><a href="">Sublink 6</a></li>
          <li><a href="">Sublink 7</a></li>
        </ul>
      </li>
    </ul>
    </nav>
    /test side dropdown nav
  </aside> -->

  <!-- content -->
  <section class="content">

    <!-- info -->
    <article class="basic-info">
      <h2 id="basic-info-heading">Основне информације о установи</h2>
      <table class="basic-info-table">
        <tbody>
          <?php foreach ($company_info as $info) { ?>
          <tr>
            <td><?php echo $info['info_category']; ?></td>
            <td><?php echo $info['info_data']; ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </article>
    <!-- /info -->

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
    <!-- /calendar -->

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
    <!-- /class division -->

    <!-- school bell -->
    <article class="school-bell">
      <?php foreach ($school_bell as $school_bell_heading => $shifts) { ?>
      <h2 id="school-bell-heading"><?php echo $school_bell_heading; ?></h2>
      <div class="shift-container">
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
    <!-- /suppliers -->

  </section>
  <!-- /content -->
</main>

<script>
/* const link = document.querySelectorAll(".dropdown-link");
console.log(link);
const dropdown = document.querySelectorAll(".dropdown-nav");
console.log(dropdown);

for (let i = 0; i < link.length; i++) {
  link[i].addEventListener("click", function() {
    console.log("Click!");
    //for (i = 0; i < dropdown.length; i++) {
    if (dropdown[i].style.display === "none") {
      dropdown[i].style.display = "block";
    } else {
      dropdown[i].style.display = "none";
    }
    //}
  });
} */
</script>

<?php include_once '../components/footer.php'; ?>