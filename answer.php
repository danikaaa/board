<?php
include "db.php";

$no = $_GET['no'];
$reply_name = $_POST['reply_name'];
$reply_pw = $_POST['reply_pw'];
$reply_title = $_POST['reply_title'];
$reply_content = $_POST['reply_content'];
$date = date('Y-m-d');
$orderby = $_POST[''];

$sql = query("insert into board(orderby, depth, name,pw,title,content,date, no) values(orderby+1 , depth+1 ,'" . $reply_name . "', '" . $reply_pw . "', '" . $reply_title . "', '" . $reply_content . "', '" . $date . "')"); 
$sql2 = query("ALTER TABLE board AUTO_INCREMENT=1");
$sql2 = query("SET @COUNT = 0");
$sql2 = query("UPDATE board SET no = @COUNT:=@COUNT+1");
?>
<script type="text/javascript">alert("답글이 달렸습니다."); </script>
<meta http-equiv="refresh" content="0 url=read.php?no=<?php echo $no; ?>">
