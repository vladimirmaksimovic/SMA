<?php

include_once './../components/header.php';

?>

<main>

  <?php include_once "../components/aside-nav.php"; ?>

  <!-- content  -->
  <section class="content">

    <?php include_once "../components/topPageBtn.php"; ?>

    <h2 id="record-book-heading">Деловодник</h2>

    <!-- input section -->
    <!-- TODO: create input section here ... -->
    <article>
      <h3>Унос података</h3>
    </article>
    <!-- input section -->

    <!-- display section -->
    <article>
      <h3>Приказ података</h3>
      <table>
        <thead>
          <tr>
            <th>Деловодни број</th>
            <th>Датум пријема</th>
            <th>Врста документа</th>
            <th>Опис документа</th>
            <th>Документ прима лице</th>
            <th>Начин доставе документа</th>
            <th>Напомена</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>100</td>
            <td>01/02/2021</td>
            <td>Потврда</td>
            <td>Потврда о запослењу и редовним примањима - И.С.</td>
            <td>С.Ч.</td>
            <td>На руке</td>
            <td>Ово је милионита потврда за куповину танги на 100 рата</td>
          </tr>
          <tr>
            <td>101</td>
            <td>03/03/2021</td>
            <td>Обрачун</td>
            <td>Обрачун накнаде трошкова превоза за 02/2021</td>
            <td> - - -</td>
            <td>Требовањем</td>
            <td> - - -</td>
          </tr>
          <tr>
            <td>102</td>
            <td>04/04/2021</td>
            <td>Рачун број: 321654/321</td>
            <td>Електрична енергија 03/2021</td>
            <td>В.М.</td>
            <td>Поштом</td>
            <td>Фактура је стигла електронски</td>
          </tr>
          <tr>
            <td>103</td>
            <td>07/05/2021</td>
            <td>Обрачун</td>
            <td>Обрачун хранарине ученика учесника такмичења</td>
            <td>С.Ч.</td>
            <td>Требовањем</td>
            <td>- - -</td>
          </tr>
          <tr>
            <td>104</td>
            <td>01/02/2021</td>
            <td>Потврда</td>
            <td>Потврда о запослењу и редовним примањима - И.С.</td>
            <td>С.Ч.</td>
            <td>На руке</td>
            <td>Ово је милионита потврда за куповину танги на 100 рата</td>
          </tr>
          <tr>
            <td>105</td>
            <td>01/02/2021</td>
            <td>Потврда</td>
            <td>Потврда о запослењу и редовним примањима - И.С.</td>
            <td>С.Ч.</td>
            <td>На руке</td>
            <td>Ово је милионита потврда за куповину танги на 100 рата</td>
          </tr>
        </tbody>
      </table>
    </article>

</main>

<?php include_once '../components/footer.php'; ?>