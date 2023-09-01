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
                <form action="..//views/add-action.php?aksi=tambah" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIM</label>
                        <input type="number" class="form-control" name="npm" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">nama</label>
                        <input type="text" class="form-control" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">program studi</label>
                        <input type="text" class="form-control" name="program_study" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label"> tempat lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">tanggall lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="laki-laki">
                        <label class="form-check-label" for="jenis_kelamin1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="perempuan">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">agama</label>
                        <input type="text" class="form-control" name="agama" required>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="alamat" id="floatingTextarea2" style="height: 100px" name="alamat" required></textarea>
                        <label for="floatingTextarea2">Alamat</label>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">submit</button>
            </div>
            </form>
        </div>
    </div>
</div>