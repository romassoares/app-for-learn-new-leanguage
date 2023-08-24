<?php

namespace app\controllers;

use app\controllers\Controller;

use app\kernel\DB;
use Exception;
use PDO;
use PDOException;

class AuthController
{
  private $con;

  public function __construct()
  {
    $this->con = new DB;
  }

  public function login()
  {
    return Controller::view("auth/login");
  }

  public function authenticate()
  {
    $data = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if (!empty($data)) {
      try {
        $result = $this->con->conect()->prepare("SELECT `id`, `email`, `password` FROM `user` WHERE `email` = :email AND `password` = :password;");
        $result->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $result->bindParam(":password", $data['password'], PDO::PARAM_STR);
        $result->execute();

        if ($result->rowCount() == 0) {

          return Controller::view("auth/login", $data);
        } else {
          session_start();
          $dataResult = $result->fetch(PDO::FETCH_ASSOC);

          $_SESSION['user'] = $dataResult['id'];
          header('location: /indexUser');
          // return Controller::view("user/index");
        }
      } catch (Exception $e) {

        echo "error: " . $e->getMessage();
      }
    } else {

      return Controller::view('auth/login', $data);
    }
  }
  public function store()
  {
    //     id
    // front
    // back
    // correct_answers
    // total_attemps
    // deck_id
    return Controller::view('user/form');
  }
}
