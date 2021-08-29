<?php

include_once './../components/header.php';

?>

<main>

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-10">

        <?php include_once "../components/top_page_btn.php"; ?>

        <h4 id="record-book-heading">Деловодник</h4>

        <!-- TODO: implement B% tabs for sections interaction -->

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="entry-tab" data-bs-toggle="tab" data-bs-target="#entry"
                    type="button" role="tab" aria-controls="entry" aria-selected="true">Унос података</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="display-tab" data-bs-toggle="tab" data-bs-target="#display" type="button"
                    role="tab" aria-controls="display" aria-selected="false">Приказ података</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="print-tab" data-bs-toggle="tab" data-bs-target="#print" type="button"
                    role="tab" aria-controls="print" aria-selected="false">Штампа</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="entry" role="tabpanel" aria-labelledby="entry-tab">
                <!-- entry section -->
                <?php include_once "../components/record-book/record_book_entry.php"; ?>
            </div>
            <div class="tab-pane fade" id="display" role="tabpanel" aria-labelledby="display-tab">
                <!-- display section -->
                <?php include_once "../components/record-book/record_book_display.php"; ?>
            </div>
            <div class="tab-pane fade" id="print" role="tabpanel" aria-labelledby="print-tab">
                <?php include_once "../components/record-book/record_book_print.php"; ?>
            </div>
        </div>

    </section>

</main>

<?php include_once '../components/footer.php'; ?>