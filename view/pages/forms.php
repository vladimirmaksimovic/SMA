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
  <!-- aside -->
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
  <!-- /aside -->

  <!-- content  -->
  <section class="content">
    <!-- form 1 -->
    <article class="forms">
      <h2 id="form1">Образац 1</h2>
      <!-- button style test -->
      <button>Test button</button>
      <!-- /button style test -->
    </article>
    <!-- /form 1 -->

    <!-- form 2 -->
    <article class="forms">
      <h2 id="form2">Образац 2</h2>

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
    <!-- /form 2 -->

    <!-- form 3 -->
    <article class="forms">
      <h2 id="form3">Образац 3</h2>
    </article>
    <!-- /form 3 -->

    <!-- form 4 -->
    <article class="forms">
      <h2 id="form4">Образац 4</h2>
    </article>
    <!-- /form 4 -->

  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>