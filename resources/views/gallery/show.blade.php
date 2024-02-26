<!DOCTYPE html>
<html>
<head>
    <title>Show Gallery</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS can be added here */
    </style>
</head>
<body>
    <div class="container">
        <h1>Show Gallery</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Title: {{ $gallery->title }}</h5>
                <p class="card-text">Description: {{ $gallery->description }}</p>
                <div>
                    <strong>Image:</strong><br>
                    <img src="{{ asset('images/' . $gallery->image) }}" alt="Gallery Image" class="img-fluid" style="max-width: 300px;">
                </div>
                <a href="{{ route('gallery.index') }}" class="btn btn-primary mt-3">Back to Gallery List</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (jQuery, Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
