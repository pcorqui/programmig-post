<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>portfolio</title>
    <link rel="stylesheet" href="https://programming-post.herokuapp.com/css/app.css">
</head>
<body>
    <!--quiza reemplaze el header con el de www3school-->
    <header>
        <div class="navbar navbar-dark bg-dark shadow-sm">
          <div class="container">
            <a href="#" class="navbar-brand d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
              <strong>Album</strong>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
      </header>
    <main>
        <div>
            @yield('content')


            <div class="container">

                <!--cartas para proyectos-->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($projects as $project)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div card-body>
                                <img class="card-img-top" src="https://via.placeholder.com/1280x720.png" alt="">
                                <p class="card-text">{{ $project->name}}</p>
                                <p class="card-text">{{ $project->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">ver</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">ver</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </main>
<div class="container">


    <footer class="d-flex flex-wrap justify-content-between aling-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">update 2021</p>
        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-muted">Home</a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-muted">projects</a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link px-2 text-muted">blog</a>
            </li>

        </ul>
    </footer>
</div>
</body>
</html>
