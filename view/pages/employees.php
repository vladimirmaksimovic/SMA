<?php

include_once '../components/header.php';

?>

<!-- main -->
<main>
  <!-- aside -->
  <aside></aside>
  <!-- /aside -->

  <!-- content  -->
  <section class="content">

    <article>
      <h2 id="form2">Запослени</h2>

      <!-- <pre>
        <?php print_r($employees); ?>
      </pre> -->

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