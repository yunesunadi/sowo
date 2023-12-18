<?php  
    include("../confs/admin-auth.php");
    include("../confs/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php 
    include("components/head.php");
    renderHead("View Users - SOWO");
?>

<body>
    <?php
        include("components/admin-nav.php");
        renderNav("view users");
    
        $count_result = mysqli_query($conn, "SELECT COUNT(*) FROM users");
        $count_row = mysqli_fetch_assoc($count_result);
        $count = $count_row["COUNT(*)"];
        
        $result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
    ?>
    <main class="bg-secondary-subtle min-vh-100">
        <div class="container px-3 pt-5 pb-4">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="main-category.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Users</li>
                </ol>
            </nav>
            <p class="lead text-end">All Users: <?php echo $count; ?></p>
            <div class="row">
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-sm-6 col-md-4 col-lg-3 g-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <img class="rounded-circle object-fit-cover"
                                src="../assets/images/profiles/<?php echo $row["image"] ?>" width="150" height="150">
                            <p class="card-title lead mt-2">
                                Name:<br>
                                <b><?php echo $row["name"] ?></b>
                            </p>
                            <p class="card-title lead mt-2">
                                Email:<br>
                                <b><?php echo $row["email"] ?></b>
                            </p>
                            <p class="card-title lead mt-2">
                                Phone Number:<br>
                                <b><?php echo $row["phone"] ?></b>
                            </p>
                            <p class="card-title lead">
                                Registered Time:<br>
                                <b><?php echo $row["created_date"] ?></b>
                            </p>
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