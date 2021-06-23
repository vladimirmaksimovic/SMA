<?php

/*

require_once '../../model/DAO.php';

$dao = new DAO();

$employees = $dao->selectEmployees();

*/

include_once '../components/header.php';

?>

<!-- main -->
<main>
  <?php include_once "../components/aside-nav.php"; ?>

  <!--
  <aside>
    <nav class="aside-container">
      <ul>
        <li><a href="#form1">Образац 1</a></li>
        <li><a href="#form2">Образац 2</a></li>
        <li><a href="#form3">Образац 3</a></li>
        <li><a href="#form4">Образац 4</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside>
  -->

  <!-- content  -->
  <section class="content">

    <?php include_once "../components/topPageBtn.php"; ?>

    <!--
      TODO: forms to create:
        1) Obrazac potvrde o redovnom skolovanju,
        2) Nalozi za prenos, isplatu i uplatu (opcioni izbor + izbor broja naloga),
        3) Obrazac evidencije dezurstva ucenika,
        4) Obrazac evidencije rasporeda ciscenja - za kuhinju,
        5) Obrazac evidencije prisutnosati na poslu sa potpisom (za vreme raspusta i kolektivnih odmora),
        6) Obrazac za potpise zaposlenih (prilikom obavestenja)
    -->

    <!-- form 1 -->
    <article class="forms">
      <h2 id="form-01">Потврда о редовном школовању</h2>
    </article>
    <!-- /form 1 -->

    <!-- form 2 -->
    <article class="forms">
      <h2 id="form-02">Налози за пренос, исплату и уплату</h2>
    </article>
    <!-- /form 2 -->

    <!-- form 3 -->
    <article class="forms">
      <h2 id="form-03">Образац евиденције дежурства ученика</h2>
    </article>
    <!-- /form 3 -->

    <!-- form 4 -->
    <article class="forms">
      <h2 id="form-04">Образац евиденције распореда чишћења просторија школе</h2>
    </article>
    <!-- /form 4 -->

    <!-- form 5 -->
    <article class="forms">
      <h2 id="form-05">Образац евиденције пристутности на раду</h2>
    </article>
    <!-- /form 5 -->

    <!-- form 6 -->
    <article class="forms">
      <h2 id="form-06">Потписи запослених у настави</h2>
    </article>
    <!-- /form 6 -->

  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>