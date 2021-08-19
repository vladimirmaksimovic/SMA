<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$requisition_info = isset($GLOBALS["requisition_info"]) ? $GLOBALS["requisition_info"] : "";
$requisition_docs = isset($GLOBALS["requisition_docs"]) ? $GLOBALS["requisition_docs"] : "";
$subanalytic_accounts = isset($GLOBALS["subanalytic_accounts"]) ? $GLOBALS["subanalytic_accounts"] : "";

?>

<?php include_once "../components/aside_nav.php"; ?>

<main>

  <!-- content  -->
  <section class="content">

    <?php include_once "../components/top_page_btn.php"; ?>

    <!-- materials record -->
    <article class="materials-record">
      <h2 id="materials-heading">
        Евиденција канцеларијског и материјала за образовање
      </h2>
      <div class="materials-education">
        <h3 id="materials-education-heading">
          Евиденција материјала за образовање
        </h3>
      </div>
      <div class="materials-office">
        <h3 id="materials-office-heading">
          Евиденција канцеларијског материјала
        </h3>
      </div>

      <?php foreach ($requisition_info as $requisition_data) { ?>
        <tr>
          <?php foreach ($requisition_data as $info) { ?>
            <td><?php echo $info; ?></td>
          <?php } ?>
        </tr>
      <?php } ?>

      </tbody>
      </table> -->
    </article>

    <!-- sick leave engagements record -->
    <article class="sick-leave-engagements-record">
      <h2 id="sick-leave-engagements-heading">
        Евиденција замена за боловање
      </h2>
    </article>

    <!-- parent council record -->
    <article class="parent-council-record">
      <h2 id="parent-council-heading">
        Савет родитеља
      </h2>
    </article>

    <!-- certificates record -->
    <article class="certificates-record">
      <h2 id="certificates-heading">
        Сетрификати и усавршавања
      </h2>
    </article>

  </section>
</main>

<?php include_once './../components/footer.php'; ?>