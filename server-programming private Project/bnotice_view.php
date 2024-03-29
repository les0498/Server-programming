<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<title>모여봐요 동물의 숲</title>
<link rel="stylesheet" type="text/css" href="./css/common.css">
<link rel="stylesheet" type="text/css" href="./css/board.css">
</head>
<body> 
<header>
    <?php include "header.php";?>
</header>  
<section>
	<div id="main_img_bar">
		<img src="./img/main_image.png?after">
    </div>
   	<div id="board_box">
	    <h3 class="title">
			 공지사항 > 내용보기
		</h3>
<?php
	$num  = $_GET["num"];
	$page  = $_GET["page"];

	$con = mysqli_connect("localhost",  "root", "", "sample1");
	$sql = "select * from board where num=$num";
	$result = mysqli_query($con, $sql);

	$row = mysqli_fetch_array($result);
	$id      = $row["id"];
	$name      = $row["name"];
	$regist_day = $row["regist_day"];
	$subject    = $row["subject"];
	$category  = $row["category"];
	$content    = $row["content"];
	$file_name    = $row["file_name"];
	$file_type    = $row["file_type"];
	$file_copied  = $row["file_copied"];
	$hit          = $row["hit"];
	$heart        = $row["heart"];

	$content = str_replace(" ", "&nbsp;", $content);
	$content = str_replace("\n", "<br>", $content);

	$new_hit = $hit + 1;
	$sql = "update board set hit=$new_hit where num=$num";   
	mysqli_query($con, $sql);

	 
	$new_heart = $heart + 1;
	$sql = "update board set heart=$new_heart where num=$num";  
	mysqli_query($con, $sql); 

	
?>		
	    <ul id="view_content">
			<li>
				<span class="col1"><?=$category?>&nbsp; &nbsp;<b> 제목 :</b> &nbsp;<?=$subject?></span>
				<span class="col2"><?=$name?> | <?=$regist_day?></span>
				 
			</li>
			<li>
				<?php
		 
			
					if($file_name) {
						$real_name = $file_copied;
						$file_path = "./data/".$real_name;
						$file_size = filesize($file_path);
					 

						echo "▷ 첨부파일 : $file_name ($file_size Byte) &nbsp;&nbsp;&nbsp;&nbsp;
			       		<a href='board_download.php?num=$num&real_name=$real_name&file_name=$file_name&file_type=$file_type'>[저장]</a><br><br>";
						echo "<img src= '$file_path'>";
					 
					}
				?>
				<br><br><?=$content?>
			</li>		
	    </ul>
		<li><button onclick="location.href=''" class="btn-like">♡</button>&nbsp;<?=$heart ?>  </li>
	    <ul class="buttons">
				<li><button onclick="location.href='bnotice_list.php?page=<?=$page?>'">목록</button></li>
				<li><button onclick="location.href='bnotice_modify_form.php?num=<?=$num?>&page=<?=$page?>'">수정</button></li>
				<li><button onclick="location.href='bnotice_delete.php?num=<?=$num?>&page=<?=$page?>'">삭제</button></li>
				<li><button onclick="location.href='bnotice_form.php'">글쓰기</button></li>
		</ul>
	</div> <!-- board_box -->
</section> 
<nav>
		<?php include "sidebar.php" ; ?> 
</nav>
<footer>
    <?php include "footer.php";?>
</footer>
</body>
</html>
