<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$divisions_test = isset($GLOBALS["divisions_test"]) ? $GLOBALS["divisions_test"] : "";
$school_bell = isset($GLOBALS["school_bell"]) ? $GLOBALS["school_bell"] : "";

?>

<main>

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content -->
    <section class="content col-10">

        <?php include_once "../components/top_page_btn.php"; ?>

        <!-- statistics -->
        <article class="statistics" id="statistics-heading">
            <h4>Статистика</h4>
        </article>

    </section>

</main>

<?php include_once '../components/footer.php'; ?>