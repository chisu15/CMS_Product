<?php
include("includes/header.php");
// include("../middlewares/adminMiddleware.php");
?>

<!-- <div class="container">
    <div class="row"> -->
<h1 class="text-center mb-4">Create Category</h1>
<form id="createCategoryForm" class="shadow p-4 rounded bg-light" action="code.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="categoryTitle" class="form-label">Category Title</label>
        <input type="text" name="title" class="form-control" id="categoryTitle" placeholder="Enter category title" required>
    </div>
    <div class="mb-3">
        <label for="categorySlug" class="form-label">Category Slug</label>
        <input type="text" name="slug" class="form-control" id="categorySlug" placeholder="Enter category slug (e.g., my-category)" required>
    </div>
    <div class="mb-3">
        <label for="categoryDescription" class="form-label">Category Description</label>
        <textarea class="form-control" name="description" id="categoryDescription" rows="4" placeholder="Enter category description" required></textarea>
    </div>
    <div class="mb-3">
        <label for="categoryImage" class="form-label">Category Image</label>
        <input type="file" name="image" class="form-control" id="categoryImage" accept="image/*" required>
    </div>
    <button type="submit" class="btn btn-primary w-100" name="create_category_btn">Create Category</button>
</form>
<div id="message" class="mt-3 text-center"></div>

<!-- </div>
    
</div> -->

<?php
include("./includes/footer.php");
?>