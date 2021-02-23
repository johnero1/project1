<?php
function generatepin($limit){
    $pin = '';
    for($i = 0; $i <= $limit; $i++){$pin .= mt_rand(0, 9);}
    return $pin;
}
echo "<u><h3>RECHARGE CARD PINS FOR S.H. GLOBAL</h3></u>" . "<br>";
for ($i=1; $i <=200 ; $i++){ 
    echo $i . "---" . generatepin(12) . "<br>";
}

?>