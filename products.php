<?php

include("includes/header.php");
include("functions/userFunction.php");
?>
<div class="py-5">
    <div class="container ms-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <h1 class="mb-5 text-center text-primary">Danh sách sản phẩm</h1>
            <hr>
            <table class="table">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th scope="col">Tên</th>
                        <th scope="col">Hình ảnh</th>
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
                                <th scope="row">

                                    <img src="./uploads/<?= $product['image']; ?>" class="card-img-top rounded-top" alt="..." style="object-fit: cover; height: 100px;">
                                </th>
                                <td>
                                    <h5 class="card-title text-primary"><?= $product['name']; ?></h5>
                                </td>
                                <td>
                                    <h5 class="card-title"><?= getById('categories', $product['category_id'])['title']; ?></h5>
                                </td>
                                <td>
                                    <?php
                                        if ($product['selling_price'] > 0 ) {
                                            $productPriceClass = "text-decoration-line-through";
                                            ?>
                                                <h5 class="card-title text-xl <?=$productPriceClass;?> text-secondary fs-6"><?= $product['original_price']; ?>đ</h5>
                                                <h5 class="card-title text-success"><?= $product['selling_price']; ?>đ</h5>
                                            <?php
                                        }
                                        else {
                                            ?>
                                                 <h5 class="card-title text-success"><?= $product['original_price']; ?>đ</h5>                                           
                                            <?php
                                        }
                                    ?>

                                    </td>
                                <td>
                                    <button class="btn btn-outline-success btn fs-5">Mua</button>
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