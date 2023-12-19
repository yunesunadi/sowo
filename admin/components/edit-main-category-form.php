<div class="modal fade" id="editMainCategoryModal<?php echo $row["id"] ?>" data-bs-backdrop="static" tabindex="-1"
    aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content text-secondary">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-primary" id="modalLabel">
                    Edit Main
                    Category Form
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="main-category-update.php" id="edit-main-category-form<?php echo $row["id"] ?>"
                    method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row["id"] ?>">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Select
                            Image</label>
                        <input class="form-control" type="file" name="image" id="formFile">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="floatingCategoryName" placeholder=""
                            value="<?php echo $row["name"]; ?>" required>
                        <label for="floatingCategoryName">Category Name</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary text-light"
                    form="edit-main-category-form<?php echo $row["id"] ?>">Edit
                    Category</button>
            </div>
        </div>
    </div>
</div>