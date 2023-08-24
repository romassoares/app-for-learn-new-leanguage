<?php

namespace app\controllers;

use app\controllers\Controller;

class StudySessionController
{
  public function index()
  {
    return Controller::view("studysession/index");
  }
  public function create()
  {
    return Controller::view('studysession/form');
  }
  public function store()
  {
    //     id
    // user_id
    // deck_id
    // card_to_study
    // current_card_index
    return Controller::view('studysession/form');
  }
}
