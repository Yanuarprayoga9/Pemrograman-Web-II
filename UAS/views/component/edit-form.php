<form action="?id=<?php echo $_GET['id']; ?>" method="post">
    <?php 
     foreach ($krs as $item) {
    ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NIM</label>
            <input type="number" class="form-control" name="nim" value="<?php echo $item['Nim']; ?>">
            <input type="number" class="form-control" name="id" value="<?php echo $_GET['id']; ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">mata kuliah</label>
            <input type="text" class="form-control" name="mata_kuliah" value="<?= $item['mata_kuliah'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">pengampu</label>
            <input type="text" class="form-control" name="pengampu" value="<?= $item['pengampu'] ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">jadwal_mata_kuliah</label>
            <input type="text" class="form-control" name="jadwal_mata_kuliah" value="<?= $item['jadwal_mata_kuliah'] ?>">
        </div>
        
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    <?php 
     }
    ?>