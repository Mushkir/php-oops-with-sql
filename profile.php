<div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">User Info</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 ">
                <form action="" method="post" id="edit-form-data">
                    <input type="hidden" name="id" id="viewId">
                    <div class="form-group mb-3">
                        <input type="text" name="userFirstName" id="userFirstName" required class="form-control" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="userLastName" id="userLastName" required class="form-control" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="userEmailAdd" id="userEmailAdd" required class="form-control" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <input type="tel" name="userPhoneNo" id="userPhoneNo" required class="form-control" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <button type="button" class="btn btn-danger d-block w-100 " data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>