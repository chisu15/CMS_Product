<?php
include("includes/header.php");

// include("../functions/myFunction.php");
?>

<!-- <div class="container">
    <div class="row"> -->
<div class="border-bottom">
    <h1 class="mt-4 page-title text-center">Categories</h1>
    <p class="text-center">Categories manage page</p>
</div>

<div include-html="../layouts/filter.html"></div>
<!-- Product Table -->
<div class="list">
    <h5 class="text-center p-2">Category List</h5>
    <form action="create" method="post">
        <div class="d-flex align-items-center justify-content-around text-end mb-3 p-2">
            <div class="d-flex flex-row align-items-center justify-content-center gap-2">
                <p class="text-center mb-0" id="paging">Items Per Page:</p>
                <button type="button" class="btn btn-outline-primary" id="show5">5</button>
                <button type="button" class="btn btn-outline-primary" id="show10">10</button>
                <button type="button" class="btn btn-outline-primary" id="show20">20</button>
            </div>
            <a href="create-category.php" class="btn btn-success w-25 text">Create</a>
        </div>
    </form>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th class="align-middle">#</th>
                <th class="align-middle">Title</th>
                <th class="align-middle">Image</th>
                <th class="align-middle">Created At</th>
                <th class="text-center">Actions</th>
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
                            <a href="edit-category.php?id=<?= $categories[$i]['id']; ?>"><button class="btn btn-warning">Edit</button></a>
                            <button class="btn btn-danger">Delete</button>
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