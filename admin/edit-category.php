<?php
include("includes/header.php");
// include("../middlewares/adminMiddleware.php");


?>

<!-- <div class="container">
    <div class="row"> -->
<?php
if (isset($_GET['id'])) {


    $categoryId = $_GET['id'];

    $category = getById("categories", $categoryId);

    if (!$category) {
        echo "<h3 class='text-center text-danger'>Category not found.</h3>";
        exit;
    } else {
?>

<div>


            <h1 class="text-center mb-4">Edit Category</h1>
            <form id="editCategoryForm" class="shadow p-4 rounded bg-light" action="code.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $categoryId; ?>">

                <div class="mb-3">
                    <label for="categoryTitle" class="form-label">Category Title</label>
                    <input type="text" name="title" class="form-control" id="categoryTitle" value="<?= $category['title']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="categorySlug" class="form-label">Category Slug</label>
                    <input type="text" name="slug" class="form-control" id="categorySlug" value="<?= $category['slug']; ?>" required>
                </div>
                <div class="mb-3">
                    <label for="categoryDescription" class="form-label">Category Description</label>
                    <textarea class="form-control" name="description" id="categoryDescription" rows="4" required><?= $category['description']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="categoryImage" class="form-label">Category Image</label>
                    <input type="file" name="image" class="form-control" id="categoryImage" accept="image/*">
                    <div class="mt-2">
                        <label for="categoryCurrentImage" class="form-label">Current image:</label>
                        <input type="hidden" name="old_image" class="form-control" value="<?= $category['image']; ?>">
                        <img src="../uploads/<?= $category['image']; ?>" alt="<?= $category['title']; ?>" width="150">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100" name="update_category_btn">Update</button>
            </form>
            <div id="message" class="mt-3 text-center"></div>
            </div>
<?php
    }
}
?>


<!-- </div>
    
</div> -->

<?php
include("./includes/footer.php");
?>