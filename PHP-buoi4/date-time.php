<?php
$date = time();
echo date('l d-m-Y H:i A');

$birthday = '1990-05-15';
$now = time();
$birthday = strtotime($birthday);
$age = date('Y',$now) - date('Y',$birthday);
if ( date('d',$now > date('d',$birthday))) {
    return $age;
}
echo 'Tuổi của bạn là : '. $age;