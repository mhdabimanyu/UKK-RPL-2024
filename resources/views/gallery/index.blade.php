@extends('lalala.app')

@section('content')
  

    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                @foreach ($galleries as $gallery)
                        <div class="col-md-3 mb-3">
                            <div class="card">
                
                            <img src="{{ asset('images/' . $gallery->image) }}" alt="Gallery Image" >
                                <div class="card-body">
                                    <h5 class="card-title">{{ $gallery->title }}</h5>
                                    <p class="card-text">{{ $gallery->description }}</p>
                                  
                                    <a href="{{ route('gallery.show', $gallery->id) }}" class="btn btn-info btn-sm mr-1">Show</a>
                                     <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning btn-sm mr-1">Edit</a>
                                     <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST" class="d-inline">
                                     @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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

