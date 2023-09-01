<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../krs/add-action.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIM</label>
                        <input type="number" class="form-control" name="nim" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">nama mata kuliah</label>
                        <input type="text" class="form-control" name="mata_kuliah" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">pengampu</label>
                        <input type="text" class="form-control" name="pengampu" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">jadwal mata kuliah</label>
                        <input type="text" class="form-control" name="jadwal_mata_kuliah" required>
                    </div>
                   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="submit">submit</button>
            </div>
            </form>
        </div>
    </div>
</div>