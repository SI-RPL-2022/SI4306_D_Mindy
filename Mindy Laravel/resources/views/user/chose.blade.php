<!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Checkout</title>
</head>

<body>
    <div class="container my-5 py-5">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-5">
                <div class="position-absolute bg-success w-100 h-75 rounded-circle" style="opacity: 0.25;"></div>
                <img src="gambar\bust-mask-5.svg" class="position-relative" alt="">
            </div>
            <div class="col-5">
                <h1>Payment</h1>
                <div class="form-check mt-5">
                    <p class="mt-3">Package Yang Di</p>
                    <label class="form-check-label" for="flexRadioDefault1 mt-3">
                        Package 1
                    </label>
                </div>
                <select class="form-select mt-4 mb-3" aria-label="Default select example ">
                    <option selected>Silahkan Pilih Sesuai Keinginan Anda</option>
                    <option value="1">dr. Petrus Sinaga</option>
                    <option value="2">dr. Mona Angel</option>
                    <option value="3">dr. Maruem Berta</option>
                </select>
                <h4 class="mt-2"> Total Payment </h4>
                <a href="/choose-payment" class="bg-danger fontcolor-light mt-3 btn btn-success py-2 px-5 mb-5 rounded-pill">back</a>
                <a href="" class="bg-dark fontcolor-light mt-3 btn btn-success ml-3  py-2 px-5 mb-5 rounded-pill">Buy
                    Now</a>
            </div>
        </div>
    </div>
</body>