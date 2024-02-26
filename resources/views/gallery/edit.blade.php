<!DOCTYPE html>
<html>
<head>
    <title>Edit Gallery</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Edit Gallery</h1>
        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Title:</label>
                <input type="text" class="form-control" name="title" value="{{ $gallery->title }}">
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea class="form-control" name="description">{{ $gallery->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <small class="form-text text-muted">Allowed formats: jpeg, png, jpg, gif, svg. Maximum size: 2048KB.</small>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
