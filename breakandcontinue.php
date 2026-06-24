<?php

for($i = 1; $i <= 10; $i++)// Demonstration of Break Statement
    {
        if($i == 5)  // Stops loop when i becomes 5
        { 
            break;// Terminates the loop immediately
        }

        echo $i . "<br>";    // Displays the current value of i
    }

?>