<?php
 $connect = mysqli_connect("tryy.iptime.org", "root", "root", "tryy") or die("fail");
include "../../db.php";
$date = date('Y-m-d');
$id = $_GET[name];                      //Writer
$pw = $_GET[pw];                        //Password
$title = $_GET[title];                  //Title
$content = $_GET[content];
                $URL = '../../board.php';                   //return URL
 
 
                $query = "insert into post_board (idx,name,pw, title,content,date,hit) 
                        values(null,'$id',$pw', '$title', '$content',$date, 0)";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>
