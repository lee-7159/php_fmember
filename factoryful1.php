<?php
$conn = mysqli_connect('localhost', 'root', '222222', 'fmember');

// $filtered = array(
// /  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  // 'phone'=>mysqli_real_escape_string($conn, $_POST['phone']),
  // 'Email'=>mysqli_real_escape_string($conn, $_POST['Email']),
  // 'company'=>mysqli_real_escape_string($conn, $_POST['company']),
  // 'address'=>mysqli_real_escape_string($conn, $_POST['address']),
  // 'Professional'=>mysqli_real_escape_string($conn, $_POST['Professional'])
// );
$sql ="
  INSERT INTO test
    (name, phone, Email,company,address,professional)
    VALUES('{$_POST['name']}', '{$_POST['phone']}',
  '{$_POST['Email']}', '{$_POST['company']}', '{$_POST['address']}',
    '{$_POST['professional']}')";

$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다.';
  error_log(mysqli_error($conn));
} else{
  echo '성공 <a href ="factoryful3.php">돌아가기</a>';
}
//echo $sql;
?>
