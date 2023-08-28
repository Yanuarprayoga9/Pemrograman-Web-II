<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
                        <a class="nav-link" href="./crud app/app/views/index.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./crud app/app/views/dosenindex.php">Dosen</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <h1 class="text-center">SIAKAD</h1>
    <div class="container mx-auto m-3 d-flex gap-4 justify-content-around">
        <div class="card" style="width: 18rem;">
            <img src="./crud app/public/assets/image/defaultjpg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mahasiswa</h5>
                <a href="./crud app/app/views/index.php" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./crud app/public/assets/image/defaultjpg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Dosen</h5>
                <a href="./crud app/app/views/dosenindex.php" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="./crud app/public/assets/image/defaultjpg.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">...</h5>
                <a href="./crud app/app/views/dosenindex.php" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>