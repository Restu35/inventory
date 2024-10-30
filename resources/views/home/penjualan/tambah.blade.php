@extends('layouts.master')
@extends('title','pelanggan')
@extends('content')
<div class="card-header">
    <h3>halaman tambah data penjualan</h3>
    <a class="btn btn-warning"href="/penjualan">kembali</a>
</div>
    <div class="card-body">
<form action="/penjualan/simpan" method="post">
    @csrf
    <div class="mb-3">
        <label for=""class="form-label">id penjualan</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    <div class="mb-3">
        <label for=""class="form-label">tanggal penjualan</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
    <div class="mb-3">
        <label for=""class="form-label">total harga</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
        <div class="mb-3">
        <label for=""class="form-label">id pelanggan</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
    <button class="btn btn-primary" type="submit">simpan</button>
</form>
  </div>
@endsection