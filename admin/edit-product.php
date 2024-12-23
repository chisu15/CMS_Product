<?php
include("includes/header.php");

// include("../functions/myFunction.php");
?>
<?php
if (isset($_GET['id'])) {


    $productId = $_GET['id'];

    $product = getById("products", $productId);

    if (!$product) {
        echo "<h3 class='text-center text-danger'>Product not found.</h3>";
        exit;
    } else {
?>
        <h1 class="text-center">Chỉnh sửa sản phẩm</h1>
        <form action="code.php" method="POST" enctype="multipart/form-data" id="editProductForm" class="shadow p-4 rounded bg-light">
            <input type="hidden" name="id" value="<?= $product['id']; ?>">
            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $product['name']; ?>">
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="<?= $product['slug']; ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Mô tả</label>
                <textarea class="form-control" id="description" name="description" rows="3"><?= htmlspecialchars($product['description']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="requirement" class="form-label">Yêu cầu cấu hình</label>
                <textarea class="form-control" id="requirement" name="requirement" rows="3"><?= htmlspecialchars($product['requirement']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Số lượng</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="<?= $product['quantity']; ?>">
            </div>
            <div class="mb-3">
                <label for="original_price" class="form-label">Giá gốc</label>
                <input type="number" class="form-control" id="original_price" name="original_price" value="<?= $product['original_price']; ?>">
            </div>
            <div class="mb-3">
                <label for="selling_price" class="form-label">Giá khuyến mãi</label>
                <input type="number" class="form-control" id="selling_price" name="selling_price" value="<?= $product['selling_price']; ?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Trạng thái</label>
                <select class="form-select" id="status" name="status">
                    <option value="1"<?= $product['status'] == '1' ? 'selected' : ''; ?>>Hoạt động</option>
                    <option value="0" <?= $product['status'] == '0' ? 'selected' : ''; ?>>Không hoạt động</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="trending" class="form-label">Thịnh hành</label>
                <select class="form-select" id="trending" name="trending">
                    <option value="1" <?= $product['trending'] == '1' ? 'selected' : ''; ?>>Có</option>
                    <option value="0" <?= $product['trending'] == '0' ? 'selected' : ''; ?>>Không</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="developer" class="form-label">Nhà phát triển</label>
                <input type="text" class="form-control" id="developer" name="developer" value="<?= $product['developer']; ?>">
            </div>
            <div class="mb-3">
                <label for="publisher" class="form-label">Nhà phát hành</label>
                <input type="text" class="form-control" id="publisher" name="publisher" value="<?= $product['publisher']; ?>">
            </div>
            <div class="mb-3">
                <label for="category_id" class="form-label">Danh mục</label>
                <select class="form-select" id="category_id" name="category_id">
                    <?php
                    $categories = getAll("categories");

                    if (count($categories) > 0) {
                        foreach ($categories as $category) {
                            $selected = ($product['category_id'] == $category['id']) ? 'selected' : '';
                    ?>
                            <option value="<?= $category['id']; ?>" <?= $selected; ?>>
                                <?= $category['title']; ?>
                            </option>
                    <?php
                        }
                    } else {
                        echo '<option value="">No category available</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="productImage" class="form-label">Ảnh sản phẩm</label>
                <input type="file" name="image" class="form-control" id="productImage" accept="image/*">
                <div class="mt-2">
                    <label for="productCurrentImage" class="form-label">Ảnh hiện tại:</label>
                    <input type="hidden" name="old_image" class="form-control" value="<?= $product['image']; ?>">
                    <img src="../uploads/<?= $product['image']; ?>" alt="<?= $product['name']; ?>" width="150">
                </div>
            </div>
            <button type="submit" id="updateProductBtn" class="btn btn-success" name="update_product_btn">Cập nhật sản phẩm</button>
        </form>

<?php
    }
}
?>


<?php
include("./includes/footer.php");
?>