<?php

include_once '../components/header.php';

?>

<!-- main -->
<main>
  <?php include_once "../components/aside-nav.php"; ?>

  <!-- content  -->
  <section class="content">

    <?php include_once "../components/topPageBtn.php"; ?>

    <article>
      <h2 id="students-heading">Ученици</h2>

      <!-- <pre>
        <?php print_r($employees); ?>
      </pre> -->

      <!-- 
        TODO:
         * implement search f-n for $employees,
         * implement sort f-n,
         * implement CRUD.

         * employees db fields:
          - ime i prezime
          - jmbg
          - jrbr
          - adresa
          - e-mail
          - zvanje steceno skolovanjem
          - radno mesto
          - norma (procenat zaposlenja)
          - vrsta zaposlenja (oderedjeno / neodredjeno)
          - staz (kalkulacija)
      -->
      <table>
        <thead>
          <tr>
            <th>РБ</th>
            <th>Име</th>
            <th>Презиме</th>
            <th>ЈРБР</th>
            <th>ЈМБГ</th>
            <th>Телефон</th>
            <th>Е-мејл</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($employees as $employee) { ?>
            <tr>
              <td><?php echo $employee['id']; ?></td>
              <td><?php echo $employee['name']; ?></td>
              <td><?php echo $employee['surname']; ?></td>
              <td><?php echo $employee['jrbr']; ?></td>
              <td><?php echo $employee['jmbg']; ?></td>
              <td><?php echo $employee['phone']; ?></td>
              <td><?php echo $employee['email']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

    </article>

  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>