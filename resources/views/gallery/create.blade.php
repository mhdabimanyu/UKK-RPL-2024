<!DOCTYPE html>
<html>
<head>
    <title>Add New Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Add New Gallery</h1>
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Title:</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Image:</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label>Description:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
