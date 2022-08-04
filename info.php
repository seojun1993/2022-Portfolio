<?php
$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
mysqli_query($conn,"set names utf8");

if (mysqli_connect_errno()){
    echo "MySQL 연결 오류: " . mysqli_connect_error();
    exit;
} else {
    echo "DB : \"$db_name\"에 접속 성공.<br/>";
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = $_POST['date'];

$sql = "INSERT INTO info (name, email, message, date) VALUES ('$name', '$email', '$message', '$date')";
$result = mysqli_query($conn, $sql);

if($result === false){
    echo '저장하지 못했습니다.';
    error_log(mysqli_error($conn)); // 에러 로그 기록
}else{
    echo '저장 성공';
}

mysqli_close($conn);
header("Location:index.php");
?>