@extends('layouts.master');
@section('title','pelanggan');
@section('content');
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row"><div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>halaman data produ</h3>
                        <a class="btn btn-primary"href="/pelanggan/tambah">tambah</a>
                       </div> 
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">id produk</th>  
                                            <th scope="col">nama produk</th>   
                                            <th scope="col">harga</th>   
                                            <th scope="col">stok</th>   
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($produk as $produk)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$produk->name}}</td>
                                            <td>{{$produk->harga}}</td>
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