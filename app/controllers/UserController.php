<?php

namespace app\controllers;

use app\controllers\Controller;

class UserController
{
  public function index()
  {
    return Controller::view("user/index");
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
