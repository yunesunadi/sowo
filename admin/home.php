<?php  
    include("../confs/admin-auth.php");
    include("../confs/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php 
    include("components/head.php");
    renderHead("Home - SOWO");
?>

<body>
    <?php
        include("components/admin-nav.php");
        renderNav("home");
    ?>
    <main class="bg-secondary-subtle min-vh-100">
        <div class="container px-3 pt-5 pb-4">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Main Categories</li>
                </ol>
            </nav>
            <a href="#" class="btn btn-primary text-light ms-auto" data-bs-toggle="modal"
                data-bs-target="#addMainCategoryModal">
                <i class="bi bi-plus-circle"></i> Add New Main Category
            </a>
            <?php
                include("components/add-main-category-form.php");
            ?>
            <div class="row">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM maincategories");
                    while($row = mysqli_fetch_assoc($result)):
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3 g-3">
                    <div class="card">
                        <a href="sub-category.php?id=<?php echo $row["id"] ?>" class="text-decoration-none">
                            <div class="card-body text-center">
                                <?php if(!empty($row["image"])): ?>
                                <img class="rounded-circle object-fit-cover" src="images/<?php echo $row["image"] ?>"
                                    width="150" height="150">
                                <?php else: ?>
                                <img class="rounded-circle object-fit-cover"
                                    src="https://img.icons8.com/dusk/125/000000/meal.png" width="150" height="150">
                                <?php endif; ?>
                                <p class="card-title lead mt-2 text-dark"><?php echo $row["name"] ?></p>
                                <div class="row mt-3">
                                    <div class="col">
                                        <a href="#" class="btn btn-primary d-block text-light" data-bs-toggle="modal"
                                            data-bs-target="#editMainCategoryModal<?php echo $row["id"] ?>">Edit</a>
                                    </div>

                                    <?php 
                                    include("components/edit-main-category-form.php");
                                    ?>

                                    <div class="col">
                                        <a href="main-category-del.php?id=<?php echo $row["id"] ?>"
                                            class="btn btn-danger d-block text-light">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
</body>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</html>