<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Delete</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Delete</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/create">New member</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/homme">Homme</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/femme">Femme</a>
              </li>
          </ul>
        </div>
      </nav>
    <h1>Hommes</h1>
    <span>Voici nos membres Hommes</span>
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dbMembre as $item)
            @if ($item->genre == "homme")
            <tr>
              <th scope="row">{{$item -> id}}</th>
              <td>{{$item -> nom}}</td>
              <td>{{$item -> age}}</td>
              <td>
                    <form action="/delete_membre/{{$item -> id}}" method="POST">
                        @csrf
                        <button type="submit" class="bg-danger">Delete</button>

                    </form>
                </td>
            </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    <script  src="{{  asset('js/app.js') }}"></script>
</body>
</html>