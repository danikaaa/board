<?php
include "db.php";

$name = $_POST['name'];
$pw = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');

$tmpfile =  $_FILES['file']['tmp_name'];
$o_name = $_FILES['file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['file']['name']);
$folder = "upload/".$filename;
move_uploaded_file($tmpfile,$folder);

if($name && $pw && $title && $content){
    $sql = query("insert into board(name,pw,title,content,date,file) values('".$name."','".$pw."','".$title."','".$content."','".$date."','".$o_name."')");
    echo "<script>
    alert('작성이 완료되었습니다.');
    location.href='/index.php'; </script>";
}else{
    echo "<script>
    alert('작성에 실패했습니다.');
    history.back();</script>";
}
?>