
<link rel="stylesheet" href="css/main.css?ver17">

        <link rel="stylesheet" href="css/common.css?after">
        <div id="main_img_bar"> 
            <img src="./img/main_image.png?after">
        </div>

        <div id="main_content">
            <div id="All">
                <h4>전체글</h4>
                <ul>
<!-- 전체글 DB에서 불러오기 -->
<?php
    $con = mysqli_connect("localhost", "root", "", "sample1");
    $sql = "select * from board order by num desc limit 10";
    $result = mysqli_query($con, $sql);

    if (!$result)
        echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
    else
    {
        while( $row = mysqli_fetch_array($result) )
        {
            $regist_day = substr($row["regist_day"], 0, 10);
?>
                <li>
                    <span><?=$row["category"]?></span>
                    <span><?=$row["subject"]?></span>
                    <span><?=$row["name"]?></span>
                    <span><?=$regist_day?></span>
                    <span><?=$row["hit"]?></span>
                </li>
<?php
        }
    }
?>

</div>
            <div id="notice">
                <h4>공지사항</h4>
                <ul>
 <!-- 공지사항 DB에서 불러오기 -->
<?php
     $con = mysqli_connect("localhost", "root", "", "sample1");
     $sql = "select * from board where category = '[공지]' order by hit desc limit 5";
     $result = mysqli_query($con, $sql);
 
     if (!$result)
         echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
     else
     {
         while( $row = mysqli_fetch_array($result) )
         {
             $regist_day = substr($row["regist_day"], 0, 10);
?>
                <li>
                    <span><?=$row["category"]?></span>
                    <span><?=$row["subject"]?></span>
                    <span><?=$row["name"]?></span>
                    <span><?=$regist_day?></span>
                    <span><?=$row["hit"]?></span>
                </li>
<?php
        }
     }

?>
                </ul>
            </div>
        </div>




</div>
            <div id="best">
                <h4>인기글</h4>
                <ul>
 <!-- 인기글 DB에서 불러오기 -->
<?php
     $con = mysqli_connect("localhost", "root", "", "sample1");
     $sql = "select * from board where hit >= 10 order by hit desc limit 5";
     $result = mysqli_query($con, $sql);
 
     if (!$result)
         echo "게시판 DB 테이블(board)이 생성 전이거나 아직 게시글이 없습니다!";
     else
     {
         while( $row = mysqli_fetch_array($result) )
         {
             $regist_day = substr($row["regist_day"], 0, 10);
?>
                <li>

                    
                  <?php 
                        
                    	$file_name    = $row["file_name"];
                        $file_copied  = $row["file_copied"];
                    
                    if($file_name) {
                        $real_name = $file_copied;
						$file_path = "./data/".$real_name;
						$file_size = filesize($file_path);
					 

					
						echo "<img src= '$file_path'  width='200' height='200'>";
					 
					} ?> 
                   
                    <span><?=$row["category"]?></span>
                    <span><?=$row["subject"]?></span>
                  
                    
    
                </li>
<?php
             
        }
    }

    mysqli_close($con);
?>
                </ul>
            </div>
        </div>
           