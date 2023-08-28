<form action="../views/add-action.php?aksi=updatedosen&id=<?php echo $_GET['id']; ?>" method="post">
    <?php 
     foreach ($db->edit_dosen($_GET['id']) as $item) {
    ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIM</label>
            <input type="number" class="form-control" name="nip" value="<?php echo $item['nip']; ?>">
            <input type="number" class="form-control" name="id" value="<?php echo $_GET['id']; ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">nama</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $item['nama']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label"> tempat lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $item['tempat_lahir']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">tanggall lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $item['tanggal_lahir']; ?>">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin1" value="laki-laki" <?php echo ($item['jenis_kelamin'] == 'laki-laki') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="jenis_kelamin1">
                Laki-laki
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin2" value="perempuan" <?php echo ($item['jenis_kelamin'] == 'perempuan') ? 'checked' : ''; ?>>
            <label class="form-check-label" for="flexRadioDefault2">
                Perempuan
            </label>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">agama</label>
            <input type="text" class="form-control" name="agama" value="<?php echo $item['agama']; ?>">
        </div>
        <div class="form-floating">
            <textarea class="form-control" placeholder="alamat" id="floatingTextarea2" style="height: 100px" name="alamat"><?php echo $item['alamat']; ?></textarea>
            <label for="floatingTextarea2">Alamat</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php 
     }
    ?>