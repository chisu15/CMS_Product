<?php 
    include("includes/header.php");
    // include("../middlewares/adminMiddleware.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Hello Admin</h2>
        </div>
        <div class="statistics ms-1 row mb-3">
                    <div class="col-md-3">
                        <div id="product" class="analyst-box row rounded-4 p-3 text-white bg-primary mb-3">
                            <div class="info-box">
                                <span class="icon material-symbols-outlined">
                                    inventory_2
                                </span>
                                <div>
                                    <p class="card-text">1,234</p>
                                    <h6 class="card-title">Total Products</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="order" class="analyst-box row rounded-4 p-3 text-white bg-primary mb-3">
                            <div class="info-box">
                                <span class="icon material-symbols-outlined">
                                    inventory
                                </span>
                                <div>
                                    <p class="card-text">567</p>
                                    <h6 class="card-title">Total Orders</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="user" class="analyst-box row rounded-4 p-3 text-white bg-primary mb-3">
                            <div class="info-box">
                                <span class="icon material-symbols-outlined">
                                    person
                                </span>
                                <div>
                                    <p class="card-text">456</p>
                                    <h6 class="card-title">Total Users</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div id="post" class="analyst-box row rounded-4 p-3 text-white bg-primary mb-3">
                            <div class="info-box">
                                <span class="icon material-symbols-outlined">
                                    post_add
                                </span>
                                <div>
                                    <p class="card-text">456</p>
                                    <h6 class="card-title">Total Post</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    
</div>

<?php
    include("./includes/footer.php");
?>