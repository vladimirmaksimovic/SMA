<?php

require_once '../model/DAO.php';

$dao = new DAO();

// test
echo '<pre>';
print_r($dao->selectEmployees());
echo '</pre>';