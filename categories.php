<?php

include("includes/header.php");
include("functions/userFunction.php");
?>
<div class="py-5">
    <div class="container ms-auto">
    <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh mục</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <h1 class="mb-5 text-center text-primary">Danh sách danh mục</h1>
            <hr>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                $categories = getAll("categories");

                if (count($categories) > 0) {
                    foreach ($categories as $category) {
                ?>
                    <div class="col">
                        <div class="card shadow border-light rounded">
                            <img src="./uploads/<?= $category['image']; ?>" class="card-img-top rounded-top" alt="..." style="object-fit: cover; height: 200px;">
                            <div class="card-body">
                                <h5 class="card-title text-primary"><?= $category['title']; ?></h5>
                                <p class="card-text text-muted"><?= $category['description']; ?></p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <button class="btn btn-outline-primary btn-sm">Xem thêm</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>


<?php
include("includes/footer.php");
?>