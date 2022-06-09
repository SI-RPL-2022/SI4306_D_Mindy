@extends('layouts.admin')

@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-6">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-8 pb-2 mb-3">
        <h1>Payments</h1>
        <a href="/logout" class="btn btn-success px-3 py-2 primary-btn mb-5" style="border-radius: 30px; font-size: 20px; background-color: #079911;margin-right: 40px;">Logout</a>
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
                @foreach ($pembelian as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->paket}}</td>
                    <td>{{$item->harga}}</td>
                    <td><a href="#" class="btn btn-success px-4" style="border-radius: 30px; font-size: 12px; background-color: {{$item->status == 'Menunggu'?'grey':'black'}};" data-bs-toggle="modal" data-bs-target="#ModalSeePayments">{{$item->status}}</a></td>
                    <td><a class="btn btn-primary px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#modalEdit"> Update </a></td>
                    <td><a href="#" class="btn btn-danger px-4 rounded-pill" style="border-radius: 30px; font-size: 12px;" name=""> Delete </a></td>
                </tr>

                <!-- modal update -->
                <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="" method="POST" enctype="multipart/form-data">    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" >Sunting</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <input type="hidden" class="form-control" id="id" name="id" value="">
                                    <div class="form-group">
                                        <label for="nama"><b>Nama</b></label>
                                        <input type="text" class="form-control" id="nama" name="nama" value="{{$item->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="product"><b>Package</b></label>
                                        <input type="text" class="form-control" id="product" name="paket" value="{{$item->paket}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="buy"><b>Harga</b></label>
                                        <input type="text" class="form-control" id="buy" name="harga" value="{{$item->harga}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="status"><b>Status</b></label>
                                        <input type="text" class="form-control" id="status" name="status" value="{{$item->status}}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="submit" name="update" id="update" >Save changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- MODAL LIHAT BUKTI -->
                <div class="modal fade" id="ModalSeePayments">
                    <div class="modal-dialog modal-dialog-centered modal-ls">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Bukti Pembayaran</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="custom-file" style="width: 200px; height: 300px; overflow: hidden; display: block; margin-left:auto;margin-right:auto;">
                                        <img src="gambar/{{$item->transfer}}"  style="width: 100%; object-fit: cover;" >                              
                                    </div>                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection