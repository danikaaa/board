<?php
include "db.php";

$no = $_GET['no'];
$reply_name = $_POST['reply_name'];
$reply_pw = $_POST['reply_pw'];
$reply_title = $_POST['reply_title'];
$reply_content = $_POST['reply_content'];
$date = date('Y-m-d');

$sql = query("insert into board(orderby, depth, name,pw,title,content,date) values(orderby+1 , depth+1 ,'" . $reply_name . "', '" . $reply_pw . "', '" . $reply_title . "', '" . $reply_content . "', '" . $date . "')"); ?>


<script type="text/javascript">alert("답글이 달렸습니다."); </script>
<meta http-equiv="refresh" content="0 url=read.php?no=<?php echo $no; ?>">