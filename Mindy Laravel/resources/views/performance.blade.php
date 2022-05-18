@extends('layouts.admin')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-8 pb-2 mb-3">
        <h1>Performance</h1>
        <a href="/logout" class="btn btn-success px-3 py-2 primary-btn mb-5"
        style="border-radius: 30px; font-size: 20px; background-color: #079911;margin-right: 40px;">Logout</a>
    </div>
        <img src="{{ url('Dashboard Admin/chart.png') }}" style=" width: 720px;height: 280px;left: 406px;top: 260px; margin-left: 150px;">
</main>
@endsection