<?php

include_once '../components/header.php';

?>

<!-- main -->
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
    <h2>Налог за службено путовање</h2>
    <article class="travel-warrant">


      <!-- travel warrant goes here -->

      <!-- INPUT COMPONENT -->
      <?php include_once "../components/travel-warrant-components/input_component.php"; ?>
      <!-- /INPUT COMPONENT -->

      <!-- FIRST PAGE - template 03 -->
      <div class="grid-container">

        <!-- LEFT COMPONENT -->
        <?php include_once '../components/travel-warrant-components/left_component.php'; ?>
        <!-- /LEFT COMPONENT -->

        <!-- RIGHT COMPONENT -->
        <?php include '../components/travel-warrant-components/right_component.php'; ?>
        <!-- /RIGHT COMPONENT -->

      </div>
      <!-- /FIRST PAGE -->

      <br>

      <!-- SECOND PAGE - template 03 -->
      <div class="grid-container">
        <!-- LEFT COMPONENT -->
        <?php include_once '../components/travel-warrant-components/empty_component.php'; ?>
        <!-- /LEFT COMPONENT -->

        <!-- RIGHT COMPONENT -->
        <?php require '../components/travel-warrant-components/right_component.php'; ?>
        <!-- /RIGHT COMPONENT -->

    </article>

  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>