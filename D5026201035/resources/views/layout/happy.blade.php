<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand">Moh Hasyim Baidlowi</a>
            <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                <a class="nav-link">5026201035</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="navbar-brand" href="#">
                <img src="photo.png" style="width:40px;" class="rounded-pill">
                </a>
            </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <br>
        @yield('judulhalaman')
        <br>
        <a href="http://janganmalas.id:8000">Home</a>
        <br>
        @section('konten')
        @show
    </div>

    <footer class="bg-white sticky-footer">
        <div class="container my-auto"><br>
            <div class="my-auto copyright"><span>Hak Cipta Hasyim 2021</span></div>
        </div>
    </footer>
</body>

</html>
