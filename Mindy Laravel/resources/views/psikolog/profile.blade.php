@extends('psikolog.app')
@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-8 pb-2 mb-3">
  <h1>Profile</h1>
  <a href="#" class="btn btn-success px-3 py-2 primary-btn mb-5"
      style="border-radius: 30px; font-size: 20px; background-color: #079911;margin-right: 40px;">Logout</a>
</div>
<div class="isi" style="display: flex;">
  <img src=""
      style=" width: 300px;height: 300px;left: 406px;top: 260px; margin-left: 150px; border-radius: 50%;">
  <div>
      <div class="container ">
          <table class="table table-borderless " style="background-color: #fff;">
              <tr>
                  <td>Nama</td>
                  <td>Petrus</td>
              </tr>
              <tr>
                  <td>Tanggal Lahir</td>
                  <td>12 - 09 - 1975</td>
              </tr>
              <tr>
                  <td>Jenis Kelamin</td>
                  <td>Laki - Laki</td>
              </tr>
              <tr>
                  <td>Email</td>
                  <td>Petrus@gmail.com</td>
              </tr>
              <tr>
                  <td>Nomor HP</td>
                  <td>087796095781</td>
              </tr>
          </table>
      </div>
  </div>
</div>
@endsection