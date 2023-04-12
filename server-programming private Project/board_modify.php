<?php
    $num = $_GET["num"];
    $page = $_GET["page"];

    $subject = $_POST["subject"];
    $content = $_POST["content"];
    $category = $_POST["category"];
          
    $con = mysqli_connect("localhost",  "root", "", "sample1");
    $sql = "update board set subject='$subject', content='$content', category='$category' ";
    $sql .= " where num=$num";
    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'board_list.php?page=$page';
	      </script>
	  ";
?>

   
