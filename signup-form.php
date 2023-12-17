<div class="modal fade" id="signupModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content text-secondary">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-primary" id="modalLabel">Sign Up Form</h1>
                <button type="button" id="modal-close-icon" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="signup.php" id="signup-form" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Select Profile</label>
                                <input class="form-control" type="file" name="profile" id="formFile" required>
                            </div>
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                        checked>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                        value="female">
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" id="floatingUsername" placeholder=""
                                    required>
                                <label for="floatingUsername">Username</label>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="age" id="floatingAge"
                                            placeholder="" min="1" max="120" required>
                                        <label for="floatingAge">Age</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="weight" id="floatingWeight"
                                            placeholder="" min="1" max="800" required>
                                        <label for="floatingWeight">Weight (lbs)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="heightft" id="floatingHeightFt"
                                            placeholder="" min="1" max="10" required>
                                        <label for="floatingHeightFt">Height (feet)</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" name="heightin" id="floatingHeightIn"
                                            placeholder="" min="0" max="12" required>
                                        <label for="floatingHeightIn">Height (inches)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="tel" class="form-control" name="phone" id="floatingPhone" placeholder=""
                                    required>
                                <label for="floatingPhone">Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" name="email"
                                    pattern="/^([a-z 0-9])+\.?([a-z 0-9])+\@([a-z])+\.(com|org|edu)\.?([a-z]+)?$/gi"
                                    id="floatingEmail" placeholder="name@example.com" required>
                                <label for="floatingEmail">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="floatingPassword"
                                    placeholder="Password" required>
                                <label for="floatingPassword">Password</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Activity</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="activity" id="activity1" checked>
                                    <label class="form-check-label" for="activity1">
                                        sedentary (little or no exercise)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="activity" id="activity2">
                                    <label class="form-check-label" for="activity2">
                                        lightly active (light exercise/sports 1-3 days per week)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="activity" id="activity3">
                                    <label class="form-check-label" for="activity3">
                                        moderately active (moderate exercise/sports 3-5 days per week)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="activity" id="activity4">
                                    <label class="form-check-label" for="activity4">
                                        very active (hard exercise/sports 6-7 days per week)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="activity" id="activity5">
                                    <label class="form-check-label" for="activity5">
                                        extra active (very hard exercise/sports and physical job or 2x training)
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="modal-close-btn" class="btn btn-secondary"
                    data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary text-light" form="signup-form">Sign Up</button>
            </div>
        </div>
    </div>
</div>