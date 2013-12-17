<?php
function getText($balance) {
    if($balance < 0) {
        return PHP_EOL."Cet humain n'a plus d'argent: ".$balance."$".PHP_EOL;
    }
     
        return PHP_EOL."Cet humain possede: ".$balance."$".PHP_EOL;
        
    }
    
$amountOfMoneyPerHumanData = array(
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    rand(240, 620),
    );

$amountOfMounth = 3;

foreach($amountOfMoneyPerHumanData as $oneAmounOfMoneytPerHUman) {
    $profits = 0;
    for($i = 0; $i < $amountOfMounth; $i++) {
        $salary = rand(230, 625);
        $foodExpense = ($salary * 0.4);
        $monthExpense = rand(300, 620);
        $expenseTotal = $foodExpense + $monthExpense;
        $profits = $profits + ($salary - $expenseTotal);
        $balance = $oneAmounOfMoneytPerHUman + $profits;
        
        $text = getText($balance);
        echo $text;
    }
}

