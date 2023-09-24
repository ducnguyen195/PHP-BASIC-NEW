<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $reason = $_POST['select'];
    $describe = $_POST['describe'];
    $error = [];
    $validate = true;
    function validate_name_feedback($name,&$error)
    {
        global $validate;
        if (strlen($name) > 255) {
            $error[] = 'Tên dài quá 255 ký tự !';
            $validate =false;
        }
    }
    function validate_email_feedback($email,&$error)
    {
        global $validate;
        if (!preg_match("/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/",strtolower($email))){
        $error[] = 'Định dạng email không chính xác !';
        $validate = false;
        }
    }
    function validate_select_feedback($reason,&$error)
    {
        global $validate;
        if ($reason == '') {
            $error[] = 'Vui lòng chọn danh mục phản hồi';
            $validate = false;
        }
    }
    function validate_describe($describe,&$error)
    {
        global $validate;
        if (strlen($describe) < 10){
            $error[] = 'Mô tả của bạn quá ngắn ';
            $validate = false;
        }
    }
    validate_name_feedback($name,$error);
    validate_email_feedback($email,$error);
    validate_select_feedback($reason,$error);
    validate_describe($describe,$error);
if ($validate) {
    echo 'Success Feedback';
} else {
    echo '<pre>';
    print_r($error);
    echo '</pre>';
}
}
