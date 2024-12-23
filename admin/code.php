<?php
session_start();
include("../configs/database.php");
include("../functions/myFunction.php");

if (isset($_POST['create_category_btn'])) {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];

    $image = $_FILES['image']['name'];

    $path = "../uploads";

    $image_ext = pathinfo($image, PATHINFO_EXTENSION);

    $filename = time() . '.' . $image_ext;

    $cate_query =
        "   INSERT INTO categories(title, slug, description, image)
            VALUES ('$title', '$slug', '$description', '$filename')
        ";

    $cate_query_run = mysqli_query($con, $cate_query);

    if ($cate_query_run) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $path . '/' . $filename);

        redirect("create-category.php", "Thêm danh mục thành công");
    } else {
        redirect("create-category.php", "Đã xảy ra lỗi");
    }
} else if (isset($_POST['update_category_btn'])) {
    $category_id = $_POST['id'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $new_image = $_FILES['image']['name'];

    $old_image = $_POST['old_image'];
    $path = "../uploads";

    if ($new_image != "") {
        // $update_filename= $new_image;
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);

        $update_filename = time() . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $update_query = "UPDATE categories SET title='$title', slug='$slug', description='$description', image ='$update_filename' WHERE id='$category_id'";
    $update_query_run = mysqli_query($con, $update_query);
    if ($update_query_run) {
        if ($_FILES['image']['name'] != "") {
            move_uploaded_file($_FILES["image"]["tmp_name"], $path . '/' . $update_filename);
            if (file_exists("../uploads/" . $old_image)) {
                unlink("../uploads/" . $old_image);
            }
        }
        redirect("edit-category.php?id=$category_id", "Cập nhật danh mục thành công");
    }
} else if (isset($_POST['delete_category_btn'])) {
    $category_id = mysqli_real_escape_string($con, $_POST['id']);

    $category_query = "SELECT * FROM categories WHERE id='$category_id'";
    $category_result = mysqli_query($con, $category_query);
    $category_data = mysqli_fetch_array($category_result);
    $image = $category_data["image"];


    $query = "DELETE FROM categories WHERE id='$category_id'";
    $query_run = mysqli_query($con, $query);

    if ($query_run) {
        if (file_exists("../uploads/" . $image)) {
            unlink("../uploads/" . $image);
        }
        redirect("categories.php", "Xóa danh mục thành công");
    } else {
        redirect("categories.php", "Đã xảy ra lỗi");
    }
} else if (isset($_POST['add_product_btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $slug = mysqli_real_escape_string($con, $_POST['slug']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $requirement = mysqli_real_escape_string($con, $_POST['requirement']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $original_price = mysqli_real_escape_string($con, $_POST['original_price']);
    $selling_price = mysqli_real_escape_string($con, $_POST['selling_price']);
    $status = intval($_POST['status']);
    $trending = intval($_POST['trending']);
    $developer = mysqli_real_escape_string($con, $_POST['developer']);
    $publisher = mysqli_real_escape_string($con, $_POST['publisher']);
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    $image = $_FILES['image']['name'];
    $path = "../uploads";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time() . '.' . $image_ext;

    $product_query =
        "INSERT INTO products (name, description, requirement, slug, quantity, original_price, selling_price, status, image, trending, developer, publisher, category_id) 
            VALUES ('$name', '$description', '$requirement', '$slug', $quantity, '$original_price', '$selling_price', '$status', '$filename', '$trending', '$developer', '$publisher', '$category_id')";

    $product_query_run = mysqli_query($con, $product_query);

    if ($product_query_run) {
        move_uploaded_file($_FILES["image"]["tmp_name"], $path . '/' . $filename);
        redirect("create-product.php", "Thêm sản phẩm thành công");
    } else {
        error_log(mysqli_error($con)); // Ghi log lỗi nếu xảy ra
        redirect("create-product.php", "Đã xảy ra lỗi");
    }
} else if (isset($_POST['update_product_btn'])) {
    $product_id = $_POST['id'];
    $category_id = $_POST['category_id'];
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $slug = mysqli_real_escape_string($con, $_POST['slug']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $requirement = mysqli_real_escape_string($con, $_POST['requirement']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $original_price = mysqli_real_escape_string($con, $_POST['original_price']);
    $selling_price = mysqli_real_escape_string($con, $_POST['selling_price']);
    $status = intval($_POST['status']);
    $trending = intval($_POST['trending']);
    $developer = mysqli_real_escape_string($con, $_POST['developer']);
    $publisher = mysqli_real_escape_string($con, $_POST['publisher']);
    $category_id = mysqli_real_escape_string($con, $_POST['category_id']);

    $path = "../uploads";
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];
    if ($new_image != "") {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time() . '.' . $image_ext;
    } else {
        $update_filename = $old_image;
    }

    $product_query =
        "UPDATE products SET name = '$name', description = '$description', requirement =  '$requirement', quantity = '$quantity', slug = '$slug', original_price = '$original_price', selling_price = '$selling_price', status = '$status', image = '$update_filename', trending = '$trending', developer = '$developer', publisher = '$publisher', category_id = '$category_id' 
            WHERE id = '$product_id'";

    $product_query_run = mysqli_query($con, $product_query);

    if ($product_query_run) {
        if ($_FILES['image']['name'] != "") {
            move_uploaded_file($_FILES["image"]["tmp_name"], $path . '/' . $update_filename);
            if (file_exists("../uploads/" . $old_image)) {
                unlink("../uploads/" . $old_image);
            }
        }
        redirect("edit-product.php?id=$product_id", "Cập nhật sản phẩm thành công!");
    } else {
        error_log(mysqli_error($con));
        redirect("edit-product.php?id=$product_id", "Đã xảy ra lỗi");
    }
} else if (isset($_POST['delete_product_btn'])) {
    $product_id = mysqli_real_escape_string($con, $_POST['id']);

    // Lấy thông tin sản phẩm từ bảng `products`
    $product_query = "SELECT * FROM products WHERE id='$product_id'";
    $product_result = mysqli_query($con, $product_query);

    if ($product_result && mysqli_num_rows($product_result) > 0) {
        $product_data = mysqli_fetch_array($product_result);
        $image = $product_data["image"];

        // Xóa sản phẩm khỏi cơ sở dữ liệu
        $query = "DELETE FROM products WHERE id='$product_id'";
        $query_run = mysqli_query($con, $query);

        if ($query_run) {
            // Kiểm tra và xóa ảnh khỏi thư mục
            if (!empty($image) && file_exists("../uploads/" . $image)) {
                if (unlink("../uploads/" . $image)) {
                    error_log("File deleted: ../uploads/" . $image);
                } else {
                    error_log("Failed to delete file: ../uploads/" . $image);
                }
            } else {
                error_log("File does not exist: ../uploads/" . $image);
            }

            redirect("products.php", "Xóa sản phẩm thành công");
        } else {
            redirect("products.php", "Xảy ra lỗi trong quá trình xóa");
        }
    } else {
        redirect("products.php", "Không tìm thấy sản phẩm");
    }
} else {
    header("Location: ../index.php");
}
