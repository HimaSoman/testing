<?php

$m_string ="hima";
$r_sting ="";
$i=0;
$j=0;
$k=0;
$m=99;
while(!empty($m_string[$i])){

    //$r_sting = $m_string[$i] . $r_sting;
    echo "<br>"."before".$r_sting;
    $r_sting = $m_string[$i]. $r_sting;
    //echo "<br>".$r_sting;
	$i++;
}
echo "<br>". $r_sting;


?>