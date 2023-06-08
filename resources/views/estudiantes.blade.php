<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Estudiantes</title>
</head>
<body>
    <img src="images/student.png" class="img-fluid" alt="images/student.png">
    <h1>Bienvenido a estudiantes</h1>
    <div class="card">
        <div class="card-body">
          Propuestas de proyecto
          <div class="mb-3">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                <input type="text" class="form-control" aria-label="nombre_input" aria-describedby="inputGroup-sizing-default">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Apellido</span>
                <input type="text" class="form-control" aria-label="apellido_input" aria-describedby="inputGroup-sizing-default">
              </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Rut</span>
                <input type="text" class="form-control" aria-label="rut_input" aria-describedby="inputGroup-sizing-default">
              </div>
              <label for="formFile" class="form-label">Subir propuesta de proyecto en formato pdf</label>
              <input class="form-control" type="file" id="formFile">
            </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          Estado del proyecto
          <div class="mb-3">
            <div class="input-group">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Rut</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                  </div>
            </div>
        </div>
      </div>
      


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>