@extends('layou.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">{{ $foto->title }}</div>

                    <div class="card-body">
                        <img src="{{ asset('images/' . $foto->image) }}" class="img-fluid mb-3" alt="{{ $foto->title }}">
                        <p><strong>Deskripsi:</strong> {{ $foto->deskripsi }}</p>
                        
                        <!-- Tombol kembali ke halaman daftar foto -->
                        <a href="{{ route('foto.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

                <form action="{{ route('comments.store') }}" method="POST">
            @csrf
            <input type="hidden" name="foto_id" value="{{ $foto->id }}">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Comment:</strong>
                        <textarea class="form-control" style="height:150px" name="comment" placeholder="Comment"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>



            </div>
        </div>
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Comments</h2>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($foto->comments as $comment)
            <div class="col-xs-12 col-sm-12 col-md-12">
       
                <div class="card mb-2">
                    <div class="card-body">
                        <p>{{ $comment->comment }}</p>
                        <small>Posted by: {{ $comment->user->name }}</small>
                        
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    </div>
@endsection
