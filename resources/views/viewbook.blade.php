<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Input</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewbook.blade.php">View</a>
        </li>
    </div>
  </div>
</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Author</th>
      <th scope="col">Release Date</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($books as $book)
    <tr>
        <td>{{$book->judul}}</td>
        <td>{{$book->author}}</td>
        <td>{{$book->releasedate}}</td>
        <td><a class="btn btn-primary" href="{{route('updateBook', $book->id)}}" role="button">Update</a>
          <form action="{{route('deleteBook', $book->id)}}" method="POST">
            @csrf
            @method('DELETE')
          <button class="btn btn-danger" type="submit">Button</button>
          </form>
      </td>
    </tr>
      @endforeach
    
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>