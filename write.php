<?php
include "db.php";

$name = $_POST['name'];
$pw = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');


$tmpfile =  $_FILES['file']['tmp_name'];
$o_name = $_FILES['file']['name'];
$filename = iconv("UTF-8", "EUC-KR", $_FILES['file']['name']);
$folder = "upload/" . $filename;
move_uploaded_file($tmpfile, $folder);


if ($name && $pw && $title && $content) {

    $sql = query("SELECT MAX(idx) as idx from board");
    $idx = mysqli_fetch_array($sql);

    $idx = $idx['idx']+1;
    $orderby = 0;
    $step = 0;

    $sql = query("INSERT into board(idx, orderby, step, name, pw,title,content,date,file) values('" . $idx . "','" . $orderby . "','" . $step . "', '" . $name . "', '" . $pw . "', '" . $title . "', '" . $content . "', '" . $date . "', '" . $o_name . "')");
    $sql2 = query("ALTER TABLE board AUTO_INCREMENT=1");
    $sql2 = query("SET @COUNT = 0");
    $sql2 = query("UPDATE board SET no = @COUNT:=@COUNT+1");

    echo "<script>
    alert('작성이 완료되었습니다.');
    location.href='/index.php'; </script>";
} else {
    echo "<script>
    alert('작성에 실패했습니다.');
    history.back();</script>";
}
?>
