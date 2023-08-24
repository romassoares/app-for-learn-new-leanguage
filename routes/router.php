<?php

require 'confRoute.php';

$router = [
    "GET" => [
        "/" => fn () => load("HomeController", "index"),

        "/login" => fn () => load("AuthController", "login"),

        "/indexUser" => fn () => load("UserController", "index"),

        // "/indexCard" => fn () => load("CardController", "index"),

        // "/indexDeck" => fn () => load("DeckController", "index"),

        // "/indexStudySession" => fn () => load("StudySessionController", "index"),
    ],
    "POST" => [
        "/authenticate" => fn () => load("AuthController", "authenticate"),

        // "/saveCard" => fn () => load("CardController", "store"),

        // "/saveDeck" => fn () => load("DeckController", "store"),

        // "/saveStudySession" => fn () => load("StudySessionController", "store"),
    ],
];
