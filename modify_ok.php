<?php
include "db.php";

$no = $_GET['no'];
$name = $_POST['name'];
$pw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];

$tmpfile =  $_FILES['file']['tmp_name'];
$o_name = $_FILES['file']['name'];
$filename = iconv("UTF-8", "EUC-KR", $_FILES['file']['name']);
$folder = "upload/" . $filename;
move_uploaded_file($tmpfile, $folder);

$sql = query("update board set name='" . $name."',pw='" . $pw . "',title='" . $title . "',content='" . $content . "', file='" . $o_name . "' where no='" . $no . "'"); ?>

<script type="text/javascript">alert("수정되었습니다."); </script>
<meta http-equiv="refresh" content="0 url=read.php?no=<?php echo $no; ?>">
