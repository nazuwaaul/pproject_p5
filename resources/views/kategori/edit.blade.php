@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Dashboard') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('kategori.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                                value="{{ $kategori->nama }}" placeholder="kategori Name" required>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi kategori</label>
                            <input type="textarea" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                value="{{ $kategori->deskripsi }}" placeholder="Deskripsi" required>
                            @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-sm btn-warning">RESET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
