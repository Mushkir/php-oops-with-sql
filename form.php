<!-- Modal -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Adding or Updating Users</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form of Adding / Update -->
            <form id="addForm" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Name</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark text-light ">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                            </div>
                            <input type="text" name="username" id="username" class=" form-control shadow-none " placeholder="Enter your username" autocomplete="off" require>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark text-light ">
                                    <i class="fa-solid fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" name="email" id="email" class=" form-control shadow-none " placeholder="Enter your Email" autocomplete="off" require>
                        </div>
                    </div>

                    <!-- Mobile -->
                    <div class="form-group">
                        <label for="">Mobile</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-dark text-light ">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                            </div>
                            <input type="text" name="mobile" id="mobile" class=" form-control shadow-none " placeholder="Enter your mobile number" autocomplete="off" require>
                        </div>
                    </div>

                    <!-- Photo -->
                    <div class="form-group">
                        <label for="">Photo: </label>
                        <div class="input-group">
                            <label for="userphoto" class="custom-file-label">Choose File</label>
                            <input type="file" name="photo" id="userphoto" class="custom-file-input shadow-none " require>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-dark">Save changes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>