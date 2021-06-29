<?php

include_once '../components/header.php';
include_once '../../data/accounting_examples.php';

$accounting_examples = isset($GLOBALS["accounting_examples"]) ? $GLOBALS["accounting_examples"] : "";

?>

<main>
  <?php include_once "../components/aside_nav.php"; ?>

  <!-- content  -->
  <section class="content">

    <?php include_once "../components/top_page_btn.php"; ?>

    <h2 id="recalculations">Примери прерачуна и обрачуна</h2>

    <article class="recalculations">
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
    <article>
      <h2 id="reminders-info">Неопорезиви износи и број радних часова у 2021. години</h2>
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
    <article>
      <h2 id="accounting-examples-heading">Књиговодствени примери</h2>
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
                    <td title="<?php echo $example_row['title']; ?>"><?php echo $example_row["account"]; ?></td>
                    <td><?php echo $example_row["description"]; ?></td>
                    <td class="amounts"><?php echo $example_row["debit"] === "0,00" ? "" : $example_row["debit"]; ?></td>
                    <td class="amounts"><?php echo $example_row["credit"] === "0,00" ? "" : $example_row["credit"]; ?></td>
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
    <article class="voucher-example">
      <h2 id="voucher-example-heading">Налог за исплату</h2>
      <div class="voucher-example-container">
        <div class="voucher-input-container left-voucher-input">
          <div class="voucher-input-section">
            <label for="payer">Платилац</label>
            <!-- <input type="text" id="payer" class="voucher-input"
              value="ОШ 'Светозар Марковић' Цара Душана бр. 2, Краљево" /> -->
            <textarea id="payer" class="voucher-input" rows="2">
              ОШ "Светозар Марковић",
              Цара Душана бр. 2, Краљево</textarea>
            <label for="payment-purpose">Сврха исплате</label>
            <!-- <input type="text" id="payment-purpose" class="voucher-input"
              value="Исплата трошкова хранарине за ученика Марка Марковића, учесника републичког такмичења из математике" /> -->
            <textarea id="payment-purpose" class="voucher-input" rows="3">Исплата трошкова хранарине за ученика Марка Марковића, учесника републичког такмичења из математике</textarea>
            <label for="payee">Прималац</label>
            <!-- <input type="text" id="payee" class="voucher-input"
              value="ОШ 'Светозар Марковић' Име и презиме, број личне карте" /> -->
            <textarea id="payee" class="voucher-input" rows="2">
              ОШ "Светозар Марковић",
              Име и презиме, број личне карте</textarea>
          </div>
          <div class="voucher-signature-section">
            <input type="text" id="payers-signature" class="voucher-input" />
            <label for="payers-signature">Печат и потпис платиоца</label>
            <input type="text" id="receipt-place-date" class="voucher-input" />
            <label for="receipt-place-date">Место и датум пријема</label>
          </div>
        </div>
        <div class="voucher-input-container right-voucher-input">
          <div class="right-voucher-input-container">
            <div class="input-group">
              <label for="payment-code">Шифра плаћања</label>
              <input type="text" id="payment-code" class="voucher-input" value="166" />
            </div>
            <div class="input-group">
              <label for="currency">Валута</label>
              <input type="text" id="currency" class="voucher-input" value="РСД" />
            </div>
            <div class="input-group amount">
              <label for="amount">Износ</label>
              <input type="text" id="amount" class="voucher-input" value="'Износ уплате'" />
            </div>
          </div>
          <label for="payers-account">Рачун платиоца</label>
          <input type="text" id="payers-account" class="voucher-input" value="840 - 103660 - 33" />
          <div class="right-voucher-input-container">
            <div class="input-group">
              <label for="payment-model">Модел</label>
              <input type="text" id="payment-model" class="voucher-input" value="97" />
            </div>
            <div class="input-group reference-number">
              <label for="reference-number">Позив на број (задужење)</label>
              <input type="text" id="reference-number" class="voucher-input" value="66 - 00652 - 422412 - 01 - 01 - 912" />
            </div>
          </div>
          <div class="voucher-right-signature-section">
            <p>. . . потпис . . .</p>
            <p>. . . број личне карте . . .</p>
            <p>. . . издате од МУП-а . . .</p>
          </div>
          <div class="voucher-right-date-section voucher-signature-section">
            <input type="text" id="receipt-date" class="voucher-input" />
            <label for="receipt-date">Датум извршења</label>
          </div>
          <!-- <label for="payers-account">Платилац</label>
          <input type="text" id="payers-account" class="voucher-input" value="840 - 103660 - 33" />
          <label for="payers-account">Платилац</label>
          <input type="text" id="payers-account" class="voucher-input" value="840 - 103660 - 33" /> -->
        </div>
      </div>
    </article>
  </section>
</main>

<?php include_once './../components/footer.php'; ?>