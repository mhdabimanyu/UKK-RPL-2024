<!-- resources/views/fotos/create.blade.php -->

@extends('layou.app')

@section('content')
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <!-- Card header menampilkan judul form -->
                    <div class="card-header">Tambah Foto</div>

                    <div class="card-body">
                        <!-- Menampilkan pesan kesalahan validasi jika ada -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Form untuk membuat foto baru -->
                        <form method="POST" action="{{ route('foto.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="file" class="form-control-file" id="image" name="image" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
