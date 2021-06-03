<?php

$name="PHP";
echo "<script language='javascript'>
function test(name)
{
  alert('$name');
}
</script>";
?>
<script language='javascript'>
test('ASP');
</script>


//if ((string)'0') { print 'ouch'; } else { print 'echo'; }

/*$valid = TRUE;
$cnt = 0;
while ($valid = TRUE) {
$cnt++;
//if ($cnt > 10) { $valid = FALSE; }
}
echo "$cnt";*/

//echo "kjsdfbsdjg";



$x = "";
switch ($x) {
case "0": echo "String"; break;
case 0: echo "Integer"; break;
case NULL: echo "NULL"; break;
case FALSE: echo "Boolean"; break;
case "": echo "Empty string"; break;
default: echo "Something else"; break;
}



function add_value(&$str) {
$str .= 'extra.';
}
$x = 'zone';
add_value($x);
echo "$x";

function foo($a=1,$b=2) {
      if ($n=rand(1,5) && $a && strlen(implode("",array($a,$b)))) {
         $r.=$n;
      }
      return $r;
   }
   for($i=1; $i<4; $j=$i, $i++) {
      $x.=foo($j,$i);
   }
   echo strlen($x);


?>