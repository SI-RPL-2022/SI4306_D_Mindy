<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="stylesheet.css"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Pilih Layanan</title>
</head>

<body>
        <div class="row d-flex justify-content-between align-items-center">
            <div class="row" style="background-color: rgba(221, 255, 223, 1); height: 100vh; width: 100vh;">
                <img src="/gambar/bust-mask-5.svg" class="ml-5" height="700" width="500">
            </div>
            <div class="col-5">
                <h1 font-weight: bold;>Pilih Layanan</h1>
                <h5 class="mt-5">Jenis Package:</h5>
                <div class="form-check mt-2">
                    <input class="form-check-input" type="radio" name="layanan" id="layanan">
                    <label class="form-check-label" for="layanan">
                        Package 1
                    </label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="radio" name="layanan" id="layanan">
                    <label class="form-check-label" for="layanan">
                        Package 2
                    </label>
                </div>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="radio" name="layanan" id="layanan">
                    <label class="form-check-label" for="layanan">
                        Package 3
                    </label>
                </div>
                <a href="/" class="mt-5 btn btn-danger py-2 px-5 mb-5 rounded-pill">Cancel</a>
                <a href="/bayar" class="mt-5 btn btn-success ml-3  py-2 px-5 mb-5 rounded-pill">Next</a>
            </div>
        </div>
</body>