<?php
$severname ='localhost';
$username = 'root';
$password = '';
$dbname  = 'test1';
$conn = new mysqli($severname,$username,$password,$dbname);
if ($conn->connect_error) {
    die('Connection failed: ').$conn->connect_error;
}
$sql = "INSERT INTO Users (UserID,UserName,Email,user_password,AddressID)
        VALUES ('20','ABC','abc@gmail.com','mật khẩu ABC','1');";

$delete ="DELETE FROM Users WHERE UserID = '20';";
$update = "UserName";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();