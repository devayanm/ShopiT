<?php
include("./includes/connect.php");
include("./functions/common_functions.php");
session_start();
?>
<?php include('./includes/header.php'); ?>
<div class="container-fluid">
    <div class="all-prod">
        <div class="container">
            <div class="sub-container pt-4 pb-4">
                <div class="categ-header">
                    <div class="sub-title">
                        <span class="shape"></span>
                        <span class="title">Categories & Brands</span>
                    </div>
                    <h2>Browse By Category & Brand</h2>
                </div>
                <div class="row mx-0">
                    <div class="col-md-2 side-nav p-0">
                        <ul class="navbar-nav me-auto ">
                            <li class="nav-item d-flex align-items-center gap-2">
                                <span class="shape"></span>
                                <a href="products.php" class="nav-link fw-bolder nav-title">
                                    <h4>Brands</h4>
                                </a>
                            </li>
                            <?php
                            getBrands();
                            ?>
                        </ul>
                        <div class="divider"></div>
                        <ul class="navbar-nav me-auto ">
                            <li class="nav-item d-flex align-items-center gap-2">
                                <span class="shape"></span>
                                <a href="products.php" class="nav-link fw-bolder nav-title">
                                    <h4>Categories</h4>
                                </a>
                            </li>
                            <?php
                            getCategories();
                            ?>

                        </ul>

                    </div>
                    <div class="col-md-10">
                        <div class="row">
                            <?php
                            search_product();
                            filterCategoryProduct();
                            filterBrandProduct();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('./includes/footer.php'); ?>