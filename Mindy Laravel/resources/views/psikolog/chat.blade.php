@extends('psikolog.app')
@section('content')

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-8 pb-2 mb-3">
    <h1>Chat</h1>
    <a href="#" class="btn btn-success px-3 py-2 primary-btn mb-5"
      style="border-radius: 30px; font-size: 20px; background-color: #079911;margin-right: 40px;">Logout</a>
  </div>
  <div class="container-fluid" style="width: 800px;">
    <table class="table table-borderless">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Link</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Supriyadi Ngangong</td>
          <td>Wa.21u91had</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Yaman Ngangong</td>
          <td>Wa.sadashdi29</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Wowo Ngangong</td>
          <td>Wa.asdhaidh2</td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Junaed Ngangong</td>
          <td>Wa.asjdau92y</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection