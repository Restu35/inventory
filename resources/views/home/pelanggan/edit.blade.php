@extends('layouts.master')
@extends('title','pelanggan')
@extends('content')
<div class="card-header">
    <h3>halaman edit data pelanggan</h3>
    <a class="btn btn-warning"href="/pelanggan">kembali</a>
</div>
    <div class="card-body">
<form action="/pelanggan/{{$pelanggan->id}}/update" method="post">
    @csrf
    <div class="mb-3">
        <label for=""class="form-label">id pelanggan</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            value="{{$pelanggan->id}}"
            aria-describedby="helpid"
            placeholder=""
        />
        <small id="helpid" class="form-text text-muted">help text</small>
    </div>
    <div class="mb-3">
        <label for=""class="form-label">nama pelanggan</label>
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
        <label for=""class="form-label">alamat</label>
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
        <label for=""class="form-label">no tlp</label>
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