<?php

/*

require_once '../../model/DAO.php';

$dao = new DAO();

$employees = $dao->selectEmployees();

*/

include_once '../components/header.php';

?>

<main id="forms">

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-8">

        <?php include_once "../components/top_page_btn.php"; ?>

        <!--
      TODO: forms to create:
        1) Obrazac potvrde o redovnom skolovanju,
        2) Nalozi za prenos, isplatu i uplatu (opcioni izbor + izbor broja naloga),
        3) Obrazac evidencije dezurstva ucenika,
        4) Obrazac evidencije rasporeda ciscenja - za kuhinju,
        5) Obrazac evidencije prisutnosati na poslu sa potpisom (za vreme raspusta i kolektivnih odmora),
        6) Obrazac za potpise zaposlenih (prilikom obavestenja)
    -->

        <!-- form 1 -->
        <article class="forms" id="form-01">
            <h4>Потврда о редовном школовању</h4>
        </article>

        <!-- form 2 -->
        <article class="forms" id="form-02">
            <h4>Налози за пренос, исплату и уплату</h4>
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <select name="payment-select" id="payment-select">
                    <option value="1">Налог за пренос</option>
                    <option value="2">Налог за исплату</option>
                    <option value="3">Налог за уплату</option>
                </select>
                <input type="submit" value="Изабери" id="paymentSelectBtn" />
            </form>

            <?php
      if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $payment_option = $_REQUEST['payment-select'];
        //echo $payment_option;
        switch ($payment_option) {
          case '1':
            include_once "../components/payments/transfer_order.php";
            break;
          case '2':
            include_once "../components/payments/payment_check.php";
            break;
          case '3':
            include_once "../components/payments/payment_order.php";
            break;
          default:
            echo "Izberite nalog";
            break;
        }
      }


      /* if ($payment_option == 1) {
          include_once "../components/payments/transfer_order.php";
        } elseif ($payment_option == 2) {
          include_once "../components/payments/payment_check.php";
        } else {
          include_once "../components/payments/payment_order.php";
        }
      } else {
        echo "Izberite nalog";
      } */

      ?>


        </article>

        <!-- form 3 -->
        <article class="forms" id="form-03">
            <h4>Образац евиденције дежурства ученика</h4>
        </article>

        <!-- form 4 -->
        <article class="forms" id="form-04">
            <h4>Образац евиденције распореда чишћења просторија школе</h4>
        </article>

        <!-- form 5 -->
        <article class="forms" id="form-05">
            <h4>Образац евиденције пристутности на раду</h4>
        </article>

        <!-- form 6 -->
        <article class="forms" id="form-06">
            <h4>Потписи запослених у настави</h4>
        </article>

        <!-- form 7 -->
        <article class="forms" id="form-07">
            <h4>Обрасци евиденционих картица за завршни испит</h4>
        </article>

    </section>

    <!-- side nav -->
    <aside class="side-nav col-2">
        <nav class="nav flex-column">
            <a class="nav-link" href="#form-01">Потврда о редовном школовању</a>
            <a class="nav-link" href="#form-02">Налози</a>
            <a class="nav-link" href="#form-03">Образац дежурства ученика</a>
            <a class="nav-link" href="#form-04">Образац распореда чишћења</a>
            <a class="nav-link" href="#form-05">Образац пристутности на раду</a>
            <a class="nav-link" href="#form-06">Потписи запослених у настави</a>
            <a class="nav-link" href="#form-07">ID картице за завршни испит</a>
        </nav>
    </aside>

</main>

<?php include_once './../components/footer.php'; ?>