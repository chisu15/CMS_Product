<?php
include("includes/header.php");

// include("../functions/myFunction.php");
?>

<h1 class="text-center mb-4">Tạo mới sản phẩm</h1>
<form action="code.php" method="POST" enctype="multipart/form-data" id="createProductForm" class="shadow p-4 rounded bg-light">
    <div class="mb-3">
        <label for="name" class="form-label">Tên sản phẩm</label>
        <input required type="text" class="form-control" id="name" name="name" placeholder="Nhập tên sản phẩm">
    </div>
    <div class="mb-3">
        <label for="category_id" class="form-label">Danh mục</label>
        <select class="form-select" id="category_id" name="category_id">
            <?php
            $categories = getAll("categories");
            if (count($categories) > 0) {
                foreach ($categories as $category) {
            ?>
                    <option value="<?= $category['id']; ?>"><?= $category['title']; ?></option>
            <?php
                }
            } else {
                echo 'No category available';
            }

            ?>
            <option selected>-Chọn danh mục-</option>


        </select>
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input required type="text" class="form-control" id="slug" name="slug" placeholder="Nhập slug của sản phẩm">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Mô tả</label>
        <textarea required class="form-control" id="description" name="description" rows="3" placeholder="Nhập mô tả sản phẩm"></textarea>
    </div>
    <div class="mb-3">
        <label for="requirement" class="form-label">Cấu hình yêu cầu</label>
        <textarea required class="form-control" id="requirement" name="requirement" rows="3" placeholder="Nhập cấu hình yêu cầu"></textarea>
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Số lượng</label>
        <input required type="number" min="0" class="form-control" id="quantity" name="quantity" placeholder="Nhập số lượng">
    </div>
    <div class="mb-3">
        <label for="original_price" class="form-label">Giá gốc</label>
        <input required type="number" min="0" class="form-control" id="original_price" name="original_price" placeholder="Nhập giá gốc">
    </div>
    <div class="mb-3">
        <label for="selling_price" min="0" class="form-label">Giá khuyến mại</label>
        <input type="number" class="form-control" id="selling_price" name="selling_price" placeholder="Nhập giá khuyến mại">
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Trạng thái</label>
        <select class="form-select" id="status" name="status">
            <option value="1">Hoạt động</option>
            <option value="0">Không hoạt động</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="trending" class="form-label">Thịnh hành</label>
        <select class="form-select" id="trending" name="trending">
            <option value="1">Có</option>
            <option value="0" selected>Không</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="developer" class="form-label">Nhà phát triển</label>
        <input type="text" class="form-control" id="developer" name="developer" placeholder="Nhập tên nhà phát triển">
    </div>
    <div class="mb-3">
        <label for="publisher" class="form-label">Nhà phát hành</label>
        <input type="text" class="form-control" id="publisher" name="publisher" placeholder="Nhập tên nhà phát hành">
    </div>

    <div class="mb-3">
        <label for="image" class="form-label">Hình ảnh</label>
        <input type="file" class="form-control" id="image" name="image">
        <img id="previewImage" src="#" alt="Preview Image" class="img-fluid mt-3 d-none">
    </div>
    <button type="submit" id="createProductBtn" class="btn btn-primary" name="add_product_btn">Tạo sản phẩm</button>
</form>

<?php
include("./includes/footer.php");
?>