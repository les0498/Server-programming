<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>모여봐요 동물의 숲</title>
    <link rel="stylesheet" href="css/sidebar.css?ver2">
    <style>

    </style>
</head>
<body>

    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           <!--profile image & text-->
           <div class="profile">
            <img src="./img/mds.png" alt="profile_picture" >
           
            <?php

            $con = mysqli_connect("localhost",  "root", "", "sample1");
            $sql = "select * from board ";
            $result = mysqli_query($con, $sql);

            $row = mysqli_fetch_array($result);

            $file_name    = $row["file_name"];
            $file_type    = $row["file_type"];
            $file_copied  = $row["file_copied"];

            ?>		



            <?php
               
                if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
                else $userid = "";
            ?>
            <?php
            
                 $logged = $username."<h3>(".$userid.")님</h3><br> 
                <p>[Level:".$userlevel.", Point:".$userpoint."]</p>";
            ?>
                 <li><?=$logged?> </li>
        </div>
            <!--menu item-->
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-align-justify"></i></span>
                        <span class="item">전체메뉴</span>
                    </a>
                </li>
                <li>
                     <a href="index.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">A. Home</span>
                    </a>
                </li>
                <li>
                    <a href="board_form.php">
                        <span class="icon"><i class="fas fa-file-signature"></i></span>
                        <span class="item">B. 글쓰기</span>
                    </a>
                </li>
                <li>
                    <a href="bnotice_list.php">
                        <span class="icon"><i class="fas fa-bullhorn"></i></span>
                        <span class="item">C. 공지사항</span>
                    </a>
                </li>
                <li>
                    <a href="best_list.php">
                        <span class="icon"><i class="fas fa-star-and-crescent"></i></span>
                        <span class="item">D. 인기글</span>
                    </a>
                </li>               
                <li>
                    <a href="member_modify_form.php">
                        <span class="icon"><i class="fas fa-user"></i></span>
                        <span class="item"> 회원정보 수정</span>
                    </a>
                </li>
            </ul>
        </div>
        
            </div>

        </div>
        </div>  
    </div>
</body>
</html>