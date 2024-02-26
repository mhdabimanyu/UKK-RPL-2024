@extends('lay.app')

@section('content')
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    @foreach ($fotos as $foto)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                                <img src="{{ asset('images/'.$foto->image) }}" class="card-img-top" alt="{{ $foto->title }}" >
                                <div class="card-body">
                                    <h5 class="card-title">{{ $foto->title }}</h5>
                                    <p class="card-text">{{ $foto->deskripsi }}</p>
                                  
                                        <a href="{{ route('foto.show', $foto->id) }}" class="btn btn-primary btn-sm">Lihat</a>
                                        <a href="{{ route('foto.edit', $foto->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('foto.destroy', $foto->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                   
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
