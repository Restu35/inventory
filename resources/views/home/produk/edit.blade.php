@extends('layouts.master')
@extends('title','pelanggan')
@extends('content')
<div class="card-header">
    <h3>halaman edit data produk</h3>
    <a class="btn btn-warning"href="/pelanggan">kembali</a>
</div>
    <div class="card-body">
<form action="/produk/{{$produk->id}}/update" method="post">
    @csrf
    <div class="mb-3">
        <label for=""class="form-label">id produk</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$produk->id}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    <div class="mb-3">
        <label for=""class="form-label">nama produk</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$produk->nama}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
    <div class="mb-3">
        <label for=""class="form-label">harga</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$produk->harga}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
        <div class="mb-3">
        <label for=""class="form-label">stok</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$produk->stok}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
    </div>
    <button class="btn btn-primary" type="submit">update</button>
</form>
  </div>
@endsection