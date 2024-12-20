<?php
session_start();
include("includes/header.php");
?>
<div class="py-5">
    <div class="container ms-auto">
        <div class="row justify-content-center">

            <?php
            if (isset($_SESSION['message'])) {
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> <?= $_SESSION['message']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                unset($_SESSION['message']);
            }
            ?>
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>