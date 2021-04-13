<?php include_once './../components/header.php'; ?>

<!-- main -->
<main>
  <!-- aside -->
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
  <!-- /aside -->

  <!-- content  -->
  <section class="content">
    <article class="calculations-container">
      <h2 id="average-three">Просек 3 месеца</h2>

      <!-- 
          TODO:
            a) Redesign calculation form. No need for sum and avr fields to be in input elements.
            b) Input fields have to accept numbers with two decimals
            c) Form has to calculate and show result with two decimals
            d) Clear input fields btn has to be red color on hover
        -->

      <form action="" class="calculation-form">
        <label for="first-month" class="calc-label">Први месец</label>
        <input type='text' id="first-month" class="calc-input-three" />
        <label for="second-month" class="calc-label">Други месец</label>
        <input type='text' id="second-month" class="calc-input-three" />
        <label for="third-month" class="calc-label">Трећи месец</label>
        <input type='text' id="third-month" class="calc-input-three" />
        <label for="total-month" class="calc-label">Укупно</label>
        <input type="text" id="total-three-month-calc" class="calc-total-output" />
        <label for="average-month" class="calc-label">Просек</label>
        <input type="text" id="average-three-month-calc" class="calc-average-output" />
        <button id="threeMonthCalc" class="btn calc-btn">Израчунај</button>
        <button id="btn-clear" class="btn clear-btn">Избриши поља</button>
      </form>

    </article>
    <article class="calculations-container">
      <h2 id="average-six">Просек 6 месеци</h2>
      <form action="" class="calculation-form">
        <label for="first-month" class="calc-label">Први месец</label>
        <input type="text" id="first-month" class="calc-input-six" />
        <label for="second-month" class="calc-label">Други месец</label>
        <input type="text" id="second-month" class="calc-input-six" />
        <label for="third-month" class="calc-label">Трећи месец</label>
        <input type="text" id="third-month" class="calc-input-six" />
        <label for="fourh-month" class="calc-label">Четврти месец</label>
        <input type="text" id="fourh-month" class="calc-input-six" />
        <label for="fifth-month" class="calc-label">Пети месец</label>
        <input type="text" id="fifth-month" class="calc-input-six" />
        <label for="sixth-month" class="calc-label">Шести месец</label>
        <input type="text" id="sixth-month" class="calc-input-six" />
        <label for="total-month">Укупно</label>
        <input type="text" id="total-six-month-calc" class="calc-total-output" />
        <label for="average-month">Просек</label>
        <input type="text" id="average-six-month-calc" class="calc-average-output" />
        <button id="sixMonthCalc" class="btn calc-btn">Израчунај</button>
        <button id="btn-clear" class="btn clear-btn">Избриши поља</button>
      </form>

    </article>
    <article class="calculations-container">
      <h2 id="average-twelve">Просек 12 месеци</h2>
      <form action="" class="calculation-form">
        <label for="first-month">Први месец</label>
        <input type="text" id="first-month" class="calc-input-twelve" />
        <label for="second-month">Други месец</label>
        <input type="text" id="second-month" class="calc-input-twelve" />
        <label for="third-month">Трећи месец</label>
        <input type="text" id="third-month" class="calc-input-twelve" />
        <label for="first-month">Четврти месец</label>
        <input type="text" id="first-month" class="calc-input-twelve" />
        <label for="second-month">Пети месец</label>
        <input type="text" id="second-month" class="calc-input-twelve" />
        <label for="third-month">Шести месец</label>
        <input type="text" id="third-month" class="calc-input-twelve" />
        <label for="first-month">Седми месец</label>
        <input type="text" id="first-month" class="calc-input-twelve" />
        <label for="second-month">Осми месец</label>
        <input type="text" id="second-month" class="calc-input-twelve" />
        <label for="third-month">Девети месец</label>
        <input type="text" id="third-month" class="calc-input-twelve" />
        <label for="first-month">Десети месец</label>
        <input type="text" id="first-month" class="calc-input-twelve" />
        <label for="second-month">Једанаести месец</label>
        <input type="text" id="second-month" class="calc-input-twelve" />
        <label for="third-month">Дванаести месец</label>
        <input type="text" id="third-month" class="calc-input-twelve" />
        <label for="total-month">Укупно</label>
        <input type="text" id="total-twelve-month-calc" class="calc-total-output" />
        <label for="average-month">Просек</label>
        <input type="text" id="average-twelve-month-calc" class="calc-average-output" />
        <button id="twelveMonthCalc" class="btn calc-btn">Израчунај</button>
        <button id="btn-clear" class="btn clear-btn">Избриши поља</button>
      </form>

    </article>
    <article class="calculations-container">
      <h2 id="credit-limit">Лимит задужења</h2>

      <form action="" class="calculation-form">
        <label for="net-salary">Нето зарада</label>
        <input type="text" id="net-salary" />
        <label for="suspensions">Обуставе</label>
        <input type="text" id="suspensions" />
        <button id="creditLimitCalc" class="btn calc-btn">Израчунај</button>
      </form>

      <form action="" class="calculation-form">
        <label for="one-third-salary">1/3 зараде</label>
        <input type="text" id="one-third-salary" />
        <label for="one-half-salary">1/2 зараде</label>
        <input type="text" id="one-half-salary" />
      </form>

      <form action="" class="calculation-form">
        <label for="one-third-limit">Дозвољено задужење на 1/3 зараде</label>
        <input type="text" id="one-third-limit" />
        <label for="one-half-limit">Дозвољено задужење на 1/2 зараде</label>
        <input type="text" id="one-half-limit" />
        <button id="btn-clear" class="btn clear-btn">Избриши поља</button>
      </form>

    </article>
  </section>
  <!-- /content -->
</main>
<!-- /main -->

<?php include_once './../components/footer.php'; ?>