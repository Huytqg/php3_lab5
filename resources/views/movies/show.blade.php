<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Movie Details</title>
</head>
<body>
    <div class="container w-50 mt-4">
        <h1 class="mb-5">Chi tiết sản phẩm</h1>
        <div class="text-center">
                    <img src="{{ asset('/storage/' . $movie->poster) }}" alt="{{ $movie->title }}" width="500">
                </div>
        <main class="row">
            <!-- <aside style="height: 500px;" class="col-2"> -->
            <!-- </aside> -->
            <article style="height: 500px;" class="col-8">
                <h4>Tên sản phẩm: {{ $movie->title }}</h4>
                <h4><span id="title">Introduction:</span>{{ $movie->intro }}</h4>
                <h4><span id="release_date">Release Date: </span>{{ \Carbon\Carbon::parse($movie->release_date)->format('d/m/Y') }}</h4>
                <h4><span id="genre_id">Genre: </span>{{ $movie->genre->name }}</h4>
                <a href="{{ route('movies.index') }}" class="btn btn-secondary">Back to Movie List</a>
            </article>
        </main>
    </div>
</body>
</html>
