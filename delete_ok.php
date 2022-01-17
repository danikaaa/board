<?php include "db.php";

$no = $_GET['no'];
$pw = $_POST['pw'];

$sql = query("select * from board where no='$no';");
$board = $sql->fetch_array();

if($board['pw']!=$pw){
    echo ("<script>alert('비밀번호가 맞지 않습니다.');history.go(-1)</script>");
}else{
    $sql = query("delete from board where no='".$no."'"); 
    echo ("<script>alert('삭제가 완료되었습니다.');</script>");

}

?>


<meta http-equiv="refresh" content="0 url=index.php">

