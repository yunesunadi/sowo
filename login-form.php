<div class="modal fade" id="loginModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content text-secondary">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-primary" id="modalLabel">Login Form</h1>
                <button type="button" id="login-modal-close-icon" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="login.php" id="login-form" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="username-addon">
                            <i class="bi bi-person"></i>
                        </span>
                        <input type="text" class="form-control" name="name" placeholder="Username" aria-label="Username"
                            aria-describedby="username-addon" required>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="password-addon">
                            <i class="bi bi-lock"></i>
                        </span>
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            aria-label="password" aria-describedby="password-addon" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="login-modal-close-btn" class="btn btn-secondary"
                    data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary text-light" form="login-form">Login</button>
            </div>
        </div>
    </div>
</div>