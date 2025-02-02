<?php
// session_start();  

if (isset($_SESSION["auth"])) {
    $_SESSION['message'] = 'Bạn đã đăng nhập rồi';
    header("Location: index.php");
    exit();
}

include("includes/header.php");
?>

<div class="py-5">


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php 
                    if(isset($_SESSION['message'])) 
                    {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Warning!</strong> <?= $_SESSION['message'];?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        unset($_SESSION['message']);
                    }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h1 class="text-center">Đăng ký</h1>
                    </div>
                    <div class="card-body">
                        <form action="functions/authcode.php" method="POST">
                            <div class="mb-3">
                                <label for="nameInput1" class="form-label">Tên</label>
                                <input type="text" name="name" class="form-control" id="nameInput1" placeholder="Enter your name">
                            </div>
                            <div class="mb-3">
                                <label for="phoneInput1" class="form-label">Số điện thoại</label>
                                <input type="text" name="phone" class="form-control" id="phoneInput1" placeholder="Enter your phone">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Địa chỉ Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                            </div>
                            <div class="mb-3">
                                <label for="InputConfirmPassword1" class="form-label">Xác nhận mật khẩu</label>
                                <input type="password" name="cpassword" class="form-control" id="InputConfirmPassword1" placeholder="Confirm password">
                            </div>
                            <button type="submit" name="register_btn" class="btn btn-primary">Đăng ký</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
?>