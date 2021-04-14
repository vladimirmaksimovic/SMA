<?php
// info data
$basic_info = [
  "Назив установе" => "ОШ 'Светозар Марковић'",
  "Адреса установе" => "Цара Душана број 2, 36000 Краљево",
  "ПИБ" => "100264288",
  "МБР" => "07100973",
  "РЕГ" => "6143002632",
  "Делатност" => "8520 - основно образовање",
  "Датум оснивања" => "28.11.1958. године",
  "ЈБКЈС" => "00652",
  "E-mail директора / секретара" => "&#115;&#118;&#101;&#116;&#109;&#097;&#114;&#107;&#046;&#107;&#118;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;",
  "E-mail педагога" => "&#115;&#118;&#101;&#116;&#109;&#097;&#114;&#107;&#046;&#107;&#118;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;",
  "E-mail психолога" => "&#115;&#118;&#101;&#116;&#109;&#097;&#114;&#107;&#046;&#107;&#118;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;",
  "E-mail рачуноводство" => "&#115;&#118;&#101;&#116;&#109;&#097;&#114;&#107;&#046;&#098;&#114;&#097;&#110;&#107;&#097;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;",
  "E-mail администрација" => "&#115;&#118;&#101;&#116;&#109;&#097;&#114;&#046;&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;",
  "Телефон директора" => "036 314 302",
  "Телефон секретара" => "036 314 296",
  "Телефон педагога" => "036 314 296 / локал ??",
  "Телефон психолога" => "036 314 296 / локал ??",
  "Телефон рачуноводство" => "036 331 060",
  "Вебсајт школе" => "<a href='https://ossvetozarmarkovic.wordpress.com/' target='_blank'>https://ossvetozarmarkovic.wordpress.com/</a>",
  "Буџетски подрачун" => "840-103660-33",
  "Ученички подрачун" => "840-1512760-90",
  "Подрачун зарада" => "840-103860-15",
  "Донацијски подрачун" => "840-4747760-37",
];

// test data
$divisions_test = [
  "Први разред" => [
    "I/1" => "Гордана Ђајић",
    "I/2" => "Јована Миловановић",
    "I/3" => "Катарина Симовић",
    "I/4" => "Марија Недељковић",
  ],
  "Други разред" => [
    "II/1" => "Јасмина Мајсторовић",
    "II/2" => "Татјана Крстић",
    "II/3" => "Златана Зарић",
    "II/4" => "Драгана Даниловић",
  ],
  "Трећи разред" => [
    "III/1" => "Милена Банковић",
    "III/2" => "Жаклина Перишић",
    "III/3" => "Јасна Марјановић",
    "III/4" => "Марија Малинић",
  ],
  "Четврти разред" => [
    "IV/1" => "Ивана Станишић",
    "IV/2" => "Јелена Јовановић",
    "IV/3" => "Данијела Арсић",
    "IV/4" => "Сузана Петровић",
  ],
  "Пети разред" => [
    "V/1" => "Марија Стефановић",
    "V/2" => "Марина Јевремовић",
    "V/3" => "Гордана Миљковић",
    "V/4" => "Драгана Бркушанин",
  ],
  "Шести разред" => [
    "VI/1" => "Милош Николић",
    "VI/2" => "Ненад Станојевић",
    "VI/3" => "Ана Милуновић",
    "VI/4" => "Кристина Трујић",
  ],
  "Седми разред" => [
    "VII/1" => "Вукашин Дедовић",
    "VII/2" => "Оливера Илић",
    "VII/3" => "Јасмина Булатовић",
    "VII/4" => "Гордана Киковић",
    "VII/5" => "Снежана Недељковић",
  ],
  "Осми разред" => [
    "VIII/1" => "Љиљана Божовић",
    "VIII/2" => "Весна Шућур",
    "VIII/3" => "Александра Стојановић",
    "VIII/4" => "Наташа Китановић",
  ],
];

