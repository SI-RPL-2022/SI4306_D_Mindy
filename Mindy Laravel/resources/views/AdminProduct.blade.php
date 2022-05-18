@extends('layouts.admin')

@section('content')
<main class="col-md-5 ms-sm-auto col-lg-10 px-md-6">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-8 pb-2 mb-3">
        <h1>Product</h1>
        <a href="/logout" class="btn btn-success px-3 py-2 primary-btn mb-5"
        style="border-radius: 30px; font-size: 20px; background-color: #079911;margin-right: 40px;">Logout</a>
    </div>
    <div class="container-fluid" style="width: 700px;">
        <table class="table table-borderless">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col" width="30px">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Package 1</td>
            <td>25.000</td>
            <td><a href="/product/edit" class="btn btn-success px-4"
                style="border-radius: 30px; font-size: 12px; background-color: #000000;">Edit</a></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Package 2</td>
            <td>50.000</td>
            <td><a href="/product/edit" class="btn btn-success px-4"
                style="border-radius: 30px; font-size: 12px; background-color: #000000;">Edit</a></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Package 3</td>
            <td>100.000</td>
            <td><a href="/product/edit" class="btn btn-success px-4"
                style="border-radius: 30px; font-size: 12px; background-color: #000000;">Edit</a></td>
            </tr>
        </tbody>
        </table>
        <a href="/product/add" style="color: #000000;">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-circle"
            viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
            <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
        </a>
    </div>
</main>

@endsection