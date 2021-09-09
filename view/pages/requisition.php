<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$requisition_info = isset($GLOBALS["requisition_info"]) ? $GLOBALS["requisition_info"] : "";
$requisition_docs = isset($GLOBALS["requisition_docs"]) ? $GLOBALS["requisition_docs"] : "";
$subanalytic_accounts = isset($GLOBALS["subanalytic_accounts"]) ? $GLOBALS["subanalytic_accounts"] : "";

?>

<main id="requisition">

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-8">

        <?php include_once "../components/top_page_btn.php"; ?>

        <!--
        TODO: forms to create:
            1) Zahtev za trebovanje,
            2) Delovodnik (kao komponenta)
        -->

        <!-- requisition info -->
        <article class="requisition-info" id="requisition-heading">
            <h4>
                Шема за требовање материјала за одржавање хигијене
            </h4>
            <table class="requisition-table table table-hover">
                <thead class="text-center">
                    <tr>
                        <th>Хемијска средства за чишћење</th>
                        <th>Инвентар за одржавање хигијене</th>
                        <th>Остали материјали за одржавање хигијене</th>
                        <th>Остали материјали за посебне намене</th>
                    </tr>
                    <tr>
                        <th>426811</th>
                        <th>426812</th>
                        <th>426819</th>
                        <th>426919</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($requisition_info as $requisition_data) { ?>
                        <tr>
                            <?php foreach ($requisition_data as $info) { ?>
                                <td><?php echo $info; ?></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </article>

        <!-- procurement documentation list -->
        <article id="procurement-docs-heading">
            <h4>Документација за требовање у поступку јавних набавки</h4>
            <ol class="list-group list-group-numbered">
                <li class="list-group-item">Одлука о покретању поступка набавке и налог за спровођење поступка набавке,
                </li>
                <li class="list-group-item">Записник - извештај о истраживању тржишта,</li>
                <li class="list-group-item">Позив за подношење понуда потенцијалним понуђачима (са образцом понуде и
                    спецификацијом опреме и
                    радова),
                </li>
                <li class="list-group-item">Понуде (минимум 3 пристигле, исправне понуде),</li>
                <li class="list-group-item">Извештај са отварања понуда и стручна оцена понуда,</li>
                <li class="list-group-item">Одлука о додели уговора,</li>
                <li class="list-group-item">Уговор о набавци и уградњи опреме,</li>
                <li class="list-group-item">Фактура/рачун (исправна и пријављена у ЦРФ-у).</li>
            </ol>
        </article>

        <!-- account plan -->
        <article id="account-plan-heading">
            <h4>Контни план</h4>
            <?php include_once '../components/accounts.php'; ?>
        </article>

    </section>

    <!-- side nav -->
    <aside class="side-nav col-2">
        <nav class="nav flex-column">
            <a class="nav-link" href="#requisition-heading">Шема за требовање</a>
            <a class="nav-link" href="#procurement-docs-heading">Документација за требовање</a>
            <a class="nav-link" href="#account-plan-heading">Контни план</a>
        </nav>
    </aside>

</main>

<?php include_once './../components/footer.php'; ?>