// suppliers data
$suppliers = [
  [
    "Друштвене делатности",
    "036 306 082",
    "drustvenekv308@gmail.com",
    "... ко год се јави ..."
  ],
  [
    "Пекара ДАЧЕ",
    "063 775 08 41",
    "pekaradace@yahoo.com",
    "Драгослав Нешић"
  ],
  [
    "VM-COMMERCE DOO",
    "064 209 45 10",
    " - ",
    "Александар Гочанин"
  ],
  [
    "SEM servis",
    "036 313 302",
    " - ",
    "... ко год се јави ..."
  ],
  [
    "Дечији диспанзер - др Барлов",
    "036 301 529",
    "slavica.jovic@dzkraljevo.co.rs",
    "Сестра Славица Јовић"
  ],
  [
    "Max Pro Solution",
    "036 200 895 && 060 140 11 00",
    "office@maxpro.rs",
    "... ко год се јави ..."
  ],
];

// school bell data
$school_bell = [
  "Редовна настава" => [
    "Прва смена" => [
      "почетак прве смене" => "07:50",
      "1. час" => "08:00 - 08:45",
      "2. час" => "08:50 - 09:35",
      "крај великог одмора" => "10:00",
      "3. час" => "10:05 - 10:50",
      "4. час" => "10:55 - 11:40",
      "5. час" => "11:45 - 12:30",
      "6. час" => "12:35 - 13:20",
    ],
    "Друга смена" => [
      "почетак друге смене" => "13:20",
      "1. час" => "13:30 - 14:15",
      "2. час" => "14:20 - 15:05",
      "крај великог одмора" => "15:30",
      "3. час" => "15:35 - 16:20",
      "4. час" => "16:25 - 17:10",
      "5. час" => "17:15 - 18:00",
      "6. час" => "18:05 - 18:50",
    ],
  ],
  "Скраћени часови" => [
    "Прва смена" => [
      "почетак прве смене" => "07:50",
      "1. час" => "08:00 - 08:45",
      "2. час" => "08:50 - 09:35",
      "крај великог одмора" => "10:00",
      "3. час" => "10:05 - 10:50",
      "4. час" => "10:55 - 11:40",
      "5. час" => "11:45 - 12:30",
      "6. час" => "12:35 - 13:20",
    ],
    "Друга смена" => [
      "почетак друге смене" => "13:20",
      "1. час" => "13:30 - 14:15",
      "2. час" => "14:20 - 15:05",
      "крај великог одмора" => "15:30",
      "3. час" => "15:35 - 16:20",
      "4. час" => "16:25 - 17:10",
      "5. час" => "17:15 - 18:00",
      "6. час" => "18:05 - 18:50",
    ],
  ],
];

// requisition data
$requisition_docs = [
  "Одлука о покретању поступка набавке и налог за спровођење поступка набавке,",
  "Записник - извештај о истраживању тржишта,",
  "Позив за подношење понуда потенцијалним понуђачима (са образцом понуде и спецификацијом опреме и радова),",
  "Понуде (минимум 3 пристигле, исправне понуде),",
  "Извештај са отварања понуда и стручна оцена понуда,",
  "Одлука о додели уговора,",
  "Уговор о набавци и уградњи опреме,",
  "Фактура/рачун (исправна и пријављена у ЦРФ-у).",
];

// account data
$analytic_accounts = [
  "Накнаде у натури" => "413100",
  "Помоћ у медицинском лечењу запосленог или чланова уже породице и друге помоћи запосленом" => "414400",
  "Накнаде трошкова за запослене" => "415100",
  "Награде запосленима и остали посебни расходи" => "416100",
  "Трошкови платног промета и банкарских услуга" => "421100",
  "Енергетске услуге" => "421200",
  "Комуналне услуге" => "421300",
  "Услуге комуникација" => "421400",
  "Трошкови осигурања" => "421500",
  "Трошкови службених путовања у земљи" => "422100",
  "Компјутерске услуге" => "423200",
  "Услуге образовања и усавршавања запослених" => "423300",
  "Услуге информисања" => "423400",
  "Репрезентација" => "423700",
  "Услуге образовања, културе и спорта" => "424200",
  "Медицинске услуге" => "424300",
  "Специјализоване услуге" => "424900",
  "Текуће поправке и одржавање зграда и објеката" => "425100",
  "Текуће поправке и одржавање опреме" => "425200",
  "Административни материјал" => "426100",
  "Материјали за образовање и усавршавање запослених" => "426300",
  "Материјали за образовање, културу и спорт" => "426600",
  "Материјали за одржавање хигијене и угоститељство" => "426800",
  "Материјали за посебне намене" => "426900",
  "Обавезне таксе" => "482200",
  "Пројектно планирање" => "511400",
  "Административна опрема" => "512200",
  "Опрема за заштиту животне средине" => "512400",
  "Опрема за образовање, науку, културу и спорт" => "512600",
  "Опрема за јавну безбедност" => "512800",
  "Трошкови путовања ученика" => "422400",
];

