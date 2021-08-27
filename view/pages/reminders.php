<?php

include_once '../components/header.php';
include_once '../../data/accounting_examples.php';

$accounting_examples = isset($GLOBALS["accounting_examples"]) ? $GLOBALS["accounting_examples"] : "";

?>

<main id="reminders">

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-8">

        <?php include_once "../components/top_page_btn.php"; ?>

        <article class="recalculations" id="recalculations">

            <h4>Примери прерачуна и обрачуна</h4>

            <!-- calculation and recalculation examples -->
            <?php foreach ($calculations as $calculation) { ?>
            <div class="recalculation">
                <h4><?php echo $calculation['title']; ?></h4>
                <ul>
                    <li><?php echo $calculation['calculation']; ?></li>
                    <li><?php echo $calculation['example']; ?></li>
                </ul>
            </div>
            <?php } ?>

            <!-- transport calculation example -->
            <div class="recalculation">
                <h4>Обрачун превоза</h4>
                <?php foreach ($calculation_transportation_costs as $calculation) { ?>
                <ul>
                    <li><?php echo $calculation['calculation']; ?></li>
                    <li><?php echo $calculation['example']; ?></li>
                </ul>
                <?php } ?>
            </div>
        </article>

        <!-- working hours and non-taxable amounts -->
        <article id="reminders-info">
            <h4>Неопорезиви износи и број радних часова у 2021. години</h4>
            <div class="reminder-info-container">
                <div class="reminder-info">
                    <h3 id="non-taxable-amounts">Неопорезиви износи у 2021. години</h3>
                    <img src="<?php echo $img_docs[1]['src']; ?>" alt="<?php echo $img_docs[1]['alt']; ?>" />
                </div>
                <div class="reminder-info">
                    <h3 id="working-days">Број радних часова у 2021. години и износи минималне зараде</h3>
                    <img src="<?php echo $img_docs[2]['src']; ?>" alt="<?php echo $img_docs[2]['alt']; ?>" />
                </div>
            </div>
        </article>

        <!-- bookkeeping examples -->
        <article id="accounting-examples-heading">
            <h4>Књиговодствени примери</h4>
            <div class="accounting-examples-container">
                <?php foreach ($accounting_examples as $example_key => $example) { ?>
                <div class="accounting-example">
                    <h3><?php echo $example_key; ?></h3>
                    <table class="bookkeep-reminder">
                        <thead>
                            <tr>
                                <th>Конто</th>
                                <th>Опис промене</th>
                                <th>Дугује</th>
                                <th>Потражује</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($example as $example_row) { ?>
                            <tr>
                                <td title="<?php echo $example_row['title']; ?>"><?php echo $example_row["account"]; ?>
                                </td>
                                <td><?php echo $example_row["description"]; ?></td>
                                <td class="amounts">
                                    <?php echo $example_row["debit"] === "0,00" ? "" : $example_row["debit"]; ?></td>
                                <td class="amounts">
                                    <?php echo $example_row["credit"] === "0,00" ? "" : $example_row["credit"]; ?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                        </tbody>
                    </table>
                </div>
                <?php } ?>
            </div>
        </article>

        <!-- voucher example -->
        <?php include_once "../components/payments/voucher.php"; ?>

    </section>

    <!-- side nav -->
    <aside class="side-nav col-2">
        <nav class="nav flex-column">
            <a class="nav-link" href="#recalculations">Прерачуни и примери</a></li>
            <li><a class="nav-link" href="#reminders-info">Неопорезиви износи у 2021.</a></li>
            <li><a class="nav-link" href="#reminders-info">Број радних часова у 2021.</a></li>
            <li><a class="nav-link" href="#accounting-examples-heading">Књиговодствени примери</a></li>
            <li><a class="nav-link" href="#voucher-example-heading">Пример налога за исплату</a>
        </nav>
    </aside>

</main>

<?php include_once './../components/footer.php'; ?>