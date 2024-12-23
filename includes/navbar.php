<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow" background-color = "#211544">
    <div class="container ms-auto">
        <a class="navbar-brand" href="index.php">
            <img class="object-fit-contain w-auto" src="imgs/logo.png" alt="GameStore" height="30">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                <li class="nav-item">
                    <a class="nav-link <?= $page == "index.php"? 'active':''; ?>" aria-current="page" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categories.php">Danh mục</a>
                </li>

            </ul>
            <div>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                    <ul class="navbar-nav" aria-labelledby="navbarDropdown">
                        <?php
                            if (isset($_SESSION['auth'])){
                                ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <?= $_SESSION['auth_user']['name'] ?>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Bộ sưu tập</a></li>
                                            <li><a class="dropdown-item" href="#">Cài đặt</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="logout.php">Đăng xuất</a></li>
                                        </ul>
                                    </li>
                                <?php
                            }
                            else{
                                ?>
                                    <li><a class="nav-link <?= $page == "register.php"? 'active':''; ?>" href="register.php">Đăng ký</a></li>
                                    <li> <a class="nav-link <?= $page == "login.php"? 'active':''; ?>" href="login.php">Đăng nhập</a></li>
                                <?php
                            }
                        ?>

                    </ul>


                </form>
            </div>
        </div>
    </div>
</nav>