$subanalytic_accounts = [
  "Превоз на посао и са посла (маркица)" => "413151",
  "Помоћ у медицинском лечењу запосленог или члана уже породице" => "414411",
  "Накнаде трошкова за превоз на посао и са посла" => "415112",
  "Јубиларне награде" => "416111",
  "Трошкови платног промета" => "421111",
  "Услуге за електричну енергију" => "421211",
  "Централно грејање" => "421225",
  "Услуге водовода и канализације" => "421311",
  "Дератизација" => "421321",
  "Одвоз отпада" => "421324",
  "Телефон, телекс и телефакс" => "421411",
  "Интернет и слично" => "421412",
  "Пошта" => "421421",
  "Осигурање зграда" => "421511",
  "Трошкови дневница (исхране) на службеном путу" => "422111",
  "Трошкови превоза на службеном путу у земљи (авион, аутобус, воз, и сл.)" => "422121",
  "Превоз ученика" => "422411",
  "Трошкови путовања ученика који учествују на републичким и међународним такмичењима" => "422412",
  "Остале компјутерске услуге" => "423291",
  "Услуге образовања и усавршавања запослених" => "423311",
  "Котизација за семинаре" => "423321",
  "Остали издаци за стручно образовање" => "423399",
  "Остале услуге штампања" => "423419",
  "Репрезентација" => "423711",
  "Поклони" => "423712",
  "Услуге образовања" => "424211",
  "Здравствена заштита по уговору" => "424311",
  "Остале специјализоване услуге" => "424911",
  "Зидарски радови" => "425111",
  "Столарски радови" => "425112",
  "Молерски радови" => "425113",
  "Радови на крову" => "425114",
  "Радови на водоводу и канализацији" => "425115",
  "Централно грејање" => "425116",
  "Електричне инсталације" => "425117",
  "Остале услуге и материјали за текуће поправке и одржавање зграда" => "425119",
  "Рачунарска опрема" => "425222",
  "Текуће поправке и одржавање опреме за образовање" => "425261",
  "Текуће поправке и одржавање опреме за јавну безбедност" => "425281",
  "Канцеларијски материјал" => "426111",
  "Службена одећа" => "426122",
  "Стручна литература за редовне потребе запослених" => "426311",
  "Материјали за образовање" => "426611",
  "Хемијска средства за чишћење" => "426811",
  "Инвентар за одржавање хигијене" => "426812",
  "Остали материјал за одржавање хигијене" => "426819",
  "Потрошни материјал" => "426911",
  "Алат и инвентар" => "426913",
  "Остали материјали за посебне намене" => "426919",
  "Остале накнаде за образовање" => "472719",
  "Републичке таксе" => "482211",
  "Градске таксе" => "482231",
  "Електронска опрема" => "512241",
  "Пројектна документација" => "511451",
  "Опрема за заштиту животне средине" => "512411",
  "Опрема за образовање" => "512611",
  "Опрема за јавну безбедност" => "512811",
];

// address data
$alphabet_array = [
  "А", "Б", "В", "Г", "Д", "Ђ", "Е", "Ж", "З", "И", "Ј", "К", "Л", "Љ", "М", "Н", "Њ", "О", "П", "Р",
  "С", "Т", "Ћ", "У", "Ф", "Х", "Ц", "Ч", "Џ", "Ш"
];

