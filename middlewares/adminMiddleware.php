<?php 
    include('../functions/myFunction.php');

    if (isset($_SESSION['auth'])){
        if ($_SESSION['role'] != 1){
            redirect("../index.php", "Bạn không có quyền truy cập vào trang này");
        }
    }else{
        redirect("../login.php", "Đăng nhập để tiếp tục");
    }
?>