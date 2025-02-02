<?php
include("includes/header.php");

// include("../functions/myFunction.php");
?>

<!-- <div class="container">
    <div class="row"> -->

    <h1 class="mt-4 page-title text-center">Danh mục</h1>



<!-- Product Table -->
<div class="list">
    <h5 class="text-center p-2">Danh sách danh mục</h5>
    <form action="create" method="post">
        <div class="d-flex align-items-center justify-content-around text-end mb-3 p-2">
            <div class="d-flex flex-row align-items-center justify-content-center gap-2">
                <p class="text-center mb-0" id="paging">Danh mục mỗi trang:</p>
                <button type="button" class="btn btn-outline-primary" id="show5">5</button>
                <button type="button" class="btn btn-outline-primary" id="show10">10</button>
                <button type="button" class="btn btn-outline-primary" id="show20">20</button>
            </div>
            <a href="create-category.php" class="btn btn-success w-25 text">Tạo danh mục mới</a>
        </div>
    </form>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th class="align-middle">#</th>
                <th class="align-middle">Tiêu đề</th>
                <th class="align-middle">Hình ảnh</th>
                <th class="align-middle">Thời gian tạo</th>
                <th class="text-center">Hành động</th>
            </tr>
        </thead>
        <tbody id="categoryTable">
            <?php
            $categories = getAll("categories");

            if (count($categories) > 0) {
                for ($i = 0; $i < count($categories); $i++) {
            ?>
                    <tr class="align-middle">
                        <td><?= $i + 1; ?></td>
                        <td>
                            <a class="text-decoration-none item-title text-black" href="edit-category.php?id=<?= $categories[$i]['id']; ?>">
                                <?= $categories[$i]['title']; ?>
                            </a>
                        </td>
                        <td>
                            <img class="object-fit-contain h-auto" width="100px" src="../uploads/<?= $categories[$i]['image']; ?>"
                                alt="<?= $categories[$i]['title']; ?>" width="100">
                        </td>
                        <td><?= $categories[$i]['created_at']; ?></td>
                        <td>
                            <a href="edit-category.php?id=<?= $categories[$i]['id']; ?>"><button class="btn btn-warning">Chỉnh sửa</button></a>
                            <!-- Nút mở modal -->
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $categories[$i]['id']; ?>">Xóa</button>

                            <!-- Modal Confirm Delete -->
                            <div class="modal fade" id="deleteModal<?= $categories[$i]['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="deleteModalLabel">Xác nhận xóa</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Xác nhận xóa danh mục "<strong><?= $categories[$i]['title']; ?></strong>"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                                            <form action="code.php" method="POST" class="d-inline">
                                                <input type="hidden" name="id" value="<?= $categories[$i]['id']; ?>">
                                                <button type="submit" name="delete_category_btn" class="btn btn-danger">Xóa</button>
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
                echo "<tr><td colspan='5'>Không tìm thấy danh mục</td></tr>";
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