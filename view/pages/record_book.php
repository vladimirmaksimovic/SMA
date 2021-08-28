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

        <!-- input section -->
        <?php include_once "../components/record_book_input.php"; ?>

        <!-- record book display section -->
        <?php include_once "../components/record_book_display.php"; ?>

    </section>

</main>

<?php include_once '../components/footer.php'; ?>