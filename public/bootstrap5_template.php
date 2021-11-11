<!doctype html>
<html lang="kr" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>부트스트랩 템플릿</title>

    <!-- Bootstrap 5.0.2 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- JQuery 3.6.0 CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <style>
        html, body {
            height:100%;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
    <!-- nav bar start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eleventh navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown09">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form>
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <!-- nav bar end -->

    <main>
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-md-2">
                    <!-- sidebar start -->
                    <div class="border-end bg-white" id="sidebar-wrapper">
                        <div class="sidebar-heading border-bottom bg-light p-3">Start Bootstrap</div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Dashboard</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Shortcuts</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Temp1</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Temp2</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Temp3</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Temp4</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Temp5</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Temp6</a>
                            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Temp7</a>
                        </div>
                    </div>
                    <!-- sidebar end -->
                </div>
                <div class="col-md-10 p-5 h-100">
                    <h2>title test</h2>
                    <hr>
                    <div class="row p-2 h-100">
                        <div class="col-12 bg-light h-100">
                            Content area
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- content end -->

    <footer class="mt-auto py-3 bg-light">
        <div class="container text-center">
            <em>Copyright &copy; 2021 LJH all rights reserved.</em>
        </div>
    </footer>
</body>
</html>
