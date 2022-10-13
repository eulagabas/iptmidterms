<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg"  style="background-color:#E3B7A0";>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">IPT MIDTERM PROJECT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link " href="<?= url('/')?>">Home</a>
                  <a class="nav-link " href="<?= url('/users')?>">Users</a>
                  <a class="nav-link" href="<?= url('/accounts')?>">Accounts</a>
                </div>
            </div>
    </nav>
    <div class="col d-flex justify-content-center">
        <div class="card text mb-3 " style="width: 20rem; margin-top: 100px;">
            <div class="card-header" style="background-color:#EDCDBB">
                <h3 style="text-align: center">Main Menu</h3> 
            </div>
            <div class="card-body" >
                <div class="d-grid gap-.5 col- 19 mx-auto">
                    <button type="button" class="btn btn-outline-dark" >Home</button>
                    <br>
                    <button type="button" class="btn btn-outline-dark">Users</button>
                    <br>
                    <button type="button" class="btn btn-outline-dark">Accounts</button>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>