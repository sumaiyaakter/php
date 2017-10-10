<?php
//Variables
    $text = 'Hello World';
    echo "<strong>$text</strong>" . '<br>';

//If Else
//Example 1
    $country = 'Bangladesh';

    if($country == 'Bangladesh'){
       echo 'The most beautiful country in '. $country .'<br>'; 
    }

    else{
        echo 'false';
    }
//Example 2
    $country = 'Bangladesh';
    $city = 'Dhaka';
    
    if($country == $city){
        echo $country . ' is beautiful country';
    }
    else{
         echo  $city . ' is the capital of Bangladesh . <br>';
    }
//Loop
    //For Loop
    for($a=1; $a <= 5; $a++){
        echo $a . '<br>';
    };
    //while Loop
    $number = 6;
    while($number <= 10){
        echo $number . '<br>';
        $number++;
    };
    //Foreach Loop
    $colors = array("Red,", "Blue,", "Black,", "Green,", "White");
        foreach($colors as $name){
            echo " " . $name;
        }
    unset ($name);
    echo '<br>';
?>