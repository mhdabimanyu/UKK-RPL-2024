@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Foto</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('foto.update', $foto->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $foto->title }}" required>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" required>{{ $foto->deskripsi }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                            <small class="form-text text-muted">Format yang diperbolehkan: jpeg, png, jpg, gif, svg. Maksimal ukuran: 2048KB.</small>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
