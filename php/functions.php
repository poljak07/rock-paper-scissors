<?php
$moves = ['rock', 'paper', 'scissors'];

function computerMove($moves) {
    return $moves[array_rand($moves)];
}

function determineWinner($playerMove, $computerMove) {
    if ($playerMove === $computerMove) {
        return "Tied!";
    }

    if (
        ($playerMove === 'rock' && $computerMove === 'scissors') ||
        ($playerMove === 'paper' && $computerMove === 'rock') ||
        ($playerMove === 'scissors' && $computerMove === 'paper')
    ) {
        return "You win!";
    } else {
        return "Computer win!";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $playerMove = $_POST['move'];

    $computerMove = computerMove($moves);

    $result = determineWinner($playerMove, $computerMove);
}
?>