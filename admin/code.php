<?php
    session_start();
    include("../configs/database.php");
    include("../functions/myFunction.php");

    if(isset($_POST['create_category_btn']))
    {
        $title = $_POST['title'];
        $slug = $_POST['slug'];
        $description = $_POST['description'];

        $image = $_FILES['image']['name'];

        $path = "../uploads";

        $image_ext = pathinfo($image, PATHINFO_EXTENSION);

        $filename = time().'.'. $image_ext;

        $cate_query = 
        "   INSERT INTO categories(title, slug, description, image)
            VALUES ('$title', '$slug', '$description', '$filename')
        ";

        $cate_query_run = mysqli_query($con, $cate_query);

        if($cate_query_run)
        {
            move_uploaded_file($_FILES["image"]["tmp_name"], $path.'/'.$filename);

            redirect("create-category.php", "Add category successfully");
        }
        else
        {
            redirect("create-category.php", "Something went wrong");
        }
    }
    else if(isset($_POST['update_category_btn'])){
        $category_id = $_POST['id'];
        $title = $_POST['title'];
        $slug = $_POST['slug'];
        $description = $_POST['description'];
        $new_image = $_FILES['image']['name'];
        
        $old_image = $_POST['old_image'];
        $path = "../uploads";

        if($new_image != ""){
            // $update_filename= $new_image;
            $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);

            $update_filename = time().'.'. $image_ext;
        }else{
            $update_filename= $old_image;
        }

        $update_query = "UPDATE categories SET title='$title', slug='$slug', description='$description', image ='$update_filename' WHERE id='$category_id'";
        $update_query_run = mysqli_query($con, $update_query);
        if($update_query_run){
            if($_FILES['image']['name'] != ""){
                move_uploaded_file($_FILES["image"]["tmp_name"], $path.'/'.$update_filename);
                if(file_exists("../uploads/".$old_image)){
                    unlink("../uploads/".$old_image);
                }
            }
            redirect("edit-category.php?id=$category_id", "Category updated successfully");
        }
    }
?>