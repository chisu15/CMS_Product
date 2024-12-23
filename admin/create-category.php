<?php
include("includes/header.php");
// include("../middlewares/adminMiddleware.php");
?>

<!-- <div class="container">
    <div class="row"> -->
<h1 class="text-center mb-4">Tạo danh mục mới</h1>
<form id="createCategoryForm" class="shadow p-4 rounded bg-light" action="code.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="categoryTitle" class="form-label">Tiêu đề</label>
        <input type="text" name="title" class="form-control" id="categoryTitle" placeholder="Nhập tiêu đề danh mục" required>
    </div>
    <div class="mb-3">
        <label for="categorySlug" class="form-label">Slug</label>
        <input type="text" name="slug" class="form-control" id="categorySlug" placeholder="Enter category slug (e.g., my-category)" required>
    </div>
    <div class="mb-3">
        <label for="categoryDescription" class="form-label">Mô tả</label>
        <textarea class="form-control" name="description" id="categoryDescription" rows="4" placeholder="Nhập mô tả danh mục" required></textarea>
    </div>
    <div class="mb-3">
        <label for="categoryImage" class="form-label">Hình ảnh</label>
        <input type="file" name="image" class="form-control" id="categoryImage" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-primary w-100" name="create_category_btn">Tạo danh mục</button>
</form>
<div id="message" class="mt-3 text-center"></div>

<!-- </div>
    
</div> -->

<?php
include("./includes/footer.php");
?>