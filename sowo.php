<?php  
    include("confs/user-auth.php");
    include("confs/config.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<?php 
    include("components/head.php");
    renderHead("SOWO - SOWO");
?>

<body>
    <?php
        include("components/user-nav.php");
        renderNav("sowo");
    ?>
    <main class="bg-secondary-subtle min-vh-100">
        <div class="container px-3 pt-5 pb-4">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="main-category.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">SOWO</li>
                </ol>
            </nav>
            <div class="d-flex flex-column">
                <p class="text-center lead-lg">Today's Food List</p>
                <a href="clear-cart.php" class="btn btn-danger ms-auto">Clear All</a>
            </div>
            <div class="row mt-1 g-3">
                <?php
                $cartqty = 0;

                if(isset($_SESSION["cart"])) {    
                    foreach($_SESSION["cart"] as $qty) {
                        $cartqty += $qty;
                    }
                }
                
                if($cartqty == 0) $cart = "";
            
                if(isset($_SESSION["cart"]))
                    $cart = $_SESSION["cart"];

                $total = 0;
                
                if(is_array($cart)):
                    foreach($_SESSION["cart"] as $id => $qty):         
                        $result = mysqli_query($conn, "SELECT * FROM itemcategories WHERE id=$id");    
                        $row = mysqli_fetch_assoc($result);
                        $total += $row["calorie"] * $qty;

                        $favorite_result = mysqli_query($conn, "SELECT * FROM favorites WHERE uid=$user_id AND iid=$id");
                        $favorite_row = mysqli_fetch_assoc($favorite_result);
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3 g-3">
                    <div class="card">
                        <span class="favorite-btn ms-auto p-3 pb-0 text-primary" data-uid="<?php echo $user_id; ?>"
                            data-iid="<?php echo $id; ?>"
                            data-status="<?php echo isset($favorite_row["status"]) && $favorite_row["status"] === "on" ? "on" : "off" ?>">
                            <?php echo isset($favorite_row["status"]) && $favorite_row["status"] === "on" ? '<i class="bi bi-heart-fill" style="cursor: pointer"></i>' : '<i class="bi bi-heart" style="cursor: pointer"></i>' ?>
                        </span>
                        <div class="card-body text-center">
                            <?php if(!empty($row["image"])): ?>
                            <img class="rounded-circle object-fit-cover" src="admin/images/<?php echo $row["image"] ?>"
                                width="150" height="150">
                            <?php else: ?>
                            <img class="rounded-circle object-fit-cover"
                                src="https://img.icons8.com/dusk/125/000000/meal.png" width="150" height="150">
                            <?php endif; ?>

                            <p class="card-title lead mt-2"><?php echo $row["iname"] ?></p>
                            <p class="card-title lead">
                                (<?php echo $row["calorie"]; ?> Cal x <?php echo $qty; ?> qty)
                            </p>
                            <p class="card-title lead"><?php echo $row["calorie"] * $qty; ?> Cal</p>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                endif;
                if($total === 0):
                ?>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title lead">No Items in SOWO</h4>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <div class="row mt-3">
                <?php 
                $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$user_id"); 
                $row = mysqli_fetch_assoc($result);

                if($row["gender"] == "male"){
                    $weightmultiply = $row["weight"] * 6.3;
                    $height = ($row["heightft"] * 12) + $row["heightin"];
                    $heightmultiply = $height * 12.9;
                    $agemultiply = $row["age"] * 6.8;
                    $bmr = 66 + $weightmultiply + $heightmultiply - $agemultiply;
                } else{
                    $weightmultiply = $row["weight"] * 4.3;
                    $height = ($row["heightft"] * 12) + $row["heightin"];
                    $heightmultiply = $height * 4.7;
                    $agemultiply = $row["age"] * 4.7;
                    $bmr = 655 + $weightmultiply + $heightmultiply - $agemultiply;
                }

                switch($row["activity"]) {
                    case "sedentary": $calories = $bmr * 1.2; break;
                    case "lightly active": $calories = $bmr * 1.375; break;
                    case "moderately active": $calories = $bmr * 1.55; break;
                    case "very active": $calories = $bmr * 1.725; break;
                    default: $calories = $bmr * 1.9; break;
                }
                ?>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-title lead">Today's Calories: <?php  echo $total; ?> Cal</p>
                            <p class="card-title lead">
                                Body's Needed Calories: <?php echo $calories; ?> Cal
                            </p>
                            <?php
                            if($total != 0):
                                if($total <= $calories):
                            ?>
                            <p class="card-title lead">Your today's calories are still less than your body's needed
                                calories. But, if more than, we'll suggest you to do exercise.</p>
                            <?php
                            else:
                                $suggest_calories = $total - $calories;
                            ?>
                            <p class="card-title lead">
                                Calories you need to burn: <?php echo $suggest_calories; ?> Cal
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="text-center lead-lg mt-3">We suggest you to do one of the following exercises which you
                wish.</p>

            <div class="row g-3">
                <?php
                $weight_kilograms = $row["weight"] / 2.2;
                $walking_calorie_per_minute =  0.0175 * 3.5 * $weight_kilograms;
                $walking_minute = $suggest_calories/$walking_calorie_per_minute;
                ?>
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-title lead">Walking</p>
                            <img src="https://img.icons8.com/dusk/125/000000/walking.png" width="60" height="60">
                            <p class="card-title lead mt-1">For <?php echo round($walking_minute); ?> Minutes</p>
                        </div>
                    </div>
                </div>
                <?php
                $bicycling_calorie_per_minute =  0.0175 * 8 * $weight_kilograms;
                $bicycling_minute = $suggest_calories/$bicycling_calorie_per_minute;
                ?>
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-title lead">Bicycling</p>
                            <img src="https://img.icons8.com/dusk/125/000000/cycling-road.png" width="60" height="60">
                            <p class="card-title lead mt-1">For <?php echo round($bicycling_minute); ?> Minutes</p>
                        </div>
                    </div>
                </div>
                <?php
                $running_calorie_per_minute =  0.0175 * 11.5 * $weight_kilograms;
                $running_minute = $suggest_calories/$running_calorie_per_minute;
                ?>
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-title lead">Running</p>
                            <img src="https://img.icons8.com/dusk/125/000000/running.png" width="60" height="60">
                            <p class="card-title lead mt-1">For <?php echo round($running_minute); ?> Minutes</p>
                        </div>
                    </div>
                </div>
                <?php
                $swimming_calorie_per_minute =  0.0175 * 6 * $weight_kilograms;
                $swimming_minute = $suggest_calories/$swimming_calorie_per_minute;
                ?>
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-title lead">Swimming</p>
                            <img src="https://img.icons8.com/dusk/125/000000/swimming.png" width="60" height="60">
                            <p class="card-title lead mt-1">For <?php echo round($swimming_minute); ?> Minutes</p>
                        </div>
                    </div>
                </div>
                <?php 	    
                    endif;
                endif;
                ?>
            </div>
        </div>
    </main>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/addToFavorites.js"></script>
</body>

</html>