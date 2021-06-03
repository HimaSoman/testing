
<?php
function show_me_the_money($val){
   if(is_float($val)) {
     echo round($val,3);
   }
}

show_me_the_money(3598723.8258);

?>