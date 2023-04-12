<?php
    
    $id = $_GET["id"];

    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1  = $_POST["email1"];
    $email2  = $_POST["email2"];

    $email = $email1."@".$email2;
 

    $upload_dir = './data/';

	$upfile_name	 = $_FILES["upfile2"]["name"];  //koala.jpg
	$upfile_tmp_name = $_FILES["upfile2"]["tmp_name"];  // 임시 저장된 파일 
	$upfile_type     = $_FILES["upfile2"]["type"]; // 
	$upfile_size     = $_FILES["upfile2"]["size"]; // 
	$upfile_error    = $_FILES["upfile2"]["error"]; //

	if ($upfile_name && !$upfile_error)
	{
		$file = explode(".", $upfile_name); // koala jpg
		$file_name = $file[0]; // koala 
		$file_ext  = $file[1]; // jpg 

		$new_file_name = date("Y_m_d_H_i_s");   //2021_12_01_10_11_10
		$new_file_name = $new_file_name;
		$copied_file_name = $new_file_name.".".$file_ext;   //   2021_12_01_10_11_10.jpg
		$uploaded_file = $upload_dir.$copied_file_name; //  ./data/2021_12_01_10_11_10.jpg

		if( $upfile_size  > 1000000 ) {
				echo("
				<script>
				alert('업로드 파일 크기가 지정된 용량(1MB)을 초과합니다!<br>파일 크기를 체크해주세요! ');
				history.go(-1)
				</script>
				");
				exit;
		}

		if (!move_uploaded_file($upfile_tmp_name, $uploaded_file) )
		{
				echo("
					<script>
					alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
					history.go(-1)
					</script>
				");
				exit;
		}
	}
	else 
	{
		$upfile_name      = "";
		$upfile_type      = "";
		$copied_file_name = "";
	}
 

    $con = mysqli_connect("localhost", "root", "", "sample1");

    
	$sql = "insert into members(file_name, file_type, file_copied) ";
    $sql = "update members set pass='$pass', name='$name' , email='$email'";
    $sql .= " where id='$id'";
    $sql .= "'$upfile_name', '$upfile_type', '$copied_file_name')";

    mysqli_query($con, $sql);

    mysqli_close($con);     

    echo "
	      <script>
	          location.href = 'index.php';
	      </script>
	  ";
?>

   
