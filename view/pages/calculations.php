<?php include_once './../components/header.php'; ?>

<main>
  <?php include_once "../components/aside-nav.php"; ?>

  <!--
  <aside>
    <nav class="aside-container">
      <ul>
        <li><a href="#average-three">Просек 3 месеца</a></li>
        <li><a href="#average-six">Просек 6 месеци</a></li>
        <li><a href="#average-twelve">Просек 12 месеци</a></li>
        <li><a href="#credit-limit">Лимит задужења</a></li>
        <li><a href="#"><i class="fas fa-arrow-up"></i> Врх стране</a></li>
      </ul>
    </nav>
  </aside>
  -->

  <!-- content  -->
  <section class="content calculations">

    <?php include_once "../components/topPageBtn.php"; ?>

    <!-- 
          TODO:
            a) Redesign calculation form. No need for sum and avr fields to be in input elements.
            b) Input fields have to accept numbers with two decimals
            c) Form has to calculate and show result with two decimals
            d) Clear input fields btn has to be red color on hover
        -->


    <article class="calculation-selection">
      <h2>Избор обрачуна:</h2>
      <select name="calculations" id="calculations">
        <option value="three-months-calc">Просек 3 месеца</option>
        <option value="six-months-calc">Просек 6 месеца</option>
        <option value="twelve-months-calc">Просек 12 месеца</option>
        <option value="credit-limit">Лимит задужења</option>
      </select>
      <button id="calcSelectBtn">Изабери обрачун</button>
    </article>


    <article class="calculations-container">

      <!-- three month calculation -->
      <div class="calculation-container" id="three-months-calc">
        <h2 id="average-three">Просек 3 месеца</h2>
        <div class="calculation-form">
          <label class="calc-label">Први месец</label>
          <input type='text' class="three-months-calculation-input" />
          <label class="calc-label">Други месец</label>
          <input type='text' class="three-months-calculation-input" />
          <label class="calc-label">Трећи месец</label>
          <input type='text' class="three-months-calculation-input" />
          <div class="total-month calc-label">Укупно</div>
          <div id="three-month-total-calc" class="calc-output calc-total-output"></div>
          <div class="average-month calc-label">Просек</div>
          <div id="three-month-average-calc" class="calc-output calc-average-output"></div>
          <button id="threeMonthCalc" class="calc-btn">Израчунај</button>
          <button id="btn-clear" class="clear-btn">Избриши поља</button>
        </div>
      </div>

      <!-- six month calculation -->
      <div class="calculation-container" id="six-months-calc">
        <h2 id="average-six">Просек 6 месеци</h2>
        <div class="calculation-form">
          <label class="calc-label">Први месец</label>
          <input type="text" class="six-months-calculation-input" />
          <label class="calc-label">Други месец</label>
          <input type="text" class="six-months-calculation-input" />
          <label class="calc-label">Трећи месец</label>
          <input type="text" class="six-months-calculation-input" />
          <label class="calc-label">Четврти месец</label>
          <input type="text" class="six-months-calculation-input" />
          <label class="calc-label">Пети месец</label>
          <input type="text" class="six-months-calculation-input" />
          <label class="calc-label">Шести месец</label>
          <input type="text" class="six-months-calculation-input" />
          <div class="total-month">Укупно</div>
          <div id="six-month-total-calc" class="calc-output calc-total-output"></div>
          <div class="average-month">Просек</div>
          <div id="six-month-average-calc" class="calc-output calc-average-output"></div>
          <button id="sixMonthCalc" class="calc-btn">Израчунај</button>
          <button id="btn-clear" class="clear-btn">Избриши поља</button>
        </div>
      </div>

      <!-- twelve month calculation -->
      <div class="calculation-container" id="twelve-months-calc">
        <h2 id="average-twelve">Просек 12 месеци</h2>
        <div class="calculation-form">
          <label>Први месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Други месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Трећи месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Четврти месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Пети месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Шести месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Седми месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Осми месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Девети месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Десети месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Једанаести месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <label>Дванаести месец</label>
          <input type="text" class="twelve-months-calculation-input" />
          <div class="total-month">Укупно</div>
          <div id="twelve-month-total-calc" class="calc-output calc-total-output"></div>
          <div class="average-month">Просек</div>
          <div id="twelve-month-average-calc" class="calc-output calc-average-output"></div>
          <button id="twelveMonthCalc" class="calc-btn">Израчунај</button>
          <button id="btn-clear" class="clear-btn">Избриши поља</button>
        </div>
      </div>

      <!-- credit limit calculation -->
      <div class="calculation-container" id="credit-limit">
        <h2 id="credit-limit-heading">Лимит задужења</h2>
        <div class="calculation-form credit-limit-container">
          <div class="credit-limit">
            <label for="net-salary">Нето зарада</label>
            <input type="text" id="net-salary" />
            <label for="suspensions">Обуставе</label>
            <input type="text" id="suspensions" />
            <button id="creditLimitBtn" class="calc-btn">Израчунај</button>
          </div>
          <div class="credit-limit">
            <div class="credit-limit-label one-third-salary">1/3 зараде</div>
            <div id="one-third-salary" class="calc-output"></div>
            <div class="credit-limit-label one-half-salary">1/2 зараде</div>
            <div id="one-half-salary" class="calc-output"></div>
          </div>
          <div class="credit-limit">
            <div class="credit-limit-label one-third-limit">Дозвољено задужење на 1/3 зараде</div>
            <div id="one-third-limit" class="calc-output"></div>
            <div class="credit-limit-label one-half-limit">Дозвољено задужење на 1/2 зараде</div>
            <div id="one-half-limit" class="calc-output"></div>
            <button id="btn-clear" class="clear-btn">Избриши поља</button>
          </div>
        </div>
      </div>

    </article>
  </section>
</main>

<?php include_once '../components/footer.php'; ?>

<script src="../../assets/js/calculations.js"></script>