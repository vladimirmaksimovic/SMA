<?php include_once '../components/header.php'; ?>

<main>

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-10">

        <?php include_once "../components/top_page_btn.php"; ?>

        <article id="employees-heading">
            <h4>Запослени</h4>

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
            <table class="table table-hover">
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
</main>

<?php include_once './../components/footer.php'; ?>