<table class="account-plan" id="account-plan">
  <thead>
    <tr>
      <!-- search -->
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
      <!-- /search -->
    </tr>
  </thead>
  <tbody>

    <?php foreach ($subanalytic_accounts as $title => $account) { ?>
    <tr class="data-container">
      <td><?php echo $account; ?></td>
      <td><?php echo $title; ?></td>
    </tr>
    <?php } ?>

  </tbody>
</table>