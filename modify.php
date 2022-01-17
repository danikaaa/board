
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
        <h4>글을 수정합니다.</h4><hr>
        <form action="modify_ok.php?no=<?php echo $no; ?>" method="post" enctype="multipart/form-data">   
            <div id = "mo_title"><textarea name="title" id="title" rows="1" cols="55" placeholder="제목" maxlength="100" required><?php echo $row['title']; ?></textarea></div>
            <div id = "mo_content"><textarea name="content" id="content" placeholder="내용" required><?php echo $row['content']; ?></textarea></div>
            <div id = "mo_file"><input type="file" value="1" name="file"/></div>
            <div id = "mo_pw"><input type="password" name="pw" id="pw"  placeholder="비밀번호" required /></div><br>
            <div id = "mo_btn"><button type="submit">글 작성</button></div>
               
                </form>
    
    </body>
</html>