<?php
require_once '../../config/db.php';

class DAO
{
  private $db;


  private $SELECT_EMPLOYEES = "SELECT * FROM employees";
  private $SELECT_COMPANY_INFO = "SELECT * FROM company_info";
  private $SELECT_COMPANY_SUPPLIERS = "SELECT * FROM company_suppliers";
  //private $SELECT_USER_BY_USERNAME_AND_PASSWORD = "SELECT * FROM users WHERE username = ? AND password = ?";
  //private $SELECT_USER_BY_USERNAME = "SELECT * FROM users WHERE username = ?";

  //private $INSERT_USER = "INSERT INTO users(ime, prezime, godiste, username, password) VALUES (?,?,?,?,?)";

  public function __construct()
  {
    $this->db = DB::createInstance();
  }

  public function selectEmployees()
  {
    $statement = $this->db->prepare($this->SELECT_EMPLOYEES);
    //$statement->bindValue(1, $id);

    $statement->execute();

    $result = $statement->fetchAll();
    return $result;
  }

  public function selectCompanyInfo()
  {
    $statement = $this->db->prepare($this->SELECT_COMPANY_INFO);
    //$statement->bindValue(1, $id);

    $statement->execute();

    $result = $statement->fetchAll();
    return $result;
  }

  public function selectCompanySuppliers()
  {
    $statement = $this->db->prepare($this->SELECT_COMPANY_SUPPLIERS);
    //$statement->bindValue(1, $id);

    $statement->execute();

    $result = $statement->fetchAll();
    return $result;
  }

  /* 
  public function selectUserByUsernameAndPassword($username, $password)
  {
    $statement = $this->db->prepare($this->SELECT_USER_BY_USERNAME_AND_PASSWORD);
    $statement->bindValue(1, $username);
    $statement->bindValue(2, $password);

    $statement->execute();

    $result = $statement->fetch();
    return $result;
  }

  public function selectUserByUsername($username)
  {
    $statement = $this->db->prepare($this->SELECT_USER_BY_USERNAME);
    $statement->bindValue(1, $username);

    $statement->execute();

    $result = $statement->fetch();
    return $result;
  }

  public function insertUser($ime, $prezime, $godiste, $username, $password)
  {
    $statement = $this->db->prepare($this->INSERT_USER);
    $statement->bindValue(1, $ime);
    $statement->bindValue(2, $prezime);
    $statement->bindValue(3, $godiste);
    $statement->bindValue(4, $username);
    $statement->bindValue(5, $password);

    $statement->execute();
  }
   */
}