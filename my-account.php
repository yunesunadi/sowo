<?php  
    include("confs/user-auth.php");
    include("confs/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php 
    include("components/head.php");
    renderHead("My Account - SOWO");
?>

<body>
    <?php
        include("components/user-nav.php");
        renderNav("my account");
    ?>
    <main class="bg-secondary-subtle min-vh-100">
        <div class="container px-3 pt-5 pb-4">
            <nav aria-label="breadcrumb" class="mt-3">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="main-category.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
                </ol>
            </nav>
            <div class="d-flex mb-3">
                <a href="#" class="btn btn-primary text-light ms-auto" id="signup-btn" data-bs-toggle="modal"
                    data-bs-target="#editProfileModal">
                    <i class="bi bi-pencil-square"></i> Edit Profile
                </a>
            </div>
            <div class="row justify-content-center g-3">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$user_id");
                    $row = mysqli_fetch_assoc($result);
                ?>
                <?php
                    include("components/edit-profile-form.php");
                ?>
                <div class="col-md-8 col-lg-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="d-block d-sm-flex justify-content-evenly align-items-center">
                                <img class="rounded-circle object-fit-cover"
                                    src="assets/images/profiles/<?php echo $row["image"] ?>" width="120" height="120">
                                <div class="">
                                    <p class="card-title text-sm-start lead mt-2">
                                        Name: <?php echo $row["name"] ?>
                                    </p>
                                    <p class="card-title text-sm-start lead mt-2">
                                        Email: <?php echo $row["email"] ?>
                                    </p>
                                    <p class="card-title text-sm-start lead mt-2">
                                        Phone: <?php echo $row["phone"] ?>
                                    </p>
                                    <p class="card-title text-sm-start lead mt-2">
                                        Age: <?php echo $row["age"] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 col-md-4 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-title text-sm-start lead mt-2">
                                Gender: <?php echo $row["gender"] ?>
                            </p>
                            <p class="card-title text-sm-start lead mt-2">
                                Weight: <?php echo $row["weight"] ?> lbs
                            </p>
                            <p class="card-title text-sm-start lead mt-2">
                                Height: <?php echo $row["heightft"] ?> ft <?php echo $row["heightin"] ?> in
                            </p>
                            <p class="card-title text-sm-start lead mt-2">
                                Activity: <?php echo $row["activity"] ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-7 col-md-9 col-lg-6">
                    <div class="card">
                        <div class="card-body text-center">
                            <p class="card-title lead text-sm-start">
                                Your BMI (Body Mass Index):
                                <?php 
                                    $up = $row["weight"] * 703;
                                    $down = ($row["heightft"] * 12) + $row["heightin"];
                                    $downmultiply =  $down * $down;
                                    $bmi = $up / $downmultiply;
                                    echo round($bmi, 2)." (";

                                    if ($bmi < 18.5){
                                        echo "Underweight";
                                    } elseif (($bmi >= 18.5) && ($bmi <= 24.9 )) {
                                        echo "Normal weight";
                                    } elseif (($bmi >= 25) && ($bmi <= 29.9)) {
                                        echo "Overweight";
                                    } else {
                                        echo "Obese";
                                    }
                                    
                                    echo ")<br>";
                                    
                                    if ($row["gender"] == "male") {
                                        $weightmultiply = $row["weight"] * 6.3;
                                        $height = ($row["heightft"] * 12) + $row["heightin"];
                                        $heightmultiply = $height * 12.9;
                                        $agemultiply = $row["age"] * 6.8;
                                        $bmr = 66 + $weightmultiply + $heightmultiply - $agemultiply;
                                    } else {
                                        $weightmultiply = $row["weight"] * 4.3;
                                        $height = ($row["heightft"] * 12) + $row["heightin"];
                                        $heightmultiply = $height * 4.7;
                                        $agemultiply = $row["age"] * 4.7;
                                        $bmr = 655 + $weightmultiply + $heightmultiply - $agemultiply;
                                    }

                                    echo "Your BMR (Basal Metabolic Rate): ".round($bmr, 2)."<br>";

                                    if ($row["activity"] == "sedentary") {
                                        $calories = $bmr * 1.2;
                                    } elseif ($row["activity"] == "lightly active") {
                                        $calories = $bmr * 1.375;
                                    } elseif ($row["activity"] == "moderately active") {
                                        $calories = $bmr * 1.55;
                                    } elseif($row["activity"] == "very active") {
                                        $calories = $bmr * 1.725;
                                    } else{
                                        $calories = $bmr * 1.9;
                                    }
                                    echo "Body's Needed Calories: ".round($calories, 2);
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>