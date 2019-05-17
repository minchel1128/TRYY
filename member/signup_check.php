<?php
include "../db.php";

if(!isset($_POST['regid']) || !isset($_POST['regpw'])) exit;

$id = $_POST['regid'];
$name = $_POST['regname'];
$pw = $_POST['regpw'];
$pwc = $_POST['regpw2'];

if($pw!=$pwc) {
	echo "비밀번호를 확인해주세요.";
	exit();
}

$signup = mq("insert into member (email,nickname,pw) values('".$id."','".$name."','".$pw."')");
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">