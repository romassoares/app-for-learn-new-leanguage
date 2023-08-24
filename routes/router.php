<?php

require 'confRoute.php';

$router = [
    "GET" => [
        "/" => fn () => load("HomeController", "index"),

        "/indexCard" => fn () => load("CardController", "index"),

        "/indexDeck" => fn () => load("DeckController", "index"),

        "/indexStudySession" => fn () => load("StudySessionController", "index"),
    ],
    "POST" => [
        "/saveCard" => fn () => load("CardController", "store"),

        "/saveDeck" => fn () => load("DeckController", "store"),

        "/saveStudySession" => fn () => load("StudySessionController", "store"),
    ],
];
