<!-- nalog za isplatu -->
<div class="voucher-example">
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
</div>