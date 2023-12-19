<?php  
    include("../confs/admin-auth.php");
    include("../confs/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php 
    include("components/head.php");
    renderHead("View Feedbacks - SOWO");
?>

<body>
    <?php
        include("components/admin-nav.php");
        renderNav("view feedbacks");
    
        $count_result = mysqli_query($conn, "SELECT COUNT(*) FROM feedbacks");
        $count_row = mysqli_fetch_assoc($count_result);
        $count = $count_row["COUNT(*)"];
        
        $result = mysqli_query($conn, "SELECT * FROM feedbacks ORDER BY id DESC");
    ?>
    <main class="bg-secondary-subtle min-vh-100">
        <div class="container px-3 pt-5 pb-4">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">View Feedbacks</li>
                </ol>
            </nav>
            <p class="lead text-end">All Feedbacks: <?php echo $count; ?></p>
            <div class="row">
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-md-6 g-3">
                    <div class="card bg-primary bg-opacity-10 border border-info rounded-end">
                        <div class="card-body">
                            <p class="card-title lead mt-2">
                                Email:
                                <b><?php echo $row["email"] ?></b>
                            </p>
                            <p class="card-title lead">
                                Sent Time:
                                <b><?php echo $row["created_date"] ?></b>
                            </p>
                            <p class="card-title lead mt-2">
                                Message:
                                <b><?php echo $row["message"] ?></b>
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