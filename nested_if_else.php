<?php
$marks=95;
if($marks<33){
    echo "fail";
}
else{
    // echo "passed";
    if($marks<55){
        echo "average";
    }
    else{
        if($marks<75){
            echo "good";
        }
        else{
            if($marks<95){
                echo "excellent";
            }
            else{
                echo "fantastic";
            }
        }
    }
}
?>