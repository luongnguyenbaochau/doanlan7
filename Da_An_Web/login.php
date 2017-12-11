<?php
    require_once("./config/config.php");
    include ROOT."/include/function.php";
    if (!isset($_SESSION)) session_start();
    spl_autoload_register("loadClass");
    $db= new Db();
   
    // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
    if (isset($_POST["submit"])) {
        // lấy thông tin người dùng

        $username = $_POST["email"];
        $password = $_POST["password"];
        $password = md5($password);
		//print_r ($password);
		//exit;
        //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        if ($username == "" || $password =="") {
            echo "Tài khoản hoặc mật khẩu bạn không được để trống!";
        }else{
            //print_r($password);
            $sql = "select * from user where email = '$username' and password = '$password'  ";
            $query = $db->exeQuery($sql);
			$chucnang="";
			
            if (Count($query)>0) {
				$chucnang= $query[0]["chucnang"];
				 $_SESSION['tenuser'] = $query[0];
				
				 
				if ($chucnang=="admin")
				     header('Location: admin/index.php');
				else 
					header('Location: index.php');
            }
			else echo "Sai!";
			
        }
    }
?>