<?php
	include "../../db.php";

	$date = date('Y-m-d');
	$id = $_POST['name'];                      //Writer
	$pw = $_POST['pw'];                        //Password
	$title = $_POST['title'];                  //Title
	$content = $_POST['content'];
	$URL = '../../board.php';                   //return URL

	$query = "insert into post_board(name, pw, title, content, date) values('$id', '$pw', '$title', '$content', '$date')";

	$result = mq($query);
	if(isset($result)){
?>                  
	<script>
		alert("<?php echo "글이 등록되었습니다."?>");
		location.replace("<?php echo $URL?>");
	</script>
<?php
	}
	else{
		echo "FAIL";
	}
?>
