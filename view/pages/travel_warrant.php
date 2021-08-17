<?php include_once '../components/header.php'; ?>

<main id="travel-warrant">
  <?php include_once "../components/aside_nav.php"; ?>

  <!-- content  -->
  <section class="content col-10">

    <!-- to the top btn -->
    <?php include_once "../components/top_page_btn.php"; ?>

    <h2>Налог за службено путовање</h2>

    <!--
      TODO: restyle sections through tabs:
        first tab - input section,
        second tab - output-print section
    -->

    <!-- input section -->
    <article class="travel-warrant-input">
      <?php include_once "../components/travel-warrant/input_component.php"; ?>
    </article>

    <!-- output section -->
    <article class="travel-warrant-output">

      <!-- first page -->
      <div class="grid-container">

        <!-- left side -->
        <?php include_once '../components/travel-warrant/left_component.php'; ?>

        <!-- right side -->
        <?php include '../components/travel-warrant/right_component.php'; ?>
      </div>

      <!-- second page -->
      <div class="grid-container">

        <!-- left side -->
        <?php include_once '../components/travel-warrant/empty_component.php'; ?>

        <!-- right side -->
        <?php require '../components/travel-warrant/right_component.php'; ?>

    </article>
  </section>
</main>

<?php include_once './../components/footer.php'; ?>