<?php
// Ex 1 :
$now = time();
echo date('l d-m-Y h-i A' );
echo '</br>'.'-----------' .'<br>';
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

echo '</br>'.'-----------' .'<br>';
// Ex 3:


function getFullMonthName($month)
{
    $times = mktime(0, 0, 0, $month, 1);
    $monthName = date('F', $times);
    $fullMonthName = 'Tháng ' . $month . ', ' . $monthName;

    return $fullMonthName;
}

for ($month = 1; $month <= 12; $month++) {
    $fullMonthName = getFullMonthName($month);
    echo $fullMonthName . "<br>";
}
echo '</br>'.'-----------' .'<br>';

// Ex 4;

$date = "2023-07-20";

$datePost = date("d/m/Y", strtotime($date));

echo "Ngày đăng bài viết: " . $datePost;
// Ex 5;





