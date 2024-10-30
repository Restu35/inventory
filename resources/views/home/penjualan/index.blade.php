@extends('layouts.master');
@section('title','pelanggan');
@section('content');
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row"><div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>halaman data penjualan</h3>
                        <a class="btn btn-primary"href="/penjualan/tambah">tambah</a>
                       </div> 
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">id penjualan</th>  
                                            <th scope="col">tanggal penjualan</th>   
                                            <th scope="col">total harga</th>   
                                            <th scope="col">id pelanggan</th>   
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($penjualan as $penjualan)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$penjualan->tanggal penjualan}}</td>
                                            <td>{{$penjualan->total harga}}</td>
                                            <td><a class="btn btn-warning"href="/user/{{$user->id}}/show">edit</a>
                                                <a class="btn btn-danger"href="/user/{{$user->id}}/delete"
                                                   onclick="return confirm('yakin mau di hapus ?')">delete</a>
                                          </td>
                                        </tr> 
                                    @endforeach
                                 </tbody>
                             </table>
                          </div>
                      </div>
                    </div>
                </div>
            </div></div>
        </div>
    </section>
</div>