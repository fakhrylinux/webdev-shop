<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
        header{
            background: url("https://cdn.britannica.com/17/196817-159-9E487F15/vegetables.jpg?s=1500x700&amp;q=85");
            height: 120px;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body class="">
    <header class="container-fluid">Header</header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            </div>
            </div>
        </div>
    </nav>
    <main class="container">
        <div class="grid gap-3 row justify-content-center">
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card" style="width: 18rem;">
                    <img src="https://balifoodstore.com/18-large_default/broccoli-.jpg" class="card-img-top object-fit-cover" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Brokoli 500gram</h5>
                        <p class="card-text">oleh petani terpercaya</p>
                        <a href="#" class="btn btn-primary">10.000</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 mb-3 mb-sm-0">
                <div class="card" style="width: 18rem;">
                    <img src="https://balifoodstore.com/10-large_default/wortel-500gr.jpg" class="card-img-top object-fit-cover" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Wortel 500gram</h5>
                        <p class="card-text">oleh petani terpercaya</p>
                        <a href="#" class="btn btn-primary">17.000</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="text-center">&copy; <?= date("Y"); ?> by Hannan</footer>
</body>
</html>