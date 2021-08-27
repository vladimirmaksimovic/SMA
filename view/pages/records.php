<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$requisition_info = isset($GLOBALS["requisition_info"]) ? $GLOBALS["requisition_info"] : "";
$requisition_docs = isset($GLOBALS["requisition_docs"]) ? $GLOBALS["requisition_docs"] : "";
$subanalytic_accounts = isset($GLOBALS["subanalytic_accounts"]) ? $GLOBALS["subanalytic_accounts"] : "";

?>

<main>

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-8">

        <?php include_once "../components/top_page_btn.php"; ?>

        <!-- materials record -->
        <article class="materials-record">
            <h4 id="materials-heading">
                Евиденција канцеларијског и материјала за образовање
            </h4>
            <div class="materials-education" id="materials-education-heading">
                <h5>
                    Евиденција материјала за образовање
                </h5>
            </div>
            <div class="materials-office" id="materials-office-heading">
                <h5>
                    Евиденција канцеларијског материјала
                </h5>
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
        <article class="sick-leave-engagements-record" id="sick-leave-engagements-heading">
            <h4>
                Евиденција замена за боловање
            </h4>
        </article>

        <!-- parent council record -->
        <article class="parent-council-record" id="parent-council-heading">
            <h4>
                Савет родитеља
            </h4>
        </article>

        <!-- certificates record -->
        <article class="certificates-record" id="certificates-heading">
            <h4>
                Сетрификати и усавршавања
            </h4>
        </article>

    </section>

    <!-- side nav -->
    <aside class="side-nav col-2">
        <nav class="nav flex-column">
            <a class="nav-link" href="#materials-heading">Евиденција материјала</a>
            <a class="nav-link" href="#sick-leave-engagements-heading">Евиденција ангажовања</a>
            <a class="nav-link" href="#parent-council-heading">Савет родитеља</a>
            <a class="nav-link" href="#certificates-heading">Сетрификати и усавршавања</a>
        </nav>
    </aside>

</main>

<?php include_once './../components/footer.php'; ?>