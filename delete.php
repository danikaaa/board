<?php
	include "db.php";
   
	$no = $_GET['no'];
	$sql = query("select * from board where no='$no';");
	$row = $sql->fetch_array();
 ?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>게시판</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1><a href="/">자유게시판</a></h1>
        <h4>글을 삭제하기 위해서 비밀번호를 입력해주세요.</h4><hr>
        <form action="delete_ok.php?no=<?php echo $no; ?>" method="post" enctype="multipart/form-data">   
            <div id = "de_pw"><input type="password" name="pw" id="pw"  placeholder="비밀번호" required /></div><br>
            <div id = "de_btn"><button type="submit">글 삭제</button></div>
        </form>
    
    </body>
</html>


