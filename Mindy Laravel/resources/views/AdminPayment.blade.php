@extends('layouts.admin')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-8 pb-2 mb-3">
        <h1>Payments</h1>
        <a href="#" class="btn btn-success px-3 py-2 primary-btn mb-5" style="border-radius: 30px; font-size: 20px; background-color: #079911;margin-right: 40px;">Logout</a>
    </div>
    <div class="container-fluid" style="width: 800px;">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Product</th>
                    <th scope="col">Harga</th>
                    <th scope="col" width="40px">Status</th>
                    <th scope="col" width="40px">Action</th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Issac Benedikus</td>
                    <td>Package 1</td>
                    <td>25.000</td>
                    <td><a href="#" class="btn btn-success px-4" style="border-radius: 30px; font-size: 12px; background-color: #000000;">Lunas</a></td>
                    <td><a class="btn btn-primary px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#modalEdit"> Update </a></td>
                    <td><a href="#" class="btn btn-danger px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" name=""> Delete </a></td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Valir Kagura</td>
                    <td>Package 2</td>
                    <td>50.000</td>
                    <td><a href="#" class="btn btn-success px-4 btn-lg disabled" style="border-radius: 30px; font-size: 12px; background-color: #000000;" aria-disabled="true">Belum</a></td>
                    <td><a class="btn btn-primary px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#modalEdit"> Update </a></td>
                    <td><a href="#" class="btn btn-danger px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" name=""> Delete </a></td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Vallene Putri</td>
                    <td>Package 3</td>
                    <td>100.000</td>
                    <td><a href="#" class="btn btn-success px-4" style="border-radius: 30px; font-size: 12px; background-color: #000000;">Lunas</a></td>
                    <td><a class="btn btn-primary px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#modalEdit"> Update </a></td>
                    <td><a href="#" class="btn btn-danger px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" name=""> Delete </a></td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Meidina Bagaskara</td>
                    <td>Package 1</td>
                    <td>25.000</td>
                    <td><a href="#" class="btn btn-success px-4" style="border-radius: 30px; font-size: 12px; background-color: #000000;">Lunas</td>
                    <td><a class="btn btn-primary px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#modalEdit"> Update </a></td>
                    <td><a href="#" class="btn btn-danger px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" name=""> Delete </a></td>
                </tr>
            </tbody>
        </table>
    </div>
</main>
@endsection