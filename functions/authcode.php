<?php
    session_start();
    include("../configs/database.php");
    include("myFunction.php");

    if (isset($_POST["register_btn"])) {
        $name = mysqli_real_escape_string($con, $_POST["name"]);
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $phone = mysqli_real_escape_string($con, $_POST["phone"]);
        $password = mysqli_real_escape_string($con, $_POST["password"]);
        $cpassword = mysqli_real_escape_string($con, $_POST["cpassword"]);

        $check_email_query = "SELECT email FROM users WHERE email='$email'";
        $check_email_query_run = mysqli_query($con, $check_email_query );
        if (mysqli_num_rows($check_email_query_run) > 0) {
            redirect('../register.php', "Email đã được sử dụng");
            // $_SESSION['message'] = "Email already registered";
            // header("Location: ../register.php");
        }else{
            if($cpassword == $password){
                $query = "INSERT INTO users (name, email, phone, password) VALUES('$name', '$email', '$phone', '$password')";
                $query_run = mysqli_query($con, $query);
    
                if($query_run){
                    redirect("../login.php", "Đăng ký thành công");

                    // $_SESSION['message'] = "Register successfully";
                    // header("Location: ../login.php");
                }else{
                    redirect("../register.php", "Đã xảy ra lỗi");
                    // $_SESSION['message'] = "Something went wrong";
                    // header("Location: ../register.php");
                }
            }else{
                redirect("../register.php", "Mật khẩu không đúng");
                // $_SESSION['message'] = "Password do not match";
                // header("Location: ../register.php");
            }
        }
    }
    else if (isset($_POST["login_btn"])){
        $email = mysqli_real_escape_string($con, $_POST["email"]);
        $password= mysqli_real_escape_string($con, $_POST["password"]);

        $query = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
        $query_run = mysqli_query($con, $query);
        if(mysqli_num_rows($query_run) > 0) {
            $_SESSION["auth"] = true;
            $userData = mysqli_fetch_array( $query_run );
            $userName = $userData['name'];
            $userEmail = $userData['email'];
            $role = $userData['role'];

            $_SESSION["auth_user"] = [
                'name' => $userName,
                'email'=> $userEmail,
            ];

            $_SESSION['role'] = $role;

            if($role == 1){
                redirect("../admin/index.php", "Chào mừng đến với trang Quản lý");
                // $_SESSION['message'] = "Welcome to Dashboard";
                // header("Location: ../admin/index.php");
            }else{
                redirect("../index.php", "Đăng nhập thành công");
                // $_SESSION['message'] = "Logged In Successfully";
                // header("Location: ../index.php");
            }

        }else{
            redirect("../login.php", "Thông tin không đúng");
            // $_SESSION["message"] = "Invalid Credentials";
            // header("Location: ../login.php");
        }
    }
?>