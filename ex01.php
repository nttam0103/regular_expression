<?php 
$phone = '0362890089';
$pattern ='/^0[0-9]{9}$/';
$check =preg_match($pattern,$phone,$matches);
var_dump($check);

echo '<pre>';
print_r($matches);
echo '</pre>';
?>