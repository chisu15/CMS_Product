<?php
include("includes/header.php");

// include("../functions/myFunction.php");
?>

<!-- <div class="container">
    <div class="row"> -->
    <h1 class="page-title text-center mt-4">Sản phẩm</h1>
<div class="filter-box col text-center g-3 mb-4 mt-auto">

<!-- Product Table -->
<div class="list">
    <h5 class="text-center p-2">Danh sách sản phẩm</h5>
    <form action="create" method="post">
        <div class="d-flex align-items-center justify-content-around text-end mb-3 p-2">
            <div class="d-flex flex-row align-items-center justify-content-center gap-2">
                <p class="text-center mb-0" id="paging">Sản phẩm mỗi trang:</p>
                <button type="button" class="btn btn-outline-primary" id="show5">5</button>
                <button type="button" class="btn btn-outline-primary" id="show10">10</button>
                <button type="button" class="btn btn-outline-primary" id="show20">20</button>
            </div>
            <a href="create-product.php" class="btn btn-success w-25 text">Tạo sản phẩm mới</a>
        </div>
    </form>

    <!-- Product Table -->
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th class="first align-middle">#</th>
                <th class="align-middle">Tên</th>
                <th class="align-middle">Hình ảnh</th>
                <th class="align-middle">Trạng thái</th>
                <th class="align-middle">Danh mục</th>
                <th class="align-middle">Giá</th>
                <th class="align-middle">Thời gian tạo</th>
                <th class="last text-center">Hành động</th>
            </tr>
        </thead>
        <tbody id="productTable">
        <?php
            $products = getAll("products");

            if (count($products) > 0) {
                for ($i = 0; $i < count($products); $i++) {
            ?>
                    <tr class="align-middle">
                        <td><?= $i + 1; ?></td>
                        <td>
                            <a class="text-decoration-none item-title text-black" href="edit-product.php?id=<?= $products[$i]['id']; ?>">
                                <?= $products[$i]['name']; ?>
                            </a>
                        </td>
                        <td>
                            <img class="object-fit-contain h-auto" width="100px" src="../uploads/<?= $products[$i]['image']; ?>"
                                alt="<?= $products[$i]['name']; ?>" width="100">
                        </td>
                        <td><?= $products[$i]['status']== 1 ? "Hoạt động" : "Không hoạt động"; ?></td>
                        <td><?= getById("categories", $products[$i]['category_id'])['title']; ?></td>
                        <td><?= $products[$i]['original_price']; ?></td>
                        <td><?= $products[$i]['created_at']; ?></td>
                        <td>
                            <a href="edit-product.php?id=<?= $products[$i]['id']; ?>"><button class="btn btn-warning">Chỉnh sửa</button></a>
                            <!-- Nút mở modal -->
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $products[$i]['id']; ?>">Xóa</button>

                            <!-- Modal Confirm Delete -->
                            <div class="modal fade" id="deleteModal<?= $products[$i]['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="deleteModalLabel">Xác nhận xóa</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Xác nhận xóa sản phẩm"<strong><?= $products[$i]['name']; ?></strong>"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <input type="hidden" name="id" value="<?= $products[$i]['id']; ?>">
                                                <button type="submit" name="delete_product_btn" class="btn btn-danger">Xóa</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='5'>No records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <nav class="d-flex justify-content-center">
        <ul class="pagination" id="paginationContainer"></ul>
    </nav>
</div>

<!-- </div>
    
</div> -->

<?php
include("./includes/footer.php");
?>