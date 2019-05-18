<?php   
include "../db.php";

if(!isset($_POST['userid']) || !isset($_POST['userpw'])) exit;
$id = $_POST['userid'];
$pw = $_POST['userpw'];

$result=mq("SELECT * FROM member WHERE email='$id'");

if($result->num_rows==1) {
	$row = $result->fetch_array(MYSQLI_ASSOC); // 
	if($row['pw']==$pw){
		$_SESSION['id'] = $id;
		$_SESSION['name'] = $row['nickname'];
		if(isset($_SESSION['id'])) {
?>
			<script type="text/javascript">alert('로그인 성공');</script>
			<meta http-equiv="refresh" content="0 url=/">
<?php
		}
		else {
?>
			<script type="text/javascript">alert('로그인 실패');</script>
			<meta http-equiv="refresh" content="0 url=/">
<?php
		}
	}
	else {
?>
		<script type="text/javascript">alert('로그인 실패');</script>
		<meta http-equiv="refresh" content="0 url=/">
<?php
	}
}
else {
?>
	<script type="text/javascript">alert('로그인 실패');</script>
	<meta http-equiv="refresh" content="0 url=/">
<?php
}
?>
