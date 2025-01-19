<?php
$marks=45;
if($marks<33){
    echo "F";
}
elseif($marks<45){
    echo "E";
}
elseif($marks<55){
    echo "D";
}
elseif($marks<65){
    echo "c";
}
elseif($marks<75){
    echo "B";
}
elseif($marks<85){
    echo "A";
}
elseif($marks<100){
    echo "A+";
}
else{
    echo "enter correct number between range";
}
?>