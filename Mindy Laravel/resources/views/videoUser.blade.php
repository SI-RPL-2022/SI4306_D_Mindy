<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Profile User/Profile User.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Schedule User</title>

</head>

<body>

    <header class="navbar navbar-expand-lg navbar-light sticky-top bg-light flex-md-nowrap p-0 shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mindy</a>
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 dropdown">
                    <label for="profile2" class="profile-dropdown">
                        <img src="/gambar/{{Session::get('user')->gambar}}" alt="mdo" style="width: 40px;height: 40px;left: 1340px;top: 20px;"
                            class="rounded-circle">
                </div>
            </div>
        </div>
    </header><br>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"
                style="min-height: 140vh;">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/profile/{{ Session::get('user')->id }}">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/schedule/{{ Session::get('user')->id }}">
                                Schedule
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/payment/{{ Session::get('user')->id }}">
                                Payments
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Video
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-8 pb-2 mb-3">
                    <h1>Video Relax</h1>
                    <a href="/logout" class="btn btn-success px-3 py-2 primary-btn mb-5"
                        style="border-radius: 30px; font-size: 20px; background-color: #079911;margin-right: 40px;">Logout</a>
                </div>

                <div class="video" style="margin-left: 150px;">
                    <h2>Penghantar Tidur</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/6kOkBKsIjiM"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                    <h2 style="margin-top: 50px;">Gerakan Relaksasi</h2>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pi5WhX24uS4"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </main>
        </div>
    </div>
</body>

</html>