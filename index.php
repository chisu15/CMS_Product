<?php
// session_start();
include("includes/header.php");
include("functions/userFunction.php");
?>
<div class="py-5">
    <div class="container ms-auto">
        <div class="row justify-content-center">

            <?php
            if (isset($_SESSION['message'])) {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Thông báo!</strong> <?= $_SESSION['message']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                unset($_SESSION['message']);
            }
            ?>

            <h1 class="mb-5 text-center text-primary">Xu hướng</h1>
            <div class="row">
            <?php
                $productTrend = getAllTrend("products");

                if (count($productTrend) > 0) {
                    foreach ($productTrend as $product) {
                ?>
                        <div class="col mb-4" style="width: auto; height: 350px;">
                            <div class="card shadow border-light rounded" style="width: 250px; height: 350px;">
                                <img src="./uploads/<?= $product['image']; ?>" class="card-img-top rounded-top" alt="..." style="object-fit: cover; height: 150px;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-primary"><?= $product['name']; ?></h5>
                                    <p class="card-text text-muted"><?= getById('categories', $product['category_id'])['title']; ?></p>
                                    <div class="mt-auto">
                                        <button class="btn btn-outline-primary btn-sm w-100">Xem thêm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
            <hr class="my-5">

            <h1 class="mb-5 text-center text-primary">Danh sách danh mục</h1>
            <div class="row">
                <?php
                $categories = getAll("categories");

                if (count($categories) > 0) {
                    foreach ($categories as $category) {
                ?>
                        <div class="col mb-4" style="width: auto; height: 350px;">
                            <div class="card shadow border-light rounded" style="width: 250px; height: 350px;">
                                <img src="./uploads/<?= $category['image']; ?>" class="card-img-top rounded-top" alt="..." style="object-fit: cover; height: 150px;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-primary"><?= $category['title']; ?></h5>
                                    <p class="card-text text-muted"><?= $category['description']; ?></p>
                                    <div class="mt-auto">
                                        <button class="btn btn-outline-primary btn-sm w-100">Xem thêm</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

            <hr class="my-5">

            <h1 class="mb-5 text-center text-primary">Danh sách sản phẩm</h1>
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $products = getAll("products");

                    if (count($products) > 0) {
                        foreach ($products as $product) {
                    ?>
                            <tr class="align-middle text-center">
                                <td>
                                    <img src="./uploads/<?= $product['image']; ?>" class="img-fluid rounded" alt="..." style="object-fit: cover; height: 100px;">
                                </td>
                                <td>
                                    <h5 class="card-title text-primary"><?= $product['name']; ?></h5>
                                </td>
                                <td>
                                    <h5 class="card-title"><?= getById('categories', $product['category_id'])['title']; ?></h5>
                                </td>
                                <td>
                                    <?php
                                    if ($product['selling_price'] > 0) {
                                        $productPriceClass = "text-decoration-line-through";
                                    ?>
                                        <h5 class="card-title <?= $productPriceClass; ?> text-secondary fs-6"><?= number_format($product['original_price'], 0, ',', '.') ?>đ</h5>
                                        <h5 class="card-title text-success"><?= number_format($product['selling_price'], 0, ',', '.') ?>đ</h5>
                                    <?php
                                    } else {
                                    ?>
                                        <h5 class="card-title text-success"><?= number_format($product['original_price'], 0, ',', '.') ?>đ</h5>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td>
                                    <button class="btn btn-outline-success btn-lg fs-6">Mua ngay</button>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>
