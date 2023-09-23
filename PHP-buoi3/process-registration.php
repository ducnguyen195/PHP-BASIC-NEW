<?php
if ($_SERVER["REQUEST_METHOD"]==="POST") {
$full_name = $_POST['full-name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$date = $_POST['date'];
$errol = [];
$is_validate = true;
function validate_name($name, &$error)
{
    global $is_validate;
    if (strlen($name) > 255) {
        $error[] = 'Tên dài hơn 255 ký tự';
        $is_validate = false;
    }
}
function validate_email($email,&$error)
{
    global $is_validate;
    if(!preg_match("/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/",strtolower($email))) {
        $error[] = 'Định dạng email của bạn không chính xác ';
        $is_validate = false;
    }
}
function validate_password($password,&$error)
{
    global $is_validate;
    if (strlen($password) < 8) {
        $error[] = 'Mật khẩu của bạn nhỏ hơn 8 ký tự';
        $is_validate = false;
    }
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        $error[] = 'Mật khẩu phải chứa ít nhất một chữ cái viết hoa, một chữ cái viết thường, một số và một ký tự đặc biệt';
        $is_validate = false;
    }
}

    validate_name($full_name,$error);
    validate_email($email,$error);
    validate_password($password,$error);

    if ($is_validate) {
        echo ' Đăng ký thành công ';
    } else {
        echo '<pre>';
        print_r($error);
        echo '</pre>';
    }
}