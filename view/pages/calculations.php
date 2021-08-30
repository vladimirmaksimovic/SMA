<?php include_once './../components/header.php'; ?>

<main id="calculations">

    <?php include_once "../components/aside_nav.php"; ?>

    <!-- content  -->
    <section class="content col-10">

        <?php include_once "../components/top_page_btn.php"; ?>

        <!--
        TODO:
        * obracun zatezne kamate,
        * izracunavanje kontrolnog broja za poziv po modulu 97,
        * OZ-7 obrazac,
        * OZ-10 obrazac,
        * Obracun/ugovor o delu,
        * Obracun zatezne kamate,
        * Izbor/preracun najpovoljnije ponude,
        -->

        <!-- select calculation -->
        <article class="calculation-selection">
            <h4>Избор обрачуна:</h4>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="average-three-tab" data-bs-toggle="tab"
                        data-bs-target="#average-three" type="button" role="tab" aria-controls="average-three"
                        aria-selected="true">Просек 3 месеца</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="average-six-tab" data-bs-toggle="tab" data-bs-target="#average-six"
                        type="button" role="tab" aria-controls="average-six" aria-selected="false">Просек 6
                        месеци</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="average-twelve-tab" data-bs-toggle="tab"
                        data-bs-target="#average-twelve" type="button" role="tab" aria-controls="average-twelve"
                        aria-selected="false">Просек 12 месеци</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="credit-limits-tab" data-bs-toggle="tab" data-bs-target="#credit-limits"
                        type="button" role="tab" aria-controls="credit-limits" aria-selected="false">Лимит
                        задужења</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="average-twelve-tab" data-bs-toggle="tab"
                        data-bs-target="#average-twelve" type="button" role="tab" aria-controls="average-twelve"
                        aria-selected="false">Обрачун затезне камате</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="average-three" role="tabpanel"
                    aria-labelledby="average-three-tab">
                    <!-- three month average calculation -->
                    <div class="calculation-container" id="three-months-calc">
                        <h4 id="average-three-heading">Просек 3 месеца</h4>
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
                </div>
                <div class="tab-pane fade" id="average-six" role="tabpanel" aria-labelledby="average-six-tab">
                    <!-- six month average calculation -->
                    <div class="calculation-container" id="six-months-calc">
                        <h4 id="average-six-heading">Просек 6 месеци</h4>
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
                </div>
                <div class="tab-pane fade" id="average-twelve" role="tabpanel" aria-labelledby="average-twelve-tab">
                    <!-- twelve month average calculation -->
                    <div class="calculation-container" id="twelve-months-calc">
                        <h4 id="average-twelve-heading">Просек 12 месеци</h4>
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
                </div>
                <div class="tab-pane fade" id="credit-limits" role="tabpanel" aria-labelledby="credit-limit-tab">
                    <!-- credit limit calculation -->
                    <div class="calculation-container" id="credit-limit">
                        <h4 id="credit-limit-heading">Лимит задужења</h4>
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
                </div>
                <div class="tab-pane fade" id="average-twelve" role="tabpanel" aria-labelledby="average-twelve-tab">...
                </div>
            </div>


            <!-- <select name="calculations" id="calcs">
                <option value="three-months-calc">Просек 3 месеца</option>
                <option value="six-months-calc">Просек 6 месеца</option>
                <option value="twelve-months-calc">Просек 12 месеца</option>
                <option value="credit-limit">Лимит задужења</option>
                <option value="credit-limit">Обрачун затезне камате</option>
            </select>
            <button id="calcSelectBtn">Изабери обрачун</button> -->
        </article>

    </section>
</main>

<?php include_once '../components/footer.php'; ?>

<script src="../../assets/js/calculations.js"></script>