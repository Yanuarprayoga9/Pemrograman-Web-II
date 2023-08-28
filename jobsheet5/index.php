<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './views/layout/head.php' ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Siakad</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./views/mahasiswa/">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./views/dosen/">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center">SIAKAD</h1>
    <div class="container mx-auto m-3 d-flex gap-4 justify-content-around">
        <div class="card" style="width: 18rem;">
            <img src="./public/assets/image/defaultjpg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mahasiswa</h5>
                <a href="./views/mahasiswa/" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./public/assets/image/defaultjpg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Dosen</h5>
                <a href="./views/dosen/" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./public/assets/image/defaultjpg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">...</h5>
                <a href="./views/mahasiswa/" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <?php include './views/layout/script.php' ?>

</body>

</html>