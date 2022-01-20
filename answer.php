<?php
include "db.php";

$no = $_GET['no'];
$reply_name = $_POST['reply_name'];
$reply_pw = $_POST['reply_pw'];
$reply_title = $_POST['reply_title'];
$reply_content = $_POST['reply_content'];
$date = date('Y-m-d');

$sql = query("SELECT * FROM board WHERE no ='" . $no . "'");
$reply = mysqli_fetch_array($sql);

$idx = $reply['idx'];
$orderby = $reply['orderdy']+1;
$step = $reply['step']+1;

$sql = query("UPDATE board SET orderby = orderby+1 WHERE idx = '$idx' AND orderby > '" . $reply['orderby'] . "' ");
$sql = query("insert into board(idx, orderby, step, name, pw, title, content, date) values('" . $idx . "','" . $orderby . "','" . $step . "','" . $reply_name . "', '" . $reply_pw . "', '" . $reply_title . "', '" . $reply_content . "', '" . $date . "')"); 
$sql2 = query("ALTER TABLE board AUTO_INCREMENT=1");
$sql2 = query("SET @COUNT = 0");
$sql2 = query("UPDATE board SET no = @COUNT:=@COUNT+1");
?>
<script type="text/javascript">alert("답글이 달렸습니다."); </script>
<meta http-equiv="refresh" content="0 url=read.php?no=<?php echo $no; ?>">
