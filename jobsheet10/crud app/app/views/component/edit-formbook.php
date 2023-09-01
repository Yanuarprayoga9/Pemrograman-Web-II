<form action="../views/add-action.php?aksi=updatebook&id=<?php echo $_GET['id']; ?>" method="post">
    <?php 
     foreach ($db->edit_book($_GET['id']) as $item) {
    ?>
        <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" class="form-control" name="judul" value="<?php echo $item['judul']; ?>">
    </div>
    <div class="mb-3">
        <label for="pengarang" class="form-label">Pengarang</label>
        <input type="text" class="form-control" name="pengarang" value="<?php echo $item['pengarang']; ?>">
    </div>
    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
        <input type="number" class="form-control" name="tahun_terbit" value="<?php echo $item['tahun_terbit']; ?>">
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" name="harga" step="0.01" value="<?php echo $item['harga']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <?php 
     }
    ?>