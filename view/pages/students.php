<?php

include_once '../components/header.php';

?>

<main>

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-8">

        <?php include_once "../components/top_page_btn.php"; ?>

        <article id="students-record-heading">
            <h4>Евиденција ученика</h4>

            <!-- <div class="students-record">
        <h3 id="students-record-heading">Евиденција ученика</h3>
      </div> -->
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
            <!-- <table>
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
      </table> -->

        </article>

        <article id="student-payments-heading">
            <h4>Евиденција уплата ученика</h4>

            <!-- <div class="students-record">
        <h3 id="students-record-heading">Евиденција ученика</h3>
      </div> -->
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
            <!-- <table>
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
      </table> -->

        </article>
    </section>

    <!-- side nav -->
    <aside class="side-nav col-2">
        <nav class="nav flex-column">
            <a class="nav-link" href="#students-record-heading">Евиденција ученика</a></li>
            <li><a class="nav-link" href="#student-payments-heading">Уплате ученика</a>
        </nav>
    </aside>

</main>

<?php include_once './../components/footer.php'; ?>