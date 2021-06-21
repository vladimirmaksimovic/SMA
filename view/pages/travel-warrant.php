<?php

include_once '../components/header.php';

?>

<main>
  <?php include_once "../components/aside-nav.php"; ?>

  <!-- 
  <aside>
    nav class="aside-container">
      <ul>
        <li><a href="#form1">Образац 1</a></li>
        <li><a href="#form2">Образац 2</a></li>
        <li><a href="#form3">Образац 3</a></li>
        <li><a href="#form4">Образац 4</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
      </nav>
  </aside> -->

  <!-- content  -->
  <section class="content">
    <!-- to the top btn -->
    <?php include_once "../components/topPageBtn.php"; ?>

    <h2>Налог за службено путовање</h2>

    <!--
      TODO: restyle sections through tabs:
        first tab - input section,
        second tab - output-print section
    -->

    <!-- input section -->
    <article class="travel-warrant-input">
      <?php include_once "../components/travel-warrant-components/input_component.php"; ?>
    </article>

    <!-- output section -->
    <article class="travel-warrant-output">
      <!-- first page -->
      <div class="grid-container">
        <!-- left side -->
        <?php include_once '../components/travel-warrant-components/left_component.php'; ?>
        <!-- right side -->
        <?php include '../components/travel-warrant-components/right_component.php'; ?>
      </div>

      <!-- second page -->
      <div class="grid-container">
        <!-- left side -->
        <?php include_once '../components/travel-warrant-components/empty_component.php'; ?>
        <!-- right side -->
        <?php require '../components/travel-warrant-components/right_component.php'; ?>

    </article>

  </section>

</main>

<?php include_once './../components/footer.php'; ?>