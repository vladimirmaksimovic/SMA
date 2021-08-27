<?php

include_once '../components/header.php';
include_once '../../data/accounting_examples.php';

$accounting_examples = isset($GLOBALS["accounting_examples"]) ? $GLOBALS["accounting_examples"] : "";

?>

<main>

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-8">

        <?php include_once "../components/top_page_btn.php"; ?>

        <article id="snack-number-heading">
            <h4>Бројно стање</h4>
        </article>

        <article id="snack-menu-heading">
            <h4>Јеловник</h4>
        </article>

        <article id="snack-price-heading">
            <h4>Цена ужине</h4>
        </article>

        <article id="snack-notice-heading">
            <h4>Обавештење</h4>
        </article>

        <article id="sanck-lists-heading">
            <h4>Спискови за ужину</h4>
        </article>

        <article id="snack-delivery-notes-heading">
            <h4>Отпремнице</h4>
        </article>

    </section>

    <!-- side nav -->
    <aside class="side-nav col-2">
        <nav class="nav flex-column">
            <a class="nav-link" href="#snack-number-heading">Бројно стање</a>
            <a class="nav-link" href="#snack-menu-heading">Јеловник</a>
            <a class="nav-link" href="#snack-price-heading">Цена ужине</a>
            <a class="nav-link" href="#snack-notice-heading">Обавештење</a>
            <a class="nav-link" href="#sanck-lists-heading">Спискови за ужину</a>
            <a class="nav-link" href="#snack-delivery-notes-heading">Сравњење отпремнице</a>
        </nav>
    </aside>

</main>

<?php include_once './../components/footer.php'; ?>