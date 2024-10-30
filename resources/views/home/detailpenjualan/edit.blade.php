@extends('layouts.master')
@extends('title','pelanggan')
@extends('content')
<div class="card-header">
    <h3>halaman edit data detail penjualan</h3>
    <a class="btn btn-warning"href="/detailpenjualan">kembali</a>
</div>
    <div class="card-body">
<form action="/detailpenjualan/{{$detailpenjualan->id}}/update" method="post">
    @csrf
    <div class="mb-3">
        <label for=""class="form-label">id detail</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$pelanggan->name}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
    <div class="mb-3">
        <label for=""class="form-label">id penjualan</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$pelanggan->name}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
    <div class="mb-3">
        <label for=""class="form-label">id produk</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$pelanggan->alamat}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
        <div class="mb-3">
        <label for=""class="form-label">jumlah produk</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$pelanggan->notlp}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
    </div>
        <div class="mb-3">
        <label for=""class="form-label">subtotal</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$pelanggan->notlp}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
    <button class="btn btn-primary" type="submit">update</button>
</form>
  </div>
@endsection