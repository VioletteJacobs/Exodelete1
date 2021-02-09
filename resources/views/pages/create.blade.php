<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
      <section>
            <form action="/add_membre" method="POST">
                @csrf
                <label for="">Nom: 
                    <input type="text" name="nom">
                </label>
                <label for="">Age: 
                    <input type="text" name="age">
                </label>
                <label for="">Genre: 
                    <input type="text" name="genre">
                </label>
                <button type="submit">créer</button>
        
            </form>
      </section>
      <script  src="{{  asset('js/app.js') }}"></script>
</body>
</html>