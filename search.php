<!DOCTYPE html>

<?php include "db.php";
$catagory = $_GET['catgo'];
$search= $_GET['search'];
?>

<html>
    <headr>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <meta charset="UTF-8">
        <title>게시판</title>
    
    </headr>
    <body>
        <h1><a href = "index.php">자유게시판</a></h1>
        <h2>'<?php echo $search; ?>'의 검색결과</h2>
        <h4>어때 원하는 결과가 나와요??</h4>

        <div id="search">
        <form action="search.php" method="get">
        <select name="catgo">
            <option value="title">제목</option>
            <option value="name">작성자</option>
            <option value="content">내용</option>
        </select>
      <input type="text" name="search" size="40" required="required"/> <button>검색</button>
    </form>
     </div>
    
        <table class = "t_list">
        <thead>
        <tr>
        <th width="70">No</th>
        <th width="500">제목</th>
        <th width="120">작성자</th>
        <th width="100">작성일</th>
        <th width="70">조회수</th>      
        </tr>
        </thead>
   
        <tbody>
            <?php 
            if(isset($_GET['page'])){
            $page = $_GET['page'];
            }else{
            $page = 1;
         }
            $sql = query("select * from board where $catagory like '%$search%' order by idx desc");
            $row_num = mysqli_num_rows($sql);
            $list = 5; 
            $block_ct = 5; 

            $block_num = ceil($page/$block_ct); 
            $block_start = (($block_num - 1) * $block_ct) + 1; 
            $block_end = $block_start + $block_ct - 1; 
            $total_page = ceil($row_num / $list); 
            
            if($block_end > $total_page) $block_end = $total_page; 
            $total_block = ceil($total_page/$block_ct); 
            $start_num = ($page-1) * $list;

            
            while($row = $sql->fetch_array()){ 

              $sql =query("SELECT COUNT(*) FROM board WHERE idx = '".$row['idx'] ."' and step > 0 ");
              $repl = mysqli_fetch_row($sql);

                if($row['step']){
                    $re = "ㄴ re : ";
                  }else{
                    $re = "";
                    $blank = "";
                  }
                    $blank = str_repeat("&nbsp;&nbsp;", $row['step']);
    
                ?>
          
        <tr>
        <td width="70"><?php echo $row['no']?></td>
        <td width="500"><a href="read.php?no=<?php echo $row['no'];?>"><?php echo $blank . $re . $row['title']; ?></a>
        <?php if($repl[0] =='0'){
            }else{
              echo "<span class ='repl'>[".$repl[0] ."]</span>";
            }?>
      </td>
        <td width="120"><?php echo $row['name']; ?></td>
        <td width="100"><?php echo $row['date']; ?></td>
        <td width="70"><?php echo $row['view']; ?></td>
        </tr>
        </tbody>
        
          <?php } ?>
            
        </table>

        <div id="page_num">
      <ul>
        <?php
        if ($page <= 1) { 
           
        } else {
            $pre = $page-1; 
            echo "<li><a href='?page=$pre'>◀</a></li>";
        }
        for ($i = $block_start; $i <= $block_end; $i++) { 
            if ($page == $i) { 
                echo "<li class='co_page'>$i</li>"; 
            } else {
                echo "<li><a href='?page=$i'>$i</a></li>"; 
            }
        }

        if ($page >= $i - 1) { 
        } else {
            $next = $page + 1;
            echo "<li><a href='?page=$next'>▶</a></li>"; 
        }
    
        ?>
      </ul>
    </div>

        <div id ="se_btn">
         <a href ="/write.html"> <button>글쓰기</button></a>
        </div>
    </body>
</html>
