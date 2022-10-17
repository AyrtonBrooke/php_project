<?php
$computer_score = 0;
$human_score = 0;


while ($computer_score || $human_score != 3) {
    $input = readline("\nrock, paper or scissors?\n ");
    $input = strtolower($input);

    $options = array("rock", "paper", "scissors");
    $index=array_rand($options, 1);
    $computer = $options[$index];

    if( ($input == 'scissors' && $computer == 'rock') || ($input == 'paper' && $computer == 'scissors') || ($input == 'rock' && $computer == 'paper') ){
        echo "\nThe computer won\n";
        $computer_score++;
    } elseif( ($input == 'rock' && $computer == 'scissors') || ($input == 'scissors' && $computer == 'paper') || ($input == 'paper' && $computer == 'rock') ){
         echo "\nYou won!\n";
        $human_score++;
    } else {
        if ($computer == $input) {
                echo "\nIt was a draw!\n";
        }
    }
}
echo "\nThe computer has won the game $computer-$human_score!"

?>