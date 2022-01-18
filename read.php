<?php include "db.php";?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>게시판</title>
    </head>   

    <body> 
    <h1><a href="/">자유게시판</a></h1><br>

    <?php
		$no = $_GET['no']; 
		$view = mysqli_fetch_array(query("select * from board where no ='" . $no . "'"));
		$view = $view['view'] + 1;
		$fet = query("update board set view = '" . $view . "' where no = '" . $no . "'");
		$sql = query("select * from board where no='" . $no . "'"); 
		$board = $sql->fetch_array();
	?>



	<h2><?php echo $board['title']; ?></h2>
    
        <div id = "read_name"><?php echo  $board['name']; ?></div> 
        <div id = "read_info"><?php echo $board['date']; ?> 조회: <?php echo $board['view']; ?></div>
        <div class = "content" >

        <?php 
        if (!$board['file']) {

        } else { ?>
            <div id = "read_file"><img src= "img/disk.png" alt="파일" height ="15" width="15">  <a href="upload/<?php echo $board['file'];?>" download><?php echo $board['file']; ?></a></div>
            <div id = "file_img"><img src= <?php echo "upload/" . $board['file'] ?>  heigh = "350" width = "350"></div>

        <?php } ?>
        
       
		<?php echo nl2br("$board[content]"); ?> <br></div><br>

        <div id = "read_btn">
			<a href = "/"><button>목록으로</button></a>
			<a href = "modify.php?no=<?php echo $board['no']; ?>"><button>수정</button></a>
			<a href = "delete.php?no=<?php echo $board['no']; ?>"><button>삭제</button></a>
         </div>

     <div id = "reply_btn"> 답글
     <div class = "reply_box">
     <form action="answer.php.?no=<?php echo $no; ?>" method="post" >
         <textarea name ="reply_title" id = "reply_title" placeholder="제목" required></textarea><br>
         <textarea name="reply_content" id="reply_content" placeholder="댓글" required></textarea><br>
         <textarea name="reply_name" id="reply_name" placeholder="작성자" required></textarea><br>
         <input type="password" name="reply_pw" id="reply_pw"  placeholder="비밀번호" required /><br>
         <button>답글쓰기</button>
    </div>
         
    </body>

</html>
