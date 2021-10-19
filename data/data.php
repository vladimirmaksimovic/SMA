<?php

// test data
$divisions_test = [
  "Први разред" => [
    "I/1" => "Ивана Станишић",
    "I/2" => "Јелена Јовановић",
    "I/3" => "Сузана Петровић",
    "I/4" => "Милена Банковић",
  ],
  "Други разред" => [
    "II/1" => "Гордана Ђајић",
    "II/2" => "Јована Миловановић",
    "II/3" => "Катарина Симовић",
    "II/4" => "Марија Недељковић",
  ],
  "Трећи разред" => [
    "III/1" => "Јасмина Мајсторовић",
    "III/2" => "Татјана Крстић",
    "III/3" => "Златана Зарић",
    "III/4" => "Драгана Даниловић",
  ],
  "Четврти разред" => [
    "IV/1" => "Данијела Арсић",
    "IV/2" => "Жаклина Перишић",
    "IV/3" => "Јасна Марјановић",
    "IV/4" => "Марија Малинић",
  ],
  "Пети разред" => [
    "V/1" => "Данијела Слијепчевић",
    "V/2" => "Слободан Миловановић",
    "V/3" => "Александра Стојановић",
    "V/4" => "Александра Грковић",
  ],
  "Шести разред" => [
    "VI/1" => "Марија Стефановић",
    "VI/2" => "Марина Јевремовић",
    "VI/3" => "Гордана Миљковић",
    "VI/4" => "Драгана Бркушанин",
  ],
  "Седми разред" => [
    "VII/1" => "Милош Николић",
    "VII/2" => "Дрaгана Милићевић",
    "VII/3" => "Ана Милуновић",
    "VII/4" => "Кристина Трујић",
    /* "VII/5" => "Снежана Недељковић", */
  ],
  "Осми разред" => [
    "VIII/1" => "Вукашин Дедовић",
    "VIII/2" => "Оливера Илић",
    "VIII/3" => "Јасмина Булатовић",
    "VIII/4" => "Гордана Киковић",
    "VIII/5" => "Снежана Недељковић",
  ],
];

// school bell data
$school_bell = [
  "Редовна настава" => [
    "Прва смена" => [
      "0. час" => "07:10 - 07:55",
      "1. час" => "08:00 - 08:45",
      "2. час" => "08:50 - 09:35",
      "крај великог одмора" => "10:00",
      "3. час" => "10:05 - 10:50",
      "4. час" => "10:55 - 11:40",
      "5. час" => "11:45 - 12:30",
      "6. час" => "12:35 - 13:20",
    ],
    "Друга смена" => [
      "0. час" => "12:35 - 13:20",
      "1. час" => "13:30 - 14:15",
      "2. час" => "14:20 - 15:05",
      "крај великог одмора" => "15:30",
      "3. час" => "15:35 - 16:20",
      "4. час" => "16:25 - 17:10",
      "5. час" => "17:15 - 18:00",
      "6. час" => "18:05 - 18:50",
    ],
  ],
  /* "Скраћени часови" => [
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
  ], */
];

// requisition data
$requisition_info = [
  ["Cevol", "Sundjer", "Ubrusi", "Alkohol",],
  ["Sprej za staklo", "Truleks krpa", "Toalet papir", "Ostalo",],
  ["Bref", "WC cetka", "Tecni sapun",],
  ["Tecni deterdzent", "Dzoger",],
  ["Axsel", "Metla sa drskom",],
  ["Sprej za staklo", "Ulozak dzogera",],
  ["Saniper", "Djubrovnik",],
  ["Ajax", "Kese za smece",],
  ["Bref kuglice", "Zica za sudove",],
  ["Tecni vim", "Korpa za papir",],
  ["Prasak za pranje", "Osvezivac prostorija",],
  ["Domestos",],
  ["Tim sudomil",],
  ["Tecnost za sudove",],
  ["Mer sanit",],
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
