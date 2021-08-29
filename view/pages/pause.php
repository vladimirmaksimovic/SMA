<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$divisions_test = isset($GLOBALS["divisions_test"]) ? $GLOBALS["divisions_test"] : "";
$school_bell = isset($GLOBALS["school_bell"]) ? $GLOBALS["school_bell"] : "";

?>

<main id="pause">
    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content -->
    <section class="content col-10">

        <?php include_once "../components/top_page_btn.php"; ?>

        <!-- pause gallery -->
        <h2>Strana za odmor i razonodu ...</h2>

        <article class="gallery-container">
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button> -->

            <img src="../../assets/img/01-flower.jpg" alt="Rose image" data-bs-toggle="modal"
                data-bs-target="#exampleModal">

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div> -->
                        <div class="modal-body">
                            <img src="../../assets/img/01-flower.jpg" alt="Rose image">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <img src="../../assets/img/01-flower.jpg" alt="Rose image">
            <img src="../../assets/img/02-flower.jpg" alt="Rose image">
            <img src="../../assets/img/03-flower.jpg" alt="Rose image">
            <img src="../../assets/img/04-flower.jpg" alt="Rose image">
            <img src="../../assets/img/05-flower.jpg" alt="Rose image">
            <img src="../../assets/img/06-flower.jpg" alt="Rose image">
            <img src="../../assets/img/07-flower.jpg" alt="Rose image">
            <img src="../../assets/img/08-flower.jpg" alt="Rose image">
            <img src="../../assets/img/09-flower.jpg" alt="Rose image">
            <img src="../../assets/img/10-flower.jpg" alt="Rose image">
            <img src="../../assets/img/11-flower.jpg" alt="Rose image">
            <img src="../../assets/img/12-flower.jpg" alt="Rose image">
            <img src="../../assets/img/13-flower.jpg" alt="Rose image">
            <img src="../../assets/img/14-flower.jpg" alt="Rose image">
            <img src="../../assets/img/15-flower.jpg" alt="Rose image">
            <img src="../../assets/img/16-flower.jpg" alt="Rose image">
            <img src="../../assets/img/17-flower.jpg" alt="Rose image">
            <img src="../../assets/img/18-flower.jpg" alt="Rose image">
            <img src="../../assets/img/19-flower.jpg" alt="Rose image">
            <img src="../../assets/img/20-flower.jpg" alt="Rose image">
            <img src="../../assets/img/21-flower.jpg" alt="Rose image">
            <img src="../../assets/img/22-flower.jpg" alt="Rose image">
            <img src="../../assets/img/23-flower.jpg" alt="Rose image">
            <img src="../../assets/img/24-flower.jpg" alt="Rose image">
            <img src="../../assets/img/25-flower.jpg" alt="Rose image">
            <img src="../../assets/img/26-flower.jpg" alt="Rose image">
            <img src="../../assets/img/27-flower.jpg" alt="Rose image">
            <img src="../../assets/img/28-flower.jpg" alt="Rose image">
            <img src="../../assets/img/29-flower.jpg" alt="Rose image">
            <img src="../../assets/img/30-flower.jpg" alt="Rose image">
            <img src="../../assets/img/31-flower.jpg" alt="Rose image">
            <img src="../../assets/img/32-flower.jpg" alt="Rose image">
            <img src="../../assets/img/33-flower.jpg" alt="Rose image">
            <img src="../../assets/img/34-flower.jpg" alt="Rose image">
            <img src="../../assets/img/35-flower.jpg" alt="Rose image">
            <img src="../../assets/img/36-flower.jpg" alt="Rose image">
            <img src="../../assets/img/37-flower.jpg" alt="Rose image">
            <img src="../../assets/img/38-flower.jpg" alt="Rose image">
            <img src="../../assets/img/39-flower.jpg" alt="Rose image">
            <img src="../../assets/img/40-flower.jpg" alt="Rose image">
            <img src="../../assets/img/41-flower.jpg" alt="Rose image">
            <img src="../../assets/img/42-flower.jpg" alt="Rose image">
            <img src="../../assets/img/43-flower.jpg" alt="Rose image">
            <img src="../../assets/img/44-flower.jpg" alt="Rose image">
            <img src="../../assets/img/45-flower.jpg" alt="Rose image">
            <img src="../../assets/img/46-flower.jpg" alt="Rose image">
            <img src="../../assets/img/47-flower.jpg" alt="Rose image">
            <img src="../../assets/img/48-flower.jpg" alt="Rose image">
            <img src="../../assets/img/49-flower.jpg" alt="Rose image">
            <img src="../../assets/img/50-flower.jpg" alt="Rose image">
            <img src="../../assets/img/51-flower.jpg" alt="Rose image">
            <img src="../../assets/img/52-flower.jpg" alt="Rose image">
            <img src="../../assets/img/53-flower.jpg" alt="Rose image">
            <img src="../../assets/img/54-flower.jpg" alt="Rose image">
        </article>


        <!-- 
      <table class="basic-info-table">
        <tbody>
          <?php foreach ($company_info as $info) { ?>
            <tr>
              <td><?php echo $info['info_category']; ?></td>
              <td><?php echo $info['info_data']; ?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </article> -->

        <!-- pause games -->

        <!-- pause news links -->

    </section>

</main>

<?php include_once '../components/footer.php'; ?>