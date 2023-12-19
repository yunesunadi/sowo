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

        $id = $_GET["id"];
        $sub_result = mysqli_query($conn, "SELECT * FROM subcategories WHERE id=$id");
        $sub_row = mysqli_fetch_assoc($sub_result);   
        $main_id = $sub_row["main_id"];
        $item_result = mysqli_query($conn, "SELECT * FROM itemcategories WHERE mcid=$main_id AND scid=$id");
        $main_result = mysqli_query($conn, "SELECT * FROM maincategories WHERE id=$main_id");
        $main_row = mysqli_fetch_assoc($main_result);
    ?>
    <main class="bg-secondary-subtle min-vh-100">
        <div class="container px-3 pt-5 pb-4">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="home.php">Main Categories</a></li>
                    <li class="breadcrumb-item">
                        <a href="sub-category.php?id=<?php echo $main_id; ?>">
                            <?php echo $main_row["name"] ?>'s Sub
                            Categories
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $sub_row['sname'] ?>'s Items</li>
                </ol>
            </nav>
            <a href="#" class="btn btn-primary text-light ms-auto" data-bs-toggle="modal"
                data-bs-target="#addItemCategoryModal">
                <i class="bi bi-plus-circle"></i> Add New Item
            </a>
            <?php
                include("components/add-item-category-form.php");
            ?>

            <div class="row">
                <?php while($row = mysqli_fetch_assoc($item_result)): ?>
                <div class="col-sm-6 col-md-4 col-lg-3 g-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <?php if(!empty($row['image'])): ?>
                            <img class="rounded-circle object-fit-cover" src="images/<?php echo $row['image'] ?>"
                                width="150" height="150">
                            <?php else: ?>
                            <img class="rounded-circle object-fit-cover"
                                src="https://img.icons8.com/dusk/125/000000/meal.png" width="150" height="150">
                            <?php endif; ?>
                            <p class="card-title lead mt-2">
                                <?php echo $row['iname'] ?>
                            </p>
                            <p class="card-title lead mb-3">
                                (<?php echo $row['calorie'] ?> Cal)
                            </p>
                            <div class="row mt-3">
                                <div class="col">
                                    <a href="#" class="btn btn-primary d-block text-light" data-bs-toggle="modal"
                                        data-bs-target="#editItemCategoryModal<?php echo $row["id"] ?>">Edit</a>
                                </div>

                                <?php 
                                include("components/edit-item-category-form.php");
                                ?>

                                <div class="col">
                                    <a href="item-category-del.php?id=<?php echo $row["id"] ?>"
                                        class="btn btn-danger d-block text-light">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>
</body>

<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</html>