$address_book = [
  "Перишић Жаклина" => "031 33 10 296",
  "Марјановић Јасна" => "031 33 10 296",
  "Малинић Марија" => "031 33 10 296",
  "Станишић Ивана" => "031 33 10 296",
  "Јовановић Јелена" => "031 33 10 296",
  "Арсић Данијела" => "031 33 10 296",
  "Петровић Сузана" => "031 33 10 296",
  "Ђајић Гордана" => "031 33 10 296",
  "Симовић Катарина" => "031 33 10 296",
  "Недељковић Марија" => "031 33 10 296",
  "Миловановић Јована" => "031 33 10 296",
  "Мајсторовић Јасмина" => "031 33 10 296",
  "Крстић Татјана" => "031 33 10 296",
  "Зарић Златана" => "031 33 10 296",
  "Даниловић Драгана" => "031 33 10 296",
  "Миловановић Слободан" => "031 33 10 296",
  "Милуновић Ана" => "031 33 10 296",
  "Булатовић Јасмина" => "031 33 10 296",
  "Миљковић Гордана" => "031 33 10 296",
  "Ђорђевић Снежана" => "031 33 10 296",
  "Бркушанин Драгана" => "031 33 10 296",
  "Шућур Весна" => "031 33 10 296",
  "Илић Оливера" => "031 33 10 296",
  "Пајовић Лидија" => "031 33 10 296",
  "Ђонић Јелена" => "031 33 10 296",
  "Кастратовић Гордана" => "031 33 10 296",
  "Грковић Александра" => "031 33 10 296",
  "Каличанин Ана" => "031 33 10 296",
  "Дедовић Вукашин" => "031 33 10 296",
  "Савић Радуна" => "031 33 10 296",
  "Стефановић Марија" => "031 33 10 296",
  "Попадић Алекса" => "031 33 10 296",
  "Слијепчевић Данијела" => "031 33 10 296",
  "Киковић Гордана" => "031 33 10 296",
  "Ерац Љиљана" => "031 33 10 296",
  "Трујић Кристина" => "031 33 10 296",
  "Милићевић Драгана" => "031 33 10 296",
  "Великинац Предраг" => "031 33 10 296",
  "Недељковић Снежана" => "031 33 10 296",
  "Недељковић Златко" => "031 33 10 296",
  "Божовић Љиљана" => "031 33 10 296",
  "Китановић Наташа" => "031 33 10 296",
  "Лешевић Ненад" => "031 33 10 296",
  "Јаковљевић Зоран" => "031 33 10 296",
  "Мартић Невена" => "031 33 10 296",
  "Орловић Љиљана" => "031 33 10 296",
  "Дробњак Олга" => "031 33 10 296",
  "Дабижљевић Бранка" => "031 33 10 296",
  "Бекчић Ленче" => "031 33 10 296",
  "Ђорђевић Марија" => "031 33 10 296",
  "Трифуновић Анђелка" => "031 33 10 296",
  "Савић Славица" => "031 33 10 296",
  "Сретовић Светлана" => "031 33 10 296",
  "Ђуровић Наташа" => "031 33 10 296",
  "Терзић Драгана" => "031 33 10 296",
  "Томић Тома" => "031 33 10 296",
  "Банковић Милена" => "031 33 10 296",
];

$footer_info = [
  [
    "Адреса" => "Цара Душана број 2,",
    "Место" => "36000 Краљево",
    "E-mail I" => "&#115;&#118;&#101;&#116;&#109;&#097;&#114;&#107;&#046;&#107;&#118;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;",
    "E-mail II" => "&#115;&#118;&#101;&#116;&#109;&#097;&#114;&#046;&#111;&#102;&#102;&#105;&#099;&#101;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;",
    "Основана" => "28.11.1958. године",
  ],
  [
    "ПИБ" => "100264288",
    "МБР" => "07100973",
    "РЕГ" => "6143002632",
    "Делатност" => "8520, основно образовање",
    "ЈБКЈС" => "00652",
  ],
  [
    "Директор" => "036 314 302",
    "Секретар" => "036 314 296",
    "Рачуноводство" => "036 331 060",
  ],
  [
    "Буџетски" => "840-103660-33",
    "Ученички" => "840-1512760-90",
    "Зараде" => "840-103860-15",
    "Донацијски" => "840-4747760-37",
  ],
];
