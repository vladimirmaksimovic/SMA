<table class="account-plan" id="account-plan">
  <thead>
    <tr>
      <!-- search -->

      <!-- TODO: add cancel/clear "x" button to clear search fields -->

      <th>
        <form action="" class="search-bar" onkeyup="accountNumberSearch();">
          <div class="search-icon"><i class="fas fa-search"></i></div>
          <input type="text" id="search-bar-number" name="search-bar" size="6" placeholder="Конто" />
        </form>
      </th>
      <th>
        <form action="" class="search-bar" onkeyup="accountNameSearch();">
          <div class="search-icon"><i class="fas fa-search"></i></div>
          <input type="text" id="search-bar-name" name="search-bar" size="20" placeholder="Опис" />
        </form>
      </th>

    </tr>
  </thead>
  <tbody>

    <?php foreach ($account_plan as $account_plan) { ?>
    <tr class="data-container">
      <td><?php echo $account_plan['account']; ?></td>
      <td><?php echo $account_plan['title']; ?></td>
    </tr>
    <?php } ?>

  </tbody>
</table>