<?php
    $page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>
<div class="col-md-3 col-lg-2 p-0 h-100 mt-0" id="sidebar">
    <nav class="nav flex-column justify-content-around gap-0">
        <div class="d-flex justify-content-center align-content-center">
            <button class="navbar-toggler d-md-none" type="button" onclick="toggleSidebar()">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="index.php">
                <img class="navbar-brand ms-3 object-fit-contain w-auto h-" src="../imgs/logo.png" alt="Game Store"></img>
            </a>
        </div>
        <div class="d-flex flex-column align-content-center gap-2 h-auto mb-5">
            <a id="dashboard-link" class="nav-link <?= $page == "index.php"? 'active':''; ?>" href="index.php"><span class="material-symbols-outlined">
                dashboard
            </span>Thống kê</a>
            <a id="products-link" class="nav-link <?= $page == "products.php"? 'active':''; ?>" href="products.php"><span class="material-symbols-outlined">
                inventory_2
            </span>Sản phẩm</a>
            <a id="categories-link" class="nav-link <?= $page == "categories.php"? 'active':''; ?>" href="categories.php"><span class="material-symbols-outlined">
                category
            </span>Danh mục</a>
            <a id="users-link" class="nav-link" href="users.php"><span class="material-symbols-outlined">
                group
            </span>Người dùng</a>
            
            <a id="orders-link" class="nav-link" href="payments.php"><span class="material-symbols-outlined">
                Payments
            </span>Hóa đơn</a>
        </div>
        <div class="bth-admin-logout">
            <a href="../logout.php" class="btn btn-danger text-center text-decoration-none ">
                Đăng xuất
            </a>
        </div>
    </nav>

</div>

