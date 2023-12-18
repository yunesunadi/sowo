<?php  
    include("confs/user-auth.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php 
    include("components/head.php");
    renderHead("Home - SOWO");
?>

<body>
    <?php
        include("components/user-nav.php");
        include("confs/config.php");  
        $id = $_GET['id'];
        $sub_result = mysqli_query($conn, "SELECT * FROM subcategories WHERE id=$id");
        $sub_row = mysqli_fetch_assoc($sub_result);   
        $main_id = $sub_row['main_id'];
        $item_result = mysqli_query($conn, "SELECT * FROM itemcategories WHERE mcid=$main_id AND scid=$id");
        $main_result = mysqli_query($conn, "SELECT * FROM maincategories WHERE id=$main_id");
        $main_row = mysqli_fetch_assoc($main_result);
    ?>
    <main class="bg-secondary-subtle min-vh-100">
        <div class="container px-3 pt-5 pb-4">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="main-category.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="main-category.php">Main Categories</a></li>
                    <li class="breadcrumb-item">
                        <a href="sub-category.php?id=<?php echo $main_id; ?>">
                            <?php echo $main_row['name'] ?>'s Sub
                            Categories
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $sub_row['sname'] ?>'s Items</li>
                </ol>
            </nav>
            <div class="row">
                <?php 
                    while($item = mysqli_fetch_assoc($item_result)):
                        $item_id = $item["id"];
                        $favorite_result = mysqli_query($conn, "SELECT * FROM favorites WHERE uid=$user_id AND iid=$item_id");
                        $favorite_row = mysqli_fetch_assoc($favorite_result);
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3 g-3">
                    <div class="card">
                        <span class="favorite-btn ms-auto p-3" data-uid="<?php echo $user_id; ?>"
                            data-iid="<?php echo $item_id; ?>" data-status="<?php echo isset($favorite_row["status"]) && $favorite_row["status"] === "on" ? "on" : "off" ?>">
                            <?php echo isset($favorite_row["status"]) && $favorite_row["status"] === "on" ? '<i class="bi bi-heart-fill" style="cursor: pointer"></i>' : '<i class="bi bi-heart" style="cursor: pointer"></i>' ?>
                        </span>
                        <div class="card-body text-center">
                            <?php if(!empty($item['image'])): ?>
                            <img class="rounded-circle object-fit-cover" src="admin/images/<?php echo $item['image'] ?>"
                                width="150" height="150">
                            <?php else: ?>
                            <img class="rounded-circle object-fit-cover"
                                src="https://img.icons8.com/dusk/125/000000/meal.png" width="150" height="150">
                            <?php endif; ?>
                            <p class="card-title lead mt-2">
                                <?php echo $item['iname'] ?>
                            </p>
                            <p class="card-title lead mb-3">
                                (<?php echo $item['calorie'] ?> Cal)
                            </p>
                            <a href="add-to-sowo.php?id=<?php echo $item_id ?>"
                                class="btn btn-primary d-block text-light">Add
                                to
                                SOWO</a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/addToFavorites.js"></script>
</body>

</html>