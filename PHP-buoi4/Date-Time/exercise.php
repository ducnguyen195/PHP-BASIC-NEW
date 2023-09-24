<?php
// Ex 1 :
$now = time();
echo date('l d-m-Y h-i A' );
echo '</br>';
//Ex 2:
$birthday ='1990-05-15';
$convert = strtotime($birthday);
$now = date('Y-m-d');
$curent = strtotime($now);
$age = date('Y',$curent) - date('Y',$convert);
if (date('md',$curent) < date('md',$convert)) {
      $age--;
}
echo 'Tuổi của bạn là : '.$age;
echo '</br>';
// Ex 3:


