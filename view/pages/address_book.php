<?php

include_once './../components/header.php';
include_once './../../data/data.php';

$alphabet_array = isset($GLOBALS["alphabet_array"]) ? $GLOBALS["alphabet_array"] : "";
$address_book = isset($GLOBALS["address_book"]) ? $GLOBALS["address_book"] : "";

?>

<main id="address-book">

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-10">

        <?php include_once "../components/top_page_btn.php"; ?>

        <article class="address-book-container">

            <!-- search -->

            <!-- TODO: add cancel/clear "x" button to clear search fields -->

            <form action="" class="search-bar-container" onkeyup="contactSearch();">
                <div class="search-icon"><i class="fas fa-search"></i></div>
                <input type="text" id="search-bar" name="search-bar" size="20" placeholder="Претрага" />
            </form>

            <!-- address book -->
            <table class="address-book-table" id="address-table">
                <thead>
                    <tr>
                        <th>Презиме и име</th>
                        <th>Контак телефон</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($address_book as $name => $phone_number) { ?>
                    <tr class="data-container">
                        <td><?php echo $name; ?></td>
                        <td><?php echo $phone_number; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </article>
    </section>

</main>

<?php include_once './../components/footer.php'; ?>