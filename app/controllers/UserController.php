<?php

namespace app\controllers;

use app\controllers\Controller;
use app\kernel\DB;
use PDO;

class UserController
{
  private $conn;

  public function __construct()
  {
    $this->conn = new DB;
  }

  public function index()
  {
    $response = $this->conn->conect()->prepare("SELECT `id`,`name`,`email` FROM `user`");

    $response->execute();

    $users = $response->fetch(PDO::FETCH_ASSOC);

    return Controller::view("user/index", ['users' => $users]);
  }

  public function create()
  {
    return Controller::view('user/form');
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
