<?php

namespace app\controllers;

use app\controllers\Controller;

class DeckController
{
  public function index()
  {
    return Controller::view("deck/index");
  }
  public function create()
  {
    return Controller::view('deck/form');
  }
  public function store()
  {
    // id
    // max_cards_per_day
    // user_id
    return Controller::view('deck/form');
  }
}
