<?php

namespace app\controllers;

use app\controllers\Controller;

class CardController
{
  public function index()
  {
    return Controller::view("card/index");
  }
  public function create()
  {
    return Controller::view('card/form');
  }
  public function store()
  {
    //     id
    // front
    // back
    // correct_answers
    // total_attemps
    // deck_id
    return Controller::view('card/form');
  }
}
