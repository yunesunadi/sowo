<?php function renderNav($page) { ?>

<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="home.php">
            <img src="../assets/images/logo.png" alt="SOWO logo" height="25">
            <!-- This logo is designed by using icons from "https://icons8.com/icons". -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-content"
            aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center nav-fs" id="nav-content">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mt-md-2 mt-lg-0">
                <li class="nav-item">
                    <a href="home.php"
                        class="nav-link text-decoration-none <?php echo $page === "home" ? "active" : "" ?>">
                        <i class="bi bi-home"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="view-users.php"
                        class="nav-link text-decoration-none <?php echo $page === "view users" ? "active" : "" ?>">
                        <i class="bi bi-eye"></i>
                        View Users
                    </a>
                </li>
                <li class="nav-item">
                    <a href="view-feedbacks.php"
                        class="nav-link text-decoration-none <?php echo $page === "view feedbacks" ? "active" : "" ?>">
                        <i class="bi bi-chat-left-text"></i>
                        View Feedbacks
                    </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php"
                        class="btn btn-light text-primary ms-md-2 d-block d-md-inline-block mt-3 mt-md-1">
                        <i class="bi bi-box-arrow-right"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php } ?>