<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Principal</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
              <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                  Iniciar sesión
                </button>
                
                <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                  <div class="offcanvas-header">
                    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
                    <span class="material-symbols-rounded">
                      input
                      </span>
                    <h5 class="offcanvas-title" id="staticBackdropLabel">Inicio de sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body">
                    <div>
                      <small class="text-body-secondary">Correo electrónico</small>
                      <div class="input-group flex-nowrap">
                          <span class="input-group-text" id="addon-wrapping">@</span>
                          <input type="text" class="form-control" placeholder="correo.ejemplo.cl" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div>
                          <small class="text-body-secondary">Contraseña</small>
                          <div class="input-group flex-nowrap">
                              <span class="input-group-text" id="addon-wrapping">*</span>
                              <input type="password" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>
      </nav>
      <style>
        .custom-center {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
        }
      </style>
      <div class="container">
        <div class="custom-center">
          <body style="background: linear-gradient(to bottom, #a5d9e9 0%, #4a3277 100%);">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <div class="col">
                <div class="card h-100">                 
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   
                  <span class="material-symbols-rounded">
                    upload_file
                    </span>
                  <div class="card-body">
                    <h5 class="card-title">Estudiante</h5>
                    <p class="card-text">Pagina principal estudiante</p>
                    <button type="button" class="btn btn-primary">Ir a estudiantes</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
                  <span class="material-symbols-rounded">
                    school
                    </span>
                  <div class="card-body">
                    <h5 class="card-title">Profesor</h5>
                    <p class="card-text">Pagina principal profesores</p>
                    <button type="button" class="btn btn-primary">Ir a Profesores</button>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card h-100">
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
                  <style>
                    .material-symbols-rounded {
                      font-variation-settings:
                      'FILL' 0,
                      'wght' 100,
                      'GRAD' 0,
                      'opsz' 48
                    }
                    </style>
                    <span class="material-symbols-rounded">
                      engineering
                      </span>
                  <div class="card-body">
                    <h5 class="card-title">Admin</h5>
                    <p class="card-text">Pagina principal Administracion</p>
                    <button type="button" class="btn btn-primary">Admin</button>
                  </div>
                </div>
              </div>
            </div>
                          
        </div>
      </div>
      
      





